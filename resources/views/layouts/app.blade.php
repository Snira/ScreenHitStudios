<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
<!-- <div id="app"> -->
    @include('layouts.navbar')

    <!-- <div class="container"> -->
        @yield('content')
    <!-- </div> -->
    @include('layouts.footer')

<!-- </div> -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
