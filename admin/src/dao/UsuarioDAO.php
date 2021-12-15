<?php

// import model
require_once __DIR__ . "/../model/Autor.php";
require_once __DIR__ . "/../model/Usuario.php";

// import dao
require_once "ConexaoBD.php";
require_once "GeneroDAO.php";
require_once "AutorDAO.php";
require_once "EditoraDAO.php";



class UsuarioDAO
{
  function cadastrarUsuario(Usuario $usuario)
  {
    $usuario->setPassword(md5($usuario->getPassword()));

    $conexao = ConexaoBD::getConexao();

    $sql = "SELECT login
      FROM usuario
      WHERE login = '{$usuario->getLogin()}'";

    $stmt = $conexao->query($sql);

    $stmt = $stmt->fetchColumn();

    if (!$stmt) {
      $sql = "INSERT INTO Usuario(login,password)
      VALUES('{$usuario->getLogin()}','{$usuario->getPassword()}')";

      $conexao->exec($sql);

      return 1;
    } else {
      return 0;
    }
  }

  function logarUsuario(String $login, String $senha)
  {
    $conexao = ConexaoBD::getConexao();

    $senha = md5($senha);

    $sql = "SELECT id
    FROM usuario
    WHERE login='{$login}' and password='{$senha}'";

    $stmt = $conexao->query($sql);

    return $stmt->fetchColumn();
  }

  function alterarUsuario($id, $senhaAnt, $senhaNov)
  {
    $conexao = ConexaoBD::getConexao();

    $senhaAnt = md5($senhaAnt);
    $senhaNov = md5($senhaNov);

    $sql = "SELECT password
      FROM usuario
      WHERE id = '{$id}'";

    $stmt = $conexao->query($sql);
    $ver = $stmt->fetchColumn();;
    if ($ver == $senhaAnt) {
      $sql = "UPDATE usuario
        SET password='{$senhaNov}'
        WHERE id = '{$id}'";
      return $conexao->exec($sql);
    } else {
      return 0;
    }
  }

  function listarUsuarios()
  {
    $conexao = ConexaoBD::getConexao();

    $sql = "SELECT id, login
      FROM usuario
      ORDER BY id";

    $stmt = $conexao->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function pesquisarUsuario(String $pesquisa)
  {
    $conexao = ConexaoBD::getConexao();

    $sql = "SELECT id, login
      FROM usuario
      WHERE login LIKE '%{$pesquisa}%'
      ORDER by id";

    $stmt = $conexao->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function removerUsuario(String $id, String $password)
  {
    $conexao = ConexaoBD::getConexao();

    $password = md5($password);
    $sql = "SELECT login
      FROM usuario
      WHERE  id = '{$id}' and password = '{$password}'";

    $stmt = $conexao->query($sql);
    if ($stmt->fetchColumn()) {
      $sql = "DELETE FROM USUARIO
      WHERE  id = '{$id}'";

      $conexao->exec($sql);

      return 1;
    } else {
      return 0;
    }
  }
}
