<?php
/* @var $this VentaController */
/* @var $model Venta */

$this->breadcrumbs=array(
	'Ventas'=>array('index'),
	$model->id_venta,
);

$this->menu=array(
	array('label'=>'List Venta', 'url'=>array('index')),
	array('label'=>'Create Venta', 'url'=>array('create')),
	array('label'=>'Update Venta', 'url'=>array('update', 'id'=>$model->id_venta)),
	array('label'=>'Delete Venta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_venta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Venta', 'url'=>array('admin')),
);
?>

<h1>View Venta #<?php echo $model->id_venta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_venta',
		'fecha_venta',
		'hora_venta',
		'id_cliente',
		array(
                        'name'=>'id_cliente',
                        
                        'type'=>'raw',//mostar datos html date o datetime
                        'value'=>'$data->id_cliente',
                        //'value'=>'strtoupper($data->nombre." ".$data->apellido)',
                        'filter'=>CHtml::listData(Cliente::model()->findAll(),'id_cliente','nombre_cliente'),
                        ),
		'id_empleado',
		array(
                        'name'=>'id_empleado',
                        
                        'type'=>'raw',//mostar datos html date o datetime
                        'value'=>'$data->id_empleado',
                        //'value'=>'strtoupper($data->nombre." ".$data->apellido)',
                        'filter'=>CHtml::listData(Empleado::model()->findAll(),'id_empleado','nombre_empleado'),
                        ),
	),
)); ?>
