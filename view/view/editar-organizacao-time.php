<br><br><br>
<h2 class="text-center">Editar Time</h2>
<br><br><br>
<div class="col-md-10 m-auto">
  <div class="row">
  <?php 
      if(isset($organizacao)) {
        foreach ($organizacao as $organizacao) : ?>
        <tr>
          <td><input type="text" value="<?php echo $organizacao['nome'] ?>"></td>
          <td><input type="text" value="<?php echo $organizacao['email'] ?>"></td>
          <td><input type="text" value="<?php echo $organizacao['dataCriacao'] ?>"></td>
          <td><input type="text" value="<?php echo $organizacao['rua'] ?>"></td>
          <td><input type="text" value="<?php echo $organizacao['bairro']?>"></td>
          <td><input type="text" value="<?php echo $organizacao['numero']?>"></td>
          <td><input type="text" value="<?php echo $organizacao['cidade'] ?>"></td>
          <td><input type="text" value="<?php echo $organizacao['id_endereco'] ?>" name="id_endereco"></td>
          <td>
            <form action="" method="POST">
              <input type="text" value="<?php echo $organizacao['id']; ?>" name="id">
              <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
          </td>
        </tr>
    <?php endforeach; 
      } ?>
  </div>
</div>