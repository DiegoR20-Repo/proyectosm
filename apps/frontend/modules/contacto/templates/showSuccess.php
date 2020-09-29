<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $contacto->getId() ?></td>
    </tr>
    <tr>
      <th>Idproyecto:</th>
      <td><?php echo $contacto->getIdproyecto() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $contacto->getNombre() ?></td>
    </tr>
    <tr>
      <th>Telefono:</th>
      <td><?php echo $contacto->getTelefono() ?></td>
    </tr>
    <tr>
      <th>Pais:</th>
      <td><?php echo $contacto->getPais() ?></td>
    </tr>
    <tr>
      <th>Departamento:</th>
      <td><?php echo $contacto->getDepartamento() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $contacto->getMunicipio() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('contacto/edit?id='.$contacto->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('contacto/index') ?>">List</a>
