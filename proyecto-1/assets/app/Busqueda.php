<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/busqueda.css">
    <title>Busqueda</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>

                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Inventario.php">Inventario</a></li>
                </ul>
            </nav>

            <div class="header">
                <header>
                    <div class="sombra">
                        <div class="title">
                            <h1>Busca el producto que quieres editar</h1>
                        </div>

                        <div class="buscador">
                            <form action="controller/C_producto.php" method="post">
                                <input type="text" name="buscador" autocomplete="off">
                                <button class="boton">Buscar productos</button>
                            </form>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
</body>
</html>