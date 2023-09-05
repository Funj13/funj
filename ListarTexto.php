<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listar Texto</h1>

    <label for="">Nome do arquivo:</label>
    <input type="text" name= "">
    <button name= "listar" type="submit">listar</button>

    <?php

        if(isset($_POST['listar'])):
                if(file_exists($arquivo))
                {
                    $arquivo = fopen($arquivo, "r");
                }
                else
                {
                    echo("Arquivo n existe ");
                }
                while (!feof($arquivo))
                {
                    echo fgets($arquivo);
                }
                fclose($arquivo);
                header('Location: index.html');
        endif;
        
    ?>

</body>
</html>