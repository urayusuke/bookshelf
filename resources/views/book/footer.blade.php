<html>
  <link href="{{ asset('/scss/book/index.scss') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <style>
    .footer{
      background-color: gray; color: white;
      width: 100vw; height: 9vh;  position: absolute; bottom: 0;
      }
    .footer__title{color: wheat;}
    h3{
      position: absolute; top: 15px; left: 46vw;
    }
  </style>
<body>
  <div class="footer">
    <a href="{{ url('/') }}" class="footer__title">
    <h3>bookshelf</h3>
    </a>
  </div>
</body>