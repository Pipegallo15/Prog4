!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi calculadora php</title>
</head>

<body>


    <span>Calculadoraa</span><br>
    <h2>Calculadora Con Carita</h2>

    <form><br>

        <input type="text" name="n1">
        <select name="operacion">

            <option value="sumar">sumar</option>
            <option value="restar">restar</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>

        </select>
        <input type="text" name="n2">
        <input type="submit">

    </form>

    <?php

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $op = $_GET["operacion"];

    $res;

    if ($op == "sumar") {
        $res = ($n1 + $n2);
    } else if ($op == "restar") {
        $res = ($n1 - $n2);
    } else if ($op == "multiplicar") {
        $res = ($n1 * $n2);
    } else {
        $res= ($n1 / $n2);
    }

    echo "<br>";



    

    if ($res > 0) {
        echo "la respuesta es:  " . $res;
        echo "<img src='ifeliz.png'>";
        
    } else if ($res < 0) {
        echo "la respuesta es:  " . $res;
        echo "<img src='itriste.png'>";
        
    } else {
        $res == 0;
    }

    ?>
</body>

</html>