<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')|TodoWebsite</title>
  <link rel="stylesheet" href="{{url('css/app.css')}}">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
<link rel="stylesheet" href="{{url('css/pricing.css')}}">
</head>

<body>
  @include('inc.navbar')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<h1 class="display-4">Todo List</h1>

</div>
@include('inc.message')
<div class="container">
  <div class="card-deck mb-3 text-center">


    @yield('content')

  </div>


</div>
<!-- Footer -->
<footer id="footer" class="text-center">


  © 2018 Copyright: <span style="color:red">Fadwa-Mousa</span>


</footer>
<!-- Footer -->
</body>
</html>
