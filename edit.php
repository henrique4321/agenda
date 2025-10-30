<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar atendimento</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $atendimento['id'] ?>">

      <div class="form-group">
        <label for="cachorro">Nome do cachorro:</label>
        <input type="text" class="form-control" id="cachorro" name="cachorro" placeholder="Digite o nome do cachorro" value="<?= $atendimento['cachorro'] ?>" required>
      </div>

      <div class="form-group">
        <label for="contato">Telefone do contato:</label>
        <input type="text" class="form-control" id="contato" name="contato" placeholder="Digite o telefone do dono" value="<?= $atendimento['contato'] ?>" required>
      </div>

      <div class="form-group">
        <label for="raca">Raça do animal:</label>
        <input type="text" class="form-control" id="raca" name="raca" placeholder="Digite a raça do cachorro" value="<?= $atendimento['raca'] ?>" required>
      </div>

      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>

