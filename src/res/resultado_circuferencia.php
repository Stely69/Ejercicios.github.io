<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>resultado circuferencia</title>
</head>
<body>
    <div class="presentacion-box">
        <h1>Valores de una circunferencia</h1>
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

       $radio = $_GET['Radio'];
       
       if(isset($_GET['Radio'])){       
            $diametro = 2 * $radio;
            $circuferencia = 2 * M_PI * $radio;
            $area = M_PI * pow($radio, 2);

            echo"<center><h3>El radio es: $radio</h3></center>";
            echo"<center><h3>El diametro es: $diametro</h3></center>";
            echo"<center><h3>La circuferencia es: $circuferencia</h3></center>";
            echo"<center><h3>El area es: $area</h3></center><br>";
        }else{
            echo"<center><h3>Ingresa datos</h3></center>";
        }

    ?>

    <div>
        <a href="../../index.html">Resgresar al principio</a>
    </div>

</body>
</html>