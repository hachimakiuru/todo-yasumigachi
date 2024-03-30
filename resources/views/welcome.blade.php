<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    

        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        
    </head>
    <body>
    <div class="antialiased">
        
        <div class="main-box">
            <h1>welcome</h1>

             <div class="btn-box-aa">         
                <a href="{{ route('login') }}" class="btn">Log in</a>
                <a href="{{ route('register') }}" class="btn">Register</a>  
            </div>
            <form action="">

               {{-- <div class="input-box">
                <span class="icon"><i class='bx bxs-envelope'></i></span>
                <input type="email" required>
                <label>Email</label>
               </div> --}}

               {{-- <div class="input-box">
                <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                <input type="password" required>
                <label>Password</label>
                </div> --}}

            {{-- <div class="check">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forget Password</a>
            </div> --}}

            {{-- <button type="submit" class="btn">
                <a href="{{ route('login') }}" class="btn">Log in</a>
                <a href="{{ route('login') }}" class="btn">Log in</a>

            </button> --}}
            {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth 
                     <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a> 
                @else 
                    <a href="{{ route('login') }}" class="btn">Log in</a>

                     @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="register-link">Register</a>
                    @endif
                @endauth 
            </div>

            <div class="register">
                <p>Don't have an account?
                    @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register-link">Register</a>
                        @endif
                </p> --}}
            </div>

            {{-- <div class="btn-box">         
                <a href="{{ route('login') }}" class="btn">Log in</a>
                <a href="{{ route('register') }}" class="btn">Register</a>  
            </div> --}}
        </form>    
        </div>

        {{-- <div class="class-login">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register-link">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            </div>
        </div> --}}
    </body>
</html>