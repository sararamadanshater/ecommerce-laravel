@include('website.layouts.header')
    {{-- @stack('custom-css') --}}
     @yield('content')
    
@include('website.layouts.footer')
    {{-- @stack('custom-scripts') --}}