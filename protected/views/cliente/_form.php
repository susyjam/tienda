<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_cliente'); ?>
		<?php echo $form->textField($model,'nombre_cliente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_cliente'); ?>
		<?php echo $form->textField($model,'direccion_cliente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_cliente'); ?>
		<?php echo $form->textField($model,'telefono_cliente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipocliente'); ?>
		<?php //echo $form->textField($model,'id_tipocliente'); ?>
		<?php echo $form->dropDownList( $model,'id_tipocliente',
    CHtml::listData(TipoCliente::model()->findAll(), 'id_tipocliente', 'nombre_tipocliente'),
    array(
                'class'=>'span4 chosen',
                'maxlength'=>20,
                'options' => array('AT'=>array('selected'=>true)),
    )
);
 ?>
		<?php echo $form->error($model,'id_tipocliente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->