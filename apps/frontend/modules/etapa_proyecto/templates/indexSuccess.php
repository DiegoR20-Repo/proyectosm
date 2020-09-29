<h1>Etapa proyectos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Idetaparef</th>
      <th>Idproyecto</th>
      <th>Informacion</th>
      <th>Inicio</th>
      <th>Fin</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($etapa_proyectos as $etapa_proyecto): ?>
    <tr>
      <td><a href="<?php echo url_for('etapa_proyecto/show?id='.$etapa_proyecto->getId()) ?>"><?php echo $etapa_proyecto->getId() ?></a></td>
      <td><?php echo $etapa_proyecto->getIdetaparef() ?></td>
      <td><?php echo $etapa_proyecto->getIdproyecto() ?></td>
      <td><?php echo $etapa_proyecto->getInformacIon() ?></td>
      <td><?php echo $etapa_proyecto->getInIcIo() ?></td>
      <td><?php echo $etapa_proyecto->getFin() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('etapa_proyecto/new') ?>">New</a>
