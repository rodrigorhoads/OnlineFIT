<?php


namespace ONLINEFIT;

use \ONLINEFIT\Treino;
use \ONLINEFIT\Exercicio;
use \ONLINEFIT\ExercicioRepository;


class TreinoRepository{

    private $treino;

    public $listaTreino = array();




    public function  retornaTreino($objetivoTreino,$situacao){

        switch ($objetivoTreino){
            case 'ficaremforma';
            if($situacao === "Peso normal") {

                $this->treino = new Treino();
                $this->treino->dicaTreino = "Você esta com o corpo em dia continue assim ou busque nossos treinos para definição/ganho massa muscular.";
                $this->treino->diaExercicio ="Dias alteranados";
                $this->treino->setObjetivoTreino('ficaremforma');
                $this->treino->setExercicios(array(
                  ExercicioRepository::getExercicioAquecimento(1)
                , ExercicioRepository::getExercicioAquecimento(3)
                ));
                $this->listaTreino[] = $this->treino;


                return $this->listaTreino;
            }elseif($situacao === "Sobrepeso"){


                    $this->treino = new Treino();
                    $this->treino->diaExercicio ="Segunda";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                            ExercicioRepository::getExercicioAquecimento(1)
                        ,ExercicioRepository::getExercicioAquecimento(3)
                            , ExercicioRepository::getExercicioBraco(3)
                            , ExercicioRepository::getExercicioBraco(1)
                            , ExercicioRepository::getExercicioPernas(1)
                            , ExercicioRepository::getExercicioPernas(2)
                        ));
                    $this->listaTreino[] = $this->treino;

                $this->treino = new Treino();
                $this->treino->diaExercicio ="Terça";
                $this->treino->setObjetivoTreino('ficaremforma');
                $this->treino->setExercicios(array(

                    ExercicioRepository::getExercicioAquecimento(1)
                , ExercicioRepository::getExercicioBraco(3)
                , ExercicioRepository::getExercicioBraco(1)
                , ExercicioRepository::getExercicioPernas(1)
                , ExercicioRepository::getExercicioPernas(2)
                ));
                $this->listaTreino[] = $this->treino;

                $this->treino = new Treino();
                $this->treino->diaExercicio ="Quarta";
                $this->treino->setObjetivoTreino('ficaremforma');
                $this->treino->setExercicios(array(

                    ExercicioRepository::getExercicioAquecimento(1)
                ,ExercicioRepository::getExercicioAquecimento(5)

                , ExercicioRepository::getExercicioBraco(3)
                , ExercicioRepository::getExercicioBraco(1)
                , ExercicioRepository::getExercicioPernas(1)
                , ExercicioRepository::getExercicioPernas(2)
                ));
                $this->listaTreino[] = $this->treino;


                $this->treino = new Treino();
                $this->treino->diaExercicio ="Quinta";
                $this->treino->setObjetivoTreino('ficaremforma');
                $this->treino->setExercicios(array(

                    ExercicioRepository::getExercicioAquecimento(1)
                , ExercicioRepository::getExercicioBraco(3)
                , ExercicioRepository::getExercicioBraco(1)
                , ExercicioRepository::getExercicioPernas(1)
                , ExercicioRepository::getExercicioPernas(2)
                ));
                $this->listaTreino[] = $this->treino;

                $this->treino = new Treino();
                $this->treino->diaExercicio ="Sexta";
                $this->treino->setObjetivoTreino('ficaremforma');
                $this->treino->setExercicios(array(

                    ExercicioRepository::getExercicioAquecimento(3)
                ,ExercicioRepository::getExercicioAquecimento(5)

                , ExercicioRepository::getExercicioBraco(3)
                , ExercicioRepository::getExercicioBraco(1)
                , ExercicioRepository::getExercicioPernas(1)
                , ExercicioRepository::getExercicioPernas(2)
                ));
                $this->listaTreino[] = $this->treino;


                return $this->listaTreino;
            }elseif($situacao === "Obesidade"){



                $this->treino = new Treino();
                $this->treino->dicaTreino = "Tenha cuidado ao praticar atividades de impacto devido ao excesso de peso.";
                $this->treino->diaExercicio ="Dias alteranados";
                $this->treino->setObjetivoTreino('ficaremforma');
                $this->treino->setExercicios(array(

                    ExercicioRepository::getExercicioAquecimento(2)
                    ,ExercicioRepository::getExercicioAquecimento(4)
                , ExercicioRepository::getExercicioAquecimento(6)
                ));
                $this->listaTreino[] = $this->treino;


                return $this->listaTreino;
            }elseif($situacao === "Abaixo do peso"){

                $this->treino = new Treino();
                $this->treino->dicaTreino = "Evite exercicio como corrida e bicicleta.";
                $this->treino->diaExercicio ="Segunda";
                $this->treino->setObjetivoTreino('ficaremforma');
                $this->treino->setExercicios(array(

                ExercicioRepository::getExerciciosPeitoral(1),
                ExercicioRepository::getExerciciosPeitoral(2),
                ExercicioRepository::getExercicioPernas(3),
                ExercicioRepository::getExercicioPernas(4)
                ));
                $this->listaTreino[] = $this->treino;

                $this->treino = new Treino();
                $this->treino->dicaTreino = "Evite exercicio como corrida e bicicleta.";
                $this->treino->diaExercicio ="Terca";
                $this->treino->setObjetivoTreino('ficaremforma');
                $this->treino->setExercicios(array(

                    ExercicioRepository::getExercicioBraco(1),
                    ExercicioRepository::getExercicioBraco(2),
                    ExercicioRepository::getExercicioBraco(3),
                    ExercicioRepository::getExercicioBraco(4)
                ));
                $this->listaTreino[] = $this->treino;

                $this->treino = new Treino();
                $this->treino->dicaTreino = "Evite exercicio como corrida e bicicleta.";
                $this->treino->diaExercicio ="Quarta";
                $this->treino->setObjetivoTreino('ficaremforma');
                $this->treino->setExercicios(array(

                    ExercicioRepository::getExerciciosPeitoral(4),
                    ExercicioRepository::getExerciciosPeitoral(3),
                    ExercicioRepository::getExercicioPernas(2),
                    ExercicioRepository::getExercicioPernas(3)
                ));
                $this->listaTreino[] = $this->treino;

                return $this->listaTreino;

            }
                break;
            case 'definir':
                if($situacao === "Peso normal") {

                    $this->treino = new Treino();
                    $this->treino->dicaTreino = "Tenha cuidado ao praticar atividades de impacto devido ao excesso de peso.";
                    $this->treino->diaExercicio ="Dias alteranados";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                        ExercicioRepository::getExercicioAquecimento(1)
                    , ExercicioRepository::getExercicioAquecimento(3)
                    ));
                    $this->listaTreino[] = $this->treino;


                    return $this->listaTreino;
                }elseif($situacao === "Sobrepeso"){


                    $this->treino = new Treino();
                    $this->treino->diaExercicio ="Segunda";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                        ExercicioRepository::getExercicioAquecimento(1)
                    ,ExercicioRepository::getExercicioAquecimento(3)
                    , ExercicioRepository::getExercicioBraco(3)
                    , ExercicioRepository::getExercicioBraco(1)
                    , ExercicioRepository::getExercicioPernas(1)
                    , ExercicioRepository::getExercicioPernas(2)
                    ));
                    $this->listaTreino[] = $this->treino;

                    $this->treino = new Treino();
                    $this->treino->diaExercicio ="Terça";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                        ExercicioRepository::getExercicioAquecimento(1)
                    , ExercicioRepository::getExercicioBraco(3)
                    , ExercicioRepository::getExercicioBraco(1)
                    , ExercicioRepository::getExercicioPernas(1)
                    , ExercicioRepository::getExercicioPernas(2)
                    ));
                    $this->listaTreino[] = $this->treino;

                    $this->treino = new Treino();
                    $this->treino->diaExercicio ="Quarta";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                        ExercicioRepository::getExercicioAquecimento(1)
                    ,ExercicioRepository::getExercicioAquecimento(5)

                    , ExercicioRepository::getExercicioBraco(3)
                    , ExercicioRepository::getExercicioBraco(1)
                    , ExercicioRepository::getExercicioPernas(1)
                    , ExercicioRepository::getExercicioPernas(2)
                    ));
                    $this->listaTreino[] = $this->treino;


                    $this->treino = new Treino();
                    $this->treino->diaExercicio ="Quinta";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                        ExercicioRepository::getExercicioAquecimento(1)
                    , ExercicioRepository::getExercicioBraco(3)
                    , ExercicioRepository::getExercicioBraco(1)
                    , ExercicioRepository::getExercicioPernas(1)
                    , ExercicioRepository::getExercicioPernas(2)
                    ));
                    $this->listaTreino[] = $this->treino;

                    $this->treino = new Treino();
                    $this->treino->diaExercicio ="Sexta";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                        ExercicioRepository::getExercicioAquecimento(3)
                    ,ExercicioRepository::getExercicioAquecimento(5)

                    , ExercicioRepository::getExercicioBraco(3)
                    , ExercicioRepository::getExercicioBraco(1)
                    , ExercicioRepository::getExercicioPernas(1)
                    , ExercicioRepository::getExercicioPernas(2)
                    ));
                    $this->listaTreino[] = $this->treino;


                    return $this->listaTreino;
                }elseif($situacao === "Obesidade"){



                    $this->treino = new Treino();
                    $this->treino->dicaTreino = "Tenha cuidado ao praticar atividades de impacto devido ao excesso de peso.";
                    $this->treino->diaExercicio ="Dias alteranados";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                        ExercicioRepository::getExercicioAquecimento(2)
                    ,ExercicioRepository::getExercicioAquecimento(5)
                    , ExercicioRepository::getExercicioAquecimento(6)
                    ));
                    $this->listaTreino[] = $this->treino;


                    return $this->listaTreino;
                }elseif($situacao === "Abaixo do peso"){

                    $this->treino = new Treino();
                    $this->treino->dicaTreino = "Evite exercicio como corrida e bicicleta.";
                    $this->treino->diaExercicio ="Segunda";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                        ExercicioRepository::getExerciciosPeitoral(1),
                        ExercicioRepository::getExerciciosPeitoral(2),
                        ExercicioRepository::getExercicioPernas(3),
                        ExercicioRepository::getExercicioPernas(4)
                    ));
                    $this->listaTreino[] = $this->treino;

                    $this->treino = new Treino();
                    $this->treino->dicaTreino = "Evite exercicio como corrida e bicicleta.";
                    $this->treino->diaExercicio ="Terca";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                        ExercicioRepository::getExercicioBraco(1),
                        ExercicioRepository::getExercicioBraco(2),
                        ExercicioRepository::getExercicioBraco(3),
                        ExercicioRepository::getExercicioBraco(4)
                    ));
                    $this->listaTreino[] = $this->treino;

                    $this->treino = new Treino();
                    $this->treino->dicaTreino = "Evite exercicio como corrida e bicicleta.";
                    $this->treino->diaExercicio ="Quarta";
                    $this->treino->setObjetivoTreino('ficaremforma');
                    $this->treino->setExercicios(array(

                        ExercicioRepository::getExerciciosPeitoral(4),
                        ExercicioRepository::getExerciciosPeitoral(3),
                        ExercicioRepository::getExercicioPernas(2),
                        ExercicioRepository::getExercicioPernas(3)
                    ));
                    $this->listaTreino[] = $this->treino;

                    return $this->listaTreino;

                }
                break;
            default:
                echo "Eu hein que treininho";

        }
    }
}


?>
