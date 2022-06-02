<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Catálogo de Produtos</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                   	<button type="button" onclick="href='bikesAdd.php'" class="btn btn-round btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar Produto</button>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_content">
                  		<div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Foto</th>
                          <th>Nome</th>
                          <th>Descrição</th>
                          <th>Preço</th>
                          <th>Ferramentas</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                          //Incluir ficheiro de funções
                            include_once '../functions/functions.php';
                          //Cria a conexão à BD
                            $link = connection_db();
                          //Criar Mysql necessário à listagem dos registos da tabela4
                          //Sintaxe de instrução MYSQL SELECT...
                          //SELECT campo1, campo2,... FROM tabela
                          $query = "SELECT prod_id, prod_nome, prod_desc, prod_price, prod_img FROM produtos";
                          $result = mysqli_query($link, $query); // Executa a instrução MYSQL
                          //Verificar se foram encontrados registos
                          if (mysqli_num_rows($result) != 0) {
                              //Foram encontrados registos
                              while($row = mysqli_fetch_assoc($result)) {
                                extract($row);
                                echo " <tr>
                                            <td><img src='../images/bike/$prod_img' width='100'></td>
                                            <td style='text-align: center; vertical-align: middle'><b>$prod_nome</b></td>
                                            <td style='text-align: center; vertical-align: middle'>$prod_desc</td>
                                            <td style='text-align: center; vertical-align: middle'>$prod_price €</td>
                                            <td style='width: 100px; vertical-align: middle; text-align: center;'>

                                                                <button type='button' onclick='location.href=\"?id=23&bikeID=$bike_id\";' class='btn btn-round btn-danger'>&nbsp;&nbsp;<i class='fa fa-trash-o'></i>&nbsp;&nbsp;</button>
                                                                </td>
                                            
                                      </tr> ";
                              }

                          }
                          else {
                            echo "<tr>
                          <td colspan='6'>Desculpe, mas não existem registos...</td>
                        </tr>";
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
                  </div>
                </div>
              </div>
            </div>
          </div>