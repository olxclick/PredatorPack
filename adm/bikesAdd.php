<?php
    
    if(isset($_POST['bike-marca'])) {
      //Incluir ficheiro de funções
      include_once '../functions/dbconnect.php';
      //Tratamento das variáveis do formulário
      $bikeMarca = addslashes($_POST['bike-marca']);  // NOME DO PRODUTO
      $bikeModelo = addslashes($_POST['bike-modelo']); // DESCRIÇÃO DO PRODUTO
      $bikePreco = intval($_POST['bike-preco']); //PREÇO DO PRODUTO
      $fileName = createFileName();
      $fileExtension = getExtension("Image");
      $image = "$fileName.$fileExtension";
      uploadImage("Image", $image, "bike");

      // INSERT INTO tabela (campo1, campo2, ...) VALUES(valor1, valor2, ...)
      $query = "INSERT INTO produtos (prod_nome, prod_desc, prod_price, prod_img) VALUES('$bikeMarca','$bikeModelo', $bikePreco,'$image')";
      $result = mysqli_query($connect, $query); //Executa a instrução MYSQL
      if($result) {
        echo "<script>alert('Dados guardados com sucesso');</script>";
        print "<script>top.location = 'index.php?id=3';</script>";
      }
      else {
        echo "<script>alert('ERRO!!! Dados não guardados...');</script>";
      }
    }
?>

<link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS/form.css">
<div class="">
            <div class="page-title">
              <div class="title_left">
              <div class="w3-container w3-padding-64 w3-center w3-opacity w3-black">
            <h1 class="w3-title">Adicionar Produto</h1>
            </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br/>
                  <form action="" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="bike-marca">Nome<span class="required"></span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="bike-marca" name="bike-marca" required class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="bike-modelo">Descrição<span class="required"></span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <textarea id=bike-modelo name=bike-modelo></textarea>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="bike-preco">Preço<span class="required"></span>
                      </label>
                      <div class="col-md-2 col-sm-2">
                        <input class="form-control" type="number" id="bike-preco" name="bike-preco">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Imagem<span class="required"></span></label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="Image" id="Image" required/>
                      </div>
                    </div>

                    <br><br>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="button" onclick="location.href='../adm/index.php?id=3'">Voltar</button>
                        <button class="btn btn-primary" type="reset">Limpar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>