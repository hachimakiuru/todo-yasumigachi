@extends('layouts.app_original')
@section('content')  

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8" id="show-container">
          <!-- ポストの表示部分 -->
          <div class="card mt-3">
              <div class="card-header">
                <img src="{{asset('storage/images/'.$post->user->avatar)}}" width="30" height="30" style="border: 0.2px solid black; border-radius: 50px;" >
                  <h5>{{ $post->title }}</h5>
              </div>
              <!-- ポストの画像 -->
              @if($post->image)
              <img src="{{ asset('storage/images/' . $post->image) }}" alt="Post Image" width="365px" height="330px">
              @else
              <p>No image available</p>
              @endif
              <div class="card-body">
                {{-- 以下いいねの記述 --}}
                @if($post->nices()->where('user_id', Auth::user()->id)->count() ==1 )
                <a href="{{ route('unnice', $post) }}" class="btn btn-success btn-sm"  >
                  <i class="fas fa-heart"></i> 
                  <span class="badge">{{ $post->nices->count() }}</span>
                </a>
              @else
               <a href="{{ route('nice' , $post) }}" class="btn btn-secondary btn-sm" >
                <i class="fas fa-heart"></i> 
                <span class="badge">{{ $post->nices->count() }}</span>
              </a>
              @endif
              {{-- いいねの記述終 --}}
                  <!-- ポストの内容 -->
                  <p style="font-size: 15px"  class="card-text">内容：{{ $post->body }}</p>
                  <!-- 投稿日時 -->
                  <p style="font-size: 10px">投稿日時：{{ $post->created_at }}</p>
                  <hr>
                  <h5>コメント一覧</h5>
                  @foreach($post->comments as $comment)
                  <div class="card mt-3">
                      <h5 class="card-header">投稿者：{{ $comment->user->name }}</h5>
                      <div class="card-body">
                        <p style="font-size: 15px" class="card-text">内容：{{ $comment->body }}</p>
                        <h5 style="font-size: 10px" class="card-title">投稿日時：{{ $comment->created_at }}</h5>
                          <!-- 編集リンク -->
                          @if(Auth::check() && Auth::user()->id == $comment->user_id)
                          <!-- コメントの投稿者にのみ表示 -->
                          <a href="{{ route('comments.edit', $comment) }}" class="btn btn-sm btn-primary">編集</a>
                          @endif
                          <!-- 削除フォーム -->
                          @if(Auth::check() && Auth::user()->id == $comment->user_id)
                          <!-- コメントの投稿者にのみ表示 -->
                          <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('本当に削除しますか？')">削除</button>
                          </form>
                          @endif
                      </div>
                  </div>
                  @endforeach

                  <!-- コメント一覧の表示部分 -->
          <div class="col-md-8 mt-5">
            
           
        </div>
              </div>
          </div>

          
        

          <!-- 編集ボタンとコメント投稿ボタンの表示部分 -->
<div class="col-md-8 mt-5">
    <!-- 全てのユーザーに表示 -->
    <button type="button" id="color"  onclick="window.location='{{ route('comments.create' , $post->id) }}'">コメントする</button>
  @if(Auth::check() && Auth::user()->id == $post->user_id)
  <!-- ポストの投稿者にのみ表示 -->
  <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" id="color">編集する</a>
  <!-- ポストの投稿者にのみ表示 -->
  <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
      @csrf
      @method('DELETE')
      <!-- ポストの投稿者にのみ表示 -->
      <button type="submit" class="btn btn-danger" onclick="return confirm('本当に削除しますか？')">削除</button>
  </form>
  @endif
</div>

      </div>
  </div>
</div>

  @endsection
