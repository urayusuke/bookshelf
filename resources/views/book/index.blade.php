<html>
  <head>@yield('title')</head>
  <link href="{{ asset('/scss/book/index.scss') }}" rel="stylesheet">
  <style>
    .booksRegistration{display: flex; justify-content: center; font-weight: bold; font-size: 30px;
      letter-spacing: 2px; background-color: burlywood; width: 15vw; margin: 0 auto;  margin-top: 30px; 
    }
    .content{ width: 20vw; display: flex; padding: 20px; margin-left: -5px; }
    .content__title1{  font-size: 20px; width: 20vw; margin-top: 40px; font-weight: bold; margin-left: -10px; }
    .content__author1{ font-size: 15px; width: 20vw; margin-top: -5px; margin-left: -10px; }
    .pagination{ position: absolute; left: 44%; bottom: 20%; font-size: 20px;}
    /* .content__title2{ font-size: 20px; width: 20vw; margin-top: 200px; font-weight: bold; margin-left: -10px; } */
    /* .content__author2{ font-size: 15px; width: 20vw; margin-top: -5px; margin-left: -10px; } */
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
        <a href="{{ $item->id }}">
          <li class="content__title1">
            <td>{{$item->title}}</td>
          </li>
          <li class="content__author1">
            <td>{{$item->author}}</td>
          </li>
        </a>
        {{-- <li class="content__title2">
          <td>{{$item->title}}</td>
        </li>
        <li class="content__author2">
          <td>{{$item->author}}</td>
        </li> --}}
      </ul>
      @endforeach
    </div>
  {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@include('book.footer')
</body>