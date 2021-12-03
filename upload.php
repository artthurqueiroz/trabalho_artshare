<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleupload.css">
    <title>ArtShare</title>
</head>
<body id="body">
<?php
$tmp= $_FILES['meuArquivo']['tmp_name'];
$name= $_FILES['meuArquivo']['name'];

$pessoa=$_POST['onome'];

$cidade=$_POST['cidade'];

$data=date("(d.m.y) H:i");

$nomeFinal=$pessoa."-".$cidade.$data;

$path = pathinfo($name);

$ext = $path['extension'];

$arquivo = $nomeFinal.".".$ext;

$extPer = array("png","jpg","jpeg","gif","svg");

  if(in_array($ext,$extPer)){
      move_uploaded_file($tmp,"files/".$arquivo);
      echo "<br> Arquivo enviado";
  }else{
      echo "Extensão não permitida";
  }
  ?>

</body>
</html>
