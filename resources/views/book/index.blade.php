<html>
  <head>@yield('title')</head>
  <link href="{{ asset('/scss/book/index.scss') }}" rel="stylesheet">
</html>
<body>
@extends('layouts.app')

@section('content')
  <div class="content">
    <ul>
      <li></li>
    </ul>
  </div>
@endsection

  <div class="footer">
    @yield('footer')
    <a href="{{ url('/') }}">
    <h3>bookshelf</h3>
    </a>
  </div>
</body>