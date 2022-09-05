<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <?php 
        $ar = array(20, 15, 30, 17, 8);
        function imprime($a)
        {
            echo "<pre>";
            print_r($a);
            echo "</pre>";  
        }  
        imprime($ar);

    
        function soma($a)
        {
            $soma = 0;
           for($i=0; $i < count($a); $i++)
            {
                $soma += $a[$i];   
            }
            return $soma  ;
        }
        echo soma($ar)."<br>";

        
        for($i=1; $i < 11; $i++)
        {
            echo "144 * ".$i.  "=  ".$i*144;
            echo  '<br>';
        }
        for($i=251; $i < 545; $i++)
        {
            if ($i%2==0 )
            {
            echo $i;
            echo ' ';  
            }
        }
        $ar[5] = rand(-10,10);
        $ar[6] = rand(-10,10);
        $ar[7] = rand(-10,10);

        echo "<pre>";
        print_r($ar);
        echo "</pre>";

        function porcento ($por , $nun )
        {
            $por1 = 0;


            $por1 = $nun* ($por/100);

            echo $por. " por cento de ". $nun ." = ". $por1; 
        }
        porcento(rand(0,100),rand(0,1000));
            $positivo = 0;
            $negativo = 0;
            $par = 0;
            $inpar = 0;
        for($i=0; $i < count($ar); $i++)
        {
            
            if($ar[$i]>0)
            {
                $positivo += 1;
            }
            if($ar[$i]<0)
            {
                $negativo += 1;
            }
            if($ar[$i]%2==0)
            {
                $par += 1;
            }
            else 
            {
                $inpar += 1;
            }
            
        }
        echo "<br> pares =".$par ." impares =".$inpar ." positivo =".$positivo . " negativo =".$negativo . "<br>"  ;

        
        echo soma($ar)/8




    ?>
    

</body>
</html>