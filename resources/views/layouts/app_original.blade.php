

<style>



header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #A39292;
    padding: 20px 40px;
    position: fixed;
    /* top: 0;
    left: 0;
    right: 0; */
    width: 100%;
    z-index: 1000;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.logo{
    height: 36px;
}

.nav{
    display: flex;
}

.nav > li > a {
    color: #333;
    font-size: 20px;
    margin-left: 20px;
    text-decoration: none;
}

footer{
    background-color: #A39292;
    color: #333;
    text-align: center;
    font-size: 20px;
    padding: 20px 40px;
    height: 64px;
    /* position: fixed;
    bottom: 0;
    left: 0;
    right: 0; */
    width: 100%;
    z-index: 1000;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
   border-bottom-left-radius: 10px;
   border-bottom-right-radius: 10px;
}

.nav-color{
  background-color:rgb(62,45,34);
}

.btn-primary{
  background-color:rgb(62,45,34);
  border-color:rgb(62,45,34);
}

.btn-danger{
  background-color: rgb(106,64,33);
  border-color: rgb(106,64,33);
}



.footer-container{
  display: flex;
  justify-content: space-evenly;
  align-items: center;
}

a{
  color: black;
}

.ri-add-box-line {
  font-size: xx-large;
}

.ri-file-list-line{
  font-size: xx-large;
}

 .ri-play-list-add-line{
  font-size: xx-large;
}

/* index.blade.php */
.card-header{
  display: flex;
  justify-content: space-between;
}
/* index.blade.php */

</style>


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
</head>
<body>
  {{-- <header>

 
    </div>
    <div class="header-left">
        </div>
        <div class="header-right">
        <div class="dropdown nav">
          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <li><a class="dropdown-item" href="{{ route('register') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Register') }}</a></li>
          </ul>

          <img src="{{asset('storage/images/'.Auth::User()->avatar)}}" class="d-block rounded-circle mb-3">
          
        </div>
        </div>
  </header> --}}
  @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
<footer>
  <div class="footer-container">
    <a href="{{ route('posts.index') }}"><i class="ri-add-box-line"></i></a>
   <a href="{{ route('home') }}"><i class="ri-file-list-line"></i></a>
    <a href=""><i class="ri-play-list-add-line"></i></a>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>
