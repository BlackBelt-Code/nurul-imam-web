<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i
            ></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            @if(Auth::check())
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">{{ auth()->user()->unreadNotifications->count() }}</span
                >
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">
                    Notifications</span
                >
                <div class="dropdown-divider"></div>

                @if(auth()->user()->unreadNotifications->count())
                @foreach(auth()->user()->unreadNotifications as $notifications)
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i
                    >{{ $notifications->data["lesson"]["title"]}}
                    <br />
                    <h5>
                        {{ $notifications->data["lesson"]["body"]}}
                    </h5>
                    <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            @endforeach @else
            <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> No Notification
                <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            @endif

            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a
                >
            </div>
            @endif
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span
                >
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i>
                    {{ Auth::user()->name }}
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> {{ Auth::user()->email }}
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">{{ __("Logout") }}</a
                >
                <form
                    id="logout-form"
                    action="{{ route('logout') }}"
                    method="POST"
                    style="display: none;"
                >
                    @csrf
                </form>
            </div>
        </li>
        <li class="nav-item">
            <a
                class="nav-link"
                data-widget="control-sidebar"
                data-slide="true"
                href="#"
                role="button"
                ><i class="fas fa-th-large"></i
            ></a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->