<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bem vindo ao Genesys</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /*background: linear-gradient(to bottom right, #26b354, #42e778);*/
                background-image: url(https://imgur.com/xOK3bLN.png);
                background-size: cover;
                color: white;
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
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
                color: white;
                padding: 0 25px;
                font-size: 12px;
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
                        <a href="{{ route('login') }}">> Acessar o Sistema < </a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <b > Alocação de Salas</b>
                </div>
                    <p>GENESYS</p>  
                    <div class="links">
                    <a href="https://github.com/Acetona19" target="_blank">Caio</a>
                    <a href="https://github.com/JoelitonVieira" target="_blank">Joeliton</a>
                    <a href="https://github.com/trndd" target="_blank">Matheus</a>
                    <a href="#" target="_blank">Patrick</a>
                    <a href="#" target="_blank">Vitor</a>
                </div>            
            </div>

             
        </div>
    </body>
</html>
