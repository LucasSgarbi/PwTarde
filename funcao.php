<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>
    <?php
    function soma ($n1,$n2)
    {
        return $n1+$n2 ; 
    }

    function Imprimir ($texto)
    {
        echo $texto;
        echo "<br>";
    }

    function media ($n1,$n2)
    {
        return soma($n1,$n2)/2 ;
    }
    function subtracao($n1,$n2)
    {
        return $n1-$n2;
    }
    function divicao($n1,$n2)
    {
        return $n1/$n2;
    }
    function multiplicacao($n1,$n2)
    {
        return $n1*$n2;
    }
    function mod($n1,$n2)
    {
        return $n1%$n2;
    }

    Imprimir("soma de 10 e 12 = ". soma(10,12));
    Imprimir("media de 8 e 7 é =". media(8,7));

    function LendariaCalculadora($n1,$n2,$operacao)
    {
        if($operacao == "+")
        {
            Imprimir("soma de ". $n1 ." e ". $n2 ."= ". soma($n1,$n2));
        }
        elseif($operacao == "-")
        {
            Imprimir("subitração de ". $n1 ." e ". $n2 ."= ". subtracao($n1,$n2));
        }
        elseif($operacao == "*")
        {
            Imprimir("Multiplicação de ". $n1 ." e ". $n2 ."= ". multiplicacao($n1,$n2));
        }
        elseif($operacao == "/")
        {
            Imprimir("Divisão de ". $n1 ." e ". $n2 ."= ". divicao($n1,$n2));
        }
        elseif($operacao == "%")
        {
            Imprimir("Modulo de ". $n1 ." e ". $n2 ."= ". mod($n1,$n2));
        }
        elseif($operacao == "m" || $operacao == "M" )
        {
            Imprimir("Media de ". $n1 ." e ". $n2 ."= ". media($n1,$n2));
        }
        else
        {
            Imprimir("não existe essa operação");
        }

    } 

    LendariaCalculadora(9,8,"M");    
    ?>

</body>
</html>