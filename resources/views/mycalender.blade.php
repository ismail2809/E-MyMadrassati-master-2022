@extends('back.master')
@section('title','Emploi du temps')
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
</head>

@section('content')  

 
<div class="container">

  @if(Auth::user()->role == "etudiant")
  <div class="card">
   
    <div class="card-header">
  
      <form method="post" action="{{url('/event')}}">
      {{ csrf_field() }} 

        <div class="row">      

              <div class="col-md-3">
                <select class="selectpicker" data-size="7" data-style="select-with-transition" name="matiere"
                 title="Matière"> 
                  @foreach($matieres as $matiere)
                      <option value="{{ $matiere->titre }}"> {{ $matiere->titre}} </option> 
                  @endforeach 
                </select>
              </div>

              <div class="col-md-3">
                <select class="selectpicker" data-size="10" data-style="select-with-transition" name="classe" 
                  title="Classe"> 
                   @foreach($classes as $classe)
                  <option value="{{ $classe->titre }}"> {{ $classe->titre}} </option> 
                  @endforeach 
                </select>
              </div>

              <div class="col-md-3">
                  <select class="selectpicker" data-size="7" data-style="select-with-transition" name="professeur"
                  title="Professeur"> 
                   @foreach($professeurs as $professeur)
                      <option value="{{ $professeur->users->prenom}} {{ $professeur->users->nom}}"> {{ $professeur->users->prenom}} {{ $professeur->users->nom}} </option> 
                     @endforeach 
                  </select>
              </div>    

              <div class="col-md-3">
                <input type="date" class="form-control" name="start_date">
            </div>   

        </div>

        <div class="row">                

            <div class="col-md-2">
                <input type="time" class="form-control" name="heure_debut">
            </div> 

            <div class="col-md-2">
                <input type="time" class="form-control" name="heure_fin">
            </div>


            <div class="col-md-8" style="text-align: right;">
                <button type="submit" class="btn btn-info">save</button> 
            </div>
        
        </div> 

      </form>

    </div>

  </div>            
  @endif
 
  <div class="card card-calendar">

    {!! $calendar->calendar() !!}

  </div> 
 
</div>
 
{!! $calendar->script() !!}  

@endsection