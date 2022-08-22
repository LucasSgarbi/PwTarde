<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css".css">
    <link rel="Script" href="script.js" >
</head>
<body>
    <?php
    echo "<h1> Meu HTML </h1>";

    $nome= "Lucas";
    $idade = 20 ;
    $altura = 1.77 ;
    $encalhado = true;
    
    $p1=8;
    $p2=7.5;
    CONST Nomecompleto = "Lucas Sgarbi Aravéchia";
    echo Nomecompleto;
    echo "<br>";
    $media = ($p1 + $p2)/2;
    if($media >= 6)
    {
        echo "Aprovado";
    }
    else
    {
        echo "Reprovavel";
    }
    echo "<br>";
// Concatenar é . 

   for($i =1 ; $i< 5197 ; $i++)
    {
        if($i%2==0)
        {
            echo $i. "\n";
        }
    }

    ?>

</body>

