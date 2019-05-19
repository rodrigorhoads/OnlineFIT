<?php


class Dieta
{
    private $tipoDieta;
    private $id;
    private $refeicoes = array();

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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function setRefeicoes($refeicoes)
    {

        $this->refeicoes = $refeicoes;

    }
}