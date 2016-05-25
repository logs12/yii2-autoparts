<?php

namespace backend\modules\callback\models;

use Yii;

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
 * @property OrderSpare[] $orderSpares
 */
class Callback extends \yii\db\ActiveRecord
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
    public function rules()
    {
        return [
            [['name', 'phone', 'email', 'entity', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'email', 'entity'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'entity' => 'Entity',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderSpares()
    {
        return $this->hasOne(OrderSpare::className(), ['callback_id' => 'id']);
    }
}
