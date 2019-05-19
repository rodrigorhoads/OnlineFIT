<?php


class Refeicao
{
    private $tipoRefeicoa;
    private $prato;

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
    public function getTipoRefeicoa()
    {
        return $this->tipoRefeicoa;
    }

    /**
     * @param mixed $tipoRefeicoa
     */
    public function setTipoRefeicoa($tipoRefeicoa)
    {
        $this->tipoRefeicoa = $tipoRefeicoa;
    }

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