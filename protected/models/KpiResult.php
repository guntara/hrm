<?php

/**
 * This is the model class for table "{{kpiResult}}".
 *
 * The followings are the available columns in table '{{kpiResult}}':
 * @property integer $id
 * @property integer $review_id
 * @property integer $kpi_id
 * @property integer $rating
 * @property string $update_at
 */
class KpiResult extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KpiResult the static model class
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
		return '{{kpiResult}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('review_id, kpi_id, rating', 'required'),
			array('review_id, kpi_id, rating', 'numerical', 'integerOnly'=>true),
			array('update_at','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'insert'),
			array('update_at','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'update'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, review_id, kpi_id, rating, update_at', 'safe', 'on'=>'search'),
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
			'review_id' => 'Review',
			'kpi_id' => 'Kpi',
			'rating' => 'Rating',
			'update_at' => 'Update At',
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
		$criteria->compare('review_id',$this->review_id);
		$criteria->compare('kpi_id',$this->kpi_id);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('update_at',$this->update_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
