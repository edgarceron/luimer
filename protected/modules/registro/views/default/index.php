<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
        $this->module->nombre,
);
?>


<div class="col-sm-12">
	<div class="card">
		<div class="card-header">
			Registro de clientes
		</div>
		
		<div class="card-body">
			  
			<div class="card-body">
				<table class="table">
					<tr>
						<td><?php echo CHtml::button('Registrar nueva venta', array('onclick' => 'js:document.location.href="'. Yii::app()->createUrl('/registro/default/nuevaVenta'). '"', 'class' => 'btn btn-primary form-control')); ?></th>
					</tr>
					<tr>
						<td><?php echo CHtml::button('Cobros pendientes', array('onclick' => 'js:document.location.href="'. Yii::app()->createUrl('/registro/default/cobros'). '"', 'class' => 'btn btn-primary form-control')); ?></th>
					</tr>
				</table>
			</div>

		</div>
	</div>
</div>
