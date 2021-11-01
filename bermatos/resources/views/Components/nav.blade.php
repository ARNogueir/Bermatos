<link href="{{ URL::asset('css/nav.css') }}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<nav class="navbar fixed-top navbar-expand-md text-center">

    <a href="{{ url('/') }}" class="navbar-brand">
        <span class="berNav">BER</span><span class="maNav">MA</span><span class="tNav">T</span><span
            class="osNav">OS</span></a>

    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
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
</nav>
