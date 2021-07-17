<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipee</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css_bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css_bootstrap/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css_bootstrap/style2.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
  <nav class="my-navbar navbar navbar-expand-md navbar-light fixed-top">
    <div class="container" ">
      <a class="navbar-brand" href="{{ '/' }}" style="color: #314e52;">
        <img src="{{ asset('assets/Logo.svg') }}" alt="" width="35" height="30" class="d-inline-block align-text-top">
        Recipee
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="my-navlink nav-link active" aria-current="page" href="#"
              style="color: #F2A154;">Recipes</a>
          </li>
          <li class="nav-item">
            <a class="my-navlink nav-link" href="/myrecipe"
              style="color: #F2A154;">MyRecipe</a>
          </li>
        </ul>
        <form class="d-flex" method="GET" action="/search" >
          <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  @yield('container')

<script src="{{ asset('js_bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>