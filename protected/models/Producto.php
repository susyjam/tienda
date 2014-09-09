<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $id_producto
 * @property string $nombre_producto
 * @property string $codigo_producto
 * @property string $stock_producto
 * @property string $precio_producto
 * @property integer $id_empresa
 * @property integer $id_tipoproducto
 *
 * The followings are the available model relations:
 * @property DetalleVenta[] $detalleVentas
 * @property Empresa $idEmpresa
 * @property TipoProducto $idTipoproducto
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_producto, codigo_producto, id_tipoproducto', 'required'),
			array('id_empresa, id_tipoproducto', 'numerical', 'integerOnly'=>true),
			array('nombre_producto, codigo_producto, stock_producto, precio_producto', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_producto, nombre_producto, codigo_producto, stock_producto, precio_producto, id_empresa, id_tipoproducto', 'safe', 'on'=>'search'),
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
			'detalleVentas' => array(self::HAS_MANY, 'DetalleVenta', 'id_producto'),
			'idEmpresa' => array(self::BELONGS_TO, 'Empresa', 'id_empresa'),
			'idTipoproducto' => array(self::BELONGS_TO, 'TipoProducto', 'id_tipoproducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_producto' => 'Id Producto',
			'nombre_producto' => 'Nombre Producto',
			'codigo_producto' => 'Codigo Producto',
			'stock_producto' => 'Stock Producto',
			'precio_producto' => 'Precio Producto',
			'id_empresa' => 'Id Empresa',
			'id_tipoproducto' => 'Id Tipoproducto',
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

		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('nombre_producto',$this->nombre_producto,true);
		$criteria->compare('codigo_producto',$this->codigo_producto,true);
		$criteria->compare('stock_producto',$this->stock_producto,true);
		$criteria->compare('precio_producto',$this->precio_producto,true);
		$criteria->compare('id_empresa',$this->id_empresa);
		$criteria->compare('id_tipoproducto',$this->id_tipoproducto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
