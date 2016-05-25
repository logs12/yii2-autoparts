<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "main_banner".
 *
 * @property string $banner_image
 */
class MainBanner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'main_banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['banner_image'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'banner_image' => 'Banner Image',
        ];
    }

    /**
     * @inheritdoc
     * @return MainBannerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MainBannerQuery(get_called_class());
    }
}
