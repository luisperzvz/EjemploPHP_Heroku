<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <style>
        table, tr,td{
            border: 5px solid lightblue;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Muestra la tabla de multiplicar de un número introducido por teclado. La mostraréis 
en una tabla.</h2>
    <br>
    <hr>

    <h1>Tabla de multiplicar</h1>
    <form action="index.php" method="get">
        <input type="number" name="numeroCaja" required> <!--esto hace que sea obligatorio su uso-->
        <input type="submit" name="Calcular">
    </form>

    <?php
    if(isset($_GET['numeroCaja'])){
    $numeroCaja=$_GET['numeroCaja'];
    //empezamos la tabla
        echo "<table> 
            <br>";
        echo "<legend>Tabla de multiplicar del $numeroCaja </legend>";

    for ($i=0; $i <=10 ; $i++) { 
        $multiplicacion=$i*$numeroCaja; //multiplicamos
    //creamos las multiplicaciones y la tabla restante
        echo " <tr>
                    <td>  $numeroCaja X $i = </td>
                    <td>  $multiplicacion  </td>
        </tr>
        ";
    }

    echo "</table>";
    }

    ?>
</body>
</html>