<?php

class Cliente{
    
    private $email;
    
 
    public function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $this->email = $email;
    }else {
        throw new Exception ('E-mail Invalido');
    }
    }
    public function getEmail(){
        return $this->email;
    }
    public static function mensagem(){
        echo "Olá Mundo! <br/>";
    }
}
    Cliente::mensagem();

    $obj = new Cliente();
    $obj->setEmail("william@email.com"); // com encapsulamento
    echo $obj->getEmail();
    echo "<br/>";
    // a variavel tem que ser public
   // $obj->email = "william@email.com"; // sem encapsulamento
    //echo $obj->email;


?>