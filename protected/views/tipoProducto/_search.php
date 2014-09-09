<?php
/* @var $this TipoProductoController */
/* @var $model TipoProducto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tipoproducto'); ?>
		<?php echo $form->textField($model,'id_tipoproducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_tipoproducto'); ?>
		<?php echo $form->textField($model,'nombre_tipoproducto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detalle_tipoproducto'); ?>
		<?php echo $form->textField($model,'detalle_tipoproducto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->