<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proveedor), array('view', 'id'=>$data->id_proveedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->email_proveedor); ?>
	<br />


</div>