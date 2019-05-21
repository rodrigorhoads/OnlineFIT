<?php


class Dieta
{
    private $tipoDieta;
    private $dia;
    private $refeicoes = array();
    public  $dicaDieta;

    /**
     * @return mixed
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * @param mixed $dia
     */
    public function setDia($dia)
    {
        $this->dia = $dia;
    }

    /**
     * @return mixed
     */
    public function getTipoDieta()
    {
        return $this->tipoDieta;
    }

    /**
     * @param mixed $tipoDieta
     */
    public function setTipoDieta($tipoDieta)
    {
        $this->tipoDieta = $tipoDieta;
    }

    /**
     * @return array
     */
    public function getRefeicoes()
    {
        return $this->refeicoes;
    }

    /**
     * @param array $refeicoes
     */
    public function setRefeicoes($refeicoes = array())
    {

        $this->refeicoes = $refeicoes;

    }
}