<?php $this->tituloPagina = 'Adicionar Usuários'; ?>

<?php $this->layout('layout.topo'); ?>

    <h1>Adicionar Usuário</h1>

<form action="/usuarios" method="POST">
    
    <p>
        <input type="text" name="nome" placeholder="Seu Nome">
    </p>
    <p>
        <input type="email" name="email" placeholder="E-mail@">
    </p>
    <p>
        <input type="password" name="senha" placeholder="Senha">
    </p>
    
    <button>Adicionar</button>

</form>

    <?php $this->layout('layout.rodape'); ?>