@php $menu =['Accueil'=>'home', 'Voir la liste'=>'listes','Contact'=>'contact', 'About Us'=>'about-us']; 
  if(Auth::check()){
    $menu['Gestion des listes']="liste";
  }
  @endphp
<header>
    <nav class="navbar fixed-top navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <img class='logo' src="{{ asset('img/BL.png') }}" alt="tag">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @foreach($menu as $key  => $nameRoute)
              <li>
                <a class="navbar-brand" aria-current="page" href="{{route($nameRoute)}}">
                  {{$key}}
                </a>
              </li>
              @endforeach
              @if(Auth::check())             
              <li>
                  <!-- Authentication -->
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="navbar-brand"
                      href="{{route('logout')}}"
                      onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        Déconnexion
                    </a>
                  </form>                          
              </li> 
            @else                          
              <li class="nav-item">
                <a class="navbar-brand" aria-current="page" href="/login">Connexion</a>
              </li>   
              <li class="nav-item">
                <a class="navbar-brand" aria-current="page" href="/register">Inscription</a>
              </li>    
            @endif  
          </div>
        </div>
      </nav>
    </header>