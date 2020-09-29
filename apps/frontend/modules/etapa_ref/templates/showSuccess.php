<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $etapa_ref->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $etapa_ref->getNombre() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('etapa_ref/edit?id='.$etapa_ref->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('etapa_ref/index') ?>">List</a>
