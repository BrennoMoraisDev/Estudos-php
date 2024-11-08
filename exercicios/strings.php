<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo 'transformando caracteres em minusculo usando String to lower <br>';
    $texto = 'ola Meu e Brenno e Meu sonho e Ser um Programador';
    echo $texto. '<br>';
    echo strtolower($texto);
    echo '<hr>';
    
     echo "transformando caracteres em maiusculo usando String to upper <br>";
    echo $texto. '<br>';
    echo strtoupper($texto);
    echo '<hr>';

    echo "transformando o primeiro caracteres em maiusculo usando ucfris <br>";
    echo $texto. '<br>';
    echo ucfirst($texto);
    echo '<hr>';

    echo "contando a quantidade de caractere da string com strlen <br>";
    echo $texto. '<br>';
    echo strlen($texto);
    echo '<hr>';

    echo "substituindo a string programador por desenvovedor usando o str_replace <br>";
    echo $texto. '<br>';
    echo str_replace("Programador", 'Desenvolvedor', $texto);
    echo '<hr>';

    echo "substituindo caractere usando o substr <br>";
    echo $texto. '<br>';
    echo substr($texto, 0,length: 30).'...';
    echo '<hr>';
    ?>    




</body>
</html>