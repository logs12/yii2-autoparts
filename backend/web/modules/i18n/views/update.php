<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\i18n\models\I18nMessage */

$this->title = 'Update I18n Message: ' . $model->id_category_message;
$this->params['breadcrumbs'][] = ['label' => 'I18n Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_category_message, 'url' => ['view', 'id_category_message' => $model->id_category_message, 'language' => $model->language]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="i18n-message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
