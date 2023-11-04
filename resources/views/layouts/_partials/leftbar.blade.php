<link rel="stylesheet" href="{{ asset('css/_partials/leftbar.css') }}">

<nav id="sidebar">

    <div class="custom-menu">
        <button class="toggle-btn" id="sidebarCollapse">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <h1> Sidebar</h1>

    <ul class="nav-links">

        <li><a href="#"> <i class="fa-regular fa-envelope"></i> Notificaciones </a></li>
        <li><a href="{{ route('products') }}"> <i class="fa-solid fa-box"></i> Productos </a> </li>
        <li><a href="#"> <i class="fa-solid fa-address-book"></i> Contacto </a>  </li>
    </ul>

</nav>
<script src="https://kit.fontawesome.com/6528f2bb84.js" crossorigin="anonymous"></script>