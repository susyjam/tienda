<?php
/* @var $this VentaController */
/* @var $model Venta */

$this->breadcrumbs=array(
	'Ventas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Venta', 'url'=>array('index')),
	array('label'=>'Create Venta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#venta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ventas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'venta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
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
                        //'value'=>'strtoupper($data->id_empleado." ".$data->nombre_empleado)',
                        'filter'=>CHtml::listData(Empleado::model()->findAll(),'id_empleado','nombre_empleado'),
                       // 'value'=>'strtoupper($data->id_empleado." ".$data->nombre_empleado)',
                        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
