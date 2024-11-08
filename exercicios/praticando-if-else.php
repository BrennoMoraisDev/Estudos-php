<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php 
        //regra de negocio
        // frete gratuito caso o usúario possua o cartão da loja e a compra seja acima de 100,00 caso contrário o frete custará 50,00  

      $usuarioPossuiCartaoLoja = true;
      $valorProduto = 150;
      $valorFrete = 50;
      $recebeuDesconto = false;
      $valorTotal = 0;
        
        if($usuarioPossuiCartaoLoja == true && $valorProduto >=100){
            $valorFrete =0;
           
            $recebeuDesconto = true;
        } 
        $valorTotal= $valorProduto + $valorFrete;
    

    ?>
    <h1>Detalhes do pedido</h1>
    <p>possui o cartão da loja?</p>

    <?php 
        if($usuarioPossuiCartaoLoja== true){
            echo 'Sim';
        }else{
            echo'Não';
        }


    ?>
    <p>valor da compra:</p>
    <?php 
        echo $valorProduto;
    ?>

    <p>valor do frete</p>

    <?php 
        echo$valorFrete;
    ?>
    <p>valor total:</p>

    <?php 
        echo $valorTotal;
    ?>

    <p>recebeu Desconto?</p>
    <?php 
        if($recebeuDesconto == true){
            echo 'Sim';
        } else{
          echo  'Não';
        }
        ?>

</body>

</html>,