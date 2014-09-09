<?php
/* @var $this TipoProductoController */
/* @var $model TipoProducto */

$this->breadcrumbs=array(
	'Tipo Productos'=>array('index'),
	$model->id_tipoproducto=>array('view','id'=>$model->id_tipoproducto),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoProducto', 'url'=>array('index')),
	array('label'=>'Create TipoProducto', 'url'=>array('create')),
	array('label'=>'View TipoProducto', 'url'=>array('view', 'id'=>$model->id_tipoproducto)),
	array('label'=>'Manage TipoProducto', 'url'=>array('admin')),
);
?>

<h1>Update TipoProducto <?php echo $model->id_tipoproducto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>