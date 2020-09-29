<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $actividad->getId() ?></td>
    </tr>
    <tr>
      <th>Idarea:</th>
      <td><?php echo $actividad->getIdarea() ?></td>
    </tr>
    <tr>
      <th>Idusuario:</th>
      <td><?php echo $actividad->getIdusuarIo() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $actividad->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $actividad->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Fechacreacion:</th>
      <td><?php echo $actividad->getFechacreacion() ?></td>
    </tr>
    <tr>
      <th>Fechacompletada:</th>
      <td><?php echo $actividad->getFechacompletada() ?></td>
    </tr>
    <tr>
      <th>Porcentajeavance:</th>
      <td><?php echo $actividad->getPorcentajeavance() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $actividad->getEstado() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('actividad/edit?id='.$actividad->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('actividad/index') ?>">List</a>
