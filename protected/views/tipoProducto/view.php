<?php
/* @var $this TipoProductoController */
/* @var $model TipoProducto */

$this->breadcrumbs=array(
	'Tipo Productos'=>array('index'),
	$model->id_tipoproducto,
);

$this->menu=array(
	array('label'=>'List TipoProducto', 'url'=>array('index')),
	array('label'=>'Create TipoProducto', 'url'=>array('create')),
	array('label'=>'Update TipoProducto', 'url'=>array('update', 'id'=>$model->id_tipoproducto)),
	array('label'=>'Delete TipoProducto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipoproducto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoProducto', 'url'=>array('admin')),
);
?>

<h1>View TipoProducto #<?php echo $model->id_tipoproducto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipoproducto',
		'nombre_tipoproducto',
		'detalle_tipoproducto',
	),
)); ?>
