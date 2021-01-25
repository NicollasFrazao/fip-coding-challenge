<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($usuarios as $usuario): ?>
        <tr>
          <td>
            <a class="btn btn-secondary" href="<?php echo site_url('usuarios/profile/' . $usuario -> id); ?>">
              <?php echo $usuario -> id; ?>
            </a>  
          </td>
          <td><?php echo $usuario -> nome; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>