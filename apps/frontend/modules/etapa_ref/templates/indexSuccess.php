<h1>Etapa refs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($etapa_refs as $etapa_ref): ?>
    <tr>
      <td><a href="<?php echo url_for('etapa_ref/show?id='.$etapa_ref->getId()) ?>"><?php echo $etapa_ref->getId() ?></a></td>
      <td><?php echo $etapa_ref->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('etapa_ref/new') ?>">New</a>
