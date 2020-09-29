<h1>Contactos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Idproyecto</th>
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Pais</th>
      <th>Departamento</th>
      <th>Municipio</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($contactos as $contacto): ?>
    <tr>
      <td><a href="<?php echo url_for('contacto/show?id='.$contacto->getId()) ?>"><?php echo $contacto->getId() ?></a></td>
      <td><?php echo $contacto->getIdproyecto() ?></td>
      <td><?php echo $contacto->getNombre() ?></td>
      <td><?php echo $contacto->getTelefono() ?></td>
      <td><?php echo $contacto->getPais() ?></td>
      <td><?php echo $contacto->getDepartamento() ?></td>
      <td><?php echo $contacto->getMunicipio() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('contacto/new') ?>">New</a>
