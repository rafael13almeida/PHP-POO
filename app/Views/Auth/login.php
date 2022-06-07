<?php $this->tituloPagina = 'Login'; ?>

<?php $this->layout('layout.topo'); ?>

<h1>Entrar</h1>

<form action="/login" method="POST">

    <p>
        <input type="email" name="email" placeholder="E-mail@">
    </p>
    <p>
        <input type="password" name="senha" placeholder="Senha">
    </p>

    <button>Entrar</button>

</form>

<?php $this->layout('layout.rodape'); ?>