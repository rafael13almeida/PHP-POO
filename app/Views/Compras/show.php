<?php $this->tituloPagina = 'Home'; ?>

<?php $this->layout('layout.topo'); ?>

    <h1>Detalhe</h1>
    
    <h3>Título: <?php echo $this->compra->titulo; ?></h3>    
    <p>Descrição: <?php echo $this->compra->desc; ?></p>    

    <?php $this->layout('layout.rodape'); ?>