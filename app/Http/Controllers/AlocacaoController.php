<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Alocacao\Grade;
use App\Http\Controllers\Alocacao\Materia;
use App\Http\Controllers\Alocacao\Sala;
use App\Http\Controllers\Alocacao\SalaManager;
use App\Http\Controllers\Alocacao\MateriaManager;
use App\Sala as Sala1;
use App\Disciplina as Materia1;
use App\DiasdeChoques_Sala;


class AlocacaoController extends Controller
{

  public function gerar()
  {
    if ( sizeof( Materia1::get() ) > 0 && sizeof( Sala1::get() ) > 0 ) { //Verificando se existe alguma sala ou disciplina
      $disciplinas = Materia1::orderBy('turno','asc')->get();
      foreach ($disciplinas as $disciplina) {
        $disciplina1 = new Materia($disciplina->nome,$disciplina->codigo,$disciplina->professor,$disciplina->turma,$disciplina->hora,$disciplina->turno,$disciplina->dia->seg,$disciplina->dia->ter,$disciplina->dia->quar,$disciplina->dia->quin,$disciplina->dia->sex,$disciplina->dia->sab);
        MateriaManager::addMateria($disciplina1);
      }

      $salas = Sala1::get();
      foreach ($salas as $sala) {
        $sala1 = new Sala($sala->nome,$sala->tipo);
        SalaManager::addSala($sala1);
      }

      $temp = 1000;
      $refrigeracao = 0.003;

      $solucaoAtual = new Grade();
      $solucaoAtual->gerarIndividuo();

      $melhorSolucao = new Grade($solucaoAtual->gradeSalaAlocada);//Criando objeto para armazenar a melhor alocação encontrada, inicialmente será a solução atual

      while ( $temp > 1 ) {
        $novaSolucao = new Grade($solucaoAtual->gradeSalaAlocada);

        $posSala = mt_rand( 0 , SalaManager::numSalas() - 1 );
        $posMateria = mt_rand( 0 , MateriaManager::numMat() - 1 );

        $novaSolucao->gradeSalaAlocada[ $posMateria ] = SalaManager::$gradeSalas[ $posSala ];

        $energiaAtual = $solucaoAtual->choques();
        $energiaVizinha = $novaSolucao->choques();

        if ( $this->Probabilidade( $energiaAtual, $energiaVizinha, $temp) > mt_rand(0,1)) {
          $solucaoAtual = new Grade($novaSolucao->gradeSalaAlocada);
        }
        if ( $solucaoAtual->choques() < $melhorSolucao->choques() ) {
          $melhorSolucao = new Grade( $novaSolucao->gradeSalaAlocada );
        }

        $temp *= 1 - $refrigeracao;
      }
      for ( $i = 0 ; $i < sizeof( $melhorSolucao->gradeSalaAlocada ) ; $i++) {
        $choquesSalas = new DiasdeChoques_Sala();
        $choquesSalas->nome = $melhorSolucao->gradeSalaAlocada[$i]->__toString();
        if ( isset( $melhorSolucao->gradeChoques[$i] ) ) {
          foreach ($melhorSolucao->gradeChoques[$i] as $choque) {//
            if ($choque == "seg") { $choquesSalas->seg = 1; }
            elseif ( $choque == "ter" ) { $choquesSalas->ter = 1; }
            elseif ( $choque == "quar" ) { $choquesSalas->quar = 1; }
            elseif ( $choque == "quin" ) { $choquesSalas->quin = 1; }
            elseif ( $choque == "sex" ) { $choquesSalas->sex = 1; }
            elseif ( $choque == "sab" ) { $choquesSalas->sab = 1; }
          }
        }
        $choquesSalas->save();
      }

      $message = "Alocação gerada com sucesso!";
      return view('admin.alocacao.index', compact('melhorSolucao'));
    }else {
      $message = "Você precisa cadastrar pelo menos uma disciplina e uma sala antes de gerar alguma alocação!";
      return view('admin.alocacao.index', compact('message'));
    }
  }

  public function Probabilidade( $energiaAtual, $novaEnergia, $temperatura)//Método para calcular probabilidade de aceitação da solução encontrada
  {
    if ( $novaEnergia > $energiaAtual ) //Aceita a nova energia se ela for melhor
    {
      return 1.0;
    }
    return exp( ($energiaAtual - $novaEnergia) / $temperatura );
  }
}
