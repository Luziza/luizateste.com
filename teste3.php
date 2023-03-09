<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
    $nome = "Luiza";
    echo "olá mundo a" ;
    print "$nome <br>";
    echo "<hr>";

    $nota1 = 8;
    $nota2 = 7;

    if ((($nota1 + $nota2) / 2) < 5):
        echo "reprovado";
    endif;
    if ((($nota1 + $nota2) / 2) < 7):
        echo "exame";
    else:
        echo "Aprovado";
    endif;
    
?>
</body>
</html>