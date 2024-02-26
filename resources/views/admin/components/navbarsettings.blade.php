<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/dashboard/profile">
            <i class="far fa-user"></i>
        </a>
    </li>

    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="/dashboard/logout" class="nav-link" :href="route('logout')"
                onclick="event.preventDefault();
                                this.closest('form').submit();">
                <i class="fas fa-times"></i>
            </a>
        </form>
    </li>
</ul>
