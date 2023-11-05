<link rel="stylesheet" href="{{ asset('css/_partials/leftbar.css') }}">

<nav id="sidebar">

    <div class="custom-menu">
        <button class="toggle-btn" id="sidebarCollapse">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <h1> Sidebar </h1>

    <ul class="nav-links">

        <li><a href="#"> <i class="fa-regular fa-envelope"></i> <span> Notificaciones </span> </a></li>
        <li><a href="{{ route('products') }}"> <i class="fa-solid fa-box"> </i> <span> Productos </span> </a> </li>
        <li><a href="#"> <i class="fa-solid fa-address-book"></i> <span> Contacto </span> </a>  </li>
    </ul>

</nav>
<script src="https://kit.fontawesome.com/6528f2bb84.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>