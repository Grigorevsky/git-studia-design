<!DOCTYPE html>
<html lang="en">
@include ('layouts.head')


<body>
@include ('layouts.header')
<main>

@yield('content')

</main>

    @include('layouts.footer')
    @include('layouts.scripts')
  </body>
  </html>
