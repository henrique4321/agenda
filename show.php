<?php
  include_once("templates/header.php");
?>
  <div class="container" id="view-atendimento-container"> 
    <?php include_once("templates/backbtn.html"); ?>
    
    <h1 id="main-title"><?= $atendimento["cachorro"] ?></h1>
    
    <p class="bold">Contato:</p>
    <p class="form-control"><?= $atendimento["contato"] ?></p>
    
    <p class="bold">Raça do animal:</p>
    <p class="form-control"><?= $atendimento["raca"] ?></p>
  </div>
<?php
  include_once("templates/footer.php");
?>


