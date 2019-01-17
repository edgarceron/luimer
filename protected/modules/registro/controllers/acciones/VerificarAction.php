<?php
class VerificarAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                           
        $cedula = $_POST['cedula'];
		if($cedula != null){
			
			$cliente = Clientes::model()->find("cedula = \"$cedula\"");
			if($cliente != null){
				$enListaNegra = $cliente['lista_negra'];
				if($enListaNegra){
					Yii::app()->user->setFlash('danger', "Esta cedula se encuentra en la lista negra, no vender");
					$this->controller->redirect('nuevaVenta');
				}
			}
			
			$this->controller->redirect(Yii::app()->createAbsoluteUrl('/registro/default/formularioCliente',array(
				"cedula" => $cedula,
			)));
		}
		else{
			Yii::app()->user->setFlash('warning', "Ingrese un numero de cedula");
			$this->controller->redirect('nuevaVenta');
		}
        
    }
}
?>

