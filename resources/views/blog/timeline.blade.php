@extends('back.master') 
@section('title','Fil d\'actualité')
@section('content')

<div class="row justify-content-center"> 
<div class="col-md-12">
  <div class="card card-timeline card-plain">
    <div class="card-header text-center">
      <h3 class="alert"  style="border-radius: 50px">  
          <form method="post" action="{{ url('/timeline') }}" class="form-horizontal">     
          {{ csrf_field() }} 
               <div class="row justify-content-center"> 
                  <div class="col-sm-12">
                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="description" placeholder="Exprimez-vous ..."></textarea>
                    </div>
                   </div>
                   <div class="ml-auto">
                    <input type="submit" class="btn btn-round btn-info" value="Publier">
                    </div>
                   <div class="clearfix"></div>
                 </div>
          </form>
       </h3>
    </div>

    <div class="card-body">
      <ul class="timeline">
      @foreach($blogs as $key  => $blog)
      @if($key % 2 == 1)
        <li class="timeline-inverted">

          <div class="timeline-badge info">
            <i class="material-icons">favorite </i>
          </div> 

          <div class="timeline-panel">
            <div class="timeline-heading">
              <span class="badge badge-pill badge-danger">{{ $blog->titre }}</span>
            </div>
            <div class="timeline-body">
              <h4> {{ $blog->description }} </h4>
            </div>
             <h6 style="font-size: 15px"><i class="material-icons" style="font-size: 15px">access_time</i> {{ $blog->created_at->format('h:m d/m/y') }}</h6>      
          </div>
 
        </li>
        @else
        <li>

          <div class="timeline-badge success">
            <i class="material-icons">favorite_border</i>
          </div>

          <div class="timeline-panel">
            <div class="timeline-heading">
              <span class="badge badge-pill badge-success">{{ $blog->titre }}</span>
            </div>
            <div class="timeline-body">
              <h4> {{ $blog->description }} </h4>                         
            </div> 
             <h6 style="font-size: 15px"><i class="material-icons" style="font-size: 15px">access_time</i> {{ $blog->created_at->format('h:m d/m/y') }}</h6>    
          </div> 

        </li>
        @endif
        @endforeach


      </ul>
    </div>
  </div>
</div>
</div>
@endsection