<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtShare</title>
</head>
<body id="body">
    <form action="upload.php" enctype="multipart/form-data" method="post" id="form">
    <p>Seu nome <input type="text" name="onome"></p>
    <p>Cidade em que você mora <input type="text" name="cidade"></p>
   <p>
        <input type="file" name="meuArquivo"></p>
   
   <p> 
       <button type="submit"> Enviar Arquivo! </button>
   </p>

</form>     
</body>
</html>