<?php

/**
 * This is the model class for table "tips_qs".
 *
 * The followings are the available columns in table 'tips_qs':
 * @property integer $ID_TIP
 * @property integer $ID_QUIENES_SOMOS
 * @property string $NOMBRE_TIP
 * @property string $DESCRIPCION_TIP
 * @property string $IMAGEN_TIP
 *
 * The followings are the available model relations:
 * @property QuienesSomos $iDQUIENESSOMOS
 */
class TipsQs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tips_qs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_QUIENES_SOMOS, NOMBRE_TIP, DESCRIPCION_TIP, IMAGEN_TIP', 'required'),
			array('ID_QUIENES_SOMOS', 'numerical', 'integerOnly'=>true),
			array('NOMBRE_TIP', 'length', 'max'=>30),
			array('IMAGEN_TIP', 'length', 'max'=>700),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_TIP, ID_QUIENES_SOMOS, NOMBRE_TIP, DESCRIPCION_TIP, IMAGEN_TIP', 'safe', 'on'=>'search'),
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
			'iDQUIENESSOMOS' => array(self::BELONGS_TO, 'QuienesSomos', 'ID_QUIENES_SOMOS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_TIP' => 'Id Tip',
			'ID_QUIENES_SOMOS' => 'Id Quienes Somos',
			'NOMBRE_TIP' => 'Nombre Tip',
			'DESCRIPCION_TIP' => 'Descripcion Tip',
			'IMAGEN_TIP' => 'Imagen Tip',
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

		$criteria->compare('ID_TIP',$this->ID_TIP);
		$criteria->compare('ID_QUIENES_SOMOS',$this->ID_QUIENES_SOMOS);
		$criteria->compare('NOMBRE_TIP',$this->NOMBRE_TIP,true);
		$criteria->compare('DESCRIPCION_TIP',$this->DESCRIPCION_TIP,true);
		$criteria->compare('IMAGEN_TIP',$this->IMAGEN_TIP,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipsQs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
