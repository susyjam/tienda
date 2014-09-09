<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_empleado'); ?>
		<?php echo $form->textField($model,'nombre_empleado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_empleado'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_empleado'); ?>
		<?php echo $form->textField($model,'direccion_empleado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_empleado'); ?>
		<?php echo $form->textField($model,'telefono_empleado'); ?>
		<?php echo $form->error($model,'telefono_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_empleado'); ?>
		<?php echo $form->textField($model,'email_empleado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo_empleado'); ?>
		<?php echo $form->textField($model,'sexo_empleado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sexo_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cargo'); ?>
		<?php //echo $form->textField($model,'id_cargo'); ?>
		<?php echo $form->dropDownList( $model,'id_cargo',
    CHtml::listData(Cargo::model()->findAll(), 'id_cargo', 'nombre_cargo'),
    array(
                'class'=>'span4 chosen',
                'maxlength'=>20,
                'options' => array('AT'=>array('selected'=>true)),
    )
);
 ?>
		<?php echo $form->error($model,'id_cargo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->