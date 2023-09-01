<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Resultado triangulo</title>
</head>
<body>
    <div class="presentacion-box">
        <h1>Valores de un triangulo</h1>
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

        $base = $_GET['Base'];
        $altura = $_GET['Altura'];

        if(isset($_GET['calcular'])){
            $area = 0.5 * $base * $altura;

            echo"<center><h3>El area de triangulo es: $area</h3></center>";
        }else{
            echo"<center><h3>Ingresa datos</h3></center>";
        }

        

        
    ?>

    <div>
        <a href="../../index.html">Resgresar al principio</a>
    </div>
</body>
</html>

