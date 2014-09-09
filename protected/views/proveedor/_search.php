<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_proveedor'); ?>
		<?php echo $form->textField($model,'nombre_proveedor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_proveedor'); ?>
		<?php echo $form->textField($model,'telefono_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_proveedor'); ?>
		<?php echo $form->textField($model,'direccion_proveedor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_proveedor'); ?>
		<?php echo $form->textField($model,'email_proveedor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->