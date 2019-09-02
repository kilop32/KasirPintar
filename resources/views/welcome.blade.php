<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
                        <a href="" data-toggle="modal" data-target="#myModal">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('registerform') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login Menu</h4>
                    </div>
                    <div class="modal-body">
                        <p>Login Sebagai </p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('loginform',['roles' => 'owner'])}}"><button type="button" class="btn btn-default" data-dismiss="modal">Owner</button></a>
                        <a href="{{route('loginform',['roles' => 'admin'])}}"><button type="button" class="btn btn-default" data-dismiss="modal">Admin</button></a>
                        <a href="{{route('loginform',['roles' => 'staff'])}}"><button type="button" class="btn btn-default" data-dismiss="modal">Staff</button></a>
                    </div>
                    </div>

                </div>
            </div>    
            <div class="content">
                <div class="title m-b-md">
                    Kasir Pintar
                    
                </div>
                <h3>Selamat Datang Di Kasir Pintar</h3>    
            </div>
        </div>
    </body>
</html>
