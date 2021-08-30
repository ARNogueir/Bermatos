<link href="{{ URL::asset('css/nav.css') }}" rel="stylesheet">
<nav class="navbar navbar-expand-md text-center navbar-dark fixed-top bg-dark">
    <div class="container-fluid"><a href="{{ url('') }}">
        <!--<img id="img_logo" src="{{asset('images/logo_.jpg')}}" alt="logo" href="{{ url('') }}">-->
            <a class="navbar-brand" href="{{ url('') }}"><span class="ber">BER</span><span
                    class="matos">MATOS</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mb-2 mb-md-0 mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/usados') }}">Usados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/servicos') }}"><span class="services">Serviços</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contactos') }}"><span class="contactos">Contactos</span></a>
                    </li>
                </ul>
            </div>
        </a>
    </div>
</nav>
