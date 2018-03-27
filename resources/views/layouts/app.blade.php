<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
<body>

    <div id="app">
        @include('includes.menu')
        @include('includes.header')
        <main>
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
</body>
</html>
