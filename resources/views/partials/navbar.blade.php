<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/VIVIFY/napredni/Laravel/radOdKuce_19_02/nba/public/">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">register</a>
            </li>
  

        
      </ul>
    </div>
  </nav>


          
        </nav>
        @if(auth()->check())
        <span>{{auth()->user()->name}}</span>
        {{-- ovo iznad je za ispis imena korisnika koji je ulogovan --}}
    {{-- <a class="btn btn-outline-primary"href="{{ route('logout')}}">Logout</a> --}}
        @else
        {{-- <a class="btn btn-outline-primary" href="{{route('show-register')}}">Sign up</a> --}}
        @endif
      </div>


     