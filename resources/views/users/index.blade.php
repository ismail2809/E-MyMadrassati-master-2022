@extends('backend.master')

@section('title','Users') 

@section('content')


<h4 class="h4 mb-3">
 <a class="btn btn-success" href="{{ route('users.create') }}"> 
<i class="align-middle me-2" data-feather="plus-circle"></i>  Create New User
</a> 
</h4>
 
<div class="row">
 <table class="table table-bordered">
 <tr>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ $user->prenom }} {{ $user->nom }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
       <a class="btn btn-danger" href="{{ route('users.destroy',$user->id) }}"> Delete</a>
    </td>
  </tr>
 @endforeach
</table>   
</div>

@endsection 