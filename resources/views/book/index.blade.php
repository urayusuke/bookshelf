<html>
  <head>@yield('title')</head>
  <link href="{{ asset('/scss/book/index.scss') }}" rel="stylesheet">
  <style>
    .booksRegistration{text-align: center; font-weight: bold; font-size: 18px;
      letter-spacing: 2px;
    }
    .content{ display: flex; justify-content: space-around; padding: 10px 100px;}
    .content__title{ font-size: 20px; width: 20vw; padding: 0px 20px; }
    .content__author{ font-size: 20px; width: 20vw; }
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
        <li class="content__title">
          <td>{{$item->title}}</td>
        </li>
        <li class="content__author">
          <td>{{$item->author}}</td>
        </li>
      </ul>
    @endforeach
  </div>
@endsection

@include('book.footer')
</body>