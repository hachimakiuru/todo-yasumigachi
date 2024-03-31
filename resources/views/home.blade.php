@extends('layouts.app_original')

@section('content')

<link href="{{ asset('css/home.css') }}" rel="stylesheet">


    <div class="container">
    <div class="calender1">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 20V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2zM9 18H7v-2h2v2zm0-4H7v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm2-5H5V7h14v2z"/></svg>
        <h4>日付</h4>
    </div>

        <div class="calendar2">
            <h4>{{ 'トレーニング日' }}</h4>
            <span>
                {{ date('Y年m月d日') }}
                {{ now()->format('Y年m月d日') }}
            </span>
        </div>
    
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"/></svg>
        <div class="set-container">
            <h4>{{ '種目' }}</h4>
            <ul>
                <li>set1</li>
                <li>kg</li>
                <li>reps</li>
            </ul>
        </div>
    </div>


@endsection

</main>
</div>
</body>
</html>