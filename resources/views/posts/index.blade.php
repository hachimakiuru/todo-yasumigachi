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
              <div>
                <h5 class="card-title" id="card-title" > {{ $post->title }}</h5>
                <p class="card-text">{{ $post->user->name }}</p> 
              </div>
              
              @if($post->image) 

                  <img src="{{ asset('storage/images/' . $post->image) }}" alt="Post Image"width="330px" height="330px" >
                     @else
                         <p>No image available</p>
                     @endif

                <p class="card-text">{{ $post->body }}</p>
                   {{ $post->created_at }}
               <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary" id="color">詳しく読む</a>
            </div> 
            @endforeach
        </div>
        </div>
    </div>
  </div>

  @endsection
  