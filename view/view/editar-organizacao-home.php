<br><br>
<h2 class="text-center">Alterar Organização Home</h2>
<br>
<div class="col-md-8 m-auto">
  <div class="row">
    <?php foreach ($organizacao as $org) : ?>
      <form action="" method="POST" class="col-md-4">
        <input type="hidden" name="id" value="<?php echo $org['id']; ?>">
        <button id="btnMostrarFormBanner" class="btn btn-success btn-sm" type="submit" name="btnAltHome">Organização <?php echo $org['nome']; ?></button>
      </form>
    <?php endforeach; ?>
  </div>
</div>