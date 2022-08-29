<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $carros = array();
    $carros = ["BMW","Gol","Saveiro","Hilux"];
    echo "<ul>";
    for ($i = 0;$i < count($carros);$i++)
    {
        echo "<li> $carros[$i] </li>";
    }
    echo "</ul>";
    echo "<pre>";
    print_r($carros);
    echo "</pre>";

    $nomes = array("Fernando","Isabela","Sabrina","Renato");
    echo "<pre>";
    print_r($nomes);
    echo "</pre>";

    array_push($nomes,"Bruno");
    echo "<pre>";
    print_r($nomes);
    echo "</pre>";

    $nomes[140]= "Robson";
    echo "<pre>";
    print_r($nomes);
    echo "</pre>";

    array_push($nomes,"Jorge");
    echo "<pre>";
    print_r($nomes);
    echo "</pre>";
    
    
    $nomes[5]= "Julia";
    echo "<pre>";
    print_r($nomes);
    echo "</pre>";

    array_push($nomes,"Lucas");
    echo "<pre>";
    print_r($nomes);
    echo "</pre>";
    
    $carros["Eletricos"] = "Tesla";

    echo "<pre>";
    print_r($carros);
    echo "</pre>";

    $cadastro = array();
    $pessoa1 = array("Id" => 1 , "Nome" => "Fer" , "CPF" => "000.000.000-01");
    $pessoa2 = array("Id" => 2 , "Nome" => "Lucas" , "CPF" => "000.000.000-02");
    $pessoa3 = array("Id" => 3 , "Nome" => "Carlos" , "CPF" => "000.000.000-03");

    $cadastro["Cliente"]=$pessoa1;
    array_push($cadastro, $pessoa2);
    array_push($cadastro, $pessoa3);

    echo "<pre>";
    print_r($cadastro);
    echo "</pre>";
$num = array();
for($i=0 ;$i<10;$i++)
{
    $num[$i] =rand(-10,10);
}
    echo "<pre>";
    print_r($num);
    echo "</pre>";

$positivo = 0;
$negativo = 0;
for($i=0 ;$i<10;$i++)
{
    if($num[$i]> 0)
    {
        $positivo++;
    }
    else{
        $negativo++;
    }
}
echo "negativos:$negativo Positivo : $positivo <br>"

?>
<a href="index.php">Voltar</a>
</body>
</html>