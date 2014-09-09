<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_producto'); ?>
		<?php echo $form->textField($model,'nombre_producto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_producto'); ?>
		<?php echo $form->textField($model,'codigo_producto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_producto'); ?>
		<?php echo $form->textField($model,'stock_producto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'stock_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_producto'); ?>
		<?php echo $form->textField($model,'precio_producto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'precio_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_empresa'); ?>
		<?php // echo $form->textField($model,'id_empresa'); ?>
		<?php echo $form->dropDownList( $model,'id_empresa',
    CHtml::listData(Empresa::model()->findAll(), 'id_empresa', 'nombre_empresa'),
    array(
                'class'=>'span4 chosen',
                'maxlength'=>20,
                'options' => array('AT'=>array('selected'=>true)),
    )
);
 ?>
		<?php echo $form->error($model,'id_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipoproducto'); ?>
		<?php //echo $form->textField($model,'id_tipoproducto'); ?>
		<?php echo $form->dropDownList( $model,'id_tipoproducto',
    CHtml::listData(TipoProducto::model()->findAll(), 'id_tipoproducto', 'nombre_tipoproducto'),
    array(
                'class'=>'span4 chosen',
                'maxlength'=>20,
                'options' => array('AT'=>array('selected'=>true)),
    )
);
 ?>
		<?php echo $form->error($model,'id_tipoproducto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->