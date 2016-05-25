<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\i18n\models\I18nMessage */

$this->title = $model->id_category_message;
$this->params['breadcrumbs'][] = ['label' => 'I18n Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="i18n-message-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_category_message' => $model->id_category_message, 'language' => $model->language], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_category_message' => $model->id_category_message, 'language' => $model->language], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_category_message',
            'language',
            'translation:ntext',
        ],
    ]) ?>

</div>
