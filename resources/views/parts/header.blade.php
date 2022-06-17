@php $menu =['Accueil'=>'home', 'Gestion des listes'=>'liste', 'Voir la liste'=>'listes','Contact'=>'contact', 'About Us'=>'about-us']; @endphp
<header>
    <nav class="navbar fixed-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <img class='logo' src="{{ asset('img/BL.png') }}" alt="tag">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @foreach($menu as $key  => $nameRoute)
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                </svg>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route($nameRoute)}}">
                  {{$key}}
                </a>
              </li>
              @endforeach
          </div>
        </div>
      </nav>
    </header>