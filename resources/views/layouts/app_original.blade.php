<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>

{{-- https://remixicon.com/ --}}
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"rel="stylesheet"/>
{{-- boxsicons --}}
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">





  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <script src="{{ asset('js/app_ori.js') }}"></script>

</head>
 
{{-- headerは使わない継承機能 --}}

  @yield('content')
  <footer>
    <div class="footer-container">

      <a id="sbj" href="{{ route('posts.index') }}"><i  class="ri-add-box-line"></i><span class="haru" >  投稿  </span></a>
      <a id="sbj" href="{{ route('home') }}"><i class="ri-file-list-line"></i><span class="haru" >To Do</span></a>

       <div class="dropdown nav">
            <a class="dropdown-item" href="" onclick="confirmLogout(event)">
                <img src="{{ asset('storage/images/' . Auth::user()->avatar) }}" class="d-block rounded-circle"   width="30" height="30" id="dropdownMenuLink" onclick="toggleDropdown()" style="cursor: pointer;">  
                <span class="logout" >Signout</span>
           </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" >
          @csrf
        </form>

    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
