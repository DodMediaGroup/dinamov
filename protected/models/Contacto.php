<?php

/**
 * This is the model class for table "contacto".
 *
 * The followings are the available columns in table 'contacto':
 * @property integer $ID
 * @property string $DIRECCION
 * @property string $TELEFONOS
 * @property string $CORREO
 * @property string $HORARIO
 * @property string $FACEBOOK
 * @property string $TWITTER
 */
class Contacto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contacto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, DIRECCION, TELEFONOS, CORREO', 'required'),
			array('ID', 'numerical', 'integerOnly'=>true),
			array('DIRECCION, TELEFONOS, CORREO, HORARIO', 'length', 'max'=>500),
			array('FACEBOOK, TWITTER', 'length', 'max'=>900),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, DIRECCION, TELEFONOS, CORREO, HORARIO, FACEBOOK, TWITTER', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'DIRECCION' => 'Direccion',
			'TELEFONOS' => 'Telefonos',
			'CORREO' => 'Correo',
			'HORARIO' => 'Horario',
			'FACEBOOK' => 'Facebook',
			'TWITTER' => 'Twitter',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('DIRECCION',$this->DIRECCION,true);
		$criteria->compare('TELEFONOS',$this->TELEFONOS,true);
		$criteria->compare('CORREO',$this->CORREO,true);
		$criteria->compare('HORARIO',$this->HORARIO,true);
		$criteria->compare('FACEBOOK',$this->FACEBOOK,true);
		$criteria->compare('TWITTER',$this->TWITTER,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contacto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
