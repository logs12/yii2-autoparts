<?php
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use common\widgets\Alert;
?>
<header>

    <section class="header-top">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 v-center">
                    <h3>Автосервис семь звезд, ремонт автомобилей и продажа автозапчастей.</h3>
                </div><!--
--><div class="col-xs-12 col-md-6 col-lg-6 v-center">
                    <aside class="contacts">
                        <div class="contact_phone">
                            <i class="fa fa-phone fa-2x"></i>
                            <span>(831) 220-97-15</span>
                        </div>
                        <button class="btn btn-success callback"
                                entity="Заявка с кнопки обратного звонка в шапке">
                            Заказать звонок
                        </button>
                    </aside>
                    <!--<aside><i class="fa fa-envelope-o"></i></aside>-->
                </div>
            </div>
        </div>
    </section>


    <!-- Nav Starts -->
    <nav class="navbar-main" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-main">
                    <span class="sr-only">Toggle navigation</span>
                    <span>ГЛАВНОЕ МЕНЮ</span>
                    <i class="fa fa-caret-square-o-down"></i>
                    <!--<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>-->
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-navbar-main">
                <?
                $menuItems = [
                    ['label' => '<i class="fa fa-home fa-1x"></i> Главная', 'url' => ['/']],
                    //['label' => '<i class="fa fa-question fa-1x"></i> О нас', 'url' => ['/site/about']],
                    [
                        'label' => '<i class="fa fa-car fa-1x "></i> Заказ автозапчастей',
                        'url' => '',
                        'linkOptions' => [
                            'class' => 'order-spare',
                            'entity' => "заявка на покупку автозапчасти"
                        ]
                    ],
                    ['label' => '<i class="fa fa-tasks fa-1x"></i> Достижения', 'url' => ['/#progress']],
                    ['label' => '<i class="fa fa-commenting-o fa-1x"></i> Отзывы', 'url' => ['/#reviews']],
                    ['label' => '<i class="fa fa-map-marker fa-1x"></i> Схема проезда', 'url' => ['/#map']],
                ];
                echo Nav::widget([
                    'encodeLabels' => false,
                    'options' => ['class' => 'nav nav-justified'],
                    'items' => $menuItems,
                ]);
                ?>
            </div>
        </div>
    </nav>

    <!-- #Nav Ends -->

    <?php
        /* загружаем форму для popup окна */
        echo logs12\callback\widgets\Callback::widget(['typeView' => 'popupForm']);
    ?>

    <?php
        /* загружаем форму для popup окна */
        echo frontend\modules\orderSpare\widgets\OrderSpare::widget();
    ?>
</header>
<div class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>

</div>
