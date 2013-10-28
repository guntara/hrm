<?php

/**
 * This is the model class for table "{{employee}}".
 *
 * The followings are the available columns in table '{{employee}}':
 * @property integer $id
 * @property string $employee_id
 * @property string $citizen_id
 * @property string $driver_license
 * @property string $firstname
 * @property string $middle
 * @property string $lastname
 * @property integer $gender
 * @property integer $marital_status
 * @property string $placeofbirth
 * @property string $dateofbirth
 * @property string $nationality
 * @property string $ethnic
 * @property string $photograph
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
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
		return '{{employee}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, citizen_id, firstname, lastname, marital_status, placeofbirth, dateofbirth, nationality', 'required'),
			array('gender, marital_status', 'numerical', 'integerOnly'=>true),
			array('employee_id, driver_license', 'length', 'max'=>20),
			array('citizen_id', 'length', 'max'=>16),
			array('firstname, middle, lastname, placeofbirth, nationality, ethnic', 'length', 'max'=>255),
			array('photograph', 'file', 'types'=>'jpg,gif,png', 'maxSize'=>1024*1024*2, 'tooLarge'=>'Please upload foto smaller than 2MB.','allowEmpty'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee_id, citizen_id, driver_license, firstname, middle, lastname, gender, marital_status, placeofbirth, dateofbirth, nationality, ethnic, photograph', 'safe', 'on'=>'search'),
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
			'employee_id' => 'Employee ID',
			'citizen_id' => 'Citizen ID/KTP',
			'driver_license' => 'Driver License',
			'firstname' => 'First Name',
			'middle' => 'Middle Name',
			'lastname' => 'Last Name',
			'gender' => 'Gender',
			'marital_status' => 'Marital Status',
			'placeofbirth' => 'Place of Birth',
			'dateofbirth' => 'Date of Birth',
			'nationality' => 'Nationality',
			'ethnic' => 'Ethnic',
			'photograph' => 'Photograph',
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
		$criteria->compare('employee_id',$this->employee_id,true);
		$criteria->compare('citizen_id',$this->citizen_id,true);
		$criteria->compare('driver_license',$this->driver_license,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('middle',$this->middle,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('marital_status',$this->marital_status);
		$criteria->compare('placeofbirth',$this->placeofbirth,true);
		$criteria->compare('dateofbirth',$this->dateofbirth,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('ethnic',$this->ethnic,true);
		$criteria->compare('photograph',$this->photograph,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
				'pageSize' => 20,
			),
			'sort' => array(
				'defaultOrder' => 'firstname',
			),
		));
	}

	public function empList($periode)
	{
		$ids = "SELECT `employee` FROM `tbl_review` WHERE `periode`='$periode'";
		return CHtml::listData(Employee::model()->findAllBySql(
			"SELECT `id`, CONCAT(firstname, ' ', middle, ' ', lastname) AS `firstname` FROM `tbl_employee` WHERE id NOT IN ($ids)"), 'id', 'firstname');
	}

	public function getMarital($id)
	{
		if (isset($id)) {
			switch ($id) {
				case 0: return 'Single'; break;
				case 1: return 'Married'; break;
				case 2: return 'Other'; break;
			}
		}
	}
}
