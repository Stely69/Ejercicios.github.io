<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Resultado Sumatoria de primeros 10 numeros enteros</title>
</head>
<body>
    <div class="presentacion-box">
        <h1>Sumatoria de primeros 10 numeros enteros</h1>
        <br>
        <br>
        <h3>Presentado por: William Vanegas, Julian Rivera y Carlos guerrero </h3>
        <br>
        <h4>SENA-CDAE Villeta</h4>

        <h4>Ficha: 2693143 ASDO</h4>
        <br>
    </div>

    <div>
        <center> <h1>Resultado</h1></center>
        <br>
    </div>

    <?php  

        $n = $_GET['Num'];
        $suma = ($n * ($n + 1)) / 2;

        echo "La suma de los primeros 10 números enteros es: " . $suma;
     
        
    ?>

    <div>
        <a href="../../index.html">Resgresar al principio</a>
    </div>
</body>
</html>

