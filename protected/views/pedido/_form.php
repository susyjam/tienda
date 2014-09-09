<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedido-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_solicitado'); ?>
		<?php echo $form->textField($model,'fecha_solicitado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fecha_solicitado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_entregado'); ?>
		<?php echo $form->textField($model,'fecha_entregado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fecha_entregado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_requerido'); ?>
		<?php echo $form->textField($model,'fecha_requerido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fecha_requerido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_anulado'); ?>
		<?php echo $form->textField($model,'fecha_anulado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fecha_anulado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costo_pedido'); ?>
		<?php echo $form->textField($model,'costo_pedido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'costo_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_pedido'); ?>
		<?php echo $form->textField($model,'estado_pedido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estado_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor'); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->