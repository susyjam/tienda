<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_usuario'); ?>
		<?php echo $form->textField($model,'nombre_usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password_usuario'); ?>
		<?php echo $form->textField($model,'password_usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo_usuario'); ?>
		<?php echo $form->textField($model,'activo_usuario'); ?>
		<?php echo $form->error($model,'activo_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->