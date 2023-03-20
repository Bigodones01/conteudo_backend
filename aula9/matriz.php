<h2>Matrizes</h2>
<p>
<pre>
São estrutura de dados bidimensionais,
onde é necessário informar dois indices para realizar
o acesso de uma valor.
</pre>
</p>
<br>
<p>Na prática consiste de um vetor que armazena outros vetores</p>


<?php
    $produto1 = ["nome" => "Camera", "marca" => "LGs", "preço" => 2500];
    $produto2 = ["nome" => "Notebook", "marca" => "Dell", "preço" => 5000];
    $produto3 = ["nome" => "Celular", "marca" => "samsung", "preço" => 7500];
    $armazem = [
        $produto1,
        $produto2,
        $produto3
        ];

    //imprimir todos os valores da matriz, utilizando
    //duas estruturas de repetição, uma para as linhas
    //e outra para as colunas

    for($i=0; $i<=2; $i++)
    {
        foreach ($armazem[$i] as $key => $value)
        {
            echo $value. "<br>";
        }
    }

    //outra forma
    foreach($armazem as $produto)
    {
        echo $produto ["nome"] . "<br>";
        echo $produto ["marca"] . "<br>";
        echo $produto ["preço"] . "<br>";
    }

    echo "<table border=1>";
    //outra forma
    foreach($armazem as $produto)
    {
        echo "<tr>";
        echo "<td>" . $produto ["nome"] . "<br>";
        echo "<td>" . $produto ["marca"] . "<br>";
        echo "<td>" . $produto ["preço"] . "<br>";
        echo "</tr>";
    }
    echo "</table>";
?>