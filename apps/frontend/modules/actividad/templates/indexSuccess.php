<h1>Actividads List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Idarea</th>
      <th>Idusuario</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Fechacreacion</th>
      <th>Fechacompletada</th>
      <th>Porcentajeavance</th>
      <th>Estado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($actividads as $actividad): ?>
    <tr>
      <td><a href="<?php echo url_for('actividad/show?id='.$actividad->getId()) ?>"><?php echo $actividad->getId() ?></a></td>
      <td><?php echo $actividad->getIdarea() ?></td>
      <td><?php echo $actividad->getIdusuarIo() ?></td>
      <td><?php echo $actividad->getNombre() ?></td>
      <td><?php echo $actividad->getDescripcion() ?></td>
      <td><?php echo $actividad->getFechacreacion() ?></td>
      <td><?php echo $actividad->getFechacompletada() ?></td>
      <td><?php echo $actividad->getPorcentajeavance() ?></td>
      <td><?php echo $actividad->getEstado() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('actividad/new') ?>">New</a>
