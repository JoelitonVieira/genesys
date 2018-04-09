@extends('adminlte::page')

@section('title', 'Contato')

@section('content_header')

@stop

@section('content')




<center> 
	<h1><b>EQUIPE GENE<b style="color:#36d56a">SYS</b></b></h1>
	<h4>Passe o mouse sobre o avatare para ver as informações</h4><br><br>
  	<img src="https://imgur.com/vb95fCX.png" style="width: 100px;margin-right: 30px;filter: grayscale(100%);" id="imgCaio" onmouseover="caio()" onmouseout="padrao()">
  	<img src="https://imgur.com/VPSgF5v.png" style="width: 100px;margin-right: 30px;filter: grayscale(100%);" id="imgJoeliton" onmouseover="joe()" onmouseout="padrao()">
  	<img src="https://imgur.com/pqOEUEg.png" style="width: 100px;margin-right: 30px;filter: grayscale(100%);" id="imgMatheus" onmouseover="mat()" onmouseout="padrao()">
  	<img src="https://imgur.com/NChrp5e.png" style="width: 100px;margin-right: 30px;filter: grayscale(100%);" id="imgPatrick" onmouseover="pat()" onmouseout="padrao()">
  	<img src="https://imgur.com/9Ay95YJ.png" style="width: 100px;margin-right: 30px;filter: grayscale(100%);" id="imgVitor"onmouseover="vit()" onmouseout="padrao()">

</center>  

<br><br>
	<div class="row">
	  <div class="col-sm-2"></div>
	  <div class="col-sm-10">
	  	<ul class="list-group" style="padding:0px 200px 0px 200px; color:black;font-size:20px;">
		  <li class="list-group-item"  style="border-color: transparent;background-color: transparent;"><i class="fas fa-user" style="color:#36d56a;"></i>&nbsp&nbsp<b id="linome"></b></li>
		  <li class="list-group-item"  style="border-color: transparent;background-color: transparent;"><i class="fas fa-envelope" style="color:#36d56a;"></i>&nbsp&nbsp<b id="liemail"></b></li>
		  <li class="list-group-item" style="border-color: transparent;background-color: transparent;"><i class="fab fa-github" style="color:#36d56a;"></i>&nbsp&nbsp<b id="ligit"></b></li>
		</ul>
	  </div>
	</div>
  	

@stop

@section('js')
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<script>
		function padrao(){

			document.getElementById("imgCaio").style.width = "100px";
			document.getElementById("imgCaio").style.transition = "0.5s";
			document.getElementById("imgCaio").style.filter = "grayscale(100%)"; 

			document.getElementById("imgJoeliton").style.width = "100px";
			document.getElementById("imgJoeliton").style.transition = "0.5s";
			document.getElementById("imgJoeliton").style.filter = "grayscale(100%)"; 

			document.getElementById("imgMatheus").style.width = "100px";
			document.getElementById("imgMatheus").style.transition = "0.5s";
			document.getElementById("imgMatheus").style.filter = "grayscale(100%)"; 

			document.getElementById("imgPatrick").style.width = "100px";
			document.getElementById("imgPatrick").style.transition = "0.5s";
			document.getElementById("imgPatrick").style.filter = "grayscale(100%)"; 

			document.getElementById("imgVitor").style.width = "100px";
			document.getElementById("imgVitor").style.transition = "0.5s";
			document.getElementById("imgVitor").style.filter = "grayscale(100%)"; 
		}

		// FUNÇÕES PARA AUMENTAR

		function caio(){
			document.getElementById("linome").innerHTML = "Caio Vinicius";
			document.getElementById("liemail").innerHTML = "caio@gmail.com";
			document.getElementById("ligit").innerHTML = "<a href='https://github.com/Acetona19' target='_blank'>Acetona19</a>";	

			document.getElementById("imgCaio").style.width = "120px";
			document.getElementById("imgCaio").style.transition = "0.5s";

			document.getElementById("imgCaio").style.filter = "grayscale(0%)"; 
		}

		function joe(){
			document.getElementById("linome").innerHTML = "Joeliton Vieira";
			document.getElementById("liemail").innerHTML = "joelitonmatos@gmail.com";
			document.getElementById("ligit").innerHTML = "<a href='https://github.com/JoelitonVieira' target='_blank'>JoelitonVieira</a>";	

			document.getElementById("imgJoeliton").style.width = "120px";
			document.getElementById("imgJoeliton").style.transition = "0.5s";

			document.getElementById("imgJoeliton").style.filter = "grayscale(0%)"; 
		}

		function mat(){
			document.getElementById("linome").innerHTML = "Matheus Trindade";
			document.getElementById("liemail").innerHTML = "trindadematheus27@gmail.com";
			document.getElementById("ligit").innerHTML = "<a href='https://github.com/trndd' target='_blank'>trndd</a>";		

			document.getElementById("imgMatheus").style.width = "120px";
			document.getElementById("imgMatheus").style.transition = "0.5s";

			document.getElementById("imgMatheus").style.filter = "grayscale(0%)"; 
		}

		function pat(){
			document.getElementById("linome").innerHTML = "Patrick Vinícius";
			document.getElementById("liemail").innerHTML = "patrickvinicius1998@hotmail.com";
			document.getElementById("ligit").innerHTML = "<a href='https://github.com/patrickgenesis' target='_blank'>patrickgenesis</a>";	

			document.getElementById("imgPatrick").style.width = "120px";
			document.getElementById("imgPatrick").style.transition = "0.5s";

			document.getElementById("imgPatrick").style.filter = "grayscale(0%)"; 
		}

		function vit(){
			document.getElementById("linome").innerHTML = "Vitor Mota";
			document.getElementById("liemail").innerHTML = "vitorsenai2017@gmail.com";
			document.getElementById("ligit").innerHTML = "<a href='https://github.com/smk-py' target='_blank'>smk-py</a>";

			document.getElementById("imgVitor").style.width = "120px";
			document.getElementById("imgVitor").style.transition = "0.5s";

			document.getElementById("imgVitor").style.filter = "grayscale(0%)"; 
		}
	</script>
@stop
