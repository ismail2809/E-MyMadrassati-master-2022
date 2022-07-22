  <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
              <i class="hamburger align-self-center"></i>
            </a>

        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">

            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                <div class="position-relative">
                  <i class="align-middle" data-feather="align-center"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                <div class="dropdown-menu-header">
                  <div class="position-relative">
                    Année scolaire
                  </div>
                </div>
                <div class="list-group">
                  @php
                  $années = App\Année::all();
                  @endphp
                  @foreach($années as $année)                    
                  <a href="{{ url('/sessions/'.$année->id) }}" class="list-group-item"> 
                         <div class="text-center position-relative text-dark">{{ $année->titre }}</div> 
                   </a>
                  @endforeach               
              </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

              <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <span class="text-dark">{{  Auth::user()['prenom'] }}&nbsp;{{  Auth::user()['nom'] }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="{{ url('/profile') }}"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                <a class="dropdown-item" href="{{ url('/editprofile') }}"><i class="align-middle me-1" data-feather="edit"></i> Modifier</a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/parametre') }}"><i class="align-middle me-1" data-feather="settings"></i> Paramètre</a>
                 <div class="dropdown-divider"></div> 
                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                     <i class="align-middle me-1" data-feather="power"></i>Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </nav>
