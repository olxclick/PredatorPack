<link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="">
            <div class="page-title">
            <div class="w3-container w3-padding-64 w3-center w3-opacity w3-black">
            <h1 class="w3-title">Catálogo</h1>
            </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                  <button type='button' onclick='location.href="bikesAdd.php";' class='btn'>Adicionar Produto</i></button>
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
                          <th style='width: 5%; text-align: center; vertical-align: middle'>Foto</th>
                          <th style='width: 5%; text-align: center; vertical-align: middle'>Nome</th>
                          <th style='width: 5%; text-align: center; vertical-align: middle'>Descrição</th>
                          <th style='width: 5%; text-align: center; vertical-align: middle'>Preço</th>
                          <th style='width: 5%; text-align: center; vertical-align: middle'>Ferramentas</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                          //Incluir ficheiro de funções
                            include_once '../functions/dbconnect.php';
                          //Cria a conexão à BD
                          //Criar Mysql necessário à listagem dos registos da tabela4
                          //Sintaxe de instrução MYSQL SELECT...
                          //SELECT campo1, campo2,... FROM tabela
                          $query = "SELECT prod_id, prod_nome, prod_desc, prod_price, prod_img FROM produtos";
                          $result = mysqli_query($connect, $query); // Executa a instrução MYSQL
                          //Verificar se foram encontrados registos
                          if (mysqli_num_rows($result) != 0) {
                              //Foram encontrados registos
                              while($row = mysqli_fetch_assoc($result)) {
                                extract($row);
                                echo "<tr>
                                            <td style='width: 5%; text-align: center; vertical-align: middle'><img src='../images/bike/$prod_img' width='100'></td>
                                            <td style='width: 5%; text-align: center; vertical-align: middle'><b>$prod_nome</b></td>
                                            <td style='width: 5%; text-align: center; vertical-align: middle'>$prod_desc</td>
                                            <td style='width: 5%; text-align: center; vertical-align: middle'>$prod_price €</td>
                                            <td style='width: 5%; text-align: center; vertical-align: middle'>
                                            <button type='button' style='bgcolor:red' onclick='location.href=\"?id=4&prodID=$prod_id\";' class='btn btn-round btn-danger'><i class='fa fa-trash-o'></i></button>
                                            </td>   
                                       </tr>";
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