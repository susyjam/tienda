<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_producto'); ?>
		<?php echo $form->textField($model,'nombre_producto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_producto'); ?>
		<?php echo $form->textField($model,'codigo_producto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_producto'); ?>
		<?php echo $form->textField($model,'stock_producto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_producto'); ?>
		<?php echo $form->textField($model,'precio_producto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_empresa'); ?>
		<?php echo $form->textField($model,'id_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipoproducto'); ?>
		<?php echo $form->textField($model,'id_tipoproducto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->