<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>

    <h1 id="main-title">Petshop - Lista de Atendimentos</h1>

    <?php if(count($atendimento) > 0): ?>
      <table class="table" id="atendimento-table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do Cachorro</th>
            <th scope="col">Contato</th>
            <th scope="col">Raça</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($atendimento as $registro): ?>
            <tr>
              <td scope="row" class="col-id"><?= $registro["id"] ?></td>
              <td><?= $registro["cachorro"] ?></td>
              <td><?= $registro["contato"] ?></td>
              <td><?= $registro["raca"] ?></td>
              <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $registro["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $registro["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $registro["id"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p id="empty-list-text">
        Ainda não há registros de atendimentos,
        <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.
      </p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>

