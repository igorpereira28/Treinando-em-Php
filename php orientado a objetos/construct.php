<?php

Class Login{
    private $email;
    private $password;
    private $nome;

    //construct ja é aberto quando acrescenta o nome do objeto em new "nome do objeto".
    public function __construct($email, $password, $nome){
        $this -> setEmail($email);
        $this -> setSenha($password);
        $this -> nome = $nome;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function setEmail($e){
       $email = filter_var($e, FILTER_SANITIZE_EMAIL);
       $this -> email = $email;
    }

    public function getSenha(){
        return $this -> password;
    }

    public function setSenha($a){
        $this -> password = $a;
    }


    public function getNome(){
        return $this -> nome;
    }

    public function setNome($b){
        $this -> nome = $b;
    }
    
    public function Entrar() {
    if ($this -> email == "josias@jo.com" and $this -> password == "12345"):
        echo "Seja bem vindo!";
    else:
        echo "Email ou senha invalido(s)";
    endif;
    }
}

/*
como acrescentou a função construct, ja pode acrescentar as informações em sequencia ao invés de parte
por parte
*/
$Logar = new Login("josias@jo.com", "12345", "Josias");
$Logar -> Entrar();
echo "\n";
echo $Logar -> getEmail() . "\n";
echo $Logar -> getSenha() . "\n";
echo $Logar -> getNome();