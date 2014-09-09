<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_empleado'); ?>
		<?php echo $form->textField($model,'id_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_empleado'); ?>
		<?php echo $form->textField($model,'nombre_empleado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_empleado'); ?>
		<?php echo $form->textField($model,'direccion_empleado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_empleado'); ?>
		<?php echo $form->textField($model,'telefono_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_empleado'); ?>
		<?php echo $form->textField($model,'email_empleado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo_empleado'); ?>
		<?php echo $form->textField($model,'sexo_empleado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cargo'); ?>
		<?php echo $form->textField($model,'id_cargo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->