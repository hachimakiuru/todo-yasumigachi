@extends('layouts.app_original')
@section('content')  

<body>
  <header>
    <div class="header-left">
            <img class="logo" src="./logo.png" alt="">
        </div>
        <div class="header-right">
            <ul class="nav">
                <li><a href="#">ユーザA</a></li>
            </ul>
        </div>
  </header>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="#" method="POST">
                <div class="form-group">
                    <label>タイトル</label>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>内容</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">作成</button>
            </form>
        </div>
    </div>
  </div>

@endsection
