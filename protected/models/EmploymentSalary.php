<?php

/**
 * This is the model class for table "{{employmentSalary}}".
 *
 * The followings are the available columns in table '{{employmentSalary}}':
 * @property integer $id
 * @property integer $employee
 * @property double $gaji_pokok
 * @property double $tunjangan_tetap
 * @property double $tunjangan_jabatan
 * @property double $tunjangan_makan
 * @property double $tunjangan_bbm
 * @property double $tunjangan_kehadiran
 * @property double $rapelan
 * @property double $bonus
 * @property double $lembur
 * @property double $pinjaman
 * @property double $indisiplin
 * @property integer $update_by
 * @property string $update_at
 */
class EmploymentSalary extends CActiveRecord
{
	public $jamsostek;
	public $total;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EmploymentSalary the static model class
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
		return '{{employmentSalary}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee, gaji_pokok, tunjangan_tetap, tunjangan_jabatan, tunjangan_makan, tunjangan_bbm, tunjangan_kehadiran, rapelan, bonus, lembur, pinjaman, indisiplin', 'required'),
			array('employee, update_by', 'numerical', 'integerOnly'=>true),
			array('gaji_pokok, tunjangan_tetap, tunjangan_jabatan, tunjangan_makan, tunjangan_bbm, tunjangan_kehadiran, rapelan, bonus, lembur, pinjaman, indisiplin', 'numerical'),
			array('update_by','default', 'value'=>Yii::app()->user->id, 'setOnEmpty'=>false, 'on'=>'insert'),
			array('update_by','default', 'value'=>Yii::app()->user->id, 'setOnEmpty'=>false, 'on'=>'update'),
			array('update_at','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'insert'),
			array('update_at','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'update'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee, gaji_pokok, tunjangan_tetap, tunjangan_jabatan, tunjangan_makan, tunjangan_bbm, tunjangan_kehadiran, rapelan, bonus, lembur, pinjaman, indisiplin, update_by, update_at', 'safe', 'on'=>'search'),
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
			'employee' => 'Employee',
			'gaji_pokok' => 'Gaji Pokok',
			'tunjangan_tetap' => 'Tunjangan Tetap',
			'tunjangan_jabatan' => 'Tunjangan Jabatan',
			'tunjangan_makan' => 'Tunjangan Makan',
			'tunjangan_bbm' => 'Tunjangan Bbm',
			'tunjangan_kehadiran' => 'Tunjangan Kehadiran',
			'rapelan' => 'Rapelan',
			'bonus' => 'Bonus',
			'lembur' => 'Lembur',
			'pinjaman' => 'Pinjaman',
			'indisiplin' => 'Indisiplin',
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
		$criteria->compare('employee',$this->employee);
		$criteria->compare('gaji_pokok',$this->gaji_pokok);
		$criteria->compare('tunjangan_tetap',$this->tunjangan_tetap);
		$criteria->compare('tunjangan_jabatan',$this->tunjangan_jabatan);
		$criteria->compare('tunjangan_makan',$this->tunjangan_makan);
		$criteria->compare('tunjangan_bbm',$this->tunjangan_bbm);
		$criteria->compare('tunjangan_kehadiran',$this->tunjangan_kehadiran);
		$criteria->compare('rapelan',$this->rapelan);
		$criteria->compare('bonus',$this->bonus);
		$criteria->compare('lembur',$this->lembur);
		$criteria->compare('pinjaman',$this->pinjaman);
		$criteria->compare('indisiplin',$this->indisiplin);
		$criteria->compare('update_by',$this->update_by);
		$criteria->compare('update_at',$this->update_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
