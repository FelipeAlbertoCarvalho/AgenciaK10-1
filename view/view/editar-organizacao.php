<br><br><br>
<h2 class="text-center">Editar Organização</h2>
<br><br><br>
<div class="col-md-2 m-auto">
  <div class="row">
  <?php 
      if(isset($organizacao)) {
        foreach ($organizacao as $organizacao) : ?>
        <tr>
          <td>NOME<input type="text" value="<?php echo $organizacao['nome'] ?>"></td>
          <td>EMAIL<input type="text" value="<?php echo $organizacao['email'] ?>"></td>
          <td>DATA<input type="text" value="<?php echo $organizacao['dataCriacao'] ?>"></td>
          <td>RUA<input type="text" value="<?php echo $organizacao['rua'] ?>"></td>
          <td>BAIRRO<input type="text" value="<?php echo $organizacao['bairro']?>"></td>
          <td>NUMERO<input type="text" value="<?php echo $organizacao['numero']?>"></td>
          <td>CIDADE<input type="text" value="<?php echo $organizacao['cidade'] ?>"></td>
          <td>ID_END<input type="text" value="<?php echo $organizacao['id_endereco'] ?>" name="id_endereco"></td>
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