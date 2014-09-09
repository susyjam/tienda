<?php

/**
 * This is the model class for table "detalle_venta".
 *
 * The followings are the available columns in table 'detalle_venta':
 * @property integer $cantidad_detalleVenta
 * @property integer $percio_detalleVenta
 * @property integer $id_venta
 * @property integer $id_producto
 *
 * The followings are the available model relations:
 * @property Producto $idProducto
 * @property Venta $idVenta
 */
class DetalleVenta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detalle_venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidad_detalleVenta, percio_detalleVenta, id_venta, id_producto', 'required'),
			array('cantidad_detalleVenta, percio_detalleVenta, id_venta, id_producto', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cantidad_detalleVenta, percio_detalleVenta, id_venta, id_producto', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idProducto' => array(self::BELONGS_TO, 'Producto', 'id_producto'),
			'idVenta' => array(self::BELONGS_TO, 'Venta', 'id_venta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cantidad_detalleVenta' => 'Cantidad Detalle Venta',
			'percio_detalleVenta' => 'Percio Detalle Venta',
			'id_venta' => 'Id Venta',
			'id_producto' => 'Id Producto',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cantidad_detalleVenta',$this->cantidad_detalleVenta);
		$criteria->compare('percio_detalleVenta',$this->percio_detalleVenta);
		$criteria->compare('id_venta',$this->id_venta);
		$criteria->compare('id_producto',$this->id_producto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetalleVenta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
