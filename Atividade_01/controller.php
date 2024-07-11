<?php

    include 'autoload_namespaces.php';

    use classes\IMC as seila;
    use classes\Paciente;
    
    $paciente1 = new Paciente("João", 24, 1.70, 65.2);
    seila::calcula($paciente1);

    echo "\nNome: ". $paciente1->getNome(). 
    "\nIdade: ". $paciente1->getIdade().
    "\nAltura: ". $paciente1->getAltura().
    "\nPeso: ". $paciente1->getPeso().
    "\nIMC: ". number_format(seila::showIMC($paciente1), 3).
    "\nClassifica: ". seila::classifica($paciente1);


?>