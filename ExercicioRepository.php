<?php

require_once ('Exercicio.php');


class ExercicioRepository
{

//    public function getExercicios($intensidade){
//        switch ($intensidade){
//            case 1:
//                $exercicio = new Exercicio();
//                $exercicio->setNome();
//                $exercicio->setDuracao();
//                $exercicio->setGrupoMuscular();
//                $exercicio->setNRepeticoes();
//                $exercicio->setSeries();
//                break;
//        }
//    }


    public static function getExercicioAquecimento($intensidade){
        switch ($intensidade){
            case 1:
                $exercicio = new Exercicio();
                $exercicio->fotoExercicio = "dist/img/esteira.jpg";
                $exercicio->setNome("Esteira");
                $exercicio->setDuracao("15min");
                $exercicio->setGrupoMuscular("Completo");
                $exercicio->setNRepeticoes("1");
                $exercicio->setSeries("1");
                return $exercicio;

            case 2:
                $exercicio = new Exercicio();
                $exercicio->fotoExercicio = "dist/img/esteira.jpg";
                $exercicio->setNome("Esteira");
                $exercicio->setDuracao("30min");
                $exercicio->setGrupoMuscular("Completo");
                $exercicio->setNRepeticoes("1");
                $exercicio->setSeries("1");
                return $exercicio;

            case 3:
                $exercicio = new Exercicio();
                $exercicio->fotoExercicio = "dist/img/bicicleta.jpg";

                $exercicio->setNome("Bicicleta");
                $exercicio->setDuracao("15min");
                $exercicio->setGrupoMuscular("Completo");
                $exercicio->setNRepeticoes("1");
                $exercicio->setSeries("1");
                return $exercicio;

            case 4:
                $exercicio = new Exercicio();
                $exercicio->fotoExercicio = "dist/img/bicicleta.jpg";
                $exercicio->setNome("Biciclieta");
                $exercicio->setDuracao("30min");
                $exercicio->setGrupoMuscular("Completo");
                $exercicio->setNRepeticoes("1");
                $exercicio->setSeries("1");
                return $exercicio;

            case 5:
                $exercicio = new Exercicio();
                $exercicio->setNome("Eliptico");
                $exercicio->fotoExercicio = "dist/img/eliptico.jpg";
                $exercicio->setDuracao("15min");
                $exercicio->setGrupoMuscular("Completo");
                $exercicio->setNRepeticoes("1");
                $exercicio->setSeries("1");
                return $exercicio;

            case 6:
                $exercicio = new Exercicio();
                $exercicio->setNome("Eliptico");
                $exercicio->fotoExercicio = "dist/img/eliptico.jpg";
                $exercicio->setDuracao("30min");
                $exercicio->setGrupoMuscular("Completo");
                $exercicio->setNRepeticoes("1");
                $exercicio->setSeries("1");
                return $exercicio;

        }
    }

    public  static function getExercicioPernas($intensidade){
        switch ($intensidade){
            case 1:
                $exercicio = new Exercicio();

                $exercicio->setNome("Agachamento");
                $exercicio->fotoExercicio = "dist/img/agachamento.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Inferiores");
                $exercicio->setNRepeticoes("10 a 12");
                $exercicio->setSeries("3");
                return $exercicio;

            case 2:
                $exercicio = new Exercicio();

                $exercicio->setNome("LegPress");
                $exercicio->fotoExercicio = "dist/img/legpress.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Inferiores");
                $exercicio->setNRepeticoes("10 a 12");
                $exercicio->setSeries("3");
                return $exercicio;

            case 3:
                $exercicio = new Exercicio();

                $exercicio->setNome("Mesa flexora");
                $exercicio->fotoExercicio = "dist/img/mesaflexora.jpg";
                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Inferiores");
                $exercicio->setNRepeticoes("10 a 12");
                $exercicio->setSeries("3");
                return $exercicio;

            case 4:
                $exercicio = new Exercicio();

                $exercicio->setNome("Cadeira extensora");
                $exercicio->fotoExercicio = "dist/img/cadeiraextensora.jpg";
                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Inferiores");
                $exercicio->setNRepeticoes("10 a 12");
                $exercicio->setSeries("3");
                return $exercicio;

        }
    }


    public  static function getExercicioBraco($intensidade){
        switch ($intensidade){
            case 1:
                $exercicio = new Exercicio();

                $exercicio->setNome("Rosca Alteranada");
                $exercicio->fotoExercicio = "dist/img/roscaalternada.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                    return $exercicio;

            case 2:
                $exercicio = new Exercicio();

                $exercicio->setNome("Desenvolvimento com pesos");
                $exercicio->fotoExercicio = "dist/img/desenvolvimentopesos.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                return $exercicio;

            case 3:
                $exercicio = new Exercicio();

                $exercicio->setNome("Desenvolvimento com cabo");
                $exercicio->fotoExercicio = "dist/img/desenvolvimentocabo.jpg";
                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                return $exercicio;

            case 4:
                $exercicio = new Exercicio();

                $exercicio->setNome("Triceps Testa");
                $exercicio->fotoExercicio = "dist/img/tricepstesta.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                return $exercicio;

            case 5:
                $exercicio = new Exercicio();

                $exercicio->setNome("Mergulho em barras paralelas");
                $exercicio->fotoExercicio = "dist/img/mergulhobarras.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                return $exercicio;

            case 6:
                $exercicio = new Exercicio();

                $exercicio->setNome("Triceps Corda");
                $exercicio->fotoExercicio = "dist/img/tricepscorda.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                return $exercicio;

            case 7:
                $exercicio = new Exercicio();

                $exercicio->setNome("Tríceps na polia com barra (pulley)");
                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                return $exercicio;

            case 8:
                $exercicio = new Exercicio();

                $exercicio->setNome(" Manguito rotador");
                $exercicio->fotoExercicio = "dist/img/manguitorotador.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                return $exercicio;

            case 9:
                $exercicio = new Exercicio();

                $exercicio->setNome("Elevação lateral");
                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                return $exercicio;

            case 10:
                $exercicio = new Exercicio();

                $exercicio->setNome("Elevação frontal");
                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                return $exercicio;

            case 11:
                $exercicio = new Exercicio();

                $exercicio->setNome("Voador inverso");
                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Membros Superiores");
                $exercicio->setNRepeticoes("15");
                $exercicio->setSeries("3");
                return $exercicio;

        }
    }


    public static  function getExerciciosPeitoral($intensidade){

        switch ($intensidade){
            case 1:
                $exercicio = new Exercicio();

                $exercicio->setNome("Supino reto com barra");
                $exercicio->fotoExercicio = "dist/img/supinoretobarras.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Peitoral");
                $exercicio->setNRepeticoes("10 a 12");
                $exercicio->setSeries("3");
                return $exercicio;
            case 2:
                $exercicio = new Exercicio();

                $exercicio->setNome("Supino reto com halteres");
                $exercicio->fotoExercicio = "dist/img/supinoretohalteres.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Peitoral");
                $exercicio->setNRepeticoes("10 a 12");
                $exercicio->setSeries("3");
                return $exercicio;
                break;
            case 3:
                $exercicio = new Exercicio();

                $exercicio->setNome("Crucifixo reto");
                $exercicio->fotoExercicio = "dist/img/cruxifixoretohalteres.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Peitoral");
                $exercicio->setNRepeticoes("10 a 12");
                $exercicio->setSeries("3");
                return $exercicio;
                break;
            case 4:
                $exercicio = new Exercicio();

                $exercicio->setNome("Voador peitoral");
                $exercicio->fotoExercicio = "dist/img/voadorpeitoral.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Peitoral");
                $exercicio->setNRepeticoes("10 a 12");
                $exercicio->setSeries("3");
                return $exercicio;
                break;
            case 5

            :
                $exercicio = new Exercicio();

                $exercicio->setNome("Flexão de braços");
                $exercicio->fotoExercicio = "dist/img/flexaobraco.jpg";

                $exercicio->setDuracao("");
                $exercicio->setGrupoMuscular("Peitoral");
                $exercicio->setNRepeticoes("10 a 12");
                $exercicio->setSeries("3");
                return $exercicio;
                break;
        }
    }



}