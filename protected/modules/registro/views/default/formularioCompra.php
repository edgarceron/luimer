<?php
/* @var $this OrdenCompraController */
/* @var $record OrdenCompra */
/* @var $form CActiveForm */
?>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Producto</td>
				<th scope="col">Cantidad</td>
				<th scope="col">Subtotal</td>
			</tr>
		</thead>
		<tr>
			<td>Tarro 1</td>
			<td>1</td>
			<td>$10.000</td>
		</tr>
		<tr>
			<td></td>
			<td><b>Total</b></td>
			<td><b>$10.000</b></td>
		</tr>
	</table>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orden-compra-formularioCompra-form',
     'action'=>Yii::app()->createAbsoluteUrl('/registro/default/formularioCompra'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($record); ?>

	<div class="form-row">
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'distribuidor',array('class'=>'label label-success')); ?>
			<?php echo $form->dropDownList($record,'distribuidor',array(1 => "Jhosemar", 2 => "Vitamer", 3 => "Natural Marketing"),array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'distribuidor'); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'fecha',array('class'=>'label label-success')); ?>
			<?php echo $form->dateField($record,'fecha',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'fecha'); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'cuota_inicial',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'cuota_inicial',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'cuota_inicial'); ?>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'obsequio',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'obsequio',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'obsequio'); ?>
		</div>
	</div>
		<?php echo $form->hiddenField($record,'cliente',array('class'=>'form-control')); ?>
	<div class="form-row">
		<?php
			//$formas = array(1 => "Mensual", 2 => "Quincenal", 3 => "Semanal");
			$formas = array(1 => "Mensual");
			$dias = array();
			for($i = 1; $i < 30; $i++){
				$dias[$i] = $i;
			}
		?>
		<div class="form-group col-md-4">
			<?php echo CHtml::label('Forma de pago', 'forma'); ?>
			<?php echo CHtml::dropDownList('forma',1,$formas,array('id'=>'minimo', 'class'=>'form-control')); ?>
		</div>	
		<div class="form-group col-md-3">
			<?php echo CHtml::label('Los dias', 'día'); ?>
			<?php echo CHtml::dropDownList('dia',1,$dias,array('id'=>'minimo', 'class'=>'form-control')); ?>
		</div>	
	</div>
	
	<div class="form-row">
		<div class="form-group col-md-12">
			<?php echo CHtml::submitButton('Guardar',array('class'=>'btn btn-primary')); ?>
		</div>
	</div>
<?php $this->endWidget(); ?>
<!-- form -->