<?php

/**
 * This is the model class for table "mensajes".
 *
 * The followings are the available columns in table 'mensajes':
 * @property integer $ID_MENSAJE
 * @property string $NOMBRES
 * @property string $CORREO
 * @property string $TELEFONO
 * @property string $MENSAJE
 * @property string $FECHA
 * @property integer $ESTADO
 */
class Mensajes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mensajes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOMBRES, CORREO, MENSAJE, FECHA', 'required'),
			array('ESTADO', 'numerical', 'integerOnly'=>true),
			array('NOMBRES, CORREO, TELEFONO', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_MENSAJE, NOMBRES, CORREO, TELEFONO, MENSAJE, FECHA, ESTADO', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_MENSAJE' => 'Id Mensaje',
			'NOMBRES' => 'Nombres',
			'CORREO' => 'Correo',
			'TELEFONO' => 'Telefono',
			'MENSAJE' => 'Mensaje',
			'FECHA' => 'Fecha',
			'ESTADO' => 'Estado',
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

		$criteria->compare('ID_MENSAJE',$this->ID_MENSAJE);
		$criteria->compare('NOMBRES',$this->NOMBRES,true);
		$criteria->compare('CORREO',$this->CORREO,true);
		$criteria->compare('TELEFONO',$this->TELEFONO,true);
		$criteria->compare('MENSAJE',$this->MENSAJE,true);
		$criteria->compare('FECHA',$this->FECHA,true);
		$criteria->compare('ESTADO',$this->ESTADO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mensajes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
