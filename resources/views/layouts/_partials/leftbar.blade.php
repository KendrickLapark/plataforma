<link rel="stylesheet" href="{{ asset('css/_partials/leftbar.css') }}">

<nav id="sidebar">

    <div class="custom-menu">
        <button class="toggle-btn" id="sidebarCollapse">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <img class="sidebar-logo" src="{{asset('images/logo_web.png')}}" >

    <ul class="nav-links">

        <li><a href="#"> <i class="fa-regular fa-envelope"></i> <span> Notificaciones </span> </a></li>
        <li><a href="{{ route('products') }}"> <i class="fa-solid fa-box"> </i> <span> Productos </span> </a> </li>
        <li><a href="#"> <i class="fa-solid fa-address-book"></i> <span> Contacto </span> </a>  </li>
        
    </ul>

    <li class="fixed-li"> 
        <form style="display:inline" action="{{route('logout')}}" method="post">
            @csrf
            <a href="#" onclick="this.closest('form').submit()"> <i class="fa-solid fa-right-from-bracket"></i> <span> Logout </span> </a>
        </form>
    </li>

</nav>
<script src="https://kit.fontawesome.com/6528f2bb84.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>