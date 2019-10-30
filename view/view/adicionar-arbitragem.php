<div class="row">
  <div class="col-md-6 m-auto">
    <form method="POST" action="<?php echo BASE_URL; ?>arbitragem/cadastrarArbitragemPresidente"><br><br>
      <legend>Dados da Arbitragem</legend><br>
      <div class="form-group">
        <label for="arbitragem">Nome:</label>
        <input type="text" id="arbitragem" name="arbitragem" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email(Caso Possua):</label>
        <input type="text" name="emailArbitragem" id="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="data_criacao">Data criação:</label>
        <input type="date" name="data_criacao" id="data_criacao" class="form-control">
      </div>

      <legend>Endereço Físico Arbitragem</legend><br>
      <div class="form-group">
        <label for="ruaArbitragem">Rua:</label>
        <input type="text" id="ruaArbitragem" name="ruaArbitragem" class="form-control">
      </div>
      <div class="form-group">
        <label for="numeroArbitragem">Número:</label>
        <input type="number" name="numeroArbitragem" id="numeroArbitragem" class="form-control">
      </div>
      <div class="form-group">
        <label for="bairroArbitragem">Bairro:</label>
        <input type="text" name="bairroArbitragem" id="bairroArbitragem" class="form-control">
      </div>
      <div class="form-group">
        <label for="cidadeArbitragem">Cidade:</label>
        <select name="cidadeArbitragem" id="cidadeArbitragem">
          <option value="">-- selecione uma cidade --</option>
          <option value="curitiba">Curitiba</option>
          <option value="araucaria">Araucária</option>
          <option value="Curitiba">São José dos Pinhais</option>
          <option value="Curitiba">Fazenda Rio Grande</option>
        </select>
      </div>
      
      <br><br>

      <legend>Dados do Presidente de Arbitragem</legend><br>
      <div class="form-group">
        <label for="nomePresidente">Nome:</label>
        <input type="text" id="nomePresidente" name="nomePresidente" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email (Para Efetuar Login):</label>
        <input type="text" name="emailPresidente" id="emailPresidente" class="form-control">
      </div>
      <div class="form-group">
        <label for="senha">Senha (Para Efetuar Login):</label>
        <input type="password" name="senha" id="senha" class="form-control">
      </div>
      <div class="form-group">
        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" name="nascimento" id="nascimento" class="form-control">
      </div>
      <div class="form-group">
        <label for="rg">RG:</label>
        <input type="text" name="rg" id="rg" class="form-control">
      </div>
      <div class="form-group">
        <label for="tipo_pessoa">Tipo Pessoa:</label>
        <select name="tipo_pessoa" id="tipo_pessoa">
          <option value="">-- selecione uma cidade --</option>
          <option value="pf">Pessoa Fisica</option>
          <option value="pj">Pessoa Juridica</option>
        </select>
      </div>

      <legend>Endereço Físico Arbitragem</legend><br>
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