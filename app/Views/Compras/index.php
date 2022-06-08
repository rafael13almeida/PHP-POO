<?php $this->tituloPagina = "Home"; ?>

<?php $this->layout('layout.topo'); ?>


  <div class="row">
    <h2 class="display-4">Lista de Compras</h2>
  </div>
  <div>
    <ul class="list-group list-group-flush">
      <?php foreach ($this->modelo as $key => $value) : ?>
        <li class="list-group-item">
          <?php echo  $value['titulo'] ?> - <?php echo  $value['desc'] ?>
          <form action="/compras/deletar/<?php echo $value['id'] ?>" method="post">
            <input type="hidden" name="_METHOD" value="delete">
            <a href="/compras/detalhe/<?php echo  $value['id'] ?>"><button type="button" class="btn btn-outline-primary btn-sm">Detalhe</button></a>
            <a href="/compras/editar/<?php echo  $value['id'] ?>"><button type="button" class="btn btn-outline-primary btn-sm">Editar</button></a>
            <button class="btn btn-danger btn-sm">Deletar</button>
          </form>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
  <div>
    <a href="/compras/adicionar"> <button class="btn btn-primary btn-sm">Criar</button></a>
  </div>
</div>
<?php $this->layout('layout.rodape'); ?>