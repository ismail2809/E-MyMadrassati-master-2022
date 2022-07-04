 @extends('back.master')
@section('content') 
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>



 <div class="content">
    <div class="container-fluid">
      <div class="header text-center">
        <h3 class="title">Emploi du temps</h3> 
      </div>
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
          <div class="card card-calendar">
            <div class="card-body ">
                  {!! $calendar->calendar() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    {!! $calendar->script() !!}
@endsection  