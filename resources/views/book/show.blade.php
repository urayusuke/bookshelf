@extends('layouts.app')

<style>
  .register{ font-family: 'ヒラギノ丸ゴ ProN','Hiragino Maru Gothic ProN';
    text-align: center; background-color: burlywood;  
    margin-top:-30px; margin-bottom: 25px; 
    padding-top: 5px; font-weight: bold;}
  h2{letter-spacing: 10px;}
  .show{ margin-top: -2px; text-align: center; letter-spacing: 10px;}
  p{font-size: 20px; font-weight: bold; padding-bottom: 2px;}
  #title{ margin-bottom: 10px; width: 500px; font-size: 20px; margin: 0 auto;}
  #author{ margin-bottom: 10px; width: 500px; font-size: 20px; margin: 0 auto;}
  #content{ background-color: white; border: solid 1px black;
    margin: 0 auto; text-align: center;
    margin-bottom: 10px; width: 500px; height: 200px; text-align: start;
    padding-left: 5px; padding-right:5px; font-size: 20px; }
  #btn{ padding: 5px 20px; font-size: 20px; letter-spacing: 2px;}
</style>
  
@section('content')
  <div class="register">
    <h2>本の編集</h2>
  </div>
  <div class="show">
    @if($items != null)
      @foreach($items as $item)
        <p>タイトル</p>
        <p id="title">{{ $item->title }}</p>
        <br><p>著 者</p>
        <p id="author">{{ $item->author}}</p>
        <br><p>内 容</p>
        <p id="content">{{$item->contents}}</p>
        {{-- <br><input type="submit" id="btn" value="登録する"> --}}
      @endforeach
    @endif
  </div>
@endsection

@include('book.footer')
