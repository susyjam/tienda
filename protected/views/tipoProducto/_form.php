<?php
/* @var $this TipoProductoController */
/* @var $model TipoProducto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_tipoproducto'); ?>
		<?php echo $form->textField($model,'nombre_tipoproducto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_tipoproducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detalle_tipoproducto'); ?>
		<?php echo $form->textField($model,'detalle_tipoproducto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'detalle_tipoproducto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->