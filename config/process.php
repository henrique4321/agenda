<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

// MODIFICAÇÕES NO BANCO
if (!empty($data)) {

  // Criar registro
  if ($data["type"] === "create") {

    $cachorro = $data["cachorro"];
    $contato = $data["contato"];
    $raca = $data["raca"];

    $query = "INSERT INTO atendimento (cachorro, contato, raca) 
              VALUES (:cachorro, :contato, :raca)";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":cachorro", $cachorro);
    $stmt->bindParam(":contato", $contato);
    $stmt->bindParam(":raca", $raca);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Registro criado com sucesso!";
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "Erro: $error";
    }

  } else if ($data["type"] === "edit") {

    $cachorro = $data["cachorro"];
    $contato = $data["contato"];
    $raca = $data["raca"];
    $id = $data["id"];

    $query = "UPDATE atendimento 
              SET cachorro = :cachorro, contato = :contato, raca = :raca 
              WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":cachorro", $cachorro);
    $stmt->bindParam(":contato", $contato);
    $stmt->bindParam(":raca", $raca);
    $stmt->bindParam(":id", $id);

    try {
      $stmt->execute();
      $_SESSION["msg"] = "Registro atualizado com sucesso!";
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "Erro: $error";
    }

  } else if ($data["type"] === "delete") {

    $id = $data["id"];

    $query = "DELETE FROM atendimento WHERE id = :id";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    
    try {
      $stmt->execute();
      $_SESSION["msg"] = "Registro removido com sucesso!";
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "Erro: $error";
    }

  }

  // Redirecionar para a página inicial
  header("Location: " . $BASE_URL . "index.php");

} else {

  $id = null;

  if (!empty($_GET)) {
    $id = $_GET["id"];
  }

  // Retorna um registro específico
  if (!empty($id)) {

    $query = "SELECT * FROM atendimento WHERE id = :id";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $atendimento = $stmt->fetch();

  } else {

    // Retorna todos os registros
    $atendimento = [];

    $query = "SELECT * FROM atendimento";

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $atendimento = $stmt->fetchAll();
  }
}

// FECHAR CONEXÃO
$conn = null;

?>

