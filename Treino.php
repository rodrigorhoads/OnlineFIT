<?php


class Treino
{
    public $id;
    public $objetivoTreino;
    public $exercicios = array();
    public $diaExercicio;
    public $dicaTreino;

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
     * @return mixed
     */
    public function getObjetivoTreino()
    {
        return $this->objetivoTreino;
    }

    /**
     * @param mixed $objetivoTreino
     */
    public function setObjetivoTreino($objetivoTreino)
    {
        $this->objetivoTreino = $objetivoTreino;
    }

    /**
     * @return array
     */
    public function getExercicios()
    {
        return $this->exercicios;
    }

    /**
     * @param array $exercicios
     */
    public function setExercicios($exercicios =array())
    {
        $this->exercicios = $exercicios;
    }

}