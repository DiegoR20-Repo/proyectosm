<h1>Proyectos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descrpicion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($proyectos as $proyecto): ?>
    <tr>
      <td><a href="<?php echo url_for('proyecto/show?id='.$proyecto->getId()) ?>"><?php echo $proyecto->getId() ?></a></td>
      <td><?php echo $proyecto->getNombre() ?></td>
      <td><?php echo $proyecto->getDescrpicion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('proyecto/new') ?>">New</a>
