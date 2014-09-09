<?php
/* @var $this PedidoController */
/* @var $data Pedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pedido')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pedido), array('view', 'id'=>$data->id_pedido)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_solicitado')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_solicitado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_entregado')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_entregado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_requerido')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_requerido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_anulado')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_anulado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->costo_pedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->estado_pedido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_proveedor); ?>
	<br />

	*/ ?>

</div>