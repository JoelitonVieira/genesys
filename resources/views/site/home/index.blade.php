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
                background-image: url(https://imgur.com/6eGkecq.png);
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
                height: 100vh;
                color: black;
                background-image: url(https://imgur.com/W2e9d7h.png);
                background-size: cover;
            }
            #box2{
                height: 40vh;
                background-color: #141414;
                color: black;
            }

            #box3{
                height: 90vh;
                background-color: #fdfdfd;
                border-bottom: 4px solid black;
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
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">

            //SCRIPT INFORMAÇÕES

             $(document).scroll(function(){
                if(window.scrollY > $('#box15').offset().top - window.innerHeight) {
                    document.getElementById("infos").style.opacity = 1;
                    document.getElementById("icone1").style.fontSize = "100px";
                    document.getElementById("icone2").style.fontSize = "100px";
                    document.getElementById("icone3").style.fontSize = "100px";
                    document.getElementById("icone1").style.transition = "2s";
                    document.getElementById("icone2").style.transition = "2s";
                    document.getElementById("icone3").style.transition = "2s";
                    document.getElementById("infos").style.transition = "2s";

                    document.getElementById("hrbox15").style.width = "900px";
                    document.getElementById("hrbox15").style.transition = "3s";

                    document.getElementById("titulobox15").style.fontSize = "40px";
                    document.getElementById("titulobox15").style.transition = "1.5s";



                }else{

                }
                if(window.scrollY > $('#box2').offset().top - window.innerHeight/2) {
                    document.getElementById("titulobox2").style.fontSize = "40px";
                    document.getElementById("titulobox2").style.transition = "1.5s";

                }
            });


             //SCRIPT CONTATOS

             // FUNÇÕES PARA AUMENTAR
        function caio(){
            mostarIcones();
            document.getElementById("linome").innerHTML = "Caio Vinicius";
            document.getElementById("liemail").innerHTML = "caio@gmail.com";
            document.getElementById("ligit").innerHTML = "<a href='https://github.com/Acetona19' target='_blank'>Acetona19</a>";

            document.getElementById("imgCaio").style.width = "120px";
            document.getElementById("imgCaio").style.transition = "0.5s";
            document.getElementById("imgCaio").src = "https://imgur.com/zR3g2Ox.gif";

            document.getElementById("imgCaio").style.filter = "grayscale(0%)";

            padraoJoeliton();
            padraoMatheus();
            padraoPatrick();
            padraoVitor();

        }

        function joe(){
            mostarIcones();
            document.getElementById("linome").innerHTML = "Joeliton Vieira";
            document.getElementById("liemail").innerHTML = "joelitonmatos@gmail.com";
            document.getElementById("ligit").innerHTML = "<a href='https://github.com/JoelitonVieira' target='_blank'>JoelitonVieira</a>";

            document.getElementById("imgJoeliton").style.width = "120px";
            document.getElementById("imgJoeliton").style.transition = "0.5s";
            document.getElementById("imgJoeliton").src = "https://imgur.com/dBHPUpx.gif";

            document.getElementById("imgJoeliton").style.filter = "grayscale(0%)";

            padraoCaio();
            padraoMatheus();
            padraoPatrick();
            padraoVitor();

        }

        function mat(){
            mostarIcones();
            document.getElementById("linome").innerHTML = "Matheus Trindade";
            document.getElementById("liemail").innerHTML = "trindadematheus27@gmail.com";
            document.getElementById("ligit").innerHTML = "<a href='https://github.com/trndd' target='_blank'>trndd</a>";

            document.getElementById("imgMatheus").style.width = "120px";
            document.getElementById("imgMatheus").style.transition = "0.5s";
            document.getElementById("imgMatheus").src = "https://imgur.com/WCMFRAb.gif";

            document.getElementById("imgMatheus").style.filter = "grayscale(0%)";

            padraoCaio();
            padraoJoeliton();
            padraoPatrick();
            padraoVitor();

        }

        function pat(){
            mostarIcones();
            document.getElementById("linome").innerHTML = "Patrick Vinícius";
            document.getElementById("liemail").innerHTML = "patrickvinicius1998@hotmail.com";
            document.getElementById("ligit").innerHTML = "<a href='https://github.com/patrickgenesis' target='_blank'>patrickgenesis</a>";

            document.getElementById("imgPatrick").style.width = "120px";
            document.getElementById("imgPatrick").style.transition = "0.5s";
            document.getElementById("imgPatrick").src = "https://imgur.com/aG1qytn.gif";

            document.getElementById("imgPatrick").style.filter = "grayscale(0%)";

            padraoCaio();
            padraoJoeliton();
            padraoMatheus();
            padraoVitor();

        }

        function vit(){
            mostarIcones();
            document.getElementById("linome").innerHTML = "Vitor Mota";
            document.getElementById("liemail").innerHTML = "vitorsenai2017@gmail.com";
            document.getElementById("ligit").innerHTML = "<a href='https://github.com/smk-py' target='_blank'>smk-py</a>";

            document.getElementById("imgVitor").style.width = "120px";
            document.getElementById("imgVitor").style.transition = "0.5s";
            document.getElementById("imgVitor").src = "https://imgur.com/o72hlMg.gif";

            document.getElementById("imgVitor").style.filter = "grayscale(0%)";

            padraoCaio();
            padraoJoeliton();
            padraoMatheus();
            padraoPatrick();

        }
    //FUNÇÕES INTERNAS - Só estão sendo utilizadas dentro do script

        function mostarIcones(){
            document.getElementById("icon1").style.opacity = "1";
            document.getElementById("icon2").style.opacity = "1";
            document.getElementById("icon3").style.opacity = "1";
        }
        function padraoCaio(){

            document.getElementById("imgCaio").style.width = "100px";
            document.getElementById("imgCaio").style.transition = "0.5s";
            document.getElementById("imgCaio").style.filter = "grayscale(100%)";
            document.getElementById("imgCaio").src = "https://imgur.com/mDMZEQH.png";
        }

        function padraoJoeliton(){

            document.getElementById("imgJoeliton").style.width = "100px";
            document.getElementById("imgJoeliton").style.transition = "0.5s";
            document.getElementById("imgJoeliton").style.filter = "grayscale(100%)";
            document.getElementById("imgJoeliton").src = "https://imgur.com/RMHYbI1.png";
        }

        function padraoMatheus(){

            document.getElementById("imgMatheus").style.width = "100px";
            document.getElementById("imgMatheus").style.transition = "0.5s";
            document.getElementById("imgMatheus").style.filter = "grayscale(100%)";
            document.getElementById("imgMatheus").src = "https://imgur.com/Kzh0MDN.png";
        }

        function padraoPatrick(){

            document.getElementById("imgPatrick").style.width = "100px";
            document.getElementById("imgPatrick").style.transition = "0.5s";
            document.getElementById("imgPatrick").style.filter = "grayscale(100%)";
            document.getElementById("imgPatrick").src = "https://imgur.com/f9I96SR.png"; 

        }

        function padraoVitor(){

            document.getElementById("imgVitor").style.width = "100px";
            document.getElementById("imgVitor").style.transition = "0.5s";
            document.getElementById("imgVitor").style.filter = "grayscale(100%)";
            document.getElementById("imgVitor").src = "https://imgur.com/XLrW4ir.png"; 

        }

        $("#gifdiv").click(function () {
            if ($(this).find("img").attr("data-state") == "static") {
              $(this).find("img").attr("src", "animatedgif.gif");
            } else {
              $(this).find("img").attr("src", "staticgif.jpg");
            }
          });
        </script>
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
                    <div id="logo" style="padding-top: 100px;">
                        <img src="https://imgur.com/KJ6hAaS.png" style="width: 220px;margin-bottom: 0px;"><br>
                        <b style="font-size:40px;margin-top: 0px;">destinat</b><b style="color:#36d56a;font-size:40px;">io</b>
                    </div>
                </div>
            </div>
        </div>


        <div id="box15">
            <center>
            <br>
            <i class="fas fa-angle-down" id="setab" style="font-size: 40px; color:#36d56a;"></i>
            <br><br><br>
            <h2 style="font-size:20px;color:black; " id="titulobox15">Um jeito <span style="border-bottom: 4px solid #36d56a;">fácil </span> de Alocar <b style="color:#26b454; ">Salas!</b></h2>
            <br><hr style="width: 0px;" id="hrbox15"><br><br>

            <div class="row" id="infos" style="opacity: 0;">

              <div class="col-sm-4">
                  <i class="far fa-calendar-check" id="icone1" style="font-size: 0px; color:#26b454;"></i>
                  <br><br>
                  <p>Este sistema possui sistema para cadastro de professor, sala e disciplina.</p>
              </div>

              <div class="col-sm-4">
                  <i class="far fa-edit" id="icone2" style="font-size: 0px; color:#26b454;"></i>
                  <br><br>
                  <p>Mesmo após realizada a alocação<br> a mesma pode ser editada.</p>
              </div>

              <div class="col-sm-4">
                  <i class="far fa-file" id="icone3" style="font-size: 0px; color:#26b454;"></i>
                  <br><br>
                  <p>O destinatio gera um relatório contendo todas as informações da alocação.</p>
              </div>

            </div>
            </center>
        </div>
      -->

        <div id="box2">
            <br><br><br><br>
            <center>
            <h2 style="font-size:20px;color:white; " id="titulobox2">Ferramenta para <span style="border-bottom: 4px solid #36d56a;">ajudar</span> você a realizar <b style="color:#26b454; ">alocações!</b></h2>
        </center>
        </div>

        <div id="box3">
            <br><br><br>
                    <center>
            <h1><b>EQUIPE GENE<b style="color:#36d56a">SYS</b></b></h1>
            <h4>Passe o mouse sobre o avatar para ver as informações</h4><br><br>
            <img src="https://imgur.com/mDMZEQH.png" style="width: 100px;margin-right: 30px;filter: grayscale(100%);" id="imgCaio" onmouseover="caio()">
            <img src="https://imgur.com/RMHYbI1.png" style="width: 100px;margin-right: 30px;filter: grayscale(100%);" id="imgJoeliton" onmouseover="joe()">
            <img src="https://imgur.com/Kzh0MDN.png" style="width: 100px;margin-right: 30px;filter: grayscale(100%);" id="imgMatheus" onmouseover="mat()">
            <img src="https://imgur.com/f9I96SR.png" style="width: 100px;margin-right: 30px;filter: grayscale(100%);" id="imgPatrick" onmouseover="pat()">
            <img src="https://imgur.com/XLrW4ir.png" style="width: 100px;margin-right: 30px;filter: grayscale(100%);" id="imgVitor"onmouseover="vit()">

        </center>

        <br><br>
            <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-8">
                <ul class="list-group" style="padding:0px 200px 0px 200px; color:black;font-size:20px;">
                  <li class="list-group-item"  style="border-color: transparent;background-color: transparent;"><i class="fas fa-user" style="color:#36d56a; opacity: 0;" id="icon1"></i>&nbsp&nbsp<b id="linome"></b></li>
                  <li class="list-group-item"  style="border-color: transparent;background-color: transparent;"><i class="fas fa-envelope" style="color:#36d56a; opacity: 0;" id="icon2"></i>&nbsp&nbsp<b id="liemail"></b></li>
                  <li class="list-group-item" style="border-color: transparent;background-color: transparent;"><i class="fab fa-github" style="color:#36d56a; opacity: 0;" id="icon3"></i>&nbsp&nbsp<b id="ligit"></b></li>
                </ul>
              </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/demo/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </body>
</html>
