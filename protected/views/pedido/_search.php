<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pedido'); ?>
		<?php echo $form->textField($model,'id_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_solicitado'); ?>
		<?php echo $form->textField($model,'fecha_solicitado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_entregado'); ?>
		<?php echo $form->textField($model,'fecha_entregado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_requerido'); ?>
		<?php echo $form->textField($model,'fecha_requerido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_anulado'); ?>
		<?php echo $form->textField($model,'fecha_anulado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo_pedido'); ?>
		<?php echo $form->textField($model,'costo_pedido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_pedido'); ?>
		<?php echo $form->textField($model,'estado_pedido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->