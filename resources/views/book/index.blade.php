<html>
  <head>@yield('title')</head>
  <link href="{{ asset('/scss/book/index.scss') }}" rel="stylesheet">
  <style>
    .booksRegistration{text-align: center; font-weight: bold; font-size: 18px;
      letter-spacing: 2px;
    }
  </style>
</html>
<body>
@extends('layouts.app')

@section('content')
  @if (Auth::check())
    <div class="booksRegistration">
      <a href="{{ url('/book/create') }}">本を登録する</a>
    </div>
  @endif
  <div class="content">
    <ul>
      <li></li>
    </ul>
  </div>
@endsection

@include('book.footer')
</body>