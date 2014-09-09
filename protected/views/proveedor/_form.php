<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_proveedor'); ?>
		<?php echo $form->textField($model,'nombre_proveedor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_proveedor'); ?>
		<?php echo $form->textField($model,'telefono_proveedor'); ?>
		<?php echo $form->error($model,'telefono_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_proveedor'); ?>
		<?php echo $form->textField($model,'direccion_proveedor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_proveedor'); ?>
		<?php echo $form->textField($model,'email_proveedor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email_proveedor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->