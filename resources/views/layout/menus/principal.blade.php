<nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/InstitutoRafaelHaller/" target="_blank">
                  <img src="{{ env('APP_URL') }}/assets/images/fb_az_in.png" width="80px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://wa.me/5520057633" target="_blank">
                  <img src="{{ env('APP_URL') }}/assets/images2022/icno_whatsapp_insti.png" width="80px">
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/institutorafael_haller/" target="_blank">
                  <img src="{{ env('APP_URL') }}/assets/images/in_az_in.png" width="80px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/user/institutiohaller" target="_blank">
                  <img src="{{ env('APP_URL') }}/assets/images/yt_az_in.png" width="80px">
                </a>
            </li>
        </ul>
    </div>
</nav>


<nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light main-nav">
    <div class="container-fluid">
        <div class="navbar-collapse collapse nav-content order-2">
            <ul class="nav navbar-nav">
                <li class="nav-item {{ $active == 'index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ env('APP_URL') }}">INICIO</a>
                </li>
                <li class="nav-item {{ $active == 'nosotros' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ env('APP_URL') }}/nosotros">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#ofed">OFERTA EDUCATIVA</a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2">

            <li class="nav-item">
              <p class="navbar-brand navbar-brand-centered">
                <img src="{{ env('APP_URL') }}/assets/images/escudoBco.png" width="100px">
              </p>
            </li>
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </ul>
        <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
            <ul class="ml-auto nav navbar-nav">
                <li class="nav-item {{ $active == 'servicios' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ env('APP_URL') }}/servicios">SERVICIOS</a>
                </li>
                <li class="nav-item {{ $active == 'blog' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ env('APP_URL') }}/blog">BLOG</a>
                </li>
                <li class="nav-item {{ $active == 'contacto' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ env('APP_URL') }}/contacto">CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .escudo2{
        width: 35px;
        position: absolute;
        top: -25px;
        left: 110px;
    }
    .main-nav .active{
        color: #193b68;
        font-weight: bold;
    }
</style>
