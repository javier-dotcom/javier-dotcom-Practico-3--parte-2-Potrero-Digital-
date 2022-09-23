<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <header>
        <h1>Trabajo practico N°3
        </h1>
        <h2>Programación: Backend Developer <br>Potrero Digital</h2>
        <h2>Alumno: Javier D'Alessandro</h2>

        <h3>ESTRUCTURAS DE CONTROL: PARTE 2
        </h3>
    </header>

    <h4>EJERCICIOS</h4>
    <h4>1 Mostrar los números del 1 al 100.</h4>


    <?php
            echo "<h5 > Ejercicio resuelto con 'for'</h5>";
            for ($a = 1; $a <= 100; $a++) {
                echo $a . "-";
                if ($a % 20 == 0) {
                    echo "<br>";
                }
            }
            ?>
    <br>




    <?php
            echo "<h5> Ejercicio resuelto con 'while'</h5>";
            $a = 1;
            while ($a <= 100) {
                echo $a . "-";
                if ($a % 20 == 0) {
                    echo "<br>";
                }
                $a++;
            }
            ?>
    <br>


    <hr>
    <br>
    <hr>
    <h4>2 Mostrar los números del 100 al 1.</h4>



    <?php
       echo "<h5> Ejercicio resuelto con 'for'</h5>";
            for ($a = 100; $a >= 1; $a--) {
                echo $a . "-";
                if ($a % 20 == 0) {
                    echo "<br>";
                }
            }
            ?>
    <br>
    <br>




    <?php
       echo "<h5> Ejercicio resuelto con 'while'</h5>";
            $a = 100;
            while ($a >=1) {
                echo $a . "-";
                if ($a % 20 == 0) {
                    echo "<br>";
                }
                $a--;
            }
            ?>
    <br>
    <br>





    <hr>
    <br>
    <hr>
    <h4>3 Mostrar los números pares del 1 al 100.</h4>

    <div>

        <?php
       echo "<h5> Ejercicio resuelto con 'for'</h5>";
            for ($a = 1; $a <= 100; $a++) {
                if($a%2==0){
                echo $a . "-";
                }
                if ($a % 25 == 0) {
                    echo "<br>";
                }
            }
            ?>
        <br>
        <br>



        <?php
       echo "<h5> Ejercicio resuelto con 'while'</h5>";
            $a = 1;
            while ($a <=100) {
                 if($a%2==0){
                echo $a . "-";
                }
                if ($a % 25== 0) {
                    echo "<br>";
                }
                $a++;
            }
            ?>

        <br>
        <br>





        <hr>
        <br>
        <hr>
        <h4>4 Mostrar los números impares del 1 al 100.</h4>


        <?php
       echo "<h5> Ejercicio resuelto con 'for'</h5>";
            for ($a = 1; $a <= 100; $a++) {
                if($a%2!=0){
                echo $a . "-";
                }
                if ($a % 25 == 0) {
                    echo "<br>";
                }
            }
            ?>
        <br>
        <br>


        <?php
       echo "<h5> Ejercicio resuelto con 'while'</h5>";
            $a = 1;
            while ($a <=100) {
                 if($a%2!=0){
                echo $a . "-";
                }
                if ($a % 25== 0) {
                    echo "<br>";
                }
                $a++;
            }
            ?>

        <br>
        <br>

    </div>
    </div>




    <hr>
    <br>
    <hr>
    <h4>5 Mostrar la suma de los números de 1 a 20</h4>


    <?php
       echo "<h5> Ejercicio resuelto con 'for'</h5>";
       $suma=0;
            for ($a = 1; $a <= 20; $a++) {
                $suma+=$a;
            }
            echo "La suma de los números de 1 a 20 con 
            'for' es : " . $suma;
            ?>

    <br>
    <br>


    <?php
       echo "<h5> Ejercicio resuelto con ' while '</h5>";
            $a = 1;
            $suma=0;
            while ($a <=20) {
                $suma+=$a;
                $a++;
            }
            echo "La suma de los números de 1 a 20 con 
            ' while ' es : " . $suma;
            ?>

    <br>
    <br>

    </div>
    </div>


    <hr>
    <br>
    <hr>
    <h4>5 Mostrar la suma de los números pares de 1 a 20</h4>


    <?php
       echo "<h5> Ejercicio resuelto con 'for'</h5>";
       $suma=0;
            for ($a = 1; $a <= 20; $a++) {
                 if($a%2==0){
                $suma+=$a;
            }
            }
            echo "La suma de los números pares de 1 a 20 con 
            'for' es : " . $suma;
            ?>

    <br>
    <br>


    <?php
       echo "<h5> Ejercicio resuelto con ' while '</h5>";
            $a = 1;
            $suma=0;
            while ($a <=20) {
                if($a%2==0){
                $suma+=$a;
            }
                $a++;
            }
            echo "La suma de los números pares de 1 a 20 con 
            ' while ' es : " . $suma;
            ?>

    <br>
    <br>




</body>

</html>