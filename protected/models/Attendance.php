<?php

/**
 * This is the model class for table "{{attendance}}".
 *
 * The followings are the available columns in table '{{attendance}}':
 * @property integer $id
 * @property string $employee
 * @property string $date
 * @property string $punch_in
 * @property string $punch_out
 * @property string $note
 * @property integer $update_by
 * @property string $update_at
 */
class Attendance extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Attendance the static model class
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
		return '{{attendance}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('employee, date, punch_in, punch_out', 'required'),
			array('update_by','default', 'value'=>Yii::app()->user->id, 'setOnEmpty'=>false, 'on'=>'insert'),
			array('update_by','default', 'value'=>Yii::app()->user->id, 'setOnEmpty'=>false, 'on'=>'update'),
			array('update_at','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'insert'),
			array('update_at','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'update'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee, date, punch_in, punch_out, note, update_by, update_at', 'safe', 'on'=>'search'),
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
			'employee' => 'Employee ID',
			'date' => 'Date',
			'punch_in' => 'Clock In',
			'punch_out' => 'Clock Out',
			'note' => 'Note',
			'update_by' => 'Update By',
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
		$criteria->compare('employee',$this->employee,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('punch_in',$this->punch_in,true);
		$criteria->compare('punch_out',$this->punch_out,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('update_by',$this->update_by);
		$criteria->compare('update_at',$this->update_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
				'pageSize' => 20,
			),
			'sort' => array(
				'defaultOrder' => 'date desc',
			),
		));
	}

	public function countWorks($id, $periode)
	{
		$counts = $this->findAll('employee= :id AND date >= :d1 AND date <= :d2', array(':id'=>$id, ':d1'=>$periode[0], ':d2'=>$periode[1]));
		return count($counts);
	}

	public function countAbsent($id, $periode)
	{
		$counts = 0;
		$provider = $this->findAll('employee= :id AND date >= :d1 AND date <= :d2', array(':id'=>$id, ':d1'=>$periode[0], ':d2'=>$periode[1]));
		foreach($provider as $key => $data) {
			if ($data->punch_in == '00:00:00' && $data->punch_out == '00:00:00') $counts++;
		}
		return $counts;
	}
}
