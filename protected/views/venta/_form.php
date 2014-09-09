<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'venta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_venta'); ?>
		<?php //echo $form->textField($model,'fecha_venta'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha_venta',
   'value'=>$model->fecha_venta,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$model->fecha_venta,
    'dateFormat'=>'yy-mm-dd',
    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.png',
    'buttonImageOnly'=>true,
    'buttonText'=>'Fecha',
    'selectOtherMonths'=>true,
    'showAnim'=>'slide',
    'showButtonPanel'=>true,
    'showOn'=>'button', 
    'showOtherMonths'=>true, 
    'changeMonth' => 'true', 
    'changeYear' => 'true', 
    'minDate'=>'date("Y-m-d")', 
    'maxDate'=> "+20Y",
    ),
  )); ?>
		<?php echo $form->error($model,'fecha_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_venta'); ?>
		<?php echo $form->textField($model,'hora_venta'); ?>
		<?php echo $form->error($model,'hora_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php //'fillter'=>CHtml::listData(Empresa::model()->findAll(),'id_empresa','nombre_empresa','descripcion_empresa'), ?>
		<?php //echo $form->textField($model,'id_cliente'); ?>
		<?php echo $form->dropDownList( $model,'id_cliente',
    CHtml::listData(Cliente::model()->findAll(), 'id_cliente', 'nombre_cliente'),
    array(
                'class'=>'span4 chosen',
                'maxlength'=>20,
                'options' => array('AT'=>array('selected'=>true)),
    )
);
 ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_empleado'); ?>
		<?php //echo $form->textField($model,'id_empleado'); ?>
		<?php echo $form->dropDownList( $model,'id_empleado',
    CHtml::listData(Empleado::model()->findAll(), 'id_empleado', 'nombre_empleado'),
    array(
                'class'=>'span4 chosen',
                'maxlength'=>20,
                'options' => array('AT'=>array('selected'=>true)),
    )
);
 ?>
		<?php echo $form->error($model,'id_empleado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->