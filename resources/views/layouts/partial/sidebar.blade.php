<div class="sidebar" data-color="green" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text">
            KolkataFata
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin') ? 'active': '' }}">
                <a href="{{ route('admin') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/user*') ? 'active': '' }}">
                <a href="{{ route('user.index') }}">
                    <i class="material-icons">people_alt</i>
                    <p>Users</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}">
                <a href="{{ route('reservation.index') }}">
                    <i class="material-icons">book_online</i>
                    <p>Resrvations</p>
                </a>
            </li>

        </ul>
    </div>
</div>