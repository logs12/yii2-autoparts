<?php

namespace frontend\modules\orderSpare\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%callback}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $entity
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property OrderSpareForm[] $orderSpares
 */
class Callback extends ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%callback}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'required'],
            [['created_at', 'updated_at','phone'], 'integer'],
            [['name', 'phone', 'email'], 'filter', 'filter' => 'trim'],
            [['name', 'email'], 'string', 'max' => 255],
            ['email', 'email'],
            [['entity', 'name'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ваше имя',
            'phone' => 'Ваш телефон',
            'email' => 'Email',
            'entity' => 'Entity',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
