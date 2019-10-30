<br><br>
<h2 class="text-center">Deletar Time</h2>
<br>
<table class="table">
  <thead>
    <tr>
      <th> Nome </th>
      <th> Email </th>
      <th> Data de Nascimento </th>
      <th> Endereço </th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if(isset($organizacao)) {
        foreach ($organizacao as $organizacao) : ?>
        <tr>
          <td><?php echo $organizacao['nome'] ?></td>
          <td><?php echo $organizacao['email'] ?></td>
          <td><?php echo $organizacao['dataCriacao'] ?></td>
          <td><?php echo $organizacao['rua'] . " " . $organizacao['bairro'] . ", " . $organizacao['numero'] . " - " . $organizacao['cidade'] ?></td>
          <td>
            <form action="<?php echo BASE_URL; ?>time/deletar" method="POST">
              <input type="text" value="<?php echo $organizacao['id']; ?>" name="id">
              <input type="text" value="<?php echo $organizacao['id_endereco']; ?>" name="id_endereco">
              <input type="text" value="<?php echo $organizacao['id_user']; ?>" name="id_user">
              <button>Deletar</button>
            </form>
          </td>
        </tr>
    <?php endforeach; 
      } ?>
  </tbody>

</table>