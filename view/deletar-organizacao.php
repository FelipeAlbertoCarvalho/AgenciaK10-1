<br><br>
<h2 class="text-center">Deletar Organização</h2>
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
    <?php foreach ($organizacao as $organizacao) : ?>
      <tr>
        <td><?php echo $organizacao['nome'] ?></td>
        <td><?php echo $organizacao['email'] ?></td>
        <td><?php echo $organizacao['dataCriacao'] ?></td>
        <td><?php echo $organizacao['rua'] . " " . $organizacao['bairro'] . ", " . $organizacao['numero'] . " - " . $organizacao['cidade'] ?></td>
        <td>
          <form action="" method="POST">
            <input type="text" value="<?php echo $organizacao['id']; ?>">
            <button>Deletar</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>