    <?php $this->tituloPagina = 'Home'; ?>

<?php $this->layout('layout.topo'); ?>

    <h1 class="display-4">Detalhe</h1>
    
    <h3>Título: <?php echo $this->modelo->titulo; ?></h3>    
    <p>Descrição: <?php echo $this->modelo->desc; ?></p>  
    <br>
    <a href="/compras"> <button class="btn btn-primary btn-sm">Voltar</button></a>

    <?php $this->layout('layout.rodape'); ?>