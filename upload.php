<?php 
$dir = "docs/"; 
// recebendo o arquivo multipart 
$file = $_FILES["arquivo"]; 
// Move o arquivo da pasta temporaria de upload para a pasta de destino 
//print_r($file);
//echo $file['name'];
/*$ext = explode('.',$file['name'][1]);
echo $ext; 
*/
preg_match("/.(txt|doc|docx|pdf|php){1}$/i", $file["name"], $ext);
      // Gera um nome unico para a imagem atraves de um HASH de criptografia em MD% e o time do servidor

    
/*
     if(($extensao != 'txt') || ($extensao != 'doc') || ($extensao != 'docx') || ($extensao != 'pdf') || ($extensao != 'php') ){
     echo "Erro, o arquivo n&atilde;o pode ser enviado formato invalido."; 
        exit;
} */
      $imagem_nome =  sha1(uniqid(time())) . "." . $ext[1];

if (move_uploaded_file($file["tmp_name"], "$dir/".$imagem_nome)) { 
    echo "Arquivo enviado com sucesso!"; 
} 
else { 
    echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
}
