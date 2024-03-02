<?php

    namespace classes;

    class Pessoa {
        private String $nome;
        private int $idade; 
        private float $altura, $peso;

        public function __construct($nome, $idade, $altura, $peso){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->peso = $peso;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome(String $nome){
            $this->nome = $nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade(int $idade){
            $this->idade = $idade;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura(float $altura){
            $this_altura = $altura;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso(float $peso){
            $this->peso = $peso;
        }
    }

?>