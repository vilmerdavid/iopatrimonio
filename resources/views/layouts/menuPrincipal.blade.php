<ul class="navbar-nav mr-auto">

    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/')}}">Inicio
          <span class="sr-only">(current)</span>
        </a>
    </li>
      
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Patrimonio Tangibles
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">



          <li>
            <a class="dropdown-item" href="{{ route('pagina','arquitectura-religiosa') }}">Arquitectura Religiosa</a>
          </li>

          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Arquitectura Civíl</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Equipamiento Urbano</a></li>
              <li><a class="dropdown-item" href="#">Monumentos</a></li>

              
              <li><a class="dropdown-item" href="#">Más</a></li>
              

              {{--  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                  <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                  <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                </ul>
              </li>  --}}

            </ul>
          </li>
          <li><a class="dropdown-item" href="/">Bienes Muebles</a></li>
          

        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Patrimonio Intangible
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="/">Mama Negra</a></li>
          <li><a class="dropdown-item" href="/">Danzante del Sol</a></li>
          <li><a class="dropdown-item" href="/">Caporales de Angamarca</a></li>
          <li><a class="dropdown-item" href="/">Fiesta de San Miguel de Salcedo</a></li>
          <li><a class="dropdown-item" href="/">Niño de Isinche</a></li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Patrimonio natural
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="/">Parque Nacional Cotopaxi</a></li>
          <li><a class="dropdown-item" href="/">Parque Nacional LLanganates</a></li>
          <li><a class="dropdown-item" href="/">Reserva Ecológica Illinizas</a></li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Información Patrimonial
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="/">Kinkiyary</a></li>
          <li><a class="dropdown-item" href="/">Ucumamayaya TV</a></li>
          <li><a class="dropdown-item" href="/">Panzaleito</a></li>
          <li><a class="dropdown-item" href="/">Libros y/o Artículos</a></li>
          
        </ul>
    </li>


    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Normativa
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="/">Internacional</a></li>
          <li><a class="dropdown-item" href="/">Nacional</a></li>
          <li><a class="dropdown-item" href="/">Local</a></li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">Más</a>
    </li>
    

</ul>