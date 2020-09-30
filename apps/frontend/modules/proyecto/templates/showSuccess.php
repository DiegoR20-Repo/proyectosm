<table class="table table-striped table-bordered">
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $proyecto->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $proyecto->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descrpicion:</th>
      <td><?php echo $proyecto->getDescrpicion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('proyecto/edit?id='.$proyecto->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('proyecto/index') ?>">List</a>
