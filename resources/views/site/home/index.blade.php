<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bem vindo ao Genesys</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                margin: 0;
                background-color: white;
            }
            #box1{
                height: 85vh;
                color: white;
                background:#1a1a1a;
                background-image: url(https://imgur.com/d91zm7f.png);
                background-size: cover;
            }
            #box1 a{
                color: white;

            }
            #box1 a:hover{
                border-bottom: 2px solid #36d56a;
                transition: 0.5s;
                padding-bottom: 8px;
            }
            #box2{
                height: 10vh;
                background-color: transparent;
                color: black;
            }
            #box2 a{
                color: black;
            }
            #box2 a:hover{
                border-bottom: 2px solid #36d56a;
                transition: 0.5s;
                padding-bottom: 8px;
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
            #particles-js{
                position: absolute;
                width: 90%;
                height: 90%;
            }

        </style>

    </head>
    <body>

    <div id="particles-js"></div>
    <center>
        <div id="box1">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">> Acessar o Sistema < </a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <br><br>
                    <b> Alocação de </b><b style="color:#36d56a;">Salas</b>
                </div>
            </div>
        </div>

        <div id="box2">
             <p><b>EQUIPE GENE</b><b style="color:#26b454;">SYS</b></p>
                        <div class="links">
                            <a href="https://github.com/Acetona19" target="_blank"><i class="fab fa-github"></i>  Caio</a>
                            <a href="https://github.com/JoelitonVieira" target="_blank"><i class="fab fa-github"></i>  Joeliton</a>
                            <a href="https://github.com/trndd" target="_blank"><i class="fab fa-github"></i>  Matheus</a>
                            <a href="#" target="_blank"><i class="fab fa-github"></i>  Patrick</a>
                            <a href="#" target="_blank"><i class="fab fa-github"></i>  Vitor</a>
                        </div>
       </div>
    </center>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/demo/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </body>
</html>
