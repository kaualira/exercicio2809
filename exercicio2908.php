<?php 

    $idade = filter_input(INPUT_POST,"idade");

    if ($idade < 16) {
        echo "Não pode Votar";
    } else if ( $idade >= 16 && $idade <= 18) {
        echo "Voto facultativo";
    } else if ($idade >= 19 && $idade <= 65) {
        echo "Voto obrigatorio";
    } else if ($idade > 65 && $idade <= 120) {
        echo "O voto é facultativo";
    } else {
        echo "";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        <label>Idade: <input type="number" name="idade"/></label><br>
        <input type="submit" name="btnEnviar" value="Enviar">
    </form>
</body>
</html>