<?php
require_once('./TreinoRepository.php');
require_once('./DietaRepository.php');
require_once('./Treino.php');
require_once('./Dieta.php');


$treinoRepository = new TreinoRepository();
$dietaRepository = new DietaRepository();
$treino = new Treino();
$dieta = new Dieta();

if (count($_POST) > 0) {

    if(isset( $_SESSION['falhou']))
        unset($_SESSION['falhou']);


//    print_r($_POST);
//    exit;

    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $imc = (int)$peso / ($altura * $altura);

    $situacao ="";


    if($imc < 18)
        $situacao= "Abaixo do peso";
    elseif ($imc > 18 && $imc < 25)
        $situacao =  "Peso normal";
    elseif( $imc > 24 && $imc < 30 )
        $situacao= "Sobrepeso";
    elseif($imc > 29 && $imc < 35 )
        $situacao =  "Obesidade";
    else
        $situacao = "Procure os cuidados de um médico especialista.";


    if (isset($_POST['definir'])) {

        $treinos = $treinoRepository->retornaTreino('definir',$situacao);
        $dieta = $dietaRepository->retornaDieta('definir',$situacao);

    } elseif (isset($_POST['ficaemforma'])) {

        $treinos = $treinoRepository->retornaTreino('ficaremforma',$situacao);

        $dieta = $dietaRepository->retornaDieta('ficaremforma',$situacao);

    }  else {
        $_SESSION['falhou'] = "Selecione um objetivo.";
        header('Location: /OnlineFIT');
    }

    $listRefeicoes = $dieta->getRefeicoes();


}

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <title>ONLINE FIT</title>
    <link rel="stylesheet" type="text/css" href="./dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./dist/icones/css/all.css">
    <link rel="stylesheet" type="text/css" href="./dist/estilo.css">
</head>
<body>

<header class="header">
    <div class="row mt-4">
        <div class="col-sm-2">
            <div style="width: 100%"></div>
        </div>
        <div class="offset-2 col-sm-6">
            <a href="index.php" style="text-decoration: none"><h1 class="txtlogo">OnlineFIT</h1></a>
        </div>
        <div class="col-sm-2 mt-2">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook icsocial"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter icsocial"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-google icsocial"></i></a></li>
            </ul>
        </div>
    </div>
</header>

<div class="row">
    <div class="slide offset-1   col-md-10">
        <div class="background_image" style="background-image: url('dist/img/pessoa relaxando.jpg')">
            <div class="row">
                <div class="offset-2">
                    <h1 class="txtFrase">Sáude é vida veja como está a sua.</h1>
                </div>

            </div>

        </div>
    </div>
</div>


<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Seu IMC é:<?php echo $imc?></h5>
                    <p class="card-text">Voce está:<?php echo $situacao?> </p>
                    <p class="card-text">
                        <small class="text-muted">Dica</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active"
                       id="home-tab" data-toggle="tab"
                       href="#home" role="tab"
                       aria-controls="home"
                       ria-selected="true">Treino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab"
                       data-toggle="tab" href="#dieta"
                       role="tab" aria-controls="profile"
                       aria-selected="false">Dieta</a>
                </li>

            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active"
                     id="home" role="tabpanel" aria-labelledby="home-tab">


                    <div class="row">
                        <div class="col-sm-12">

                            <ul class="nav nav-tabs" id="myTabTreino" role="tablist">

                                <?php foreach ($treinos as $treino){?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="<?php echo $treino->diaExercicio?>-tab"
                                           data-toggle="tab" href="#<?php echo $treino->diaExercicio?>"
                                           role="tab" aria-controls="<?php echo $treino->diaExercicio?>"
                                           aria-selected="false"><?php echo $treino->diaExercicio?></a>
                                    </li>
                                <?php }?>



                            </ul>
                            <div class="tab-content" id="myTabContentTreino">


                                <?php foreach ($treinos as $index=>$treino){

                                    if($index == 0){
                                        echo '<div class="tab-pane fade show active"
                                        id="'.$treino->diaExercicio.'"role="tabpanel" aria-labelledby="home-tab">';
                                    }else{
                                        echo '<div class="tab-pane fade show"
                                        id="'.$treino->diaExercicio.'" role="tabpanel" aria-labelledby="home-tab">';
                                    }
                                    ?>


                                    <div class="row">

                                        <?php
                                        $listaExercicios = $treino->getExercicios();

                                        ?>
                                        <?php foreach ($listaExercicios as $key=>$exercicios ) { ?>

                                                        <div class="card col-sm-4">
                                                            <div class="card-title">

                                                                <?php
                                                                echo "Exercicio : ".$key;?>

                                                            </div>

                                                            <img class="card-img-top" src="<?php echo $exercicios->fotoExercicio;?>"
                                                                 alt="Card image cap" style="max-height: 200px">
                                                            <div class="card-body">
                                                                <h4 class="card-title"><?php echo $exercicios->getNome();?></h4>
                                                                <h5 class="card-text">Grupo Muscular :<?php echo $exercicios->getGrupoMuscular();?></h5>
                                                                <h5 class="card-text">Duração :<?php echo $exercicios->getDuracao();?></h5>
                                                                <h5 class="card-text">Repetições: <?php echo $exercicios->getNRepeticoes() ?></h5>
                                                                <h5 class="card-text">Series: <?php echo $exercicios->getSeries() ?></h5>
                                                            <h5 class="card-text"><?php echo $treino->dicaTreino?></h5>
                                                            </div>
                                                        </div>

                                        <?php } ?>


                                    </div>

                                    <?php

                                    echo '</div>';} ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="dieta"
                     role="tabpanel"
                     aria-labelledby="dieta-tab">

                    <div class="row">
                        <div class="card col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title">Coma em intervalos regulares, evitando ficar muito tempo sem comer</h5>
                                <p class="card-text">Pequenas porções.</p>
                                <p class="card-text">
                                    <small class="text-muted">Dica</small>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <?php foreach ($listRefeicoes as $refeicao) { ?>

                            <div class="card col-sm-3 mt-1 mr-2">
                                <img class="card-img-top" src="<?php echo $refeicao['fotoRefeicao1'] ?>"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $refeicao['diaSemana'] ?></h4>
                                    <h5 class="card-title"><?php echo $refeicao['ref1'] ?></h5>
                                    <p class="card-text"> <?php echo $refeicao['ref1Prato'] ?>.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Dica</small>
                                    </p>
                                </div>
                            </div>

                            <div class="card col-sm-3  mt-1 mr-2">
                                <img class="card-img-top" src="<?php echo $refeicao['fotoRefeicao2'] ?>"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $refeicao['diaSemana'] ?></h4>
                                    <h5 class="card-title"><?php echo $refeicao['ref2'] ?></h5>
                                    <p class="card-text"> <?php echo $refeicao['ref2Prato'] ?>.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Dica</small>
                                    </p>
                                </div>
                            </div>

                            <div class="card col-sm-3  mt-1">
                                <img class="card-img-top" src="<?php echo $refeicao['fotoRefeicao3'] ?>"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $refeicao['diaSemana'] ?></h4>
                                    <h5 class="card-title"><?php echo $refeicao['ref3'] ?></h5>
                                    <p class="card-text"> <?php echo $refeicao['ref3Prato'] ?>.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Dica</small>
                                    </p>
                                </div>
                            </div>

                        <?php } ?>

                    </div>

                </div>

            </div>

        </div>


    </div>
</div>
<script type="text/javascript" src="dist/js/jquery.min.js"></script>
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</body>
</html>