<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <header>
      <div class="logo">
        <img src="{{url('img/logo.png')}}" alt="">
      </div>

      <nav>
        <ul>
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#">Corso</a>
          </li>
          <li>
            <a href="#">Dopo il corso</a>
          </li>
          <li>
            <a href="#">Lezione gratuita</a>
          </li>
          <li>
            <a href="#">Assumi</a>
          </li>
          <li>
            <a class="button" href="#">Candidati ora</a>
          </li>
        </ul>
      </nav>
    </header>

    @yield('main')

    <footer></footer>

  </body>
</html>
