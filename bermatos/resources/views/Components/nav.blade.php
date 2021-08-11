<link href="{{ URL::asset('css/nav.css') }}" rel="stylesheet">

<nav class="navbar navbar-custom navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid ">
        <img id="img_logo" src="{{asset('images/logo_.jpg')}}" alt="logo">
        <a class="navbar-brand">Bermatos - Comércio e reparação automóvel</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mb-2 mb-md-0 ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/conf') }}">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">Usados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contactos') }}">Contactos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
