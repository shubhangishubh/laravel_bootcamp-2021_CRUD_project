<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name','My Contact App')}}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
          {{---Importing Navbar ---}}
    @include('components/homeNav')
    </header>
    <article>

{{---Exporting The Layout---}}
@yield('application_layout')
    </article>

<footer>
       {{---Importing Footer ---}}
@include('components/admin/footer')
</footer>




<script src="{{asset('js/app.js')}}"></script>


</body>
</html>