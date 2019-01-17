<?php

/**
 * This is the model class for table "orden_compra".
 *
 * The followings are the available columns in table 'orden_compra':
 * @property integer $id
 * @property string $fecha
 * @property double $cuota_inicial
 * @property integer $asesor
 * @property integer $supervisor
 * @property integer $distribuidor
 * @property string $obsequio
 * @property integer $cliente
 *
 * The followings are the available model relations:
 * @property Clientes $cliente0
 * @property Productos[] $productoses
 * @property Pagos[] $pagoses
 * @property Programacion[] $programacions
 */
class OrdenCompra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orden_compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, cuota_inicial, asesor, supervisor, distribuidor, obsequio, cliente', 'required'),
			array('asesor, supervisor, distribuidor, cliente', 'numerical', 'integerOnly'=>true),
			array('cuota_inicial', 'numerical'),
			array('obsequio', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, cuota_inicial, asesor, supervisor, distribuidor, obsequio, cliente', 'safe', 'on'=>'search'),
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
			'cliente0' => array(self::BELONGS_TO, 'Clientes', 'cliente'),
			'productoses' => array(self::MANY_MANY, 'Productos', 'orden_detalles(id_orden, id_producto)'),
			'pagoses' => array(self::HAS_MANY, 'Pagos', 'id_orden'),
			'programacions' => array(self::HAS_MANY, 'Programacion', 'id_orden'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'cuota_inicial' => 'Cuota Inicial',
			'asesor' => 'Asesor',
			'supervisor' => 'Supervisor',
			'distribuidor' => 'Distribuidor',
			'obsequio' => 'Obsequio',
			'cliente' => 'Cliente',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('cuota_inicial',$this->cuota_inicial);
		$criteria->compare('asesor',$this->asesor);
		$criteria->compare('supervisor',$this->supervisor);
		$criteria->compare('distribuidor',$this->distribuidor);
		$criteria->compare('obsequio',$this->obsequio,true);
		$criteria->compare('cliente',$this->cliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->luimer;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrdenCompra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
