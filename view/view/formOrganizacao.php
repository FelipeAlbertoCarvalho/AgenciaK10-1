<div class="row">
  <div class="col-md-6 m-auto">
    <form method="POST" action="<?php echo BASE_URL; ?>organizacao/cadastrar"><br><br>
      <legend>Dados da Organização</legend><br>
      <div class="form-group">
        <label for="organização">Organização:</label>
        <select name="organizacao" id="organizacao">
          <option value="">-- selecione um tipo de organização --</option>
          <option value="campeonato">Campeonato</option>
          <option value="arbitragem">Arbitragem</option>
          <option value="time">Time</option>
        </select>
      </div>
      <div class="form-group">
        <label for="campeonato">Nome:</label>
        <input type="text" id="campeonato" name="nome" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control">
      </div>
      <div class="form-group">
        <label for="data_criacao">Data criação:</label>
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