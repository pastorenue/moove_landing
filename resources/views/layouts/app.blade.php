<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'First App')}}</title>

        <!-- Fonts -->
    </head>
</html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Cover Template · Bootstrap</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.3/examples/cover/" rel="canonical">
    
        <style>
            body {
                background-image: url('{{asset('images/bg.png')}}');
                background-size: cover;
                background-repeat: no-repeat; 
                color: #fff;
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="cover.css" rel="stylesheet">
      </head>
      <body class="text-center">
        @include('inc.messages')
        <div class="cover-container outer d-flex w-100 h-100 p-3 mx-auto flex-column">
            @include('inc.header')
            @yield('content')
            @include('inc.footer')
        </div>

        <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Mar 31, 2019 15:37:25").getTime();
                
                // Update the count down every 1 second
                var x = setInterval(function() {
                
                  // Get todays date and time
                  var now = new Date().getTime();
                    
                  // Find the distance between now and the count down date
                  var distance = countDownDate - now;
                    
                  // Time calculations for days, hours, minutes and seconds
                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                  // Output the result in an element with id="demo"
                  document.getElementById("count_down").innerHTML = days + "d " + hours + "h "
                  + minutes + "m " + seconds + "s ";
                    
                  // If the count down is over, write some text 
                  if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("count_down").innerHTML = "EXPIRED";
                  }
                }, 1000);
                </script>
                
    </body>
</html>