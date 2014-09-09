<?php
/* @var $this TipoProductoController */
/* @var $data TipoProducto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipoproducto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipoproducto), array('view', 'id'=>$data->id_tipoproducto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tipoproducto')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tipoproducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle_tipoproducto')); ?>:</b>
	<?php echo CHtml::encode($data->detalle_tipoproducto); ?>
	<br />


</div>