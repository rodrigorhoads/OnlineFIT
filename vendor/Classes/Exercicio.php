<?php

namespace ONLINEFIT;

class Exercicio
{
    public $nome;
    public $NRepeticoes;
    public $indicacao;
    public $series;
    public $tipo;
    public $duracao;
    public $grupoMuscular;
    public $diaSemana;
    public $fotoExercicio;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNRepeticoes()
    {
        return $this->NRepeticoes;
    }

    /**
     * @param mixed $NRepeticoes
     */
    public function setNRepeticoes($NRepeticoes)
    {
        $this->NRepeticoes = $NRepeticoes;
    }

    /**
     * @return mixed
     */
    public function getIndicacao()
    {
        return $this->indicacao;
    }

    /**
     * @param mixed $indicacao
     */
    public function setIndicacao($indicacao)
    {
        $this->indicacao = $indicacao;
    }

    /**
     * @return mixed
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param mixed $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * @param mixed $duracao
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;
    }

    /**
     * @return mixed
     */
    public function getGrupoMuscular()
    {
        return $this->grupoMuscular;
    }

    /**
     * @param mixed $grupoMuscular
     */
    public function setGrupoMuscular($grupoMuscular)
    {
        $this->grupoMuscular = $grupoMuscular;
    }

    /**
     * @return mixed
     */
    public function getDiaSemana()
    {
        return $this->diaSemana;
    }

    /**
     * @param mixed $diaSemana
     */
    public function setDiaSemana($diaSemana)
    {
        $this->diaSemana = $diaSemana;
    }


}