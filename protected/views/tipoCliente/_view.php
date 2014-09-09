<?php
/* @var $this TipoClienteController */
/* @var $data TipoCliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipocliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipocliente), array('view', 'id'=>$data->id_tipocliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tipocliente')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tipocliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalle_tipocliente')); ?>:</b>
	<?php echo CHtml::encode($data->detalle_tipocliente); ?>
	<br />


</div>