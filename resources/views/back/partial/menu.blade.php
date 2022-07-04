 <div class="sidebar" data-color="azure" data-background-color="black" data-image="{{ asset('back/assets/img/sidebar-3.jpg') }}">
  
      <div class="logo"><a href="{{ url('/') }}" class="simple-text logo-mini">
          CT
        </a>
        <a href="{{ url('/') }}" class="simple-text logo-normal">
          louis massignon
        </a>
      </div>
     
     <div class="sidebar-wrapper">
      @auth      
        <div class="user">
          <div class="photo">
            <img src="{{ asset('storage/'.Auth::user()->avatar) }}"/>
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                {{ Auth::user()->prenom }} {{ Auth::user()->nom }} 
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/profile') }}">
                    <span class="sidebar-mini"> MP </span>
                    <span class="sidebar-normal"> Mon Profile </span>
                  </a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/editprofile') }}">
                    <span class="sidebar-mini"> EP </span>
                    <span class="sidebar-normal"> Editer Profile </span>
                  </a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <span class="sidebar-mini"> L </span>
                    <span class="sidebar-normal"> Logout </span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      @endauth       
 
      <ul class="nav">
       
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p> Dashboard </p>
          </a>
        </li> 

        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/timeline') }}">
            <i class="material-icons">language</i>
            <p> Fil d'actualité </p>
          </a>
        </li> 

        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/mesCategories') }}">
            <i class="material-icons">folder_shared</i>
            <p> Mes Classes </p>
          </a>
        </li> 

        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#a1">
            <i class="material-icons">calendar_today</i>
            <p> Emploi
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="a1">
            <ul class="nav"> 
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/events') }}">
                  <span class="sidebar-mini"> N </span>
                  <span class="sidebar-normal"> Nouvelle </span>
                </a>
              </li>  
            </ul>
          </div>
        </li>

        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#a15">
            <i class="material-icons">create_new_folder</i>
            <p> Inscriptions
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="a15">
            <ul class="nav"> 
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/inscription/new') }}">
                  <span class="sidebar-mini"> N </span>
                  <span class="sidebar-normal"> Nouvelle </span>
                </a>
              </li> 
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/inscriptions') }}">
                  <span class="sidebar-mini"> L </span>
                  <span class="sidebar-normal"> Liste </span>
                </a>
              </li> 
            </ul>
          </div>
        </li>

         <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#a2">
            <i class="material-icons">insert_chart</i>
            <p> Payements
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="a2">
            <ul class="nav">  
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/payments') }}">
                  <span class="sidebar-mini"> L </span>
                  <span class="sidebar-normal"> Liste </span>
                </a>
              </li> 
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/payments/classes') }}">
                  <span class="sidebar-mini"> L </span>
                  <span class="sidebar-normal"> Par Classe </span>
                </a>
              </li> 

            </ul>
          </div>
        </li>

        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#a4">
            <i class="material-icons">access_time</i>
            <p> Absences
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="a4">
            <ul class="nav">  
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/absences') }}">
                  <span class="sidebar-mini"> L </span>
                  <span class="sidebar-normal"> Liste </span>
                </a>
              </li> 
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/absences/classes') }}">
                  <span class="sidebar-mini"> L </span>
                  <span class="sidebar-normal"> Par classe </span>
                </a>
              </li> 
            </ul>
          </div>
        </li>

        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#a5">
            <i class="material-icons">create</i>
            <p> Notes
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="a5">
            <ul class="nav"> 
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/notes') }}">
                  <span class="sidebar-mini"> L </span>
                  <span class="sidebar-normal"> Liste </span>
                </a>
              </li>
                <li class="nav-item ">
                <a class="nav-link" href="{{ url('/notes/classes') }}">
                  <span class="sidebar-mini"> L </span>
                  <span class="sidebar-normal"> Par classe </span>
                </a>
              </li> 
            </ul>
          </div>
        </li>

         <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#a6">
            <i class="material-icons">question_answer</i>
            <p> Demandes docs
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="a6">
            <ul class="nav"> 
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/demandedocument/nouvelle') }}">
                  <span class="sidebar-mini"> N </span>
                  <span class="sidebar-normal"> Nouvelle </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/demandedocuments') }}">
                  <span class="sidebar-mini"> L </span>
                  <span class="sidebar-normal"> Liste </span>
                </a>
              </li> 
            </ul>
          </div>
        </li>

        <li class="nav-item collapsed">
          <a class="nav-link" data-toggle="collapse" href="#componentsExamples" aria-expanded="false">
            <i class="material-icons">build</i>
            <p> Paramètre 
              <b class="caret"></b>
            </p>
          </a> 

          <div class="collapse " id="componentsExamples">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/parametre') }}">
                  <span class="sidebar-mini"> P </span>
                  <span class="sidebar-normal"> Paramètre </span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/users')}}">
                  <span class="sidebar-mini"> U </span>
                  <span class="sidebar-normal"> Users </span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ route('roles.index') }}">
                  <span class="sidebar-mini"> R </span>
                  <span class="sidebar-normal"> Role </span>
                </a>
              </li>                                 
            </ul>
          </div>
        </li>  
      </ul>
        

      </div>
</div>