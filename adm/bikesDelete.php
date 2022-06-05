<?php
    // Verifica se existe a variável no endereço
    if(!isset($_GET['prodID'])){// se não existir volta à página
        print "<script>top.location = 'public.php?id=2';</script>";
        exit();
    }

    $prodID = intval($_GET['prodID']);
    // intval - garante que o valor é numérico // Pega no valor de rid - valor que identifica
    // Incluir ficheiro de funções
    include_once '../functions/dbconnect.php';
    // Eliminar Ficheiros do registo
    // Pega no registo da ave selecionada
    $query = "SELECT * FROM produtos WHERE prod_id = $prodID";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0){ // Verifica se encontrou o registo pretendido 
        $row = mysqli_fetch_assoc($result);
        extract($row); // extrai valores (KEY) do array
        // Elimina o ficheiro de imagem
        unlink("../images/bike/$prod_img");
    }
    //Sintaxe da instrução MYSQL DELETE ...
    //DELETE FROM tabela WHERE condição     
    $query = "DELETE FROM produtos WHERE prod_id = $prodID"; // Elimina o registo selecionado
    $result = mysqli_query($connect, $query); // Executa a instrução MYSQL
    //die($query);
    
    if($result){ // dados foram eliminados com sucesso
        echo "<script>alert('Dados eliminados com sucesso');</script>";
        print "<script>top.location = '?id=3';</script>";
    } else {
        echo "<script>alert('ERRO!!! Dados não Eliminados...');</script>";
    }
?>