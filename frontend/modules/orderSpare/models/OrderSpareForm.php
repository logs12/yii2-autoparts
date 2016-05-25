<?php

namespace frontend\modules\orderSpare\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

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
class OrderSpareForm extends ActiveRecord
{

    const SCENARIO_CATALOG_NUMBER = 'catalog_number';
    const SCENARIO_VIN = 'vin';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_spare}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @return array $scenarios
     */
    public function scenarios()
    {
        $scenarios =  parent::scenarios();
        $scenarios[self::SCENARIO_CATALOG_NUMBER] = ['catalog_number','comment','car_model'];
        $scenarios[self::SCENARIO_VIN] = ['vin','comment','car_model'];

        return $scenarios;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catalog_number'], 'required', 'on' => self::SCENARIO_CATALOG_NUMBER],
            [['vin'], 'required', 'on' => self::SCENARIO_VIN],
            [['created_at', 'updated_at','catalog_number','vin'], 'integer'],
            [['catalog_number','vin','comment','car_model'], 'filter', 'filter' => 'trim']
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
            'vin' => 'Vin запчасти',
            'catalog_number' => 'Номер запчасти по каталогу',
            'comment' => 'Комментарий',
            'car_model' => 'Модель автомобиля',
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
