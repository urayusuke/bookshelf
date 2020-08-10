<html>
  <head>@yield('title')</head>
  <link href="{{ asset('/scss/book/index.scss') }}" rel="stylesheet">
</html>
<body>
  <div class = "header">
    <h1>bookshelf</h1>
  </div>
    <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  <a href="{{ url('/home') }}">Home</a>
              @else
                  <a href="{{ route('login') }}">Login</a>
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
          </div>
      @endif
  <div class="content">
    @yield('content')
    <ul>
      <li></li>
    </ul>
  </div>
  <div class="footer">
    @yield('footer')
    <h3>bookshelf</h3>
  </div>
</body>