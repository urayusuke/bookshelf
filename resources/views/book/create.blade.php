@extends('layouts.app')

<style>
  .register{ font-family: 'ヒラギノ丸ゴ ProN','Hiragino Maru Gothic ProN';
    text-align: center; background-color: burlywood;  
    margin-top:-30px; margin-bottom: 25px; 
    padding-top: 5px; font-weight: bold;}
  h2{letter-spacing: 10px;}
  .create{ margin-top: -2px; text-align: center; letter-spacing: 10px;}
  p{font-size: 20px; font-weight: bold; padding-bottom: 2px;}
  #title{ margin-bottom: 10px; width: 500px; font-size: 20px;}
  #author{ margin-bottom: 10px; width: 500px; font-size: 20px;}
  #content{ background-color: white; border: solid 1px black; 
    margin-bottom: 10px; width: 500px; height: 200px; text-align: start;
    padding-left: 5px; padding-right:5px; font-size: 20px; }
  #btn{ padding: 5px 20px; font-size: 20px; letter-spacing: 2px;}
</style>
  
@section('content')
  <div class="register">
    <h2>本の登録</h2>
  </div>
  <div class="create">
  <form action="{{ url('/book/create')}}" method="POST">
      <table>
        @csrf
        <p>タイトル</p><input type="text" name="title" id="title">
        <br><p>著 者</p><input type="text" name="author" id="author">
        <br><p>内 容</p><textarea id="content" name="contents" placeholder="本の内容を記載してください"></textarea>
        <br><input type="submit" id="btn" value="登録する">
      </table>
    </form>
  </div>
@endsection

@include('book.footer')
