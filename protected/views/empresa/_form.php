<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
	'clientOptions'=>array("validateOnSubmit"=>true)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_empresa'); ?>
		<?php echo $form->textField($model,'nombre_empresa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_empresa'); ?>
		<?php echo $form->textField($model,'descripcion_empresa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcion_empresa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->