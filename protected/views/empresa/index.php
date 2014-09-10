<?php
/* @var $this EmpresaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Empresas',
);

$this->menu=array(
	array('label'=>'Create Empresa', 'url'=>array('create')),
	array('label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<h1>Empresas</h1>




<?php 
/*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ 


$gridColumns = array(
array('name'=>'id_empresa', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
array('name'=>'nombre_empresa', 'header'=>'Nombre'),
array('name'=>'descripcion_empresa', 'header'=>'Descripcion'),
/*array(
'htmlOptions' => array('nowrap'=>'nowrap'),
'class'=>'bootstrap.widgets.TbButtonColumn',
'viewButtonUrl'=>null,
'updateButtonUrl'=>null,
'deleteButtonUrl'=>null,
)*/
);
       $this->widget(
    'bootstrap.widgets.TbGridView',
    array(
    'dataProvider' => $dataProvider,
    'template' => "{items}",
    'columns' => $gridColumns,
    )
    );
?>
