<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cliente), array('view', 'id'=>$data->id_cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipocliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipocliente); ?>
	<br />


</div>