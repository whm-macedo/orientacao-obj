<?php

include "cliente.class.php";
include "conexao.php";


class DAOCliente{
    public function cadastrar(Cliente $cliente){
        $sql = "INSERT INTO cliente VALUE (default, :nome, :telefone, :email, :cpf)";

        $con = Conexao:: getInstance()->prepare($sql);
        $con->bindValue(":nome", $cliente->getNome());
        $con->bindValue(":telefone", $cliente->getTelefone());
        $con->bindValue(":email", $cliente->getEmail());
        $con->bindValue(":cpf", $cliente->getCpf());
        $con->execute();

        echo "Cadastrado com sucesso";
    }
}

?>

<?php

try{
    $obj = new Cliente();
    $obj->setNome("Teste Cliente");
    $obj->setTelefone("21-4444-8888");
    $obj->setEmail("teste@email.com");
    $obj->setCpf("123.654.987.96");

    $DAO = new DAOCliente();
    $DAO->cadastrar($obj);    
}catch(Exception $e){
    echo $e->getMessage();
}


?>