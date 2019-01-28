<?php

require_once("config.php");

// carrega um usuário
//$user = new Usuario();
//$user->loadById(3);
//echo $user;

// carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

// carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","12345");
//echo $usuario;

// criando um novo usuário
//$aluno = new Usuario("aluno", "12345");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor","32121435wr45vc");
echo $usuario;


?>