<section id="cadastro" class="cadastro">
    <div class="card-body">
        <h1>Cadastre seus dados aqui, e vem trabalhar conosco</h1>
        <div class="card-text">
            <form class="form-cadastro" action="./action/get_cadastro.php" method="POST">

                <!-- DADOS PESSOAIS -->
                <div class="grupoA form-group">
                    <h4 class="text-left">Seus dados Pessoais :</h4>
                    <div class="form-group col-md-6">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Seu nome completo ...">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Seu email...">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="tel">Telefone:</label>
                        <input type="tel" id="tel" name="tel" class="form-control" placeholder=" (000) 99999-9999">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="data-nasc">Data de Nasc.:</label>
                        <input type="date" id="data-nasc" name="data_nasc" class="form-control" placeholder="Sua data de nascimento ...">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="rg">RG:</label>
                        <input type="text" id="rg" name="rg" class="form-control" placeholder="Seu RG...">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cpf">CPF:</label>
                        <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Seu CPF...">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cnh">CNH:</label>
                        <input type="text" id="cnh" name="cnh" class="form-control" placeholder="Sua CNH...">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Categoria :</label>
                        <select name="categoria" class="form-control">
                            <option value="categoria-C">C</option>
                            <option value="categora-D">D</option>
                        </select>
                    </div>
                </div>
                <!--DADOS ENDERECO -->
                <div class="grupoB form-group">
                    <h4 class="text-left">Seu endereço :</h4>
                    <div class="form-group col-md-6">
                        <label for="">Rua:</label>
                        <input type="text" id="rua" name="rua" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">  
                        <label for="numero">N°:</label>
                        <input type="text" id="numero" name="numero" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Bairro:</label>
                        <input type="text" id="bairro" name="bairro" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Estado:</label>
                        <input type="text" id="estado" name="estado" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Cidade:</label>
                        <input type="text" id="cidade" name="cidade" maxlength="2" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">CEP:</label>
                        <input type="text" id="cep" name="cep" class="form-control" placeholder="">
                    </div>
                </div>

                <!-- DADOS DO VEÍCULO -->
                <div class="grupoC form-group">       
                    <h4 class="text-left">Seu Veículo :</h4>
                    <div class="form-group col-md-6">
                        <label for="marca">Marca</label>
                        <input type="text" id="marca" name="marca_veiculo" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="modelo">Modelo :</label>
                        <input type="text" id="modelo" name="modelo_veiculo" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="placa">PLaca :</label>
                        <input type="text" id="placa" name="placa_veiculo" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ano_fabrica">Ano de fabricação :</label>
                        <input type="date" id="ano_fabrica" name="ano_fabrica" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="capacidade">Capacidade de Peso :</label>
                        <input type="text" id="capacidade" name="capacidade_peso" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Tipo de Báu :</label>
                        <select name="tipo_bau" class="form-control">
                            <option value="aberto">Aberto</option>
                            <option value="fechado">Fechado</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="btn_cadastrar" class="btn btn-large animated tada">Cadastrar</button>
            </form>
        </div> 
    </div>
</section>
