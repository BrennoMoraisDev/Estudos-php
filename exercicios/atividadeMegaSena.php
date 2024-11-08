<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //script em que gera um array de 6 números aleatórios entre 1 e 60, sem repetição, simulando o sorteio da Mega Sena

        $sorteio = [];

        while(count($sorteio)<9){
            $numero = rand(1,60);

            if(!in_array($numero, $sorteio)){
                $sorteio []= $numero;

            }
            


        }
        echo "As dezenas sorteadas foram: " . implode(", ", $sorteio);
    ?>   


</body>
</html>