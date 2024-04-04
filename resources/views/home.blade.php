@extends('layouts.app_original')

@section('content')


<link href="{{ asset('css/home.css') }}" rel="stylesheet">

  <body>
    
  
    <div class="container">
    <div class="calender1">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 20V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2zM9 18H7v-2h2v2zm0-4H7v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm2-5H5V7h14v2z"/></svg>
        <h4>日付</h4>
    </div>

        <div class="calendar2">
            <span>
              {{ \Carbon\Carbon::now()->setTimezone('Asia/Tokyo')->format('Y年m月d日') }}

            </span>
        </div>
    
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"/></svg>
       
     <div class="post-container">
      @foreach ($records as $record)
          
     
      <div class="set-container">
       
       <h4>種目:{{ $record->title }}</h4>
       <ul>
           <li>{{ $record->set }}set</li>
           <li> {{ $record->kg }}kg</li>
           <li>{{ $record->reps }}reps</li>
       </ul>

     <div class="edit-delete">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $record->id }}">
              edit
            </button>

            <form id="delete-form-{{ $record->id }}" action="{{ route('home.destroy', $record->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">削除</button>
          </form>
     </div> 

    </div>

       <!-- Modal -->
   <div class="modal fade" id="exampleModal{{ $record->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h1 class="modal-title fs-5" id="exampleModalLabel">種目edit</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         
         {{-- 入力画面 --}}
         <form action="{{ route('home.edit', $record->id) }}" method="POST">
             @csrf
             @method('put')
             
             {{-- <input type="text" name="title" value="{{ $record->title }}">
             <input type="number" name="set" value="{{ $record->set }}">
             <input type="number" name="kg" value="{{ $record->kg }}">
             <select name="reps"> --}}
                 <!-- オプションの設定と選択 -->
             {{-- </select> --}}

           <div>
             <input type="text" name="title" value="{{ $record->title }}">
           </div>
           <h4>set</h4>
           <select class="" aria-label="" name="set">
             <option selected value="{{ $record->set }}">{{ $record->set }}</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
             <option value="8">8</option>
             <option value="9">9</option>
             <option value="10">10</option>
           </select>

           <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">kg</h1>
           </div>
           <div>
               <input type="number" name="kg" value="{{ $record->kg }}">
           </div>
           <h4>reps</h4>
           <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="reps">
             <option selected value="{{ $record->reps }}">{{ $record->reps }}</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
             <option value="8">8</option>
             <option value="9">9</option>
             <option value="10">10</option>
             <option value="11">11</option>
             <option value="12">12</option>
             <option value="13">13</option>
             <option value="14">14</option>
             <option value="15">15</option>
           </select>

           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Save changes</button>
           </div>
         </form>
       </div>
     </div>
   </div>
       @endforeach
     </div>
 </div>
    </div>   
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalstore">
      post
    </button>
    
      <!-- Modal -->
      <div class="modal fade" id="exampleModalstore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">種目</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            {{-- 入力画面 --}}
            <form action="{{ route('home.store') }}" method="POST">
                @csrf
                @method('put')
              <div>
                <input type="text" name="title">
              </div>
              <select class="" aria-label="" name="set">
                <option selected>set</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>

              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">kg</h1>
              </div>
              <div>
                  <input type="number" name="kg">
              </div>
              <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="reps">
                <option selected>reps</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
              </select>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      {{-- edit画面 --}}
      {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        edit
      </button> --}}
      
      <div class="cyoushi-container">


        <h2>今日の調子</h2>
        <output id="sliderOutput"></output>
        <label for="customRange2" class="form-label"></label>
        <input type="range" class="form-range" min="0" max="5" id="customRange2">
      </div>

    </body>
      

    <script>
      function confirmDelete(recordId) {
          if (confirm('このレコードを削除してもよろしいですか？')) {
              // レコードの削除を実行する
              document.getElementById('delete-form-' + recordId).submit();
          }
      }
      const slider = document.getElementById('customRange2');
  const output = document.getElementById('sliderOutput');
  
  slider.addEventListener('input', function() {
    const value = parseFloat(this.value);
    
    // スライダーの値に応じて表示を変更
    if (value <= 1) {
      output.innerHTML = "😞"; // 絵文字を追加
    } else if (value <= 2) {
      output.innerHTML = "😐";
    } else if (value <= 3) {
      output.innerHTML = "😊";
    } else if (value <= 4) {
      output.innerHTML = "😄";
    } else {
      output.innerHTML = "😁";
    }
    
    // スライダーの値に応じて色を変更
    const hue = (value / 5) * 120; // HSLの色相を計算
    slider.style.background = `hsl(${hue}, 100%, 50%)`;
  });
    </script>
@endsection