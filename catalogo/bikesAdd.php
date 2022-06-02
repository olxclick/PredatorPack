<?php
    
    if(isset($_POST['bike-marca'])) {
      //Incluir ficheiro de funções
      include_once '../functions/functions.php';
      //Tratamento das variáveis do formulário
      $bikeMarca = addslashes($_POST['bike-marca']);
      $bikeModelo = addslashes($_POST['bike-modelo']);
      $bikePreco = intval($_POST['bike-preco']);
      $fileName = createFileName();
      $fileExtension = getExtension("Image");
      $image = "$fileName.$fileExtension";
      uploadImage("Image", $image, "bike");

      // INSERT INTO tabela (campo1, campo2, ...) VALUES(valor1, valor2, ...)
      $query = "INSERT INTO produtos (prod_nome, prod_desc, prod_price, prod_img) VALUES('$bikeMarca','$bikeModelo', $bikePreco,'$image')";
      $result = mysqli_query($connect, $query); //Executa a instrução MYSQL

      if($result) {
        echo "<script>alert('Dados guardados com sucesso');</script>";
        print "<script>top.location = 'bikes.php';</script>";
      }
      else {
        echo "<script>alert('ERRO!!! Dados não guardados...');</script>";
      }

    }
?>

<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Adicionar Produto</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Formulário <small>Preencha o formulário com os dados do produto</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br/>
                  <form action="" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="bike-marca">Nome<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="bike-marca" name="bike-marca" required class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="bike-modelo">Descrição<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="bike-modelo" name="bike-modelo" required class="form-control">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="bike-preco">Preço<span class="required">*</span>
                      </label>
                      <div class="col-md-2 col-sm-2">
                        <input class="form-control" type="number" id="bike-preco" name="bike-preco">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align"> Imagem <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="file" name="Image" id="Image" required/>
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="button">Voltar</button>
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