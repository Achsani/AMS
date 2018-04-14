<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hasil Pencarian</title>
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            #uc {
                text-align: : center;
                margin-top: 19%; 
            }

            #iUC {
                text-align: : center;
                color: white;
                background: grey;
                font-size: 24px; 
            }

            #pUC {
                text-align: : center; 
                color: black;
                font-size: 28px; 
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div id="uc" align="center">
                    <form action="/AMS/public/index">
                        <p id="pUC">{{$uniqueCode}}</p>
                        <!-- <input id="iUC" type="button" class="btn" value="Back to Form" onclick="window.location.href='index'" />-->
                        <input type="submit" class ="btn" value="Back to Form">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
