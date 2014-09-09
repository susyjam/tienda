<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $id_proveedor
 * @property string $nombre_proveedor
 * @property integer $telefono_proveedor
 * @property string $direccion_proveedor
 * @property string $email_proveedor
 *
 * The followings are the available model relations:
 * @property Pedido[] $pedidos
 */
class Proveedor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('telefono_proveedor', 'numerical', 'integerOnly'=>true),
			array('nombre_proveedor, direccion_proveedor, email_proveedor', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_proveedor, nombre_proveedor, telefono_proveedor, direccion_proveedor, email_proveedor', 'safe', 'on'=>'search'),
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
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'id_proveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proveedor' => 'Id Proveedor',
			'nombre_proveedor' => 'Nombre Proveedor',
			'telefono_proveedor' => 'Telefono Proveedor',
			'direccion_proveedor' => 'Direccion Proveedor',
			'email_proveedor' => 'Email Proveedor',
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

		$criteria->compare('id_proveedor',$this->id_proveedor);
		$criteria->compare('nombre_proveedor',$this->nombre_proveedor,true);
		$criteria->compare('telefono_proveedor',$this->telefono_proveedor);
		$criteria->compare('direccion_proveedor',$this->direccion_proveedor,true);
		$criteria->compare('email_proveedor',$this->email_proveedor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
