<?php $this->tituloPagina = 'Home'; ?>

<?php include 'Layout/topo.php'; ?>
    <h1>Programação Orientada a Objetos</h1>
    <p>Lista</p>

    <ul>
    <?php foreach ($this->compras as $compra => $values) :?>
        <li> <?php echo $values['titulo']; ?> - <?php echo $values['desc']; ?> </li>
    <?php endforeach ?>
    </ul>

<?php include 'Layout/rodape.php'; ?>

