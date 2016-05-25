<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[MainBanner]].
 *
 * @see MainBanner
 */
class MainBannerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return MainBanner[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MainBanner|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}