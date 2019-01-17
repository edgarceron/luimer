<?php
/* @var $this ClientesController */
/* @var $record Clientes */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-formularioCliente-form',
        'action'=>Yii::app()->createAbsoluteUrl('/registro/default/formularioCliente/cedula/'. $record['cedula']),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($record); ?>
	
	<div class="form-row">
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'cedula',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'cedula',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'cedula'); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'nombre',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'nombre',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'nombre'); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'apellido',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'apellido',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'apellido'); ?>
		</div>
	</div>	
	
	<div class="form-row">
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'direccion',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'direccion',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'direccion'); ?>
		</div>
		<div class="form-group col-md-2">
			<?php echo $form->labelEx($record,'barrio',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'barrio',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'barrio'); ?>
		</div>
		<div class="form-group col-md-3">
			<?php echo $form->labelEx($record,'telefono',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'telefono',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'telefono'); ?>
		</div>
		<div class="form-group col-md-3">
			<?php echo $form->labelEx($record,'email',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'email',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'email'); ?>
		</div>
	</div>	
	
	<div class="form-row">
		<div class="form-group col-md-2">
			<?php echo $form->labelEx($record,'tipo_lugar_trabajo',array('class'=>'label label-success')); ?>
			<?php echo $form->dropDownList($record,'tipo_lugar_trabajo',array(1 => "Titular", 2 => "Conyugue"),array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'tipo_lugar_trabajo'); ?>
		</div>
		<div class="form-group col-md-3">
			<?php echo $form->labelEx($record,'nombre_lugar_trabajo',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'nombre_lugar_trabajo',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'nombre_lugar_trabajo'); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'direccion_lugar_trabajo',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'direccion_lugar_trabajo',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'direccion_lugar_trabajo'); ?>
		</div>
		<div class="form-group col-md-3">
			<?php echo $form->labelEx($record,'telefono_lugar_trabajo',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'telefono_lugar_trabajo',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'telefono_lugar_trabajo'); ?>
		</div>
	</div>	
	
	<div class="form-row">	
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'referencia1',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'referencia1',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'referencia1'); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'parentesco1',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'parentesco1',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'parentesco1'); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'telefono1',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'telefono1',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'telefono1'); ?>
		</div>
	</div>	
	
	<div class="form-row">
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'referencia2',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'referencia2',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'referencia2'); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'parentesco2',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'parentesco2',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'parentesco2'); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->labelEx($record,'telefono2',array('class'=>'label label-success')); ?>
			<?php echo $form->textField($record,'telefono2',array('class'=>'form-control')); ?>
			<?php echo $form->error($record,'telefono2'); ?>
		</div>
	</div>
	
	<div class="form-row">
		<div class="col-lg-12">
			<div class="form-group">
				<?php echo CHtml::submitButton('Guardar',array('class'=>'btn btn-primary')); ?>
			</div>
		</div>
	</div>
<?php $this->endWidget(); ?>
