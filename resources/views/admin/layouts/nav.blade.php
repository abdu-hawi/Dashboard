
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
{{--        <li class="nav-item d-none d-sm-inline-block">--}}
{{--            <a href="{!! url("") !!}" class="nav-link">مشاهدة الموقع</a>--}}
{{--        </li>--}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                </x-jet-dropdown-link>
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
