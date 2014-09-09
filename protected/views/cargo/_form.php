<?php
/* @var $this CargoController */
/* @var $model Cargo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cargo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_cargo'); ?>
		<?php echo $form->textField($model,'nombre_cargo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detalle_cargo'); ?>
		<?php echo $form->textField($model,'detalle_cargo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'detalle_cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sueldo_cargo'); ?>
		<?php echo $form->textField($model,'sueldo_cargo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sueldo_cargo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->