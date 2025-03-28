<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 23</title>
</head>
<body>
    <header>
        <h1>MULTIPLO DE 3 Y 5</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="num">Ingresa un numero:</label>
                <input type="number" id="num" name="num"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php
             if($_SERVER["REQUEST_METHOD"]=='POST'){
                $numero =$_POST['num'];

                if($numero % 3== 0 && $numero % 5 == 0){
                    $mensaje = "El numero ". $numero. " es numero multiplo de 3 y de 5<br>";

                    }else{
                        $mensaje = "El numero ". $numero. " no es multiplo de 3 y de 5<br>";

                    }
                    echo $mensaje;
                }
            ?>
            <a href="Act24.php">Siguiente practica</a>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>