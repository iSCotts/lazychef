<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <link href='//fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT' rel='stylesheet' type='text/css'/>
    <link href="{{ asset(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <header>
        <h1><a href="{{ lazychef_url('/') }}">{{ site_title() }}</a></h1>
        <nav>
          <ul>
            <li><a href="{{ lazychef_url('archive') }}">Posts</a></li>
            <li><a href="{{ lazychef_url('rss') }}">RSS</a></li>
            @if (!Auth::check())
            <li><a href="{{ lazychef_url('/lazychef/login') }}">Login</a></li>
            @endif
            @if (Auth::check())
            <li><a href="{{ lazychef_url('/lazychef') }}">Admin</a></li>
            @endif
          </ul>
        </nav>
      </header>
      <div class="content">
        @yield('content')
      </div>
      <footer>
        <p>Powered by <a href="http://lazychefcms.com">Lazychef</a></p>
      </footer>
    </div>
  </body>
</html>
