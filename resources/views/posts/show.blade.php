@extends('layouts.app_original')
@section('content')  

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8" id="show-container" >
              <div class="card mt-3">

                   
            

                  <div class="card-header">
                      <h5>{{ $post->title }}</h5>
                  </div>
                  @if($post->image)
                   <img src="{{ asset('storage/images/' . $post->image) }}" alt="Post Image" width="365px" height="330px" >
                     @else
                         <p>No image available</p>
                     @endif
                  <div class="card-body">
                  <p class="card-text">内容：{{ $post->body }}</p>
                  <p>投稿日時：{{ $post->created_at }}</p>
                  <div class="col-md-8 mt-5">
                    コメント一覧
                    @foreach($post->comments as $comment)
                      <div class="card mt-3">
                          <h5 class="card-header">投稿者：{{ $comment->user->name }}</h5>
                          <div class="card-body">
                              <h5 class="card-title">投稿日時：{{ $comment->created_at }}</h5>
                              <p class="card-text">内容：{{ $comment->body }}</p>
                          </div>
                      </div>
                  @endforeach
                  <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary" id="color">編集する</a>
                  <form action='{{ route('posts.destroy' , $post->id) }}' method='post'>
                    @csrf
                    @method('delete')
                      <input type='submit' value='削除' id="color" class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>
                  </form>
                  </div>
                  <button type="button" id="color" class="btn btn-primary" onclick="window.location='{{ route('comments.create' , $post->id) }}'">コメントする</button>
                  {{-- <div class="row justify-content-center">
                    <div class="col-md-8 mt-5">
                      コメント一覧
                      @foreach($post->comments as $comment)
                        <div class="card mt-3">
                            <h5 class="card-header">投稿者：{{ $comment->user->name }}</h5>
                            <div class="card-body">
                                <h5 class="card-title">投稿日時：{{ $comment->created_at }}</h5>
                                <p class="card-text">内容：{{ $comment->body }}</p>
                            </div>
                        </div>
                    @endforeach
                    </div> --}}
                  </div>
              </div>
          </div>
      </div>
      {{-- <div class="row justify-content-center">
        <div class="col-md-8">
                <button type="button" class="btn btn-primary" onclick="window.location='{{ route('comments.create' , $post->id) }}'">コメントする</button>
        </div>
      </div> --}}
      {{-- <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
          コメント一覧
          @foreach($post->comments as $comment)
            <div class="card mt-3">
                <h5 class="card-header">投稿者：{{ $comment->user->name }}</h5>
                <div class="card-body">
                    <h5 class="card-title">投稿日時：{{ $comment->created_at }}</h5>
                    <p class="card-text">内容：{{ $comment->body }}</p>
                </div>
            </div>
        @endforeach
        </div>
      </div> --}}
  </div>

  @endsection
