<h1 style="width: 100%;text-align: center">Lista de proyectos</h1>
<br>
<div class="container text-center pt-5">
    <a style="margin: 0 auto" href="<?php echo url_for('proyecto/new') ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">NUEVO PROYECTO</a>
    <br>
    <br>

    <table class="table table-striped table-bordered" style="width: 50%;margin: 0 auto">
        <thead class="thead-dark">
            <tr>
                <th style="width: 5%">Id</th>
                <th style="width: 40%">Nombre</th>
                <th colspan="1">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyectos as $proyecto): ?>
                <tr>
                    <td style="width: 20%"><a href="<?php echo url_for('proyecto/show?id=' . $proyecto->getId()) ?>"><?php echo $proyecto->getId() ?></a></td>
                    <td style="width: 20%"><?php echo $proyecto->getNombre() ?></td>
                    <td><?php echo $proyecto->getDescrpicion() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



