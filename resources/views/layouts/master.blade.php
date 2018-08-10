<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{ asset('css/lib/bootstrap/min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/bootstrap/theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    @yield('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

    @yield('js')
    <title>@yield('title') | 初雪的空間</title>
  </head>
  <body>
    @include('layouts.partials.navbar')
    <br>
    <div class="container">
      @yield('index')
    </div>
    <br>
    <br>
    <br>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
