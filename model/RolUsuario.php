<?php
class RolUsu
{
	private $pdo;
    
    public $ide_RUs;
    public $Des_RUs;
    public $Est_RUs;
    

	



	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM Rol_Usuario");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($ide_RUs)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM Rol_Usuario WHERE Ide_RUs = ?");
			          

			$stm->execute(array($ide_RUs));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($ide_RUs)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM Rol_Usuario WHERE Ide:RUs = ?");			          

			$stm->execute(array($ide_RUs));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE Rol_Usuario SET 
						Descripcion_Rol          = ?, 
						Estado_Rol        = ?  
				    WHERE Ide_RUs = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Descripcion_Rol, 
                        $data->Estado_Rol,
                        $data->Ide_RUs,
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(RolUsu $data)
	{
		try 
		{
		$sql = "INSERT INTO Rol_Usuario (Descripcion_Rol,Estado_Rol)
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Descripcion_Rol,
                    $data->Estado_Rol

                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}