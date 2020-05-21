<?php

Class Login{
    private $email;
    private $password;

    //get e o set vai pegar o valor que deseja.
    public function getEmail(){
        return $this -> email;
    }

    // vantagem de utilizar o set é que você pode filtrar os valores.
    public function setEmail($e){
       //EX se usasse email.
       $email = filter_var($e, FILTER_SANITIZE_EMAIL);
       $this -> email = $email;
    }

    //o get ja vai mostrar o que esta em nome, o set será para a filtragem, se quiser utiliza-lo.

    public function getSenha(){
        return $this -> password;
    }

    public function setSenha($a){
        $this -> password = $a;
    }
    
    public function Entrar() {
    if ($this -> email == "testando@teste.com" and $this -> password == "12345"):
        echo "Seja bem vindo!";
    else:
        echo "Email ou senha invalido(s)";
    endif;
    }
}

$Logar = new Login();
//com o filtro no email, funções que são indisponiveis são anuladas.
$Logar -> setEmail("testando()/@teste.com");
$Logar -> setSenha("12345");
$Logar -> Entrar();
echo "\n";
echo $Logar -> getEmail() . "\n";
echo $Logar -> getSenha();