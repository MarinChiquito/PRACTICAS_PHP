<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 26</title>
</head>
<body>
    <header><h1>NUMERO MAYOR, INTEMEDIO Y MENOR</h1></header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="nu1">Ingrese un numero:</label>
                <input type="number" name="num1" id="num1"><br><br>
                <label for="num2">Ingrese un numero:</label>
                <input type="number" name="num2" id="num2"><br><br>
                <label for="nu3">Ingrese un numero:</label>
                <input type="number" name="num3" id="num3"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>


<?php
             if($_SERVER["REQUEST_METHOD"]=='POST'){
                $N1 =$_POST['num1'];
                $N2 =$_POST['num2'];
                $N3 =$_POST['num3'];

                if($N1<$N2 && $N1<$N3){
                    $menor= $N1;
                }elseif ($N2<$N1 && $N2<$N3){
                    $menor=$N2;
                }else{
                    $menor=$N3;
                }

                if($N1>$N2 && $N1>$N3){
                    $mayor= $N1;
                }elseif ($N2>$N1 && $N2>$N3){
                    $mayor=$N2;
                }else{
                    $mayor=$N3;
                }

                    $intermedio=($N1+$N2+$N3)-($mayor+$menor);
                    echo"Los numeros serian, numero mayor: ".$mayor."<br><br>"."El numero intermedio: ".$intermedio."<br><br>"."El numero menor: ".$menor."<br><br>";


             }

             ?>
             <a href="Act27.php">Siguiente practica</a>
         </section>
     </main>
     <footer>
 
     </footer>
 </body>
 </html>