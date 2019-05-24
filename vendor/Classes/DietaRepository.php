<?php

namespace ONLINEFIT;

use \ONLINEFIT\Dieta;
use \ONLINEFIT\Refeicao;
use \ONLINEFIT\RefeicaoRepository;


class DietaRepository
{
    public $dieta;
    public $listaDieta;

    public function retornaDieta($objetivoDieta,$situacao){


        switch ($objetivoDieta){
            case 'ficaremforma';


            if($situacao === "Peso normal") {
                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Segunda Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("1 fruta + peito de peru + pão","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("6 colheres de arroz + 1 filé+ feijão + suco natural","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("1 fruta + 1/2 porção de batata doce","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("arroz + frango cozido + suco ","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("chá + 3 cream creaker","21:00","dist/img/lanche.jpg")
                    )

                );

                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Terça Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();
                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Quarta Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("1 fruta + peito de peru + pão","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("6 colheres de arroz + 1 filé+ feijão + suco natural","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("1 fruta + 1/2 porção de batata doce","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("arroz + frango cozido + suco ","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("chá + 3 cream creaker","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Quinta Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Sexta Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Sábado");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Domingo");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("Livre","mantenha intervalo","dist/img/cafe.jpg"),

                    )

                );
                $this->listaDieta[] = $this->dieta;


                return $this->listaDieta;
            }
            elseif($situacao === "Sobrepeso"){

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Segunda Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("iogurte light + pão integral + peito de peru","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verduras + 1 file de frango + 3 colheres de arroz","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("6 colheres de aveia + fruta","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verdura + 1 bife","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("1 fruta + 3 castanhas do Pará","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Terça Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();
                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Quarta Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Quinta Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("iogurte light + pão integral + peito de peru","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verduras + 1 file de frango + 3 colheres de arroz","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("6 colheres de aveia + fruta","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verdura + 1 bife","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("1 fruta + 3 castanhas do Pará","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Sexta Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Sábado");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("iogurte light + pão integral + peito de peru","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verduras + 1 file de frango + 3 colheres de arroz","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("6 colheres de aveia + fruta","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verdura + 1 bife","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("1 fruta + 3 castanhas do Pará","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Domingo");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                return $this->listaDieta;
            }
            elseif($situacao === "Obesidade"){

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Segunda Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("3 torradas integral + 1 iogurte light","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verduras + 1 file de frango + 3 colheres de arroz","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("2 claras de ovo + 1/2 fruta","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verdura + 1 bife","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("1 fruta + 3 castanhas do Pará","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Terça Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("3 torradas integral + 1 iogurte light","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verduras + 1 file de frango + 3 colheres de arroz","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("2 claras de ovo + 1/2 fruta","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verdura + 1 bife","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("1 fruta + 3 castanhas do Pará","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();
                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Quarta Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Quinta Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("3 torradas integral + 1 iogurte light","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verduras + 1 file de frango + 3 colheres de arroz","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("2 claras de ovo + 1/2 fruta","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verdura + 1 bife","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("1 fruta + 3 castanhas do Pará","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Sexta Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Sabado");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("3 torradas integral + 1 iogurte light","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verduras + 1 file de frango + 3 colheres de arroz","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("2 claras de ovo + 1/2 fruta","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verdura + 1 bife","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("1 fruta + 3 castanhas do Pará","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Domingo");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("3 torradas integral + 1 iogurte light","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verduras + 1 file de frango + 3 colheres de arroz","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("2 claras de ovo + 1/2 fruta","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("Legumes e verdura + 1 bife","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("1 fruta + 3 castanhas do Pará","21:00","dist/img/lanche.jpg")
                    )

                );

                $this->listaDieta[] = $this->dieta;

                return $this->listaDieta;



            }elseif($situacao === "Abaixo do peso"){
                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Segunda Feira");

                $this->dieta->setRefeicoes(
                    array(
                    RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                    RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                    RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                    RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                    RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )
                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Segunda Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();
                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Segunda Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Segunda Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Segunda Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Segunda Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');
                $this->dieta->setDia("Segunda Feira");

                $this->dieta->setRefeicoes(
                    array(
                        RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                        RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                    )

                );
                $this->listaDieta[] = $this->dieta;

                return $this->listaDieta;
            }

                break;
            case "definir":
                if($situacao === "Peso normal") {
                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                            array(
                                RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                                RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                                RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                                RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                                RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                            )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();
                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );;
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );;
                    $this->listaDieta[] = $this->dieta;

                    return $this->listaDieta;
                }
                elseif($situacao === "Sobrepeso"){
                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();
                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    return $this->listaDieta;
                }
                elseif($situacao === "Obesidade"){
                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();
                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );

                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    return $this->listaDieta;
                }elseif($situacao === "Abaixo do peso"){
                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();
                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    $this->dieta = new Dieta();

                    $this->dieta->getTipoDieta('Hipo Calorica');
                    $this->dieta->setDia("Segunda Feira");

                    $this->dieta->setRefeicoes(
                        array(
                            RefeicaoRepository::RetornaRefeicao("","9:00","dist/img/cafe.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","12:00","dist/img/almoco.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","15:00","dist/img/lanche.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","18:00","dist/img/jantar.jpg"),
                            RefeicaoRepository::RetornaRefeicao("","21:00","dist/img/lanche.jpg")
                        )

                    );
                    $this->listaDieta[] = $this->dieta;

                    return $this->listaDieta;
                }
                break;
            default:
                return null;
        }
    }

}

?>