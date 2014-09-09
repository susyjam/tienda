<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_usuario), array('view', 'id'=>$data->id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->password_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->activo_usuario); ?>
	<br />


</div>