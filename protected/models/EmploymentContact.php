<?php

/**
 * This is the model class for table "{{employmentContact}}".
 *
 * The followings are the available columns in table '{{employmentContact}}':
 * @property integer $id
 * @property integer $emp_id
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property string $country
 * @property string $telephone
 * @property string $mobile
 * @property string $office_phone
 * @property string $email
 * @property string $othere_email
 */
class EmploymentContact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EmploymentContact the static model class
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
		return '{{employmentContact}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emp_id, address1, address2, city, state, zip, country, telephone, mobile, office_phone, email, othere_email', 'required'),
			array('emp_id, zip', 'numerical', 'integerOnly'=>true),
			array('address1, address2, city, state, country, email, othere_email', 'length', 'max'=>255),
			array('telephone, mobile, office_phone', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, emp_id, address1, address2, city, state, zip, country, telephone, mobile, office_phone, email, othere_email', 'safe', 'on'=>'search'),
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
			'emp_id' => 'Emp',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'country' => 'Country',
			'telephone' => 'Telephone',
			'mobile' => 'Mobile',
			'office_phone' => 'Office Phone',
			'email' => 'Email',
			'othere_email' => 'Othere Email',
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
		$criteria->compare('emp_id',$this->emp_id);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('office_phone',$this->office_phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('othere_email',$this->othere_email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}