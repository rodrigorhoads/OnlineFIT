<?php

require_once("vendor/autoload.php");

use \Dompdf\Dompdf;
session_start();
if(isset($_SESSION['treinos']))
    $treinos = $_SESSION['treinos'];

if(isset($_SESSION['dietas']))
    $dietas = $_SESSION['dietas'];

$domPdf = new Dompdf();


$domPdf->loadHtml(gerarPdf($dietas,$treinos));

$domPdf->setPaper('A4','landscape');

$domPdf->render();

$domPdf->stream('OnlineFIT_DIETAETREINO.pdf',
    array("attachment"=>false));

function gerarPdf($dietas,$treinos){




    $html = '<table class="table">
    <tr>
        <td><p style="text-align: center;"><h1>OnlineFIT</h1></p></td>
    </tr>
    <tr>
        <td>
            Dieta
        </td>
    </tr>
    <tr>
        <td>
            <table class="table-responsive">';


    foreach ($dietas as $dieta){

                    $html = $html.'<tr><td>'.$dieta->getDia().'</td>';


                        $listaRefeicoes = $dieta->getRefeicoes();


                        foreach ($listaRefeicoes as $keyD=>$refeicao ) {

                            $html = $html.'<td>Hora : '.$refeicao->getHorario().'Refeição : '. $refeicao->getPrato().'</td>';

                        }

        $html = $html.'</tr>';
    }

    $html = $html.'</table></td></tr></table>';


    $html = $html.'<br><br><table class="table">
    <tr>
        <td>
            Treino
        </td>
    </tr>
    <tr>
        <td>
            <table class="table-responsive">';


    foreach ($treinos as $treino){

        $html = $html.'<tr><td>'.$treino->diaExercicio.'</td>';


        $listaExercicios = $treino->getExercicios();


        foreach ($listaExercicios as $keyD=>$exercicios ) {

            $html = $html.'<td>Exercicio : '.$exercicios->getNome().' Series : '. $exercicios->getSeries().' Repetições'.$exercicios->getNRepeticoes().'</td>';

        }

        $html = $html.'</tr>';
    }

    $html = $html.'</table></td></tr></table>';


    return $html;
}

?>

