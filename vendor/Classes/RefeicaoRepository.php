<?php

namespace ONLINEFIT;

use \ONLINEFIT\Refeicao;


class RefeicaoRepository
{
    public static  function RetornaRefeicao($nomePrato,$horario,$foto){
            $refeicao = new Refeicao();

            $refeicao->setHorario($horario);
            $refeicao->setPrato($nomePrato);
            $refeicao->fotoRefeicao = $foto ;

            return $refeicao;
    }
}