<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="">Nome do arquivo:</label>
    <input type="text" name= "arquivo">
    <label for="">Digite o Texto:</label>
    <input type="text" name= "texto">
    <button name= "enviar" type="submit">Cadastrar</button>

<?php
    

        if(isset($_POST['enviar'])):

            $arquivo = $_POST['arquivo'];

            $nome = $_POST['texto'];
            if(!file_exists($arquivo))
            {
                $arquivo = fopen($arquivo, "w");
            }
            else{
                $arquivo = fopen($arquivo, "a");   
            }
            fwrite($arquivo, $nome. "\n");
            fclose($arquivo);
            
        endif;
    
?>
</body>
</html>