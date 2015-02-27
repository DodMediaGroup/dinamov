<?php

/**
 * This is the model class for table "quienes_somos".
 *
 * The followings are the available columns in table 'quienes_somos':
 * @property integer $ID
 * @property string $LEYENDA
 * @property string $QUIENES_SOMOS
 * @property string $MISION
 * @property string $VISION
 *
 * The followings are the available model relations:
 * @property TipsQs[] $tipsQs
 */
class QuienesSomos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quienes_somos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, LEYENDA, QUIENES_SOMOS, MISION, VISION', 'required'),
			array('ID', 'numerical', 'integerOnly'=>true),
			array('LEYENDA', 'length', 'max'=>835),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, LEYENDA, QUIENES_SOMOS, MISION, VISION', 'safe', 'on'=>'search'),
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
			'tipsQs' => array(self::HAS_MANY, 'TipsQs', 'ID_QUIENES_SOMOS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'LEYENDA' => 'Leyenda',
			'QUIENES_SOMOS' => 'Quienes Somos',
			'MISION' => 'Mision',
			'VISION' => 'Vision',
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
		$criteria->compare('LEYENDA',$this->LEYENDA,true);
		$criteria->compare('QUIENES_SOMOS',$this->QUIENES_SOMOS,true);
		$criteria->compare('MISION',$this->MISION,true);
		$criteria->compare('VISION',$this->VISION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return QuienesSomos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
