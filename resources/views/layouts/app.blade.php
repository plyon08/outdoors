<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.head')

<body>    
    <div id="app">
        
        @include('includes.nav')

        @include('includes.success')

        <main class='main-content'>

            @yield('content')
        
        </main>
    </div>
</body>
</html>
