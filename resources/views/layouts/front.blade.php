<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials._header')

<body>
    @include('layouts.partials._preloader')

    <div class="site-wrapper">

        <div class="main-overlay"></div>

        @include('layouts.partials._nav_bar')

        @include('layouts.partials._hero')

        {{-- main content --}}
        @yield('content')

        @include('layouts.partials._instagram_feed')

        @include('layouts.partials._footer')

    </div>

    @include('layouts.partials._search_bar')

    @include('layouts.partials._side_menu')

    @include('layouts.partials._scripts')
</body>

</html>
