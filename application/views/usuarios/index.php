<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Login</th>
        <th scope="col">Nome</th>
        <th scope="col">Cargo</th>
        <th scope="col">Ação</th>
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
          <td><?php echo $usuario -> login; ?></td>
          <td><?php echo $usuario -> nome; ?></td>
          <td><?php echo $usuario -> cargo; ?></td>
          <td>
            <a class="" href="#" role="button" onclick="if (confirm('Tem certeza que deseja excluir esse usuário?')) {usuarios.delete('<?php echo site_url('usuarios/ajax_delete/'); ?>', '<?php echo $usuario -> id; ?>');}" ><i class="fas fa-trash"></i></a>  
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<script src="<?php echo base_url(); ?>dist/js/usuarios.js"></script>