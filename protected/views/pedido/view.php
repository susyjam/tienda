<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->id_pedido,
);

$this->menu=array(
	array('label'=>'List Pedido', 'url'=>array('index')),
	array('label'=>'Create Pedido', 'url'=>array('create')),
	array('label'=>'Update Pedido', 'url'=>array('update', 'id'=>$model->id_pedido)),
	array('label'=>'Delete Pedido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pedido),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedido', 'url'=>array('admin')),
);
?>

<h1>View Pedido #<?php echo $model->id_pedido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pedido',
		'fecha_solicitado',
		'fecha_entregado',
		'fecha_requerido',
		'fecha_anulado',
		'costo_pedido',
		'estado_pedido',
		'id_proveedor',
	),
)); ?>
