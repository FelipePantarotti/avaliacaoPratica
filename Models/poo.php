<?php

abstract class Funcionario{
    protected $nome;
    protected $email;
    protected $salario;

    public function nome(){
        $this->$nome;
    }

    public function email(){
        $this->$email;
    }

    public function salario(){
        $this->salario;
    }
}

?>