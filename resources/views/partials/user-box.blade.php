<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
    data-bs-toggle="dropdown" aria-expanded="false">
    <img src="assets/images/avatars/avatar-1.png" class="user-img" alt="user avatar">
    <div class="user-info ps-3">
        <p class="user-name mb-0">{{ auth()->user()->name}}</p>
        <p class="designattion mb-0">{{ auth()->user()->country}}</p>
    </div>
</a>
<ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
    </li>
    <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
    </li>
    <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
    </li>
    <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
    </li>
    <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
    </li>
    <li>
        <div class="dropdown-divider mb-0"></div>
    </li>
    <li><span>
        <a class="dropdown-item" href="javascript:;"><span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <i class="bx bx-log-out-circle"></i><button type="submit"  class="btn btn-light">Sign out</button>
            </form>  
        </span></a>
				  			
        
    </span>
    </li>
</ul>
