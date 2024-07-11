<?php

    namespace classes;

    use classes\Paciente;

    class IMC {

        public static function calcula(Paciente $paciente){

            $paciente->setIMC($paciente->getPeso() / ($paciente->getAltura() ** 2));

        }

        public static function showIMC(Paciente $paciente){
            return number_format($paciente->getIMC(), 3);
        }

        public static function classifica(Paciente $paciente){
            if(($paciente->getIdade() > 18 && $paciente->getIdade() < 25) &&
                ($paciente->getIMC() > 18 && $paciente->getIMC() < 25)){
                    return "Saudável";
            }
            else {
                for($idade = 25, $imc = 20; $idade <= 65; $idade+=10, $imc++){
                    if(($paciente->getIdade() >= $idade && $paciente->getIdade() < $idade + 10) &&
                        ($paciente->getIMC() >= $imc && $paciente->getIMC() < $imc + 6)){
                        return "Saudável";
                    }
                }

                if($paciente->getIdade > 65 && 
                ($paciente->getIMC() > 23 && $paciente->getIMC() < 30))
                    return "Saudável";
                else if($paciente->getIMC() < 19) return "Abaixo do Peso";
                else if($paciente->getIMC() > 24 && $paciente->getIMC() < 30) return "Sobrepeso";
                else return "Obesidade";
            }
            
        }

    }

?>