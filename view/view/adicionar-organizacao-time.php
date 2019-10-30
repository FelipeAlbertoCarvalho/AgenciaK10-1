<div class="row">
  <div class="col-md-6 m-auto">
    <form method="POST" action="<?php echo BASE_URL; ?>time/cadastrar"><br><br>
      <legend>Dados do Time</legend><br>
      <div class="form-group">
        <label for="time">Nome do Time:</label>
        <input type="text" id="campeonato" name="campeonato" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email do Time(Caso Possua):</label>
        <input type="text" name="email" id="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="data_criacao">Data criação do time:</label>
        <input type="date" name="data_criacao" id="data_criacao" class="form-control">
      </div><br>

      <legend>Dados do Presidente do Time</legend><br>
      <div class="form-group">
        <label for="presidente">Nome:</label>
        <input type="text" id="presidente" name="presidente" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email (Para Efetuar Login):</label>
        <input type="text" name="email" id="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="senha">Senha (Para Efetuar Login):</label>
        <input type="password" name="senha" id="senha" class="form-control">
      </div>
      <div class="form-group">
        <label for="data_criacao">Data de Nascimento:</label>
        <input type="date" name="data_criacao" id="data_criacao" class="form-control">
      </div><br>

      <legend>Endereço</legend><br>
      <div class="form-group">
        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua" class="form-control">
      </div>
      <div class="form-group">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" class="form-control">
      </div>
      <div class="form-group">
        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" class="form-control">
      </div>
      <div class="form-group">
        <label for="cidade">Cidade:</label>
        <select name="cidade" id="cidade">
          <option value="">-- selecione uma cidade --</option>
          <option value="curitiba">Curitiba</option>
          <option value="araucaria">Araucária</option>
          <option value="Curitiba">São José dos Pinhais</option>
          <option value="Curitiba">Fazenda Rio Grande</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" class="form-control">
      </div>
    </form>
  </div>
</div>