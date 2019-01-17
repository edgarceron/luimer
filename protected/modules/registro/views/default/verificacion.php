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
			Registrar nueva venta
		</div>
		
		<div class="card-body">
			
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'donaciones-formulario-form',
				'action'=>Yii::app()->createAbsoluteUrl('/registro/default/verificar'),
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// See class documentation of CActiveForm for details on this,
				// you need to use the performAjaxValidation()-method described there.
				'enableAjaxValidation'=>false,
			)); ?>
			
			<div class="form-row">
			
			<div class="form-group col-md-12">
				<?php echo CHtml::label('Cedula del cliente', 'cedula',array()); ?>
				<?php echo CHtml::textField('cedula','',array('id'=>'cedula', 'class'=>'form-control')); ?>
			</div>
			
			<div class="form-group col-md-12">
				<?php echo CHtml::submitButton('Registrar',array('class'=>'btn btn-primary form-control')); ?>
			</div>
			
			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>
