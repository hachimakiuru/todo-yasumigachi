@extends('layouts.app_original')
@section('content')
<div class="container">
      
  <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <h2>以下の記事にコメントします</h2>
          <div class="card mt-3">
            @if($post->image)
            <img src="{{ asset('storage/images/' . $post->image) }}" alt="Post Image" width="366px" height="366px"  >
              @else
                  <p>No image available</p>
              @endif
              <div class="card-header">
                  <h5>タイトル：{{ $post->title }}</h5>
              </div>
              <div class="card-body">
              <p class="card-text">内容：{{ $post->body }}</p>
              <p>投稿日時：{{ $post->created_at }}</p>
              <div class="col-md-8">
                <form action="{{ route('comments.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="form-group">
                        <label>コメント</label>
                        <textarea class="form-control" 
                        placeholder="内容" rows="5" name="body"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" id="color" >コメントする</button>
                </form>
            </div>
              
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
