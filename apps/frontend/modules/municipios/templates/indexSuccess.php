<h1>Municipioss List</h1>

<table>
  <thead>
    <tr>
      <th>Id municipio</th>
      <th>Municipio</th>
      <th>Estado</th>
      <th>Departamento</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($municipioss as $municipios): ?>
    <tr>
      <td><a href="<?php echo url_for('municipios/show?id_municipio='.$municipios->getId_munIcIpIo()) ?>"><?php echo $municipios->getId_munIcIpIo() ?></a></td>
      <td><?php echo $municipios->getMunicipio() ?></td>
      <td><?php echo $municipios->getEstado() ?></td>
      <td><?php echo $municipios->getDepartamento_iD() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('municipios/new') ?>">New</a>
