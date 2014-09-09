<?php
/* @var $this EmpleadoController */
/* @var $data Empleado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_empleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_empleado), array('view', 'id'=>$data->id_empleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->email_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->sexo_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cargo')); ?>:</b>
	<?php echo CHtml::encode($data->id_cargo); ?>
	<br />


</div>