<?php

/**
 * This is the model class for table "pedido".
 *
 * The followings are the available columns in table 'pedido':
 * @property integer $id_pedido
 * @property string $fecha_solicitado
 * @property string $fecha_entregado
 * @property string $fecha_requerido
 * @property string $fecha_anulado
 * @property string $costo_pedido
 * @property string $estado_pedido
 * @property integer $id_proveedor
 *
 * The followings are the available model relations:
 * @property Proveedor $idProveedor
 */
class Pedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_proveedor', 'required'),
			array('id_proveedor', 'numerical', 'integerOnly'=>true),
			array('fecha_solicitado, fecha_entregado, fecha_requerido, fecha_anulado, costo_pedido, estado_pedido', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pedido, fecha_solicitado, fecha_entregado, fecha_requerido, fecha_anulado, costo_pedido, estado_pedido, id_proveedor', 'safe', 'on'=>'search'),
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
			'idProveedor' => array(self::BELONGS_TO, 'Proveedor', 'id_proveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pedido' => 'Id Pedido',
			'fecha_solicitado' => 'Fecha Solicitado',
			'fecha_entregado' => 'Fecha Entregado',
			'fecha_requerido' => 'Fecha Requerido',
			'fecha_anulado' => 'Fecha Anulado',
			'costo_pedido' => 'Costo Pedido',
			'estado_pedido' => 'Estado Pedido',
			'id_proveedor' => 'Id Proveedor',
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

		$criteria->compare('id_pedido',$this->id_pedido);
		$criteria->compare('fecha_solicitado',$this->fecha_solicitado,true);
		$criteria->compare('fecha_entregado',$this->fecha_entregado,true);
		$criteria->compare('fecha_requerido',$this->fecha_requerido,true);
		$criteria->compare('fecha_anulado',$this->fecha_anulado,true);
		$criteria->compare('costo_pedido',$this->costo_pedido,true);
		$criteria->compare('estado_pedido',$this->estado_pedido,true);
		$criteria->compare('id_proveedor',$this->id_proveedor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
