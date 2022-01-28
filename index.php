<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>2T POO getters / setters</h2>

    <?php
        require_once ('./clases/productos.php');

        $producto=new ClaseProcuctos("100","camisa",5,7.99);
        echo $producto->getPrecio;

        $producto->setPrecio(7.95);
        echo $producto->getPrecio;

    ?>
</body>
</html>