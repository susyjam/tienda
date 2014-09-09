<?php
/* @var $this TipoClienteController */
/* @var $model TipoCliente */

$this->breadcrumbs=array(
	'Tipo Clientes'=>array('index'),
	$model->id_tipocliente=>array('view','id'=>$model->id_tipocliente),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoCliente', 'url'=>array('index')),
	array('label'=>'Create TipoCliente', 'url'=>array('create')),
	array('label'=>'View TipoCliente', 'url'=>array('view', 'id'=>$model->id_tipocliente)),
	array('label'=>'Manage TipoCliente', 'url'=>array('admin')),
);
?>

<h1>Update TipoCliente <?php echo $model->id_tipocliente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>