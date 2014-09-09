<?php

/**
 * This is the model class for table "empleado".
 *
 * The followings are the available columns in table 'empleado':
 * @property integer $id_empleado
 * @property string $nombre_empleado
 * @property string $direccion_empleado
 * @property integer $telefono_empleado
 * @property string $email_empleado
 * @property string $sexo_empleado
 * @property integer $id_cargo
 *
 * The followings are the available model relations:
 * @property Cargo $idCargo
 * @property Venta[] $ventas
 */
class Empleado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_empleado, sexo_empleado, id_cargo', 'required'),
			array('telefono_empleado, id_cargo', 'numerical', 'integerOnly'=>true),
			array('nombre_empleado, direccion_empleado, email_empleado, sexo_empleado', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_empleado, nombre_empleado, direccion_empleado, telefono_empleado, email_empleado, sexo_empleado, id_cargo', 'safe', 'on'=>'search'),
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
			'idCargo' => array(self::BELONGS_TO, 'Cargo', 'id_cargo'),
			'ventas' => array(self::HAS_MANY, 'Venta', 'id_empleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_empleado' => 'Id Empleado',
			'nombre_empleado' => 'Nombre Empleado',
			'direccion_empleado' => 'Direccion Empleado',
			'telefono_empleado' => 'Telefono Empleado',
			'email_empleado' => 'Email Empleado',
			'sexo_empleado' => 'Sexo Empleado',
			'id_cargo' => 'Id Cargo',
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

		$criteria->compare('id_empleado',$this->id_empleado);
		$criteria->compare('nombre_empleado',$this->nombre_empleado,true);
		$criteria->compare('direccion_empleado',$this->direccion_empleado,true);
		$criteria->compare('telefono_empleado',$this->telefono_empleado);
		$criteria->compare('email_empleado',$this->email_empleado,true);
		$criteria->compare('sexo_empleado',$this->sexo_empleado,true);
		$criteria->compare('id_cargo',$this->id_cargo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
