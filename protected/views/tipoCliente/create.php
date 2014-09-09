<?php
/* @var $this TipoClienteController */
/* @var $model TipoCliente */

$this->breadcrumbs=array(
	'Tipo Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoCliente', 'url'=>array('index')),
	array('label'=>'Manage TipoCliente', 'url'=>array('admin')),
);
?>

<h1>Create TipoCliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>