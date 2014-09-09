<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $id_cliente
 * @property string $nombre_cliente
 * @property string $direccion_cliente
 * @property string $telefono_cliente
 * @property integer $id_tipocliente
 *
 * The followings are the available model relations:
 * @property TipoCliente $idTipocliente
 * @property Venta[] $ventas
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_cliente', 'required'),
			array('id_tipocliente', 'numerical', 'integerOnly'=>true),
			array('nombre_cliente, direccion_cliente, telefono_cliente', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cliente, nombre_cliente, direccion_cliente, telefono_cliente, id_tipocliente', 'safe', 'on'=>'search'),
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
			'idTipocliente' => array(self::BELONGS_TO, 'TipoCliente', 'id_tipocliente'),
			'ventas' => array(self::HAS_MANY, 'Venta', 'id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cliente' => 'Id Cliente',
			'nombre_cliente' => 'Nombre Cliente',
			'direccion_cliente' => 'Direccion Cliente',
			'telefono_cliente' => 'Telefono Cliente',
			'id_tipocliente' => 'Id Tipocliente',
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

		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('nombre_cliente',$this->nombre_cliente,true);
		$criteria->compare('direccion_cliente',$this->direccion_cliente,true);
		$criteria->compare('telefono_cliente',$this->telefono_cliente,true);
		$criteria->compare('id_tipocliente',$this->id_tipocliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
