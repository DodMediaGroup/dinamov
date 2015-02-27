<?php

/**
 * This is the model class for table "servicios".
 *
 * The followings are the available columns in table 'servicios':
 * @property integer $id_servicio
 * @property string $nombre_servicio
 * @property string $subtitulo_servicio
 * @property string $descripcion_servicio
 * @property string $imagen_servicio
 * @property string $caracteristicas
 * @property string $aplicaciones
 *
 * The followings are the available model relations:
 * @property Aplicacion[] $aplicacions
 */
class Servicios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'servicios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_servicio, subtitulo_servicio, descripcion_servicio, imagen_servicio, caracteristicas', 'required'),
			array('nombre_servicio', 'length', 'max'=>600),
			array('imagen_servicio', 'length', 'max'=>2250),
			array('aplicaciones', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_servicio, nombre_servicio, subtitulo_servicio, descripcion_servicio, imagen_servicio, caracteristicas, aplicaciones', 'safe', 'on'=>'search'),
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
			'aplicacions' => array(self::HAS_MANY, 'Aplicacion', 'id_servicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_servicio' => 'Id Servicio',
			'nombre_servicio' => 'Nombre Servicio',
			'subtitulo_servicio' => 'Subtitulo Servicio',
			'descripcion_servicio' => 'Descripcion Servicio',
			'imagen_servicio' => 'Imagen Servicio',
			'caracteristicas' => 'Caracteristicas',
			'aplicaciones' => 'Aplicaciones',
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

		$criteria->compare('id_servicio',$this->id_servicio);
		$criteria->compare('nombre_servicio',$this->nombre_servicio,true);
		$criteria->compare('subtitulo_servicio',$this->subtitulo_servicio,true);
		$criteria->compare('descripcion_servicio',$this->descripcion_servicio,true);
		$criteria->compare('imagen_servicio',$this->imagen_servicio,true);
		$criteria->compare('caracteristicas',$this->caracteristicas,true);
		$criteria->compare('aplicaciones',$this->aplicaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Servicios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
