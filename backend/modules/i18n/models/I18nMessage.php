<?php

namespace backend\modules\i18n\models;

use Yii;

/**
 * This is the model class for table "{{%i18n_message}}".
 *
 * @property integer $id_category_message
 * @property string $language
 * @property string $translation
 *
 * @property I18nSourceMessage $idCategoryMessage
 */
class I18nMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%i18n_message}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category_message', 'language'], 'required'],
            [['id_category_message'], 'integer'],
            [['translation'], 'string'],
            [['language'], 'string', 'max' => 16],
            [['id_category_message'], 'exist', 'skipOnError' => true, 'targetClass' => I18nSourceMessage::className(), 'targetAttribute' => ['id_category_message' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_category_message' => Yii::t('app', 'Id Category Message'),
            'language' => Yii::t('app', 'Language'),
            'translation' => Yii::t('app', 'Translation'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategoryMessage()
    {
        return $this->hasOne(I18nSourceMessage::className(), ['id' => 'id_category_message']);
    }
}
