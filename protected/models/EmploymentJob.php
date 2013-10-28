<?php

/**
 * This is the model class for table "{{employmentJob}}".
 *
 * The followings are the available columns in table '{{employmentJob}}':
 * @property integer $id
 * @property integer $employee
 * @property integer $job_id
 * @property integer $status_id
 * @property integer $category_id
 * @property string $joined_date
 * @property integer $department
 * @property integer $location
 */
class EmploymentJob extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EmploymentJob the static model class
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
		return '{{employmentJob}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee, job_id, status_id, category_id, joined_date, department, location', 'required'),
			array('employee, job_id, status_id, category_id, department, location', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee, job_id, status_id, category_id, joined_date, department, location', 'safe', 'on'=>'search'),
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
			'employee' => 'Employee Name',
			'job_id' => 'Job Title',
			'status_id' => 'Job Status',
			'category_id' => 'Job Category',
			'joined_date' => 'Joined Date',
			'department' => 'Department',
			'location' => 'Location',
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
		$criteria->compare('employee',$this->employee);
		$criteria->compare('job_id',$this->job_id);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('joined_date',$this->joined_date,true);
		$criteria->compare('department',$this->department);
		$criteria->compare('location',$this->location);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getJob($id)
	{
		if (isset($id)) {
		$provider = Job::model()->findByPK($id);
		return $provider->title;
		}
	}

	public function getStatus($id)
	{
		if (isset($id)) {
		$provider = JobStatus::model()->findByPK($id);
		return $provider->name;
		}
	}

	public function getCategory($id)
	{
		if (isset($id)) {
		$provider = JobCategory::model()->findByPK($id);
		return $provider->name;
		}
	}

	public function getDepartment($id)
	{
		if (isset($id)) {
		$provider = Department::model()->findByPK($id);
		return $provider->name;
		}
	}

	public function getLocation($id)
	{
		if (isset($id)) {
		$provider = Location::model()->findByPK($id);
		return $provider->name;
		}
	}
}
