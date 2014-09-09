<?php
/* @var $this TipoClienteController */
/* @var $model TipoCliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tipocliente'); ?>
		<?php echo $form->textField($model,'id_tipocliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_tipocliente'); ?>
		<?php echo $form->textField($model,'nombre_tipocliente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detalle_tipocliente'); ?>
		<?php echo $form->textField($model,'detalle_tipocliente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->