@can('manage-system')
    @include('admin.layouts.head')
    @include('admin.layouts.nav')
    @include('admin.layouts.sidebar')
    @yield('content')
    @include('admin.layouts.sidebarControl')
    @include('admin.layouts.footer')
@else
    {!! abort(403) !!}
@endcan
