<?php
$form = \yii\bootstrap\ActiveForm::begin([
    'options' => ['class' => 'callback-form'],
    'enableAjaxValidation' => false,
    'action' => 'callback\callback\callback'
    //'validationUrl' => \yii\helpers\Url::to(['/validate/index']),
]);
?>

<?=$form->field($model,'name') ?>
<?=$form->field($model,'phone') ?>
<?=$form->field($model,'email')->input('email')?>
<?=$form->field($model,'entity')->hiddenInput()->label(false) ?>

<?=\yii\helpers\Html::submitButton('Отправить',
    [
        'id' => 'loading-callback-btn',
        'class' => 'btn btn-success btn-block',
        'data-loading-text' => 'Отправка..'
    ])
?>

<? \yii\bootstrap\ActiveForm::end(); ?>
