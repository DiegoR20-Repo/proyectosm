<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $etapa_proyecto->getId() ?></td>
    </tr>
    <tr>
      <th>Idetaparef:</th>
      <td><?php echo $etapa_proyecto->getIdetaparef() ?></td>
    </tr>
    <tr>
      <th>Idproyecto:</th>
      <td><?php echo $etapa_proyecto->getIdproyecto() ?></td>
    </tr>
    <tr>
      <th>Informacion:</th>
      <td><?php echo $etapa_proyecto->getInformacIon() ?></td>
    </tr>
    <tr>
      <th>Inicio:</th>
      <td><?php echo $etapa_proyecto->getInIcIo() ?></td>
    </tr>
    <tr>
      <th>Fin:</th>
      <td><?php echo $etapa_proyecto->getFin() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('etapa_proyecto/edit?id='.$etapa_proyecto->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('etapa_proyecto/index') ?>">List</a>
