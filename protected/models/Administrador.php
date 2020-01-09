<?php

/**
 * This is the model class for table "administrador".
 *
 * The followings are the available columns in table 'administrador':
 * @property integer $id
 * @property integer $level
 * @property integer $superuser
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $user
 * @property string $password
 */
class Administrador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'administrador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('level, superuser, name, surname, email, password', 'required'),
			array('level, superuser', 'numerical', 'integerOnly'=>true),
			array('name, email, user, password', 'length', 'max'=>300),
			array('surname', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, level, superuser, name, surname, email, user, password', 'safe', 'on'=>'search'),
			['user', 'getCreateLogin'],

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
			'level' => 'Level',
			'superuser' => 'Superuser',
			'name' => 'Name',
			'surname' => 'Surname',
			'email' => 'Email',
			'user' => 'User',
			'password' => 'Password',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('level',$this->level);
		$criteria->compare('superuser',$this->superuser);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('user',$this->user,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getCreateLogin($attr)
	{
		$name = str_replace(" ", "", $this->name);
		$surname = str_replace(" ", "", $this->surname);
		if ($this->user == null) {
			$this->user = $name . '.' . $surname;
			return $this->user;
		}
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Administrador the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
