<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($empresas as $empresa): ?>
        <tr>
          <td>
            <a class="btn btn-secondary" href="<?php echo site_url('empresas/profile/' . $empresa->id);?>">
              <?php echo $empresa->id;?>
            </a>  
          </td>
          <td><?php echo $empresa->nome;?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>