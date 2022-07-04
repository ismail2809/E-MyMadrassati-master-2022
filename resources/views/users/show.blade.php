
@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Détail User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>
 <br>   

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <table class="table table-bordered">
         <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Roles</th>
           <th width="280px">Action</th>
         </tr>

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
               <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a> 
            </td>
          </tr>

        </table>

    </div>
</div>

@endsection 