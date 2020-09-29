<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $area_produccion->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $area_produccion->getNombre() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('area_produccion/edit?id='.$area_produccion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('area_produccion/index') ?>">List</a>
