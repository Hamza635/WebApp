<?php

/**
 * This is the model class for table "tbl_blogs".
 *
 * The followings are the available columns in table 'tbl_blogs':
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $slug
 * @property integer $views
 * @property string $image
 * @property string $body
 * @property integer $published
 * @property string $created_at
 */
class Blog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_blogs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, slug,  body, published, created_at', 'required'),
			array('user_id, views, published', 'numerical', 'integerOnly'=>true),
			array('title, slug, ', 'length', 'max'=>255),
            array('image', 'file', 'types' => 'jpg,jpeg,png,gif', 'allowEmpty' => True),
           // The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, title, slug, views, image, body, published, created_at', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'title' => 'Title',
			'slug' => 'Slug',
			'views' => 'Views',
			'image' => 'Image',
			'body' => 'Body',
			'published' => 'Published',
			'created_at' => 'Created At',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('views',$this->views);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('created_at',$this->created_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Blog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
