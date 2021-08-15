<link href="{{ URL::asset('css/nav.css') }}" rel="stylesheet">
<style>
    .navbar {
        padding: 1.3rem 1rem;
        background: src"{{asset('images/logo_.jpg')}}" no-repeat;
        background-size: 100%;
    }
    @media only screen and (max-width: 600px) {
        .navbar {
            background-color: #343A40;
            padding: 10px;
            margin-left: -16px;
            margin-right: -16px;
            margin-bottom: -22px;
        }
    }</style>
<nav class="navbar navbar-expand-md text-center navbar-dark fixed-top bg-dark">
    <div class="container-fluid ">
        <img id="img_logo" src="{{asset('images/logo_.jpg')}}" alt="logo">
        <a class="navbar-brand">Bermatos - Comércio e reparação automóvel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mb-2 mb-md-0 ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/empresa') }}">Sobre Nós</a>
                    <a href="#" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/usados') }}">Usados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/servicos') }}">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contactos') }}">Contactos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
