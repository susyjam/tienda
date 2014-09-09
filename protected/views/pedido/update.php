<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->id_pedido=>array('view','id'=>$model->id_pedido),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedido', 'url'=>array('index')),
	array('label'=>'Create Pedido', 'url'=>array('create')),
	array('label'=>'View Pedido', 'url'=>array('view', 'id'=>$model->id_pedido)),
	array('label'=>'Manage Pedido', 'url'=>array('admin')),
);
?>

<h1>Update Pedido <?php echo $model->id_pedido; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>