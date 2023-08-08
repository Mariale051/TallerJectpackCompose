<?php
require_once 'model/RolUsuario.php';

class RolUsuController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new RolUsu();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/RolUsuario/RolUsuario.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new RolUsu();
        
        if(isset($_REQUEST['Ide_RUs'])){
            $alm = $this->model->Obtener($_REQUEST['Ide_RUs']);
        }
        
        require_once 'view/header.php';
        require_once 'view/RolUsuario/RolUsuario-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new RolUsu();
        
        $alm->Identificacion_Rol = $_REQUEST['Identificacion_Rol'];
        $alm->Descripcion_Rol = $_REQUEST['Descripcion_Rol'];
        $alm->Estado_Rol = $_REQUEST['Estado_Rol'];

        $alm->Ide_RUs > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['Ide_RUs']);
        header('Location: index.php');
    }
}