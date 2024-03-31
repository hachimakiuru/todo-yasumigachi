@extends('layouts.app_original')
@section('content')  

  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card text-center">

            {{-- <div class="small-container">
              <p>aiueo</p>
            </div> --}}

            <div class="card-header">
                みんなの筋トレ
                <a href="{{ route('posts.create') }}"><i class='bx bx-plus'></i></i></a> 
                {{-- 上記新規投稿icons --}}
             </div>

            @foreach ($posts as $post)
            <div class="card-body">
              @if($post->image) 

                  <img src="{{ asset('storage/images/' . $post->image) }}" alt="Post Image">
                     @else
                         <p>No image available</p>
                     @endif

                <h5 class="card-title">タイトル : {{ $post->title }}</h5>
                <p class="card-text">内容 : {{ $post->body }}</p>
                <p class="card-text">投稿者：{{ $post->user->name }}</p> 
                <div class="card-footer text-muted">
                  {{-- 投稿日時 : {{ $post->created_at }} --}}
              </div>
               <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細へ</a>
            </div> 
            @endforeach
        </div>
        </div>
    </div>
  </div>

  @endsection
  