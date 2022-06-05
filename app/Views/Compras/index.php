<?php $this->tituloPagina = 'Home'; ?>

<?php $this->layout('layout.topo'); ?>

    <h1>Programação Orientada a Objetos</h1>
    <p>Lista</p>
    <a href="compras/adicionar">Criar</a>

    <ul>
    <?php foreach ($this->compras as $compra => $values) :?>
        <li> <?php echo $values['titulo']; ?> - <?php echo $values['desc']; ?> </li>
    <?php endforeach ?>
    </ul>

    <?php $this->layout('layout.rodape'); ?>