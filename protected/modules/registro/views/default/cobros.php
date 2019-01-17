<?php
/* @var $this OrdenCompraController */
/* @var $record OrdenCompra */
/* @var $form CActiveForm */
?>

	<table class="table">
		<thead>
			<tr>
				<th scope="col">Fecha</td>
				<th scope="col">Cliente</td>
				<th scope="col">Direccion</td>
				<th scope="col">Cobro estimado</td>
			</tr>
		</thead>
		
		<?php
			foreach($cobros as $row){
				$orden_id = $row['id_orden'];
				$orden = OrdenCompra::model()->findByPk($orden_id);
				$cliente = Clientes::model()->findByPk($orden['cliente']);
				
				$fecha = $row['fecha'];
				$nombre_cliente = $cliente['nombre'] . " " . $cliente['apellido'];
				$direccion =  $cliente['direccion'] . " " .  $cliente['barrio'];
				$cobro_estimado = $row['pago_estimado'];
			
		?>
		<tr>
			<td><?php echo $fecha ?></td>
			<td><?php echo $nombre_cliente ?></td>
			<td><?php echo $direccion ?></td>
			<td><?php echo $cobro_estimado ?></td>
		</tr>
		<?php
			}
		?>
	</table>

<!-- form -->