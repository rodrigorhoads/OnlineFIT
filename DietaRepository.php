<?php

require_once ('Dieta.php');
require_once ('Refeicao.php');
class DietaRepository
{
    private $dieta;

    public function retornaDieta($objetivoDieta,$situacao){

        switch ($objetivoDieta){
            case 'ficaremforma';
            if($situacao === "Peso normal") {
                $this->dieta = new Dieta();

                $this->dieta->getTipoDieta('Hipo Calorica');

                $this->dieta->setRefeicoes(
                    array([
                        "diaSemana"=>"Segunda Feira",
                        "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                        "fotoRefeicao2"=>"dist/img/almoço.jpg",
                        "fotoRefeicao3"=>"dist/img/jantar.jpg",
                        "ref1"=>"Café da Manhã",
                        "ref1Prato"=>"pao com manteiga",
                        "ref2"=>"Almoço",
                        "ref2Prato"=>"Carne com batata",
                        "ref3"=>"Jantar",
                        "ref3Prato"=>"Arroz e Frango cozido"

                    ],[
                        "diaSemana"=>"Terça Feira",
                        "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                        "fotoRefeicao2"=>"dist/img/almoço.jpg",
                        "fotoRefeicao3"=>"dist/img/jantar.jpg",
                        "ref1"=>"Café da Manhã",
                        "ref1Prato"=>"pao com manteiga",
                        "ref2"=>"Almoço",
                        "ref2Prato"=>"Carne com batata",
                        "ref3"=>"Jantar",
                        "ref3Prato"=>"Arroz e Frango cozido"

                    ],
                        [
                            "diaSemana"=>"Quarta Feira",
                            "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                            "fotoRefeicao2"=>"dist/img/almoço.jpg",
                            "fotoRefeicao3"=>"dist/img/jantar.jpg",
                            "ref1"=>"Café da Manhã",
                            "ref1Prato"=>"pao com manteiga",
                            "ref2"=>"Almoço",
                            "ref2Prato"=>"Carne com batata",
                            "ref3"=>"Jantar",
                            "ref3Prato"=>"Arroz e Frango cozido"

                        ],
                        [
                            "diaSemana"=>"Quinta Feira",
                            "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                            "fotoRefeicao2"=>"dist/img/almoço.jpg",
                            "fotoRefeicao3"=>"dist/img/jantar.jpg",
                            "ref1"=>"Café da Manhã",
                            "ref1Prato"=>"pao com manteiga",
                            "ref2"=>"Almoço",
                            "ref2Prato"=>"Carne com batata",
                            "ref3"=>"Jantar",
                            "ref3Prato"=>"Arroz e Frango cozido"

                        ],
                        [
                            "diaSemana"=>"Sexta Feira",
                            "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                            "fotoRefeicao2"=>"dist/img/almoço.jpg",
                            "fotoRefeicao3"=>"dist/img/jantar.jpg",
                            "ref1"=>"Café da Manhã",
                            "ref1Prato"=>"pao com manteiga",
                            "ref2"=>"Almoço",
                            "ref2Prato"=>"Carne com batata",
                            "ref3"=>"Jantar",
                            "ref3Prato"=>"Arroz e Frango cozido"

                        ],
                        [
                            "diaSemana"=>"Sabado",
                            "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                            "fotoRefeicao2"=>"dist/img/almoço.jpg",
                            "fotoRefeicao3"=>"dist/img/jantar.jpg",
                            "ref1"=>"Café da Manhã",
                            "ref1Prato"=>"pao com manteiga",
                            "ref2"=>"Almoço",
                            "ref2Prato"=>"Carne com batata",
                            "ref3"=>"Jantar",
                            "ref3Prato"=>"Arroz e Frango cozido"

                        ],
                        [
                            "diaSemana"=>"Domingo",
                            "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                            "fotoRefeicao2"=>"dist/img/almoço.jpg",
                            "fotoRefeicao3"=>"dist/img/jantar.jpg",
                            "ref1"=>"Café da Manhã",
                            "ref1Prato"=>"pao com manteiga",
                            "ref2"=>"Almoço",
                            "ref2Prato"=>"Carne com batata",
                            "ref3"=>"Jantar",
                            "ref3Prato"=>"Arroz e Frango cozido"

                        ]
                    )
                );
                return $this->dieta;
            }
            elseif($situacao === "Sobrepeso"){
                $this->dieta = new Dieta();

                $this->dieta->setTipoDieta('Hipo Calorica');


                $this->dieta->setRefeicoes(   []             );
                return $this->dieta;
             }
            elseif($situacao === "Obesidade"){
                $this->dieta = new Dieta();

                $this->dieta->setTipoDieta('Hipo Calorica');


                $this->dieta->setRefeicoes( []               );
                return $this->dieta;
            }elseif($situacao === "Abaixo do peso"){
                $this->dieta = new Dieta();

                $this->dieta->setTipoDieta('Hipo Calorica');


                $this->dieta->setRefeicoes(      []          );
                return $this->dieta;
            }

                break;
            case "definir":
                if($situacao === "Peso normal") {
                $this->dieta = new Dieta();

                $this->dieta->setTipoDieta('Hipo Calorica');


                $this->dieta->setRefeicoes(
                    array([
                        "diaSemana"=>"Segunda Feira",
                        "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                        "fotoRefeicao2"=>"dist/img/almoço.jpg",
                        "fotoRefeicao3"=>"dist/img/jantar.jpg",
                        "ref1"=>"Café da Manhã",
                        "ref1Prato"=>"pao com manteiga",
                        "ref2"=>"Almoço",
                        "ref2Prato"=>"Carne com batata",
                        "ref3"=>"Jantar",
                        "ref3Prato"=>"Arroz e Frango cozido"

                    ],[
                        "diaSemana"=>"Terça Feira",
                        "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                        "fotoRefeicao2"=>"dist/img/almoço.jpg",
                        "fotoRefeicao3"=>"dist/img/jantar.jpg",
                        "ref1"=>"Café da Manhã",
                        "ref1Prato"=>"pao com manteiga",
                        "ref2"=>"Almoço",
                        "ref2Prato"=>"Carne com batata",
                        "ref3"=>"Jantar",
                        "ref3Prato"=>"Arroz e Frango cozido"

                    ],
                        [
                            "diaSemana"=>"Quarta Feira",
                            "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                            "fotoRefeicao2"=>"dist/img/almoço.jpg",
                            "fotoRefeicao3"=>"dist/img/jantar.jpg",
                            "ref1"=>"Café da Manhã",
                            "ref1Prato"=>"pao com manteiga",
                            "ref2"=>"Almoço",
                            "ref2Prato"=>"Carne com batata",
                            "ref3"=>"Jantar",
                            "ref3Prato"=>"Arroz e Frango cozido"

                        ],
                        [
                            "diaSemana"=>"Quinta Feira",
                            "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                            "fotoRefeicao2"=>"dist/img/almoço.jpg",
                            "fotoRefeicao3"=>"dist/img/jantar.jpg",
                            "ref1"=>"Café da Manhã",
                            "ref1Prato"=>"pao com manteiga",
                            "ref2"=>"Almoço",
                            "ref2Prato"=>"Carne com batata",
                            "ref3"=>"Jantar",
                            "ref3Prato"=>"Arroz e Frango cozido"

                        ],
                        [
                            "diaSemana"=>"Sexta Feira",
                            "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                            "fotoRefeicao2"=>"dist/img/almoço.jpg",
                            "fotoRefeicao3"=>"dist/img/jantar.jpg",
                            "ref1"=>"Café da Manhã",
                            "ref1Prato"=>"pao com manteiga",
                            "ref2"=>"Almoço",
                            "ref2Prato"=>"Carne com batata",
                            "ref3"=>"Jantar",
                            "ref3Prato"=>"Arroz e Frango cozido"

                        ],
                        [
                            "diaSemana"=>"Sabado",
                            "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                            "fotoRefeicao2"=>"dist/img/almoço.jpg",
                            "fotoRefeicao3"=>"dist/img/jantar.jpg",
                            "ref1"=>"Café da Manhã",
                            "ref1Prato"=>"pao com manteiga",
                            "ref2"=>"Almoço",
                            "ref2Prato"=>"Carne com batata",
                            "ref3"=>"Jantar",
                            "ref3Prato"=>"Arroz e Frango cozido"

                        ],
                        [
                            "diaSemana"=>"Domingo",
                            "fotoRefeicao1"=>"dist/img/café_da_manha.jpg",
                            "fotoRefeicao2"=>"dist/img/almoço.jpg",
                            "fotoRefeicao3"=>"dist/img/jantar.jpg",
                            "ref1"=>"Café da Manhã",
                            "ref1Prato"=>"pao com manteiga",
                            "ref2"=>"Almoço",
                            "ref2Prato"=>"Carne com batata",
                            "ref3"=>"Jantar",
                            "ref3Prato"=>"Arroz e Frango cozido"

                        ]
                    )
                );
                    return $this->dieta;
                }
                elseif($situacao === "Sobrepeso"){
                    $this->dieta = new Dieta();

                    $this->dieta->setTipoDieta('Hipo Calorica');


                    $this->dieta->setRefeicoes([]);
                    return $this->dieta;
                }
                elseif($situacao === "Obesidade"){
                    $this->dieta = new Dieta();

                    $this->dieta->setTipoDieta('Hipo Calorica');


                    $this->dieta->setRefeicoes(   []             );
                    return $this->dieta;
                }elseif($situacao === "Abaixo do peso"){
                    $this->dieta = new Dieta();

                    $this->dieta->setTipoDieta('Hipo Calorica');


                    $this->dieta->setRefeicoes(   []             );
                    return $this->dieta;
                }
                break;
            default:
                return null;
        }
    }

}

?>