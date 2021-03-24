<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //gettype() => retorna o tipo da variável
    $valor = 10;
    $valor2 = (float) $valor; //float, double ou real
    $valor3 = (string) $valor; 
    //$valor3 = (boolean) $valor; 
    echo $valor. ' ' . gettype($valor);
    echo '<br />';
    echo $valor2. ' ' .gettype($valor2);
    echo '<br />';
    echo $valor3. ' ' .gettype($valor3);
    
    
    $valor4 = '22.12';
    $valor5 = (integer) $valor4;
    echo '<br />';
    echo $valor5. ' ' .gettype($valor5);
    ?>
</body>

</html>
