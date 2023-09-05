<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Criar o arquivo Texto</h1>

    <label for="">Nome do Arquivo:</label>
    <input type="text" name= "criarArquivo">
<br>
    <button type="submit" name= "criarArq" >ok</button> <br>

    <?php
        if(isset($_POST['criarArq'])):

            $arquivo = fopen ( $_POST['criarArquivo'] , 'w' );

            if ( $arquivo == false) die ( 'Não foi possível criar o arquivo. ' ); 
            
            header('Location: index.html');
        endif;

        
    ?>
    
</body>
</html>