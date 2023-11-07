<link rel="stylesheet" href="{{ asset('css/_partials/menu.css') }}">

<nav>
    <a href="{{ route('home') }}">
        <img class="logo" src="images/logo.png" >
    </a>

    <ul>
        <li> <a href=" {{route('register')}} "> Regístrate </a> </li>
        <li> <a href=" {{route('login')}} "> Iniciar sesión </a> </li>    
    </ul>           
</nav>


