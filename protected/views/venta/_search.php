<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_venta'); ?>
		<?php echo $form->textField($model,'id_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_venta'); ?>
		<?php echo $form->textField($model,'fecha_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_venta'); ?>
		<?php echo $form->textField($model,'hora_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_empleado'); ?>
		<?php echo $form->textField($model,'id_empleado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->