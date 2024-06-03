<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="{{asset('img/Ncoins.jpg')}}"
                    height="22"
                    alt="Gbancy"
                    loading="lazy"
                />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="{{url('about')}}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('services')}}"> Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('blog')}}"> Blog</a>


                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
            </ul>

            <!-- Left links -->
        </div>

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <!-- Notifications -->
            <div class="dropdown" style="margin-right: 10px">

                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                >

                    <li>
                        <a class="dropdown-item"  href="{{url('/tickets/create')}}"><i class="align-middle fas fa-question-circle"></i> Help Center </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#"><i class="align-middle fas fa-gears"></i> Settings </a>

                    </li>

                </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown" style="margin-right: 20px">
                <a
                    class="dropdown-toggle d-flex align-items-center hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuAvatar"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                >
                    @if(Auth::check())
                        <i class="fas fa-user">Login</i>
                     @else
                        <button class="btn btn-dark" id="log"><a href="{{url('login')}}" style="color: #fff;">Login</a></button>

                     @endif

                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuAvatar"
                >

                    @if(Auth::check())
                        <li>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                            <a class="dropdown-item" href="{{url('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>

                        </li>
                        <li>
                            <a class="dropdown-item" href="{{url('tickets/create')}}"><i class="align-middle fas fa-fax"></i> Support</a>

                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="align-middle fas fa-gears"></i> Settings</a>
                        </li>

                    @else
                        <li>
                            <a class="dropdown-item" href="{{url('login')}}"><i class="align-middle fas fa-sign-in fa-shake" style="animation-duration: 2s;"></i> Login </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{url('tickets/create')}}"><i class="align-middle fas fa-fax"></i> Support</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#"><i class="align-middle fas fa-gears"></i> Settings</a>
                        </li>

                    @endif

                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>


