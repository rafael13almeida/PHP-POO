<?php $this->tituloPagina = 'Lista de Usuários'; ?>

<?php $this->layout('layout.topo'); ?>

    <h1>Detalhe</h1>
    
    <h3>Nome: <?php echo $this->modelo->nome; ?></h3>    
    <p>E-mail: <?php echo $this->modelo->email; ?></p>    

    <?php $this->layout('layout.rodape'); ?>