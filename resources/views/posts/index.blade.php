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
              <div class="large-box">
              <div>
                <img src="{{asset('storage/images/'.Auth::User()->avatar)}}" width="30" height="30" style="border: 0.2px solid black; border-radius: 50px;" >
              </div>


              <div >
               <div><h5 class="card-title" id="card-title" > {{ $post->title }}</h5></div>
                <div><p class="card-text">{{ $post->user->name }}</p> </div>
              </div>

            </div>


              @if($post->image) 

                  <img src="{{ asset('storage/images/' . $post->image) }}" alt="Post Image"width="330px" height="330px" style="border: 0.5px solid black;">
                     @else
                         <p>No image available</p>
                     @endif

                    {{-- 以下いいねの記述 --}}
                    @if($post->nices()->where('user_id', Auth::user()->id)->count() ==1 )
                      <a href="{{ route('unnice', $post) }}" class="btn btn-succes btn-sm" >
                        いいねを消す
                        <span class="badge">{{ $post->nices->count() }}</span>
                      </a>
                    @else
                     <a href="{{ route('nice' , $post) }}" class="btn btn-secondary btn-sm" >
                      いいねをつける
                      <span class="badge">{{ $post->nices->count() }}</span>
                    </a>
                    @endif

                    {{-- いいねの記述終 --}}

                <p class="card-text">{{ $post->body }}</p>
                   {{ $post->created_at }}
               <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary" id="color">詳しく読む</a>
            </div> 
            <hr>
            @endforeach
        </div>
        </div>
    </div>
  </div>

  @endsection
  