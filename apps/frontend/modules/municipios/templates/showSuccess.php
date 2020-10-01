<table>
  <tbody>
    <tr>
      <th>Id municipio:</th>
      <td><?php echo $municipios->getId_munIcIpIo() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $municipios->getMunicipio() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $municipios->getEstado() ?></td>
    </tr>
    <tr>
      <th>Departamento:</th>
      <td><?php echo $municipios->getDepartamento_iD() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('municipios/edit?id_municipio='.$municipios->getId_munIcIpIo()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('municipios/index') ?>">List</a>
