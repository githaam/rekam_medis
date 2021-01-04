<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <nav>
        <li><a href="/index">Index</a></li>
        <li><a href="/data_login">Data Login</a></li>
      </nav>
    </header>
    <br>
    @yield('content')
    <br>
    <footer> &copy; Laravel & GitHaam 2020</footer>
  </body>
</html>
