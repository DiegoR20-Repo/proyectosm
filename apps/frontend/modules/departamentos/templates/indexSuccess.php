<h1>Departamentoss List</h1>

<table>
  <thead>
    <tr>
      <th>Id departamento</th>
      <th>Departamento</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($departamentoss as $departamentos): ?>
    <tr>
      <td><a href="<?php echo url_for('departamentos/show?id_departamento='.$departamentos->getId_departamento()) ?>"><?php echo $departamentos->getId_departamento() ?></a></td>
      <td><?php echo $departamentos->getDepartamento() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('departamentos/new') ?>">New</a>
