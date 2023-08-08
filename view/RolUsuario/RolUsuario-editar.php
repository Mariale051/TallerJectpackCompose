<h1 class="page-header">
    <?php echo $alm->Ide_RUs != null ? $alm->Descripcion_Rol : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=RolUsu">RolUsu</a></li>
  <li class="active"><?php echo $alm->Ide_RUs != null ? $alm->Descripcion_Rol : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-RolUsuario" action="?c=RolUsu&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Identificacion_Rol" value="<?php echo $alm->Ide_RUs; ?>" />
    
    <div class="form-group">
        <label>Descripcion_Rol</label>
        <input type="text" name="Descripcion_Rol" value="<?php echo $alm->Descripcion_Rol; ?>" class="form-control" placeholder="Ingrese descripcion Rol" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Estado_Rol</label>
        <input type="text" name="Estado_Rol" value="<?php echo $alm->Estado_Rol; ?>" class="form-control" placeholder="Ingrese su estado" data-validacion-tipo="requerido|min:10" />
    </div>
    
      
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-RolUsuario").submit(function(){
            return $(this).validate();
        });
    })
</script>