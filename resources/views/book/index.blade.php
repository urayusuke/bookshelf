<html>
  <head>@yield('title')</head>
  <link href="{{ asset('/scss/book/index.scss') }}" rel="stylesheet">
  <style>
    .booksRegistration{text-align: center; font-weight: bold; font-size: 18px;
      letter-spacing: 2px;
    }
    .li{ width:200px; height: 200px; font-size: 20px;}
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
      {{-- @foreach($result as $item)
      <ul>
        <li>
          <td>{{$item->title}}</td>
          <td>{{$item->author}}</td>
          <td>{{$item->contents}}</td>
        </li>
      </ul>
      @endforeach --}}
  </div>
@endsection

@include('book.footer')
</body>