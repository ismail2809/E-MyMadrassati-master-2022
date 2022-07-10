<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Agent;
use App\Admin;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Auth;
    
class UserController extends Controller
{
   
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        //dd($data[0]->getRoleNames());
        return view('users.index',compact('data'));
    }  

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }
    
    public function show($id)
    {
        $user = User::find($id);
        //dd(User::role('Agent')->get());
        //dd($users = User::permission('product-list')->get());
        return view('users.show',compact('user'));
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->to('/users')
                        ->with('success','User updated successfully');
    }     

    public function profile()
    {   
        $id =Auth::user()['id'];
         //dd($id);   
        //$user = json_decode(User::where('id',$id)->first(),true);
         $user =array();
        if(Auth::user()->role == "admin") {
            $user = json_decode(Admin::where('user_id',$id)->with('users')->first(),true);
        }   
        if (Auth::user()->role == "etudiant") {
            $user = json_decode(Etudiant::where('user_id',$id)->with('users')->first(),true);
        }
        if (Auth::user()->role == "professeur") {
            $user = json_decode(Professeur::where('user_id',$id)->with('users')->first(),true);
        }
        

        //dd($user);
        return view('user.profile',compact('user'));
    }

    public function editprofile()
    {   
        $id   = Auth::user()['id'];        
        $user = User::where('id',$id)->first();
        //dd($user);
        if (isset($user) && $user->role == 'etudiant') {
            $data = json_decode(Etudiant::where('user_id',$user->id)->with('users')->first(),true);
        }
        elseif (isset($user) && $user->role == 'professeur') {
            $data = json_decode(Professeur::where('user_id',$user->id)->with('users')->first(),true);
        }  
        elseif (isset($user) && $user->role == 'admin') {
            $data = json_decode(Admin::where('user_id',$user->id)->with('users')->first(),true);
        }  
        //dd($data);
        return view('user.updateprofile',compact('data'));
    }

    public function update_profile(Request $request){
     
        $id = Auth::user()['id'];
        //dd($id);
        $user = User::find($id);
        $user->prenom = $request->prenom;
        $user->nom    = $request->nom;
        $user->ddn    = $request->ddn;
        $user->lieu_naissance = $request->lieu_naissance;
        $user->sexe   = $request->sexe;
        $user->tel    = $request->tel;
        $user->adresse= $request->adresse; 
 
        if($request->hasfile('avatar')){
             $user->avatar = $request->avatar->store('avatar');
        } 
         
        if ($user->role == 'etudiant') {

            $etudiant  = Etudiant::where('user_id',$user->id)->first();

            $etudiant         = Etudiant::find($etudiant->id);
            $etudiant->prenom_tuteur = $request->prenom_tuteur;
            $etudiant->nom_tuteur    = $request->nom_tuteur;
            $etudiant->tel_tuteur    = $request->tel_tuteur;
            $etudiant->email_tuteur  = $request->email_tuteur;
            $etudiant->sexe_tuteur   = $request->sexe_tuteur;
            $etudiant->profession_tuteur = $request->profession_tuteur;
            //dd($request);
            if(!empty($etudiant)){

                    $user->save();
                    $etudiant->save();   
            }
        }

        else if($user->role == 'professeur') {

            $professeur  = Professeur::where('user_id',$user->id)->first();

            $professeur          = Professeur::find($professeur->id);
            $professeur->cin     = $request->cin;
            $professeur->diplome = $request->diplome;
            $professeur->promo   = $request->promo; 

            $professeur->save();
            $user->save();

        }
        $user->save();

        //dd($user);

        return back()->with('warning','la modifcation est faite avec success');;
    }
  
    public function create_admin(){
    
        return view('admin.new');
    }

    public function store_admin(Request $request){

        $user = new User();        
        $user->prenom = $request->prenom;
        $user->nom    = $request->nom;        
        $user->email    = $request->email;
        $user->password    = Hash::make($request->password);
        $user->ddn    = $request->ddn;
        $user->lieu_naissance = $request->lieu_naissance;
        $user->sexe   = $request->sexe;
        $user->tel    = $request->tel;
        $user->adresse= $request->adresse; 
 
        if($request->hasfile('avatar')){
             $user->avatar = $request->avatar->store('avatar');
        } 

        $user->role = 'admin';  
        //dd($request);      
        $user->save();

        return redirect('/admins'); 
    }

    public function show_admin($id)
    {
        $user = User::find($id);
        //dd(User::role('Agent')->get());
        //dd($users = User::permission('product-list')->get());
        return view('users.show',compact('user'));
    }

    public function index_admins(){

        $admins = User::where('role','admin')->get();

        return view('admin.index',compact('admins'));
    }

    public function create_agent(){
    
        $roles = Role::all();
        return view('agent.new',compact('roles'));
    }

    public function store_agent(Request $request){
 
        $user         = new User();        
        $user->prenom = $request->prenom;
        $user->nom    = $request->nom;
        $user->email    = $request->email;
        $user->password    = Hash::make($request->password);
        $user->ddn    = $request->ddn;
        $user->lieu_naissance = $request->lieu_naissance;
        $user->sexe   = $request->sexe;
        $user->tel    = $request->tel;
        $user->adresse= $request->adresse; 
        $user->role   = $request->role; 

        $user->assignRole($request->input('roles'));  
 
        if($request->hasfile('avatar')){
             $user->avatar = $request->avatar->store('avatar');
        }         
        $user->save();
      
        $agent                  = new Agent();  
        $agent->user_id         = $user->id;                
        if(isset($user) && isset($agent)){                        
                    $user->save();
                    $agent->save();   
        }
         return redirect('/agents');
    } 

    public function index_agents(){

        $agents = Agent::with('users')->get();

        return view('agent.index',compact('agents'));
    }
}