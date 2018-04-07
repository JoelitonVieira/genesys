<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bem vindo ao destinatio</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                margin: 0;
                background-color: white;
                overflow-x: hidden;
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
            #box15{
                height: 110vh;
                color: black;
                background:white;
            }
            #box2{
                height: 25vh;
                background-color: #141414;
                color: black;
            }
            #box2 a{
                color: white;
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
                    <div id="logo" style="padding-top: 210px;">
                        <b style="font-size:100px;">destinat</b><b style="color:#36d56a;font-size:100px;">io</b>
                        <p style="font-size:18px;">Um jeito fácil para alocar salas</p>
                    </div>
                </div>
            </div>
        </div>


        <div id="box15">
            <center>
            <br>
            <i class="fas fa-angle-down" id="setab" style="font-size: 40px; color:#36d56a;"></i>
            <br><br><br>

            <h2 style="font-size:40px;">Ferramenta para ajudar você a realizar <b style="color:#26b454; ">alocações!</b></h2>

            
            <br><hr style="width: 900px;"><br><br><br><br>

            <div class="row">

              <div class="col-sm-4">
                  <i class="far fa-calendar-check" style="font-size: 100px; color:#26b454;"></i>
                  <br><br><br>
                  <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
              </div>

              <div class="col-sm-4">
                  <i class="far fa-calendar-check" style="font-size: 100px; color:#26b454;"></i>
                  <br><br><br>
                  <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
              </div>

              <div class="col-sm-4">
                  <i class="far fa-calendar-check" style="font-size: 100px; color:#26b454;"></i>
                  <br><br><br>
                  <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
              </div>

            </div>
            </center>
        </div>


        <div id="box2">
            <center>
            <br><br>
             <b style="color:white; border-bottom: 2px solid #26b454;">EQUIPE GENE</b><b style="color:#26b454;">SYS</b>
             <br><br><br>
                        <div class="links">
                            <a href="https://github.com/Acetona19" target="_blank"><i class="fab fa-github" style="color:#26b454;"></i>  Caio</a>
                            <a href="https://github.com/JoelitonVieira" target="_blank"><i class="fab fa-github" style="color:#26b454;"></i>  Joeliton</a>
                            <a href="https://github.com/trndd" target="_blank"><i class="fab fa-github" style="color:#26b454;"></i>  Matheus</a>
                            <a href="#" target="_blank"><i class="fab fa-github" style="color:#26b454;"></i>  Patrick</a>
                            <a href="#" target="_blank"><i class="fab fa-github" style="color:#26b454;"></i>  Vitor</a>
                        </div>
            </center>
       </div>       
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/demo/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </body>
</html>
