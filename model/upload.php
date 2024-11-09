<?php

function upload(){

    $diretorio = "uploads/";
    $caminho = $diretorio . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $tipoDeArquivoDeImagem = strtolower(pathinfo($caminho,PATHINFO_EXTENSION));
    
    // Checando se o arquivo de imagem é falso
    
    if(isset($_POST["submit"])) {
      $checar = getimagesize($_FILES["foto"]["tmp_name"]);
      if($checar !== false) {
        echo "O arquivo é uma imagem - " . $checar["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "O arquvio não é uma imagem.";
        $uploadOk = 0;
      }
    }
    
    // Checando se o arquivo existe
    if (file_exists($caminho)) {
      echo "Desculpe, o arquivo já existe.";
      $uploadOk = 0;
    }
    
    // Checando tamanho do arquivo
    if ($_FILES["foto"]["size"] > 500000) {
      echo "Desculpe, seu arquivo é muito grande.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($tipoDeArquivoDeImagem != "jpg" && $tipoDeArquivoDeImagem != "png" && $tipoDeArquivoDeImagem != "jpeg"
    && $tipoDeArquivoDeImagem != "gif" ) {
      echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
      $uploadOk = 0;
    }
    
    // Checando se $uploadOk está como 0
    if ($uploadOk == 0) {
      echo "Desculpe, seu arquivo não pode ser baixado.";
      return false;
    // se o arquivo estiver ok, tentar baixar
    } else {
      if (move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho)) {
        echo "O arquivo ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " obteve sucesso no download.";
        return $caminho;
      } else {
        echo "Desculpe, obtivemos um erro ao baixar sua imagem.";
        return false;
      }
    }
}

?>