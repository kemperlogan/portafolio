<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/productos.css">
    <title>Inventario</title>
</head>
<body>
    <div class="cont">
        <div class="subcont">
            <nav>
                <ul>
                    <li><a href="index.php">inicio</a></li>
                    <li><a href="añadir.php">Añadir Producto</a></li>
                </ul>
            </nav>

            <div class="table">
                <div class="busqueda">
                    <a href="Busqueda.php" class="link"><button class="busq">Editar producto</button></a>
                </div>
                <h1>Productos en el inventario</h1>
                <table>
                    <thead>

                  <tr>
                  <td class="title">Nombre</td>
                    <td class="title">Descripcion</td>
                    <td class="title">Precio</td>
                  </tr>

                    </thead>
                    <tbody>
                        <?php

                                foreach($productos as $pro){

                                    echo"<tr>";
                                     echo"<td>".$pro['Nombre']."</td>";
                                     echo"<td>".$pro['Descripcion']."</td>";
                                     echo"<td>".$pro['Precio']."</td>";
                                    echo"</tr>";
                                }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>