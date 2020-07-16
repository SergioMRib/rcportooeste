<div class="container">
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white">
        <a class="navbar-brand" href="{{asset('index')}}">Home site</a>
        <button class="navbar-toggler navbar-toggler-right collapsed border-0"
                type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>


        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto flex-nowrap text-left">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('index') }}">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">Sobre nós </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('getinvolved') }}">Contacta-nos </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('galery') }}">Galeria </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    O que é o Rotary
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://www.rotary.org/pt">Rotary Internacional</a>
                    <a class="dropdown-item" href="https://www.rotary.org/pt/our-causes">As nossas causas</a>
                    <a class="dropdown-item" href="https://www.rotary.org/en/about-rotary/rotary-foundation">Rotary Foundation</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="http://www.rotaryportugal.pt">Rotary Portugal</a>
                </div>
            </li>
          </ul>
        </div>
    </nav>
</div>


