<?php
session_start();
    if(count($_POST) >0 ){
        var_dump($_POST);
        echo "chegou requisião";
        exit;
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
<body >
<!--<div class="container-fluid">-->
<!--    <div class="row bg-dark mb-lg-5">-->
<!--        <div class="col-sm-12">-->
<!---->
<!--            <div class="row">-->
<!--                <div class="col-sm-4">-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-12">-->
<!--                            <div class="row">-->
<!--                                <div class="col-sm-5">-->
<!--                                    <div class="row mb-0">-->
<!--                                        <div class="form-group col-sm-6 mb-0">-->
<!--                                            <button class="btn btn-outline-info my-3">-->
<!--                                                <i class="fas fa-bars"></i>-->
<!--                                            </button>-->
<!--                                        </div>-->
<!---->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-sm-6">-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-4">-->
<!--                    <div class="row mt-3">-->
<!--                        <div class="col-sm-3 my-1">-->
<!--                            <img src="dist/img/mulher.png" alt="" width="100%" height="40px">-->
<!--                        </div>-->
<!--                        <div class="col-sm-3 my-1">-->
<!--                            <h4 class="text-info">OnlineFIT</h4>-->
<!--                        </div>-->
<!--                        <div class="col-sm-3 my-1">-->
<!--                            <h4 class="text-info">OnlineFIT</h4>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-4">-->
<!--                    <div class="row mt-3">-->
<!---->
<!--                    <ul class="list-inline">-->
<!--                        <li class="list-inline-item"><a href="">Novidades</a></li>-->
<!--                        <li class="list-inline-item"><a href="">Profissíonais</a></li>-->
<!--                        <li class="list-inline-item"><a href="">Contato</a></li>-->
<!--                    </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php

if(isset($_SESSION['falhou'])){

    echo "<script>
    alert('algo deu errado my friend');               
</script>";
}

?>
<header class="header mt-4" id="cabecalho">
<div class="row">
    <div class="col-sm-2">
        <div style="width: 100%"></div>
    </div>
    <div class="offset-2 col-sm-6">
        <a href="index.php" style="text-decoration: none"><h1 class="txtlogo">OnlineFIT</h1></a>
    </div>
    <div class="col-sm-2 mt-2">
        <ul class="list-inline">
            <li class="list-inline-item"><a href=""><i class="fab fa-facebook icsocial"></i></a></li>
            <li class="list-inline-item"><a href=""><i class="fab fa-twitter icsocial"></i></a></li>
            <li class="list-inline-item"><a href=""><i class="fab fa-google icsocial"></i></a></li>
        </ul>
    </div>
</div>
</header>
<div class="row">
    <div class="slide offset-1   col-md-10">
        <div class="background_image" style="background-image: url('dist/img/pessoa relaxando.jpg')">
<!--            <div class="effect"></div>-->

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
    <div class="col-md-12 jumbotron my-0">
        <h1 class="">Informe seus dados, saiba como está o seu IMC e receba uma sugestão de treino e dieta para alcançar seu objetivo.</h1>
    </div>
</div>


    <div class="row">
        <div class="col-sm-12">
            <div class="row mx-auto">
                <div class="col-md-4"></div>

                <div class="col-md-6 mt-3" id="coisa">
                    <form action="treinodieta.php" method="post">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label class="">Nome</label>
                                <input class="form-control" type="text" id="txtNome" name="nome">
                            </div>
                            <div class="form-group col-md-8">
                                <label class="">Altura</label>
                                <input class="form-control" type="number" step="0.01" id="txtAltura" name="altura" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label class="">Peso</label>
                                <input class="form-control" type="number" id="txtPeso" name="peso" required>
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-md-8">
                                <label for="" class="">Sexo</label>
                            </div>

                            <div class="offset-2 form-group col-sm-8">

                                <label class="btn" >
                                    <img src="dist/img/femtrans.png"  class="check" id="imgfem">
                                    <input type="checkbox" id="chkFem" value="fem" hidden>
                                </label>
                                <label class="btn" >
                                    <img src="dist/img/masctrans.png"  class="check" id="imgman">
                                    <input type="checkbox" id="chkMask" hidden value="man">
                                </label>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="chkEFomr" name="ficaemforma">
                                    <label class="form-check-label " for="inlineCheckbox1">Ficar em forma</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="chkDef" name="definir">
                                    <label class="form-check-label " for="inlineCheckbox2">Definir / Ganhar Massa muscular</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="offset-4 col-md-6 mt-3">

                                            <button class="btn btn-primary btnTreino"
                                                type="submit"
                                                    id="btnEnviar">Ver Treino e Dieta</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-2">
                    <div class="row" id="retornos">
                    </div>
                </div>
            </div>

        </div>
        <div id="Pmodal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2 id="txtMd1">.</h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="dist/js/jquery.min.js"></script>
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="dist/js/main.js"></script>
</body>
</html>
