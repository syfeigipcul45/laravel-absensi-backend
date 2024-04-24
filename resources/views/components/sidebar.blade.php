<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            <li class="menu-header">Starter</li>
            <li class="{{ Request::is('users*') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('users') }}"><i class="far fa-user"></i> <span>Users</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('companies.show', 1) }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Company</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('attendances.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Attendances</span>
                </a>
            </li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
