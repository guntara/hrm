<?php

/**
 * This is the model class for table "{{kpiAspect}}".
 *
 * The followings are the available columns in table '{{kpiAspect}}':
 * @property integer $id
 * @property integer $kpi_id
 * @property string $aspect
 * @property integer $percent
 */
class KpiAspect extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KpiAspect the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{kpiAspect}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kpi_id, aspect, percent', 'required'),
			array('kpi_id, percent', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, kpi_id, aspect, percent', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'kpi_id' => 'Kpi',
			'aspect' => 'Aspect',
			'percent' => 'Percent',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('kpi_id',$this->kpi_id);
		$criteria->compare('aspect',$this->aspect,true);
		$criteria->compare('percent',$this->percent);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}