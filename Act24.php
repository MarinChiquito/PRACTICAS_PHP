<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 24</title>
</head>
<body>
    <header>
        <h1>ES PAR O IMPAR</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="nmu">Ingrese un numero:</label>
                <input type="number" id="num" name="num"><br><br>
                <button type="submit">Enviar</button><br><br>

            </form>
            <?php
                if($_SERVER["REQUEST_METHOD"]=='POST'){
                    $numero =$_POST['num'];

                    if($numero % 2== 0){
                        $mensaje = "El numero ". $numero. " es par<br>";
    
                        }else{
                            $mensaje = "El numero ". $numero. " es impar<br>";
    
                        }
                        echo $mensaje;
                    }
            ?>
            <a href="Act25.php">Siguiente practica</a>
        </section>
    </main>
    <footer>
<p>Alan Marin Rodriguez Martinez</p>
    </footer>
</body>
</html>