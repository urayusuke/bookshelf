<html>
  <head>@yield('title')</head>
  <link href="{{ asset('/scss/book/index.scss') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <style>
    .booksRegistration{display: flex; justify-content: center; font-weight: bold; font-size: 30px;
      letter-spacing: 2px; background-color: burlywood; width: 15vw; margin: 0 auto;  margin-top: 30px; 
    }
    .content{ 
      width: 100vw; height: 70vh; display: flex; padding: 20px; margin-left: -10px; 
    }
    .content__title1{  
      font-size: 20px; width: 20vw; margin-top: 40px; font-weight: bold; margin-left: -10px;
      word-break: break-all; 
      }
    .content__author1{ 
      font-size: 15px; width: 20vw; margin-top: -5px; margin-left: -10px; 
      word-break:break-all;
      }
    .pagination{ position: absolute; left: 44%; bottom: 20%; font-size: 20px;}
    .content__link{color: black;}
    .booksRegistration__a{color: black;}
    .content__list{ width: 19.8vw; padding: 0 5px;}
    .footer{
      background-color: gray; color: white;
      width: 100vw; height: 9vh;  position: absolute; bottom: 0;
      }
    .footer__title{color: wheat;}
    h3{
      position: absolute; top: 15px; left: 46vw;
    }
  </style>
</html>
<body>
@extends('layouts.app')

@section('content')
  @if (Auth::check())
    <div class="booksRegistration">
      <a href="{{ url('/book/create') }}" class="booksRegistration__a">本を登録する</a>
    </div>
  @endif
  <div class="content">
    @foreach($items as $item)
      <ul class="content__list">
        <a href="{{ $item->id }}" class="content__link">
          <li class="content__title1">
            <td>{{$item->title}}</td>
          </li>
          <li class="content__author1">
            <td>{{$item->author}}</td>
          </li>
        </a>
      </ul>
      @endforeach
    </div>
  {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@include('book.footer')
</body>