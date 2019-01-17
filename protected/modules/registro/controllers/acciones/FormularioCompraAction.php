<?php
class FormularioCompraAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {     
		$record = new OrdenCompra;
		if(isset( $_GET['id_cliente'])){
			$id_cliente = $_GET['id_cliente'];
			$record['cliente'] = $id_cliente;
		}
		$record['asesor'] = Yii::app()->user->id;
		$record['supervisor'] = Yii::app()->user->id;
		if(isset($_POST['OrdenCompra'])){
			$record->attributes = $_POST['OrdenCompra'];
			if($record->save()){
				$detalle = new OrdenDetalles;
				$detalle['id_orden'] = $record['id'];
				$detalle['id_producto'] = 1;
				$detalle['cantidad'] = 1;
				$detalle->save();
				
				$forma = $_POST['forma'];
				$dias = $_POST['dia'];
				
				$mes = date('m');
				for($i = $mes + 1; $i < $mes + 4; $i++){
					$programacion = new Programacion;
					$programacion['id_orden'] = $record['id'];
					$programacion['fecha'] = date('Y') . "-" . $i . "-" . $dias;
					$programacion['pago_estimado'] = 5000;
					$programacion->save();
				}
				$saldo = 10000 - $record['cuota_inicial'];
				Yii::app()->user->setFlash('success', "Orden de compra creada exitosamente, saldo por pagar $saldo");
				$this->controller->redirect(Yii::app()->createAbsoluteUrl('registro/default/index'));
			}
		}	
		//Asesor
		//Cliente
		$this->controller->render('formularioCompra',array(
			'record' => $record,
        ));
    }
}
?>

