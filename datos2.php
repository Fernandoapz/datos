<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body >
    <form  method="POST" name="fernandoapz">
        <h1 >Ingresar 3 calificaciones<h1>
        <h2 >Si este trabajo 8 horas diarios y gana 30 soles la hora.<br>
        <h2 >¿Cuanto Seria en un dia?<br>
        <h2 >¿Cuanto seria en una semana?<br>
        <h2 >¿Cuanto sería en 15 dias?<br><br>
        <input type="submit" name="btnresul" value="Calcular">
    </form>
    <?php
    if(isset($_POST["btnresul"]))
        $var1 = 8;
        $var2 = 7;
        $var3 = 15;
        $var4 = 30;
        echo "<h1>Resultado</h1>";
        echo "Salario de un dia: ".($var1 * $var4)."<br><br>";
        echo "Salario de un semana: ".($var1 * $var4 * $var2)."<br><br>";
        echo "Salario en 15 dias: ".($var1 * $var4 * $var3)."<br><br>";
    ?>
</body>
</html>
