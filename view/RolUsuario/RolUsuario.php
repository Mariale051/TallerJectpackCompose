<h1 class="page-header">RolUsu</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=RolUsu&a=Crud">Nuevo Rol_Usuario</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Descripcion_Rol</th>
            <th>Estado_Rol</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Descripcion_Rol; ?></td>
            <td><?php echo $r->Estado_Rol; ?></td>
                <a href="?c=RolUsu&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=RolUsu&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
