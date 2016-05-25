<?php

namespace backend\modules\callback\models;

use Yii;

/**
 * This is the model class for table "{{%order_spare}}".
 *
 * @property integer $id
 * @property integer $callback_id
 * @property integer $vin
 * @property integer $catalog_number
 * @property string $comment
 * @property string $car_model
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Callback $callback
 */
class OrderSpare extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_spare}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['callback_id', 'created_at', 'updated_at'], 'required'],
            [['callback_id', 'vin', 'catalog_number', 'created_at', 'updated_at'], 'integer'],
            [['comment', 'car_model'], 'string', 'max' => 255],
            [['callback_id'], 'exist', 'skipOnError' => true, 'targetClass' => Callback::className(), 'targetAttribute' => ['callback_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'callback_id' => 'Callback ID',
            'vin' => 'Vin',
            'catalog_number' => 'Catalog Number',
            'comment' => 'Comment',
            'car_model' => 'Car Model',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCallback()
    {
        return $this->hasOne(Callback::className(), ['id' => 'callback_id']);
    }
}
