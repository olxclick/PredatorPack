<?php

$prodID = intval($_GET['prodID']);
include_once '../functions/dbconnect.php';

$query2 = "SELECT prod_id, prod_nome, prod_desc, prod_price, prod_img FROM produtos WHERE prod_id = $prodID";
$result2 = mysqli_query($connect, $query2); // Executa a instrução MYSQL

if (mysqli_num_rows($result2) != 0) {
  //Foram encontrados registos
  while($row = mysqli_fetch_assoc($result2)) {
    extract($row);
  }
}


    if(isset($_POST['bike-marca'])) {
      //Incluir ficheiro de funções

      //Tratamento das variáveis do formulário
      $bikeMarca = addslashes($_POST['bike-marca']);  // NOME DO PRODUTO
      $bikeModelo = addslashes($_POST['bike-modelo']); // DESCRIÇÃO DO PRODUTO
      $bikePreco = intval($_POST['bike-preco']); //PREÇO DO PRODUTO
      $fileName = createFileName();
      $fileExtension = getExtension('Image');
      $image = "$fileName.$fileExtension";
      uploadImage('Image', $image, 'bike');


      // INSERT INTO tabela (campo1, campo2, ...) VALUES(valor1, valor2, ...)
      $query = "UPDATE `produtos` SET `prod_nome` = '$bikeMarca', `prod_desc` = '$bikeModelo', `prod_price` = '$bikePreco', `prod_img` = '$image' WHERE `prod_id` = '$prodID'";
      $result = mysqli_query($connect, $query); //Executa a instrução MYSQL
      unlink("../images/bike/$prod_img");
      if($result) {
        echo "<script>alert('Dados guardados com sucesso');</script>";
        print "<script>top.location = 'index.php?id=3';</script>";
      }
      else {
        echo "<script>alert('ERRO!!! Dados não guardados...');</script>";
      }
    }
      
?>
<div class=''>
            <div class='page-title'>
              <div class='title_left'>
              <div class='w3-container w3-padding-64 w3-center w3-opacity w3-black'>
            <h1 class='w3-title'>Editar Produto</h1>
            </div>
              </div>
            </div>
            
            <div class='clearfix'></div>

            <div class='row'>
              <div >
                <div class='x_panel'>
                  <div class='x_title'>
                  <div class='clearfix'></div>
                </div>
                <div class='x_content'>
                  <br/>
                  <form action='' method='post' enctype='multipart/form-data' id='demo-form2' data-parsley-validate class='form-horizontal form-label-left'>
                    <div>
                    &nbsp;
                      <label class='col-form-label col-md-3 col-sm-3 label-align' for='bike-marca'>Nome<span class='required'></span>
                      </label>
                      <div class='col-md-6 col-sm-6 '>
                        <input id='bike-marca' value='&nbsp;<?php echo $prod_nome?>' name='bike-marca' required>
                      </div>
                    </div>
                    <div>
                    &nbsp;
                      <label class='col-form-label col-md-3 col-sm-3 label-align' for='bike-modelo'>Descrição<span class='required'></span>
                      </label>
                      <div class='col-md-6 col-sm-6'>
                        <input id=bike-modelo value='&nbsp;<?php echo $prod_desc?>'name=bike-modelo required></input>
                      </div>
                    </div>

                    <div>
                    &nbsp;
                      <label class='col-form-label col-md-3 col-sm-3 label-align' for='bike-preco'>Preço<span class='required'></span>
                      </label>
                      <div class='col-md-2 col-sm-2'>
                        <input value='&nbsp;<?php echo $prod_price?>'id='bike-preco' name='bike-preco'>
                      </div>
                    </div>

                    <div>
                    &nbsp;
                      <label class='col-form-label col-md-3 col-sm-3 label-align'>Imagem<span class='required'></span></label>
                      <div class='col-md-6 col-sm-6 '>
                          <input type='file' name='Image'id='Image' required/>
                      </div>
                    </div>

                    <br><br>
                    <div>
                    &nbsp;
                      <div class='col-md-6 col-sm-6 offset-md-3'>
                        <button class='btn btn-primary' type='button' onclick="location.href='../adm/index.php?id=3'">Voltar</button>
                        <button type='submit' class='btn btn-success'>Guardar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>