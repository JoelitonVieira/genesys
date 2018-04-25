<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disciplina;
use App\DiasdeChoques_Sala;
use Illuminate\Support\Facades\Auth;

class RelatorioController extends Controller
{
  public function index()
  {
    if ( sizeof( Auth::user()->diasdechoques_sala()->get() ) > 0 ) { //Verificando se existe alguma alocação
      $disciplinas = Auth::user()->disciplina()->orderBy('turno','asc')->get();
      $diasDeChoques_Salas = Auth::user()->diasdechoques_sala()->get();//Variável que contém os dias de choque de cada disciplina, a sala alocada e a quantidade de choques total
      $dias;//Variável que contém os dias das disciplinas em formato de array
      $diasChoques;//Variável que contém os dias de choque em formato de array
      $diasFinal;//Variável que contém os dias das disciplinas com os dias em choque em vermelho
      $numDisciplinas = sizeof ( $disciplinas );

      for ( $i = 0; $i < $numDisciplinas; $i++) {
        if ( $disciplinas[$i]->dia->seg == 1 ) {
          $dias[$i][] = "Seg";
        }
        if ( $disciplinas[$i]->dia->ter == 1 ) {
          $dias[$i][] = "Ter";
        }
        if ( $disciplinas[$i]->dia->quar == 1 ) {
          $dias[$i][] = "Quar";
        }
        if ( $disciplinas[$i]->dia->quin == 1 ) {
          $dias[$i][] = "Quin";
        }
        if ( $disciplinas[$i]->dia->sex == 1 ) {
          $dias[$i][] = "Sex";
        }
        if ( $disciplinas[$i]->dia->sab == 1 ) {
          $dias[$i][] = "Sáb";
        }
        if ( $diasDeChoques_Salas[$i]->seg == 1 ) {
          $diasChoques[$i][] = "Seg";
        }
        if ( $diasDeChoques_Salas[$i]->ter == 1 ) {
          $diasChoques[$i][] = "Ter";
        }
        if ( $diasDeChoques_Salas[$i]->quar == 1 ) {
          $diasChoques[$i][] = "Quar";
        }
        if ( $diasDeChoques_Salas[$i]->quin == 1 ) {
          $diasChoques[$i][] = "Quin";
        }
        if ( $diasDeChoques_Salas[$i]->sex == 1 ) {
          $diasChoques[$i][] = "Sex";
        }
        if ( $diasDeChoques_Salas[$i]->sab == 1 ) {
          $diasChoques[$i][] = "Sáb";
        }
      }
      for ( $i = 0; $i < $numDisciplinas; $i++) {//Percorrendo todas as disciplinas
        if ( isset( $diasChoques[$i] ) ) {//Verificando se existe dias de choque para a disciplina
          $diasChocando = array_intersect( $dias[$i] , $diasChoques[$i] );//Criando array com esses dias de choques
        }else {
          $diasChocando = NULL;
        }
        $diasFinal[$i] = '';//Inicializando variável
        for ( $j = 0 ; $j < count ( $dias[$i] ) ; $j++) {//Percorrendo todos os dias de uma determinada disciplina
  				if ( isset ( $diasChocando[$j] ) ) {//Caso exista dias chocando, coloca esse dia em vermelho
  					$diasFinal[$i] .= '<span style="color:red"><b>'.$dias[$i][$j].'</b></span> ';
  				}else{
  					$diasFinal[$i] .= ''.$dias[$i][$j].' ';
  				}
  			}
      }
      return view('admin.relatorio.index', compact('diasDeChoques_Salas', 'diasFinal', 'disciplinas') );

    } else {
      $message = "Ops! Você precisa gerar alguma alocação para poder visualizar o relatório!";
      return view('admin.relatorio.index', compact('message'));
    }
  }
}
