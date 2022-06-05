<?php $this->tituloPagina = 'Adicionar Itens'; ?>

<?php $this->layout('layout.topo'); ?>

    <h1>Adicionar Itens</h1>
    <a href="compras/adicionar">Criar</a>

<form action="/compras" method="POST">
    
    <p>
        <input type="text" name="titulo" placeholder="Título">
    </p>
    <p>
        <input type="text" name="desc" placeholder="Descrição">
    </p>
    
    <button>Adicionar</button>

</form>

    <?php $this->layout('layout.rodape'); ?>