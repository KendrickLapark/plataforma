<link rel="stylesheet" href="{{ asset('css/_partials/menu.css') }}">

<header> 
    <nav>
        <a href="{{ route('home') }}">
            <img class="logo" src="images/logo.png" >
        </a>
        
        <ul>
            @auth
                <li> <a href=" {{route('dashboard')}} "> Dashboard </a> </li>
                <li> 
                    <form style="display:inline" action="{{route('logout')}}" method="post">
                        @csrf
                        <a href="#" onclick="this.closest('form').submit()"> Logout </a>
                    </form>
                </li>
            @else
                <li> <a href=" {{route('register')}} "> Regístrate </a> </li>
                <li> <a href=" {{route('login')}} "> Iniciar sesión </a> </li>        
            @endauth
            
        </ul>
    </nav>
</header>


