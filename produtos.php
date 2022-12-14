<?php include"./cabecalho.php" ; ?>
    <div class="card mt-4 mb-4 ">
            <div class="card-header bg-dark text-white">Produtos</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2"><button type="button" class="btn btn-secondary">Novo Produto</button></div>
                    <div class="col-2">
                        <select name="opcao" class="form-control"> 
                            <option value="0">Todos</option>
                            <option value="1">Por Nome</option>
                            <option value="2">Por Codigo</option>
                        </select>
                     </div>
                    <div class="col-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="TextoPesquisado">
                    </div>
                    </div>
                    <div class="col-2"><button type="button" class="btn btn-secondary">Pesquisar</button></div>
                </div>
            </div>
        </div>
            <h1>Lista de Produtos</h1>
            <table class="table table-dark table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
        <tr>
            <th scope="row">1</th>
            <td>Chocolate</td>
            <td>1</td>
            <td> <a class="btn btn-danger" role="button" >Excluir</a></td>
            <td><a class="btn btn-warning" role="button" >Editar</a></td>
            <?php
            for($i=2;$i<15;$i++)
            {
                ?>
                <tr>
                    <td><?php echo $i ;?></td>
                    <td>Produto <?php echo $i ;?></td>
                    <td><?php echo $i ;?></td>
                    <td> <a class="btn btn-danger" role="button" >Excluir</a></td>
                    <td><a class="btn btn-warning" role="button" >Editar</a></td>
                    
                </tr>
                <?php 
                } 
                ?>
            
        </tr>
    </tbody>
</table>
<?php include"./rodape.php" ; ?>