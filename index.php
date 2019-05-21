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
<!---->
<!--<div class="mx-auto" style="position: absolute ;right: 17%;top:50% ">-->
<!--    <h1 class="txtFrase">Sáude é vida veja como está a sua.</h1>-->
<!--</div>-->

<!--<div class="container" style="position: absolute;top:100%;">-->
    <div class="container">
<div class="row">
    <div class="col-md-12 jumbotron my-0">
        <h1 class="">Informe seus dados, e saiba como está o seu IMC.</h1>
    </div>
</div>


    <div class="row">
        <div class="col-sm-12">
            <div class="row mx-auto">
                <div class="col-md-4"></div>

                <div class="col-md-6" id="coisa">
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
                                    <img src="dist/img/femtrans.png"  class="check" >
                                    <input type="checkbox" id="chkFem" value="fem" hidden>
                                </label>
                                <label class="btn" >
                                    <img src="dist/img/masctrans.png"  class="check">
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
    </div>
</div>
<script type="text/javascript" src="dist/js/jquery.min.js"></script>
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {

        $('#btnEnviar').on('click', function () {
            nome = $('#txtNome').val();
            altura = $('#txtAltura').val();
            peso = $('#txtPeso').val();

            objetivo = '';

            console.log('chkmask = '+!$('#chkMask').is(':checked'));
            console.log('chkfem = '+!$('#chkFem').is(':checked'));

            if((!$('#chkMask').is(':checked')) && (!$('#chkFem').is(':checked'))){
                alert("Informe o seu gênero.")
                return false;
            }


            console.log($('#chkEmag').is(':checked'));

            console.log($('#chkEFomr').is(':checked'));

            if((!$('#chkEmag').is(':checked')) && (!$('#chkEFomr').is(':checked'))){
                alert("Informe o seu objetivo.")
                return false;
            }


            if ($('#chkEmag').is(':checked')) {
                objetivo = 'Emagrecer';
            }
            if ($('#chkEFomr').is(':checked')) {
                objetivo = 'Ficar em forma';
            }

            // $.ajax({
            //     url:'treinodieta.php',
            //     data:{emagrecer:'Emagrecer'},
            //     type:'POST',
            //     success:   function ($data) {
            //         console.log($data);
            //         $('#retornos').html($data);
            //     }
            // });

        });

        $('.check').click(function () {
           $(this).toggleClass('img-check');
           console.log($(this).siblings().is('input'));
            var irmao = $(this).siblings()[0];

            if($(irmao).val() === 'man'){
                $('#imgfem').attr('class','check');
            }else
            {
                $('#imgman').attr('class','check');
            }

        });

    });


    jQuery(function () {
        jQuery(window).scroll(function () {
            console.log(jQuery(this).scrollTop());
            if (jQuery(this).scrollTop() > 100) {
                $("#cabecalho").css('position', 'fixed');
                $("#cabecalho").removeClass('mt-4');
                $("#cabecalho").css('top', '0');
                $("#cabecalho").css('background', 'linear-gradient(to left,#fff,lightskyblue )');

            } else {
                $("#cabecalho").css('position', 'absolute');
                $("#cabecalho").addClass('mt-4');
                $("#cabecalho").css('background', '');
            }
        });
    });
</script>

</body>
</html>
