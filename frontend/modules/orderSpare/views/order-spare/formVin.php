<?php
$form = \yii\bootstrap\ActiveForm::begin([
		'id' => 'form-vin',
		'options' => ['class' => 'popap-spare-form'],
		'enableAjaxValidation' => false,
		'action' => 'orderSpare\order-spare\vin'
]);

$fieldCatalogVin = [
		'options' => ['class' => 'form-group has-feedback'],
		'inputTemplate' => "<span class='glyphicon glyphicon-barcode form-control-feedback'></span>{input}"
];

$fieldOptionsCarModel = [
		'options' => ['class' => 'form-group has-feedback'],
		'inputTemplate' => "<span class='glyphicons glyphicons-truck form-control-feedback'></span>{input}"
];

$fieldOptionsPhone = [
		'options' => ['class' => 'form-group has-feedback'],
		'inputTemplate' => "<span class='glyphicon glyphicon-phone form-control-feedback'></span>{input}"
];
$fieldOptionsComment = [
		'options' => ['class' => 'form-group has-feedback'],
		'inputTemplate' => "<span class='glyphicon glyphicon-envelope form-control-feedback'></span>{input}"
];
?>

<?=$form->field($modelOrderSpareForm,'vin',$fieldCatalogVin)
		->label(false)
		->textInput(['placeholder' => $modelOrderSpareForm->getAttributeLabel('vin')]) ?>
<?=$form->field($modelOrderSpareForm,'car_model',$fieldOptionsCarModel)
		->label(false)
		->textInput(['placeholder' => $modelOrderSpareForm->getAttributeLabel('car_model')]) ?>
<?=$form->field($modelOrderSpareForm,'comment',$fieldOptionsComment)
		->label(false)
		->textarea(['placeholder' => $modelOrderSpareForm->getAttributeLabel('comment')])?>
<?=$form->field($modelCallback,'phone',$fieldOptionsPhone)
		->label(false)
		->textInput(['placeholder' => $modelCallback->getAttributeLabel('phone')])?>

<?=$form->field($modelCallback,'entity')->hiddenInput()->label(false) ?>

<?=\yii\helpers\Html::submitButton('Отправить',
		[
				'id' => 'loading-callback-btn',
				'class' => 'btn btn-success btn-block',
				'data-loading-text' => 'Отправка..'
		])
?>

<? \yii\bootstrap\ActiveForm::end(); ?>