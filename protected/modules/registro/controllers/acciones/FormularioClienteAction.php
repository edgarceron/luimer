<?php
class FormularioClienteAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {                           
		$cedula = $_GET['cedula'];
		
		$cliente = Clientes::model()->find("cedula = \"$cedula\"");
		if($cliente == null){
			$record = new Clientes;
			$record['cedula'] = $cedula;
		}
		else{
			$record = $cliente;
		}
		
		if(isset($_POST['Clientes'])){
			$record->attributes = $_POST['Clientes'];
			$record['lista_negra'] = 0;
			if($record->save()){
				$this->controller->redirect(Yii::app()->createAbsoluteUrl('registro/default/formularioCompra', array('id_cliente' => $record['id'])));
			}
		}
		
        $this->controller->render('formularioCliente',array(
			'record' => $record,
        ));
    }
}
?>

