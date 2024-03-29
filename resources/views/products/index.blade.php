@extends('layouts.app_original')
@section('content')

<div class="date">
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 20V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2zM9 18H7v-2h2v2zm0-4H7v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm2-5H5V7h14v2z"/></svg>

     <div class="training">
        <h1>トレーニング日</h1>
        @foreach ($products as $product)
        <h1>{{ date('Y-m-d',strtotime($product->created_at)) }}</h1>
        <input type="date">
        {{-- <h1>{{ str_replace( 10, '', $product->created_at) }}</h1> --}}

            
        {{-- <h1>{{ $product->created_at}}</h1> --}}
        @endforeach

     </div>

</div>

@endsection
