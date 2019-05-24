<?php

namespace ONLINEFIT;

class Refeicao
{
    private $horario;
    private $prato;
    public $fotoRefeicao;


    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @param mixed $horario
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    /**
     * @return mixed
     */
    public function getPrato()
    {
        return $this->prato;
    }

    /**
     * @param mixed $prato
     */
    public function setPrato($prato)
    {
        $this->prato = $prato;
    }

}