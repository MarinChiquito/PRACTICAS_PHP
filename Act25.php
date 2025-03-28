<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 25</title>
</head>
<body>
    <header><h1>NUMERO DOBLE Y TRIPLE</h1></header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="num">Ingrese un numero:</label>
                <input type="number" name="num" id="num"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php
             if($_SERVER["REQUEST_METHOD"]=='POST'){
                $numero =$_POST['num'];

                if($numero % 2== 0){
                    $mensaje = "El doble del numero ". $numero. " es:".($numero*2)."<br>";

                    }else{
                        $mensaje = "El triple del numero ". $numero." es:".($numero*3)."<br>";

                    }
                    echo $mensaje;
                }
            ?>
            <a href="Act26.php">Siguiente practica</a>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>