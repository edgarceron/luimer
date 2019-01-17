<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 * @property string $cedula
 * @property integer $tipo_lugar_trabajo
 * @property string $nombre_lugar_trabajo
 * @property string $direccion_lugar_trabajo
 * @property string $telefono_lugar_trabajo
 * @property string $direccion
 * @property string $barrio
 * @property string $telefono
 * @property string $referencia1
 * @property string $parentesco1
 * @property string $telefono1
 * @property string $referencia2
 * @property string $parentesco2
 * @property string $telefono2
 * @property integer $lista_negra
 *
 * The followings are the available model relations:
 * @property OrdenCompra[] $ordenCompras
 */
class Clientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, email, cedula, tipo_lugar_trabajo, nombre_lugar_trabajo, direccion_lugar_trabajo, telefono_lugar_trabajo, direccion, barrio, telefono, referencia1, parentesco1, telefono1, referencia2, parentesco2, telefono2, lista_negra', 'required'),
			array('tipo_lugar_trabajo, lista_negra', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, email, nombre_lugar_trabajo, direccion_lugar_trabajo, direccion', 'length', 'max'=>50),
			array('cedula', 'length', 'max'=>10),
			array('barrio, telefono, parentesco1, parentesco2', 'length', 'max'=>30),
			array('referencia1, referencia2', 'length', 'max'=>60),
			array('telefono1, telefono2', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apellido, email, cedula, tipo_lugar_trabajo, nombre_lugar_trabajo, direccion_lugar_trabajo, telefono_lugar_trabajo, direccion, barrio, telefono, referencia1, parentesco1, telefono1, referencia2, parentesco2, telefono2, lista_negra', 'safe', 'on'=>'search'),
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
			'ordenCompras' => array(self::HAS_MANY, 'OrdenCompra', 'cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'email' => 'Email',
			'cedula' => 'Cedula',
			'tipo_lugar_trabajo' => 'Tipo Lugar Trabajo',
			'nombre_lugar_trabajo' => 'Nombre Lugar Trabajo',
			'direccion_lugar_trabajo' => 'Direccion Lugar Trabajo',
			'telefono_lugar_trabajo' => 'Telefono Lugar Trabajo',
			'direccion' => 'Direccion',
			'barrio' => 'Barrio',
			'telefono' => 'Telefono',
			'referencia1' => 'Referencia1',
			'parentesco1' => 'Parentesco1',
			'telefono1' => 'Telefono1',
			'referencia2' => 'Referencia2',
			'parentesco2' => 'Parentesco2',
			'telefono2' => 'Telefono2',
			'lista_negra' => 'Lista Negra',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('tipo_lugar_trabajo',$this->tipo_lugar_trabajo);
		$criteria->compare('nombre_lugar_trabajo',$this->nombre_lugar_trabajo,true);
		$criteria->compare('direccion_lugar_trabajo',$this->direccion_lugar_trabajo,true);
		$criteria->compare('telefono_lugar_trabajo',$this->telefono_lugar_trabajo,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('referencia1',$this->referencia1,true);
		$criteria->compare('parentesco1',$this->parentesco1,true);
		$criteria->compare('telefono1',$this->telefono1,true);
		$criteria->compare('referencia2',$this->referencia2,true);
		$criteria->compare('parentesco2',$this->parentesco2,true);
		$criteria->compare('telefono2',$this->telefono2,true);
		$criteria->compare('lista_negra',$this->lista_negra);

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
	 * @return Clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
