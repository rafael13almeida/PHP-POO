<?php $this->tituloPagina = "Editar Itens"; ?>

<?php $this->layout('layout.topo'); ?>
    <h2 class="display-4">Editar</h2>

    <form action="/compras/<?php echo $this->modelo->id ?>" method="post">
      <input type="hidden" name="_METHOD" value="put">
      <input type="text" name="titulo" placeholder="Título" value="<?php echo $this->modelo->titulo ?>">
      <input type="text" name="desc" placeholder="Descrição" value="<?php echo $this->modelo->desc ?>">
      <button class="btn btn-primary btn-sm">Atualizar</button>
    </form><br>
      <a href="/compras"> <button class="btn btn-primary btn-sm">Voltar</button></a>
  
<?php $this->layout('layout.rodape'); ?>