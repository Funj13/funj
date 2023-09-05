<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="">Nome do arquivo de origem:</label>
    <input type="text" name= "OrigArquivo">

    <label for="">nome do arquivo de destino:</label>
    <input type="text" name= "DestArquivo">

    <button name= "backup" type="submit">ok</button>

    <?php
    if(isset($_POST['backup'])):
        $file = $_POST['OrigArquivo'];
        $newfile = $_POST['DestArquivo'];

        if (!copy($file, $newfile)) {
            echo "falha ao copiar $file...\n";
            
        }
    endif;
    ?>
    
</body>
</html>