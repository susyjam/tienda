<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->id_proveedor,
);

$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'Create Proveedor', 'url'=>array('create')),
	array('label'=>'Update Proveedor', 'url'=>array('update', 'id'=>$model->id_proveedor)),
	array('label'=>'Delete Proveedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proveedor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<h1>View Proveedor #<?php echo $model->id_proveedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_proveedor',
		'nombre_proveedor',
		'telefono_proveedor',
		'direccion_proveedor',
		'email_proveedor',
	),
)); ?>
