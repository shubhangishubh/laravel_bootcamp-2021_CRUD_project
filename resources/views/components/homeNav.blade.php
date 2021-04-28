<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            Laravel v8
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mt-2 mt-lg-0 ms-auto">
            <li class="nav-item active">
                <a class="nav-link" href={{route('home')}}>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('about')}}>About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('contactUs')}}>Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
