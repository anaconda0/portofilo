<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css')  }}">
</head>
<body>
<header class="fixed-top text-end px-5">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-white text-decoration-none ">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-white me-3 text-decoration-none ">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white text-decoration-none ">Register</a>
                @endif
            @endauth
        </div>
    @endif
</header>
<div class="wrapper">
    <div class="leftSide shadow rounded-4">
        <img src="{{ asset('img/man5_big.jpg') }}" class="img-fluid" alt="">
        <div class="bottomPart text-center">
            <h2>Ryan Adlard</h2>
            <p id="demo"></p>

        </div>

    </div>
    <div class="rightSide">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
    var i = 0;
    var txt = 'Web Designer'; /* The text */
    var speed = 50; /* The speed/duration of the effect in milliseconds */

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("demo").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }

    typeWriter()
</script>
@yield('scripts')
</body>
</html>
