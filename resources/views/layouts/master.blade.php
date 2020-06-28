<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
<div class="main-container">

    <header>
        @include('includes.header')
    </header>

    <div class="body-container" id="top">
        @yield('content')
    </div>

    <footer>
      footer
        {{-- @include('includes.footer') --}}
    </footer>

</div>
</body>
</html>
