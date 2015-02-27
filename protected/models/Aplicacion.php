<?php

/**
 * This is the model class for table "aplicacion".
 *
 * The followings are the available columns in table 'aplicacion':
 * @property integer $id_aplicacion
 * @property integer $id_servicio
 * @property string $nombre_aplicacion
 * @property string $imagen_aplicacion
 * @property string $caracteristicas_aplicacion
 *
 * The followings are the available model relations:
 * @property Servicios $idServicio
 */
class Aplicacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aplicacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_servicio, nombre_aplicacion, imagen_aplicacion, caracteristicas_aplicacion', 'required'),
			array('id_servicio', 'numerical', 'integerOnly'=>true),
			array('nombre_aplicacion', 'length', 'max'=>300),
			array('imagen_aplicacion', 'length', 'max'=>2250),
			array('caracteristicas_aplicacion', 'length', 'max'=>2700),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_aplicacion, id_servicio, nombre_aplicacion, imagen_aplicacion, caracteristicas_aplicacion', 'safe', 'on'=>'search'),
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
			'idServicio' => array(self::BELONGS_TO, 'Servicios', 'id_servicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_aplicacion' => 'Id Aplicacion',
			'id_servicio' => 'Id Servicio',
			'nombre_aplicacion' => 'Nombre Aplicacion',
			'imagen_aplicacion' => 'Imagen Aplicacion',
			'caracteristicas_aplicacion' => 'Caracteristicas Aplicacion',
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

		$criteria->compare('id_aplicacion',$this->id_aplicacion);
		$criteria->compare('id_servicio',$this->id_servicio);
		$criteria->compare('nombre_aplicacion',$this->nombre_aplicacion,true);
		$criteria->compare('imagen_aplicacion',$this->imagen_aplicacion,true);
		$criteria->compare('caracteristicas_aplicacion',$this->caracteristicas_aplicacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aplicacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
