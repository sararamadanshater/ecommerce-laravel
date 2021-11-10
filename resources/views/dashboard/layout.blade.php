
    @include('dashboard.layouts.header')
    @stack('custom-css')
     @yield('content')
    
    @include('dashboard.layouts.footer')
    @stack('custom-scripts')
    
