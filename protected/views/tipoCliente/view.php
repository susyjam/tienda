<?php
/* @var $this TipoClienteController */
/* @var $model TipoCliente */

$this->breadcrumbs=array(
	'Tipo Clientes'=>array('index'),
	$model->id_tipocliente,
);

$this->menu=array(
	array('label'=>'List TipoCliente', 'url'=>array('index')),
	array('label'=>'Create TipoCliente', 'url'=>array('create')),
	array('label'=>'Update TipoCliente', 'url'=>array('update', 'id'=>$model->id_tipocliente)),
	array('label'=>'Delete TipoCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipocliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoCliente', 'url'=>array('admin')),
);
?>

<h1>View TipoCliente #<?php echo $model->id_tipocliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipocliente',
		'nombre_tipocliente',
		'detalle_tipocliente',
	),
)); ?>
