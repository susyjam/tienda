<?php

/**
 * This is the model class for table "venta".
 *
 * The followings are the available columns in table 'venta':
 * @property integer $id_venta
 * @property string $fecha_venta
 * @property string $hora_venta
 * @property integer $id_cliente
 * @property integer $id_empleado
 *
 * The followings are the available model relations:
 * @property DetalleVenta[] $detalleVentas
 * @property Cliente $idCliente
 * @property Empleado $idEmpleado
 */
class Venta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cliente, id_empleado', 'required'),
			array('id_cliente, id_empleado', 'numerical', 'integerOnly'=>true),
			array('fecha_venta, hora_venta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_venta, fecha_venta, hora_venta, id_cliente, id_empleado', 'safe', 'on'=>'search'),
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
			'detalleVentas' => array(self::HAS_MANY, 'DetalleVenta', 'id_venta'),
			'idCliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
			'idEmpleado' => array(self::BELONGS_TO, 'Empleado', 'id_empleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_venta' => 'Id Venta',
			'fecha_venta' => 'Fecha Venta',
			'hora_venta' => 'Hora Venta',
			'id_cliente' => 'Id Cliente',
			'id_empleado' => 'Id Empleado',
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

		$criteria->compare('id_venta',$this->id_venta);
		$criteria->compare('fecha_venta',$this->fecha_venta,true);
		$criteria->compare('hora_venta',$this->hora_venta,true);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_empleado',$this->id_empleado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Venta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
