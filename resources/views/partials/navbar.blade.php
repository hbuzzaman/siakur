
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

        <!-- Expand & Log Out Menu -->
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>

            <div class="btn-group">
                <button type="button" class="btn btn-default">{{ auth()->user()->role }}</button>
                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" role="menu" style="">
                    <a class="dropdown-item" href="#"><i class="fa-solid fa-user-secret"></i> My Profile</a>
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                        </form>
                    {{-- <a class="dropdown-item" href="\logout">Logout <i class="fa-solid fa-right-from-bracket"></i></a> --}}
                </div>
            </div>

            {{-- <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 bg-dark border-0">Logout <span data-feather="log-out"></span></button>
            </form> --}}
            {{-- <li class="nav-item">
                
                <a href="" class="nav-link">
                    <p>Admin</p>
                </a>
            </li> --}}

        </ul>
