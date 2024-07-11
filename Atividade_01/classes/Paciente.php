<?php

    namespace classes;

    class Paciente extends Pessoa {

        private float $imc;

        function __construct($nome, $idade, $altura, $peso){
		    parent::__construct($nome, $idade, $altura, $peso);
	    }

        public function setIMC(float $imc){
            $this->imc = $imc;
        }
    
        public function getIMC(){
            return $this->imc;
        }
    }

?>