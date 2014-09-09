<?php
/* @var $this CargoController */
/* @var $model Cargo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cargo'); ?>
		<?php echo $form->textField($model,'id_cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_cargo'); ?>
		<?php echo $form->textField($model,'nombre_cargo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detalle_cargo'); ?>
		<?php echo $form->textField($model,'detalle_cargo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sueldo_cargo'); ?>
		<?php echo $form->textField($model,'sueldo_cargo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->