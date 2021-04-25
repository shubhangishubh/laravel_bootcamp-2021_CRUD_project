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
<body class="admin-layout">

    <!-- Admin-Template-wrapper -->
    <div class="d-flex" id="wrapper">

{{---Importing Sidebar ---}}
@include('components/admin/sidebar')

<!-- Page Content -->
<div id="page-content-wrapper">

    {{---Importing Navbar ---}}
@include('components/admin/navbar')


{{---Exporting The Layout---}}
@yield('admin_layout')




</div>
<!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<script src="{{asset('js/app.js')}}"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>