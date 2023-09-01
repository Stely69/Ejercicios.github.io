<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Identificar numero mayor de 2 numeros</title>
</head>
<body>
    <div class="presentacion-box">
        <h1>Identificar numero mayor de 2 numeros</h1>
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

       $num1 = $_GET['Nm1'];
       $num2 = $_GET['Nm2'];    

      // if(isset($_GET['Numero'])){           
           
            if($num1>$num2){
                $numeromayor = $num1;
            }else{
                $numeromayor = $num2;
            }
            echo"<center><h3>El numero mayor es: $numeromayor</h3></center>";

       // }else{
            //echo"<center><h3>Ingresa datos</h3></center>";
       // }

    ?>

    <div>
        <a href="../../index.html">Resgresar al principio</a>
    </div>

</body>
</html>