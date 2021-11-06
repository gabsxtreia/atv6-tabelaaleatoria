<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="imagem/png" href="LogoTabela-ICO.ico">
    <title>Tabela de números randomizados!</title>
</head>
<center>
    <body bgcolor="F9EAC3">
        <h1>Tabela de números randômicos!</h1>
        <?php
        $par=0;
        $impar=0;
        echo '<table border="10">';
        for($cont=0; $cont<100; $cont++){
            $numrandom=rand(0,100);
            $array[$cont]=$numrandom;
            if($numrandom % 2 == 0){
                $par++;
            }else{
                $impar++;
            }
        }
        if($par>$impar){
            asort($array);
            echo "A quantidade de números PARES (azuis) é maior que a de números ÍMPARES (vermelhos). Devido à isso, a tabela está em ordem crescente!<br>";
            echo "<br>";
        }elseif($impar>$par){
            arsort($array);
            echo "A quantidade de números ÍMPARES (vermelhos) é maior que a de números PARES (azuis). Devido à isso, a tabela está em ordem decrescente!<br>";
            echo "<br>";
        }else{
            echo "A quantidade de números PARES (azuis) e ÍMPARES (vermelhos) são iguais! Devido à isso, ocorrerá um novo sorteio em 5 segundos!<br>";
            echo "<br>";
            echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
        }
        foreach($array as $numeros){
            if($numeros % 2 == 0){
                echo "<td style='background-color: blue'>$numeros</td>";
            }else{
                echo "<td style='background-color: red'>$numeros</td>";
            }
        }
        echo "</table>";
        echo "<br>";
        echo "Quant. de núms. PARES (azuis): ".$par."<br>";
        echo "Quant. de núms. ÍMPARES (vermelhos): ".$impar."<br>";
        ?>
        <br><div><img src="LogoTabela-ICO.ico" alt="Logo Tabela 10x10!">© 2021 Tabela 10x10 - by @gabstroeher</div>
    </body>
</center>
</html>