<section  id="calc" class="calcRota form">
    <div class="container-fluid ">	
        <div class="card">
            <div class="card-header">
                <h1>Calcule seu frete aqui..</h1>
                <p><span class="bolding">1</span> - Calcule o seu frete, inserindo o a Origem e Destino, e clique em <span class="border-btt">CALCULAR</span>.</p>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <form onsubmit="getDistanceValue(); return false">
                        <div class="form-group">		
                            <label for="origem">Origem</label>
                            <input type="text" class="form-control" id="origin" placeholder="Endereço de Origem..."/>  
                        </div>
                        <div class="form-group">
                            <label for="destination">Destino</label>
                            <input type="text" class="form-control" id="destination" placeholder="Endereço de Destino...">
                        </div>
                        <input type="button" value="Calcular" class="btn btn-primary" onclick="getDistanceValue()"/>
                    </form> 


                    <!-- RESULTADO DA CONSULTA -->
                    <ul class="list-group" id="calRersult"></ul>

                   
                    <form action="./action/get_dados.php" method="POST">
                        <p><span class="bolding">2</span> - Após calcular a sua distância, preenche abaixo os dados e clique em <span class="border-btt">ENVIAR PEDIDO</span></p>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu Nome...">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Seu email...">
                        </div>
                        <div class="form-group">
                            <label for="tel">Telefone</label>
                            <input type="tel" class="form-control" name="tel" id="tel" placeholder="Seu telefone...">
                        </div>
                        <button type="submit" name="btn_enviar" class="btn btn-large animated tada">Enviar Pedido</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>