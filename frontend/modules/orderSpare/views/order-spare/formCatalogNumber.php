<?php
$form = \yii\bootstrap\ActiveForm::begin([
		'id' => 'form-catalog-number',
		'options' => ['class' => 'popap-spare-form'],
		'enableAjaxValidation' => false,
		'action' => 'orderSpare\order-spare\catalog-number'
]);

$fieldCatalogNumber = [
		'options' => ['class' => 'form-group has-feedback'],
		'inputTemplate' => "<span class='glyphicon glyphicon-list-alt form-control-feedback'></span>{input}"
];

$fieldOptionsCarModel = [
		'options' => ['class' => 'form-group has-feedback'],
		'inputTemplate' => "<span class='fa fa-car fa-1x form-control-feedback'></span>{input}"
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

<?=$form->field($modelOrderSpareForm,'catalog_number',$fieldCatalogNumber)
		->label(false)
		->textInput(['placeholder' => $modelOrderSpareForm->getAttributeLabel('catalog_number')]) ?>
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
			'class' => 'btn btn-success btn-block',
			'data-loading-text' => 'Отправка..'
		])
?>

<? \yii\bootstrap\ActiveForm::end(); ?>