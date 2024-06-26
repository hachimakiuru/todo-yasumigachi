@extends('layouts.app_original')
@section('content')  

  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>タイトル</label>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>内容</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body">
                    </textarea>
                </div>
                <div>
                    <label for="image">Image:</label><br>
                    <input type="file" id="image" name="image" >
                </div>
                <button type="submit" class="btn btn-primary"id="color" >作成</button>
            </form>
        </div>
    </div>
  </div>

@endsection
