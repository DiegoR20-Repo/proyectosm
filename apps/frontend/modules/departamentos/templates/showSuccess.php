<table>
  <tbody>
    <tr>
      <th>Id departamento:</th>
      <td><?php echo $departamentos->getId_departamento() ?></td>
    </tr>
    <tr>
      <th>Departamento:</th>
      <td><?php echo $departamentos->getDepartamento() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('departamentos/edit?id_departamento='.$departamentos->getId_departamento()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('departamentos/index') ?>">List</a>
