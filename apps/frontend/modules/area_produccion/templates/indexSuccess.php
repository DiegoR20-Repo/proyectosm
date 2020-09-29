<h1>Area produccions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($area_produccions as $area_produccion): ?>
    <tr>
      <td><a href="<?php echo url_for('area_produccion/show?id='.$area_produccion->getId()) ?>"><?php echo $area_produccion->getId() ?></a></td>
      <td><?php echo $area_produccion->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('area_produccion/new') ?>">New</a>
