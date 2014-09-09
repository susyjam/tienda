<?php

/**
 * This is the model class for table "usuario_rol".
 *
 * The followings are the available columns in table 'usuario_rol':
 * @property integer $id_usu
 * @property integer $id_rol
 *
 * The followings are the available model relations:
 * @property Rol $idRol
 * @property Usuario $idUsu
 */
class UsuarioRol extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario_rol';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_usu, id_rol', 'required'),
			array('id_usu, id_rol', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usu, id_rol', 'safe', 'on'=>'search'),
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
			'idRol' => array(self::BELONGS_TO, 'Rol', 'id_rol'),
			'idUsu' => array(self::BELONGS_TO, 'Usuario', 'id_usu'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usu' => 'Id Usu',
			'id_rol' => 'Id Rol',
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

		$criteria->compare('id_usu',$this->id_usu);
		$criteria->compare('id_rol',$this->id_rol);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsuarioRol the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
