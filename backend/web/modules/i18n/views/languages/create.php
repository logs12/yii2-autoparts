<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\i18n\models\I18nMessage */

$this->title = 'Create I18n Message';
$this->params['breadcrumbs'][] = ['label' => 'I18n Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="i18n-message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
