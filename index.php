<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>COMPRA PRODUTO</legend>
        <form action="back/back.php" method ="POST">
            <label for="">nome</label>
            <input type="text" name="nome_cli" required>
            <label for="">Celular</label>
            <input type="text" name="celular_cli" required>
            <input type="submit">
        </form>
    </fieldset>    



</body>
</html>