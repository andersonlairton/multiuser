<?php

/**
 * This is the model class for table "tb_users".
 *
 * The followings are the available columns in table 'tb_users':
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $office
 * @property string $login
 * @property string $password
 * @property integer $SuperAdministrators
 */
class TbUsers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, surname, office, password, SuperAdministrators', 'required'),
			array('SuperAdministrators', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, surname, office, login, password, SuperAdministrators', 'safe', 'on'=>'search'),
			['login','getCreateLogin'],
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
			'fkPermission'=> array(self::HAS_MANY,'tb_permission','id'),
			'fkOffice'=>array(self::HAS_MANY,'tb_office','id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'surname' => 'Surname',
			'office' => 'Office',
			'login' => 'Login',
			'password' => 'Password',
			'SuperAdministrators' => 'Super Administrators',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('office',$this->office,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('SuperAdministrators',$this->SuperAdministrators);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbUsers the static model class
	 */
	
	 //criando um login com nome e sobrenome
	 public function getCreateLogin($attr){
		 $name = str_replace(" ","",$this->name);
		 $surname=str_replace(" ","",$this->surname);

		$this->login=$name.'.'.$surname;
		return $this->login;
	 }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
