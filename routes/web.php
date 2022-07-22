<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;
   

Route::get('/', function () {
    return view('welcome');
});
 

Auth::routes(); 

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

//landing page
Route::get('/', function () {
        return view('landing_page.index');
});

Route::group(['middleware' => ['auth']], function() {

//dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('roles','RoleController');
//Route::resource('users','UserController');
Route::resource('products','ProductController');

Route::get('/sessions/{id}', 'HomeController@putAnnee');

//année scolaire
Route::get('/année/new', 'AnnéeController@create');
Route::post('/annee', 'AnnéeController@store');
Route::get('/années', 'AnnéeController@index');
Route::get('/année/{id}/edit','AnnéeController@edit');
Route::put('/annee/{id}','AnnéeController@update');
Route::delete('/année/{id}','AnnéeController@destroy');

//categorie
Route::get('/categorie/new', 'CategorieController@create');
Route::get('/categories', 'CategorieController@index');
Route::get('/categorie/{id}/edit','CategorieController@edit');
Route::put('/categorie/{id}','CategorieController@update');
Route::post('/categorie','CategorieController@store');
Route::delete('/categorie/{id}','CategorieController@destroy');

//niveau
Route::get('/niveau/new', 'NiveauController@create');
Route::post('/niveau', 'NiveauController@store');
Route::get('/niveaux', 'NiveauController@index');
Route::get('/niveau/{id}/edit','NiveauController@edit');
Route::put('/niveau/{id}','NiveauController@update');
Route::delete('/niveau/{id}','NiveauController@destroy');

//classe
Route::get('/classe/new', 'ClasseController@create');
Route::get('/classes', 'ClasseController@index');
Route::get('/classe/{id}/edit','ClasseController@edit');
Route::put('/classe/{id}','ClasseController@update');
Route::delete('/classe/{id}','ClasseController@destroy');
Route::post('/classe', 'ClasseController@store');

//matiere
Route::get('/matiere/new', 'MatiereController@create');
Route::get('/matieres', 'MatiereController@index');
Route::post('/matiere', 'MatiereController@store');
Route::get('/matiere/{id}/edit','MatiereController@edit');
Route::put('/matiere/{id}','MatiereController@update');
Route::delete('/matiere/{id}','MatiereController@destroy');

//inscriptions 
Route::get('/inscription/new', 'InscriptionController@create'); 
Route::get('/inscriptions', 'InscriptionController@index');
Route::post('/inscription', 'InscriptionController@store');
Route::get('/inscription/{id}/edit','InscriptionController@edit');
Route::put('/inscription/{id}','InscriptionController@update');
Route::delete('/inscription/{id}','InscriptionController@destroy');
Route::get('/inscription/{id}','InscriptionController@show');

//contact
Route::post('contact', 'ContactController@store');
Route::get('/contact/new', 'ContactController@new');
Route::get('contacts', 'ContactController@index');
Route::get('/contact/{id}/detail', 'ContactController@show');
Route::get('/contact/{id}/edit', 'ContactController@edit');
Route::put('/contact/{id}', 'ContactController@update');

//profile
Route::get('/profile', 'UserController@profile');
Route::post('/updateprofile', 'UserController@update_profile');
Route::get('/editprofile', 'UserController@editprofile');

//admins
Route::get('/admin/new', 'UserController@create_admin');
Route::post('/store_admin', 'UserController@store_admin');
Route::get('/admins', 'UserController@index_admins');

//etudiants
Route::get('/etudiants', 'EtudiantController@index');
Route::get('/etudiant/{id}/détail', 'EtudiantController@show');

//professeurs
Route::get('/professeur/new', 'ProfesseurController@create');
Route::post('/professeur', 'ProfesseurController@store');
Route::get('/professeurs', 'ProfesseurController@index');
Route::get('/professeur/{id}/détail', 'ProfesseurController@show');

//agent
Route::get('/agent/new', 'UserController@create_agent');
Route::post('/store_agent', 'UserController@store_agent');
Route::get('/agents', 'UserController@index_agents');

//password
Route::get('/users', 'PasswordController@listeUser')->name('users.index');
Route::get('/user/{id}/edit_password', 'PasswordController@edit_password');
Route::post('/update_password/{id}', 'PasswordController@update_password');

//user
Route::get('users/create', 'UserController@create')->name('users.create');
Route::post('users', 'UserController@store')->name('users.store');
Route::get('/user/{id}/detail', 'UserController@show')->name('users.show');
Route::get('/user/{id}/edit', 'UserController@edit')->name('users.edit');
Route::patch('/user/{id}/update', 'UserController@update')->name('users.update');

//all classes
Route::get('/classes/liste', 'InscriptionController@getAllClasses');

//absence
Route::get('/classe/{id}/nouvelle_absence', 'AbsenceController@new_absence');
Route::post('/store_absence', 'AbsenceController@store_absence');
Route::get('/liste_absences', 'AbsenceController@index');
Route::get('/absence/{id}/détail', 'AbsenceController@show');
Route::get('/absence/{id}/edit', 'AbsenceController@edit');
Route::put('/absence/{id}/update', 'AbsenceController@update');
Route::delete('/absence/{id}','AbsenceController@destroy');

//notes
Route::get('/classe/{id}/nouvelle_note', 'NoteController@new_note');  
Route::post('/store_note', 'NoteController@store_note');
Route::get('/liste_notes', 'NoteController@index');
Route::get('/note/{id}/détail', 'NoteController@show');
Route::get('/note/{id}/edit', 'NoteController@edit');
Route::put('/note/{id}/update', 'NoteController@update');
Route::delete('/note/{id}','NoteController@destroy');


//type_paiement
Route::get('/type_paiement/new', 'Type_paiementController@create');
Route::get('/type_paiements', 'Type_paiementController@index');
Route::get('/type_paiement/{id}/edit','Type_paiementController@edit');
Route::put('/type_paiement/{id}','Type_paiementController@update');
Route::delete('/type_paiement/{id}','Type_paiementController@destroy');
Route::post('/type_paiement', 'Type_paiementController@store');

//paiements
Route::get('/paiement/new', 'PaiementController@create');
Route::get('/paiements', 'PaiementController@index');
Route::get('/paiement/{id}/edit','PaiementController@edit');
Route::put('/paiement/{id}/update','PaiementController@update');
Route::delete('/paiement/{id}','PaiementController@destroy');
Route::post('/paiement', 'PaiementController@store');
Route::get('/classe/{id}/nouvelle_paiement', 'PaiementController@new_paiement');  
Route::get('/etudiant/{id}/nouvelle_paiement', 'PaiementController@newPaiementByEtudiant');  
Route::get('/paiements/listes_classes', 'PaiementController@getAllClasses');
Route::get('/paiement/{id}/détail','PaiementController@show');
Route::get('/paiement/{id}/historique','PaiementController@historiquePaiement');

Route::get('/attestation_paiement/{id}', 'PaiementController@imprimerAttestationPaiement')->name('attestation_paiement');


//renouvelement 
Route::get('/renouvelement/{id}/new','RenouvelementController@new');
Route::put('/renouvelement/{id}','RenouvelementController@store');

/*
//monespace 
Route::get('/monespace/notes', 'NoteController@getNotesEtudiantEp'); 
Route::get('/monespace/absences', 'AbsenceController@getAbsencesEtudiantEp');
Route::get('/monespace/payments', 'PaymentController@getPaymentsEtudiantEp');
Route::get('/monespace/emploi', 'EventController@index'); 
Route::get('/monespace', 'UserController@profile');
Route::post('/monespace/updateprofile', 'UserController@update_profile');
Route::get('/monespace/editprofile', 'UserController@editprofile');


//inscriptions
Route::get('/inscription/new', 'InscriptionController@create'); 
Route::get('/inscriptions', 'InscriptionController@index');
Route::post('/inscription', 'InscriptionController@store');
Route::get('/inscription/{id}/edit','InscriptionController@edit');
Route::put('/inscription/{id}','InscriptionController@update');
Route::delete('/inscription/{id}','InscriptionController@destroy');
Route::get('/inscription/{id}','InscriptionController@show');
Route::get('/inscription/renouveler/{id}', 'InscriptionController@create_renouveler'); 
Route::post('/inscription/renouveler', 'InscriptionController@update_renouveler')->name('inscription_renouveler'); 
Route::post('/inscription/search', 'InscriptionController@search_inscription'); 

//payments
Route::get('/payment/new', 'PaymentController@create');
Route::get('/payment/add/{id}', 'PaymentController@form_payment');
Route::get('/payment/{id}/détail', 'PaymentController@show');
Route::get('/payments', 'PaymentController@index');
Route::post('/payment', 'PaymentController@store');
Route::get('/payment/{id}/edit','PaymentController@edit');
Route::put('/payment/{id}','PaymentController@update');
Route::delete('/payment/{id}','PaymentController@destroy');
Route::get('payments/classes', 'PaymentController@getPaymentsbyclasses');
Route::get('payments/{id}/classe', 'PaymentController@getPaymentsbyidclasse');

//absences
Route::get('/absence/new', 'AbsenceController@create');
Route::post('/absence/search', 'AbsenceController@form_search');
Route::get('/absence/classe', 'AbsenceController@classe');
Route::post('/absence', 'AbsenceController@store');
Route::get('/absences', 'AbsenceController@index');
Route::get('/absence/{id}/détail', 'AbsenceController@show');
Route::get('/absence/{id}/edit','AbsenceController@edit');
Route::put('/absence/{id}','AbsenceController@update');
Route::delete('/absence/{id}','AbsenceController@destroy');

Route::get('/absences/{id}/etudiant', 'AbsenceController@getAbsencesEtudiant');

Route::get('absences/classes', 'AbsenceController@getAbsencesbyclasses');
Route::get('absences/{id}/{id_matiere}/classe', 'AbsenceController@getAbsencesbyidclasse');

Route::get('notes/classes', 'NoteController@getNotesbyclasses');
Route::get('notes/{id}/{id_matiere}/classe', 'NoteController@getNotesbyidclasse');

Route::get('/notes/{id}/etudiant', 'NoteController@getNotesEtudiant');
//Route::get('/notes/{id}/{id_matiere}/etudiant', 'NoteController@getNotesEtudiantEp');

//notess
//Route::get('/note/new', 'NoteController@create');
//Route::post('/note/search', 'NoteController@form_search');
Route::post('/note', 'NoteController@store');
//Route::get('/note/classe', 'NoteController@classe');
Route::get('/notes', 'NoteController@index');
//Route::get('/note/add', 'NoteController@form_note')->name('note_add');
Route::get('/note/{id}/détail', 'NoteController@show')->name('note_détail');
Route::get('/note/{id}/{matiere_id}/list', 'NoteController@getListNotesEtudiants');
Route::get('/note/{id}/edit','NoteController@edit');
Route::put('/note/{id}','NoteController@update');
Route::delete('/note/{id}','NoteController@destroy'); 

Route::get('/notes/categorie', 'NoteController@getCategories');
Route::get('/notes/{id}/etudiant', 'NoteController@getNotesEtudiant');
Route::get('/notes/etudiants', 'NoteController@getNotesEtudiantEp');

//demande document
Route::get('/demandedocument/nouvelle', 'DemandedocumentController@create');
Route::post('/demandedocument', 'DemandedocumentController@store');
Route::get('/demandedocuments', 'DemandedocumentController@index');

//categorie
Route::get('/mesCategories', 'CategorieController@mesCatégories');
Route::get('/categorie/{id_categorie}/classes', 'CategorieController@mesClasses');
Route::get('/classes/{id_classe}/etudiants', 'CategorieController@mesEtudiants');
Route::get('/absences/{id_classe}/etudiants', 'CategorieController@absenceEtudiants');
Route::get('/notes/{id_classe}/etudiants', 'CategorieController@noteEtudiants');
Route::get('/payments/{id_classe}/etudiants', 'CategorieController@addPaymentEtudiants');

Route::post('/storeNote', 'NoteController@storeNote');
Route::post('/storeAbsence', 'AbsenceController@storeAbsence');
Route::get('/liste-des-notes-etudiants', 'NoteController@getListNotesEtudiants');


//cour
Route::get('/cour/new', 'CourController@create');
Route::get('/cours', 'CourController@index');
Route::get('/cour/{id}/edit','CourController@edit');
Route::put('/cour/{id}','CourController@update');
Route::get('/cour/{id}','CourController@destroy');

Route::get('/parametre','HomeController@parametre'); 

Route::get('events', 'EventController@index');
Route::post('event', 'EventController@store');

Route::get('/emploi', 'UserController@event');

//tableau de bord
Route::get('/dashboard', 'DashboardController@index');

//timeline
Route::get('/timeline', 'BlogController@index');
Route::post('/timeline', 'BlogController@store');
Route::get('/timelines', 'BlogController@listeBlog');
*/
});