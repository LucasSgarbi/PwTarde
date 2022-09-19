<!DOCTYPE php>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index aula </title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="Script" href="script.js" >
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body class="container-fluid">
    <div class="row">
        
            <?php

            function aula ($aula , $nome)
            {
                echo'<div class="col-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">'.$nome.'</h5>
                        <a href="'. $aula. '" class="card-link">'.$nome.'</a>
                    </div>
                    </div>
                    </div>
                    ';
            }
            aula("Array.php","Aula de Array");
            aula("funcao.php","Aula de Funções");

            ?>  

    </div>
    <div class="row">
    <?php 
     aula("exercicio.php","Exercício de fixação");
    ?>
    </div>
    
</body>
</html>
