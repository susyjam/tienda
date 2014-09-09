<?php
/* @var $this VentaController */
/* @var $data Venta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_venta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_venta), array('view', 'id'=>$data->id_venta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_venta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_venta')); ?>:</b>
	<?php echo CHtml::encode($data->hora_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->id_empleado); ?>
	<br />


</div>