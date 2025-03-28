<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 21</title>
</head>
<body>
    <header>
        <h1>NUMERO MAYOR DE 3 NUMEROS</h1>
    </header>
    <main>
            <section>
                <form action="" method="POST">
                <label for="num1">Ingrese el numero uno</label>
                <input type="number" id="num1" name="num1"><br><br>
                <label for="num2">Ingrese el numero uno</label>
                <input type="number" id="num2" name="num2"><br><br>
                <label for="num3">Ingrese el numero uno</label>
                <input type="number" id="num3" name="num3"><br><br>
                <button type="submit">Enviar</button>
                </form>
                <?php
                if($_SERVER["REQUEST_METHOD"]=='POST'){
                    $n1=$_POST['num1'];
                    $n2=$_POST['num2'];
                    $n3=$_POST['num3'];

                    if($n1 > $n2 && $n1>$n3){
                        $mayor =$n1;

                    }elseif($n2>$n1 && $n2>$n3){
                        $mayor=$n2;
                    }else{
                        $mayor=$n3;
                    }
                    echo "El numero $mayor es el mayor de los 3 numeros<br><br>";
                }
                ?>
                <a href="Act22.php">Siguiente practica</a>
                </section>
    </main>
    <footer><p>Alan Marin Rodriguez Martinez</p></footer>
</body>
</html>