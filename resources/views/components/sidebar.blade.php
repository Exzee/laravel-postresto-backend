<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">RESTO - FIC14</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RF</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fa-solid fa-house"></i></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('home') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('home') }}">General Dashboard</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('users.index') }}">Users</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('products.index') }}">Products</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('categories.index') }}">Category</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="{{ route('products.index') }}"
                    class="nav-link"><i class="fa-solid fa-cube"></i><span>Products</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('categories.index') }}"
                    class="nav-link"><i class="fa-solid fa-layer-group"></i><span>Category</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('users.index') }}"
                    class="nav-link"><i class="fa-sharp fa-solid fa-circle-user"></i><span>Users</span></a>
            </li>

        </ul>
    </aside>
</div>
