<!DOCTYPE html>
<html lang="ru">
@include ('layouts.head')
<body>

    <header>
        @include ('layouts.header_top')
        @include ('layouts.header_menu')
    </header>

<main>
@yield('content')


    </main>


    @include('layouts.footer')
    @include('layouts.scripts')

</body>
</html>
