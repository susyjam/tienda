<html lang="en">
        <head>
                <meta charset="utf-8">
                <title><?php echo CHtml::encode($this->pageTitle); ?></title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <!--   este divide lo que es el el titulo de el menu -->
                <style>
                        body {
                                padding-top: 60px;
                        }
                </style>
        </head>
        <body>
                <?php
                $this->widget('bootstrap.widgets.TbNavBar', array(
                        'type'=>'inverse',
                        'items'=>array(
                                array(
                                        'class'=>'bootstrap.widgets.TbMenu',
                                        'items'=>array(
                                                array('label'=>'Empresa', 'items'=>array(
                                                        array('label'=>'ver Empresas', 'url'=>array('/empresa/index'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Registrar Nueva Empresa', 'url'=>array('/empresa/create'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Administrar Empresa', 'url'=>array('/empresa/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                                        )),

                                                array('label'=>'Venta', 'items'=>array(
                                                        array('label'=>'Ver Ventas', 'url'=>array('/venta/index'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Registrar Nueva Venta', 'url'=>array('/venta/create'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Administrar Ventas', 'url'=>array('/venta/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                                        )),
                                                array('label'=>'Productos', 'items'=>array(
                                                        array('label'=>'Ver Productos', 'url'=>array('/producto/index'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Registrar Nuevo Producto', 'url'=>array('/producto/create'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Administrar Productos', 'url'=>array('/producto/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                                        )),
                                                array('label'=>'Empleados', 'items'=>array(
                                                        array('label'=>'Ver Empleados', 'url'=>array('/empleado/index'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Registrar Nuevo Empleado', 'url'=>array('/empleado/create'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Administrar Empleados', 'url'=>array('/empleado/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                                        )),
                                                array('label'=>'Clientes', 'items'=>array(
                                                        array('label'=>'Ver Clientes', 'url'=>array('/cliente/index'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Registrar Nuevo Cliente', 'url'=>array('/cliente/create'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Administrar Clientes', 'url'=>array('/cliente/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                                        )),
                                                array('label'=>'Proveedores', 'items'=>array(
                                                        array('label'=>'Ver Proveedores', 'url'=>array('/proveedor/index'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Registrar Nuevo Proveedor', 'url'=>array('/proveedor/create'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Administrar Proveedores', 'url'=>array('/proveedor/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                                        )),


                                array('label'=>'Acerca', 'url'=>array('/site/page', 'view'=>'about')),
                                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                        ),
                                ),
                        ),
                ));
                ?>
                <div class="container">
                        <?php if(isset($this->breadcrumbs)):?>
                                <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                                        'links'=>$this->breadcrumbs,
                                )); ?><!-- breadcrumbs -->
                        <?php endif?>
 
                        <?php echo $content; ?>
                </div>
        </body>
</html>