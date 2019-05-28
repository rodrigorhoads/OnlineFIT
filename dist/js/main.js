$(document).ready(function () {

    $('#btnEnviar').on('click', function () {
        nome = $('#txtNome').val();
        altura = $('#txtAltura').val();
        peso = $('#txtPeso').val();

        objetivo = '';

        console.log('chkmask = '+!$('#chkMask').is(':checked'));
        console.log('chkfem = '+!$('#chkFem').is(':checked'));

        if((!$('#chkMask').is(':checked')) && (!$('#chkFem').is(':checked'))){
            $('#txtMd1').text('Informe seu sexo.');
            $('#Pmodal').modal('show');
            return false;
        }


        console.log("Ficar em forma está marcado?"+$('#chkEFomr').is(':checked'));

        console.log("definição esta checado?" + $('#chkDef').is(':checked'));

        if((!$('#chkEFomr').is(':checked')) && (!$('#chkDef').is(':checked'))){
            $('#txtMd1').text('Selecione um objetivo.');
            $('#Pmodal').modal('show');
            return false;
        }


        if ($('#chkEFomr').is(':checked')) {
            objetivo = 'Emagrecer';
        }
        if ($('#chchkDef').is(':checked')) {
            objetivo = 'Ficar em forma';
        }

    });

    console.log('chkmask = '+!$('#chkMask').is(':checked'));
    console.log('chkfem = '+!$('#chkFem').is(':checked'));

    if($('#chkMask').is(':checked')){
        $('#imgman').toggleClass('img-check');
    }

    if($('#chkFem').is(':checked')){
        $('#imgfem').toggleClass('img-check');
    }


    $('#chkDef').click(function(){
        $('#chkEFomr').prop('checked',false);
    });

    $('#chkEFomr').click(function(){
        $('#chkDef').prop('checked',false);
    });

    $('.check').click(function () {
        $(this).toggleClass('img-check');


        var irmao = $(this).siblings()[0];

        console.log('chkmask = '+!$('#chkMask').is(':checked'));
        console.log('chkfem = '+!$('#chkFem').is(':checked'));



        if($(irmao).val() === 'man'){
            $('#imgfem').removeClass('img-check');
            $('#chkFem').prop('checked',false);
        }else
        {
            $('#imgman').removeClass('img-check');
            $('#chkMask').prop('checked',false);
        }

        console.log('chkmask = '+!$('#chkMask').is(':checked'));
        console.log('chkfem = '+!$('#chkFem').is(':checked'));

    });


    jQuery(function () {
        jQuery(window).scroll(function () {
            console.log(jQuery(this).scrollTop());
            if (jQuery(this).scrollTop() > 80) {
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

    function mostrarModal() {
        $('Smodal').modal('show');
    }

});


