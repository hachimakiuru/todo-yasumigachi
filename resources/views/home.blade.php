@extends('layouts.app_original')

@section('content')

<style>
body{
  background-color: blue
}
  
  .container{
    max-width: 100%;
    height: 100%;
    

}

.calender1{
    display: flex; /*横並び*/
    justify-content: center;
    margin-top: 55px;
}

.calendar2{
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
    margin-bottom: 210px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
   border-bottom-right-radius: 10px;
}

.calendar2 > * {
    margin: 5px 0;
}


.set-container{
  background-color: yellow
}

.set-container2{
  display: flex;
  justify-content: space-between;
  flex-direction: row;
}

</style>
<link href="{{ asset('css/home.css') }}" rel="stylesheet">


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

           {{-- post --}}
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"/></svg>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalstore">
                post
      </button>

         <div class="set-container">
            <div class="set-container2">
              @foreach ($records as $record)
              <h4>種目:{{ $record->title }}</h4>
                <ul>
                    <li>set1: {{ $record->set }}</li>
                    <li>kg: {{ $record->kg }}</li>
                    <li>reps: {{ $record->reps }}</li>
                </ul>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $record->id }}">
                  edit
                </button>
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
      
      

      
@endsection