<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                    <input type="text" class="form-control search-control" placeholder="Type to search..."> <span
                        class="position-absolute top-50 search-show translate-middle-y"><i
                            class='bx bx-search'></i></span>
                    <span class="position-absolute top-50 search-close translate-middle-y"><i
                            class='bx bx-x'></i></span>
                </div>
            </div>
            @auth
                <div class="top-menu ms-auto">
                    @include('partials.top-menu')
                </div>
                <div class="user-box dropdown">
                    @include('partials.user-box')
                </div>

            @endauth
            @guest
                <a class="d-flex align-items-center nav-link"
                    href="{{ route('login') }}" >
                    <img src="{{ asset('assets/images/icons/user.png') }}" class="user-img bg-secondary" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">Login</p>
                    </div>
                </a>
            @endguest
        </nav>
    </div>
</header>
<!--end header -->
