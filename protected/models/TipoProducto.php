<?php

/**
 * This is the model class for table "tipo_producto".
 *
 * The followings are the available columns in table 'tipo_producto':
 * @property integer $id_tipoproducto
 * @property string $nombre_tipoproducto
 * @property string $detalle_tipoproducto
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 */
class TipoProducto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_tipoproducto', 'required'),
			array('nombre_tipoproducto, detalle_tipoproducto', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tipoproducto, nombre_tipoproducto, detalle_tipoproducto', 'safe', 'on'=>'search'),
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
			'productos' => array(self::HAS_MANY, 'Producto', 'id_tipoproducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipoproducto' => 'Id Tipoproducto',
			'nombre_tipoproducto' => 'Nombre Tipoproducto',
			'detalle_tipoproducto' => 'Detalle Tipoproducto',
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

		$criteria->compare('id_tipoproducto',$this->id_tipoproducto);
		$criteria->compare('nombre_tipoproducto',$this->nombre_tipoproducto,true);
		$criteria->compare('detalle_tipoproducto',$this->detalle_tipoproducto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoProducto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}