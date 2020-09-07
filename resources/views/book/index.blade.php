<html>
  <head>@yield('title')</head>
  <link href="{{ asset('/scss/book/index.scss') }}" rel="stylesheet">
  <style>
    .booksRegistration{text-align: center; font-weight: bold; font-size: 18px;
      letter-spacing: 2px;
    }
    .content{ width: 20vw; display: flex; justify-content: space-around; padding: 20px; margin-left: -5px; }
    .content__title1{ font-size: 20px; width: 20vw; margin-top: 5px; font-weight: bold; margin-left: -10px; }
    .content__author1{ font-size: 15px; width: 20vw; margin-top: -5px; margin-left: -10px; }
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
    @foreach($items as $item)
      <ul>
        <li class="content__title1">
          <td>{{$item->title}}</td>
        </li>
        <li class="content__author1">
          <td>{{$item->author}}</td>
        </li>
      </ul>
    @endforeach
  </div>
@endsection

@include('book.footer')
</body>