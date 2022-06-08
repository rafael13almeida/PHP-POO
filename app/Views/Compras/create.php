<?php $this->tituloPagina = 'Adicionar Itens'; ?>

<?php $this->layout('layout.topo'); ?>

    <h1 class="display-4">Adicionar Itens</h1>


<form action="/compras" method="POST">
    
    <p>
        <input type="text" name="titulo" placeholder="Título">
    </p>
    <p>
        <input type="text" name="desc" placeholder="Descrição">
    </p>
    
    <button class="btn btn-primary btn-sm">Adicionar</button>

</form>

    <?php $this->layout('layout.rodape'); ?>