<br><br><br><br><br><br>
<h2 class="text-center">Alterar Banner Home</h2>
<br><br><br>
<div class="col-md-3 m-auto">
  <div class="row">
    <?php foreach ($imgBanner as $images) : ?>
      <form action="" method="post" class="col-md-3">
        <input type="hidden" name="id" value="<?php echo $images['id']; ?>">
        <button id="btnMostrarFormBanner" class="btn btn-success btn-sm" type="submit">Banner: <?php echo $images['id']; ?></button>
      </form>
    <?php endforeach; ?>
  </div>
</div>