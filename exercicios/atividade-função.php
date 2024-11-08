<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--1 crie uma função para calcular o imposto de renda a ser pago com base em um salario passador em parametro -->    

    <?php 
        function calcularIPRF($salario){
            $imposto = 0;
            $liquido = 0;

            if($salario <= 1903.98){
                $imposto = 0;
            }elseif ($salario>=1903.99 && $salario <= 2826.65 ){
                $imposto = ($salario/100)*7.5;
            } elseif($salario>= 2826.66 && $salario <=3751.05){
                $imposto= ($salario/100)*15;
            }elseif($salario>= 3751.06 && $salario <=4664.68){
                $imposto = ($salario/100)*22.5;
            } else{
                $imposto = ($salario/100)*27.5;
            }
            $liquido = $salario - $imposto;
            
           return "Calculo de imposto de renda baseado no salário <hr>
            Salário Bruto RS: $salario <br>
            Imposto de Renda R$: $imposto <br>
            Salário Liquido R$: $liquido
           ";
        }
            // definindo valor do salario como parametro
            
            echo calcularIPRF(5000);
    ?>
    
    








</body>
</html>