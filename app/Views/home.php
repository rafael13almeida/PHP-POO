<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>

<body>
    <h1>Programação Orientada a Objetos</h1>
    <p>Lista</p>

    <ul>
    <?php foreach ($this->compras as $compra => $values) :?>
        <li> <?php echo $values['titulo']; ?> - <?php echo $values['desc']; ?> </li>
    <?php endforeach ?>
    </ul>

</body>

</html>

<!-- 
'<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>POO</title>
        </head>
        <body>
            <h1>Programação Orientada a Objetos</h1>
            <p>Lista</p>
            <ul>'.$listaHTML.'</ul>
        </body>
        </html>'; -->