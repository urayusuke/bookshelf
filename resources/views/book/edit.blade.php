@extends('layouts.app')

<style>
  .register{ font-family: 'ヒラギノ丸ゴ ProN','Hiragino Maru Gothic ProN';
    text-align: center; background-color: burlywood;  
    margin-top:-30px; margin-bottom: 20px; 
    padding-top: 5px; font-weight: bold;}
  h2{letter-spacing: 10px;}
  .show{ margin-top: -2px; text-align: center; letter-spacing: 10px;}
  p{font-size: 20px; font-weight: bold; padding-bottom: 2px;}
  #title{ margin-bottom: 10px; width: 500px; font-size: 20px; margin: 0 auto; margin-bottom: 10px;}
  #author{ margin-bottom: 10px; width: 500px; font-size: 20px; margin: 0 auto; margin-bottom: 10px;}
  #content{ background-color: white; border: solid 1px black;
    margin: 0 auto; text-align: center; 
    margin-bottom: 10px; width: 500px; height: 300px; text-align: start;
    padding-left: 5px; padding-right:5px; font-size: 20px; }
  #btn{ padding: 5px 20px; font-size: 20px; letter-spacing: 2px;}
</style>
  
@section('content')
  <div class="register">
    <h2>本の内容</h2>
  </div>
  <div class="show">
    @if (Auth::id() == $item->user_id)
      <form action="{{ route('update',$item) }}" method="post">
        <table>
          @csrf
          <p>タイトル</p><input type="text" name="title" id="title" value="{{ $item->title }}">
          <br><p>著 者</p><input type="text" name="author" id="author" value="{{ $item->author}}">
          <br><p>内 容</p><textarea id="content" name="contents" placeholder="本の内容を記載して下さい">{{ $item->contents }}</textarea>
          <br><input type="submit" id="btn" value="更 新">
        </table>
      </form>
    @endif
  </div>
@endsection

@include('book.footer')
