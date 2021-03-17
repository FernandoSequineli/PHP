<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
        //STRING
        $nome = "Fernando";
        $idade = 29;
        $peso = 82.5;
        $fumante_sn = false; // (true = 1) (false = vazio)
        if ($fumante_sn == true){
            $fumante = 'SIM';
        }else {
            $fumante = "NAO";
        }
        echo '<br>';
        echo "Ola $nome, vi que o seu peso e $idade"
    ?>

    <h2>Ficha cadastral</h2>
    <br>
    <!--<p>Nome: <?php echo $nome ?></p> -->
    <p>Nome: <?= $nome ?>  </p>
    <p>Idade: <?= $idade ?>  </p>
    <p>Peso: <?= $peso ?>  </p>
    <p>Fumante: <?= $fumante ?>  </p>
    <p> <?php echo 'Ola ' .$nome . ' Tudo bem?'  ?></p>



</body>
</html>