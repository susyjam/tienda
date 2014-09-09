<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_cliente'); ?>
		<?php echo $form->textField($model,'nombre_cliente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_cliente'); ?>
		<?php echo $form->textField($model,'direccion_cliente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_cliente'); ?>
		<?php echo $form->textField($model,'telefono_cliente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipocliente'); ?>
		<?php echo $form->textField($model,'id_tipocliente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->