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
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <h2>Автосервис семь звезд, ремонт автомобилей и продажа автозапчастей.</h2>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <aside class="contacts">
                        <i class="fa fa-phone fa-2x"></i>
                        <span>(831) 220-97-15</span>
                        <button class="btn btn-success callback"  data-toggle="modal" data-target="#callbackpop"
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
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-navbar-main">
                <?
                $menuItems = [
                    ['label' => '<i class="fa fa-home fa-1x"></i> Главная', 'url' => ['/site/index']],
                    ['label' => '<i class="fa fa-question fa-1x"></i> О нас', 'url' => ['/site/about']],
                    ['label' => '<i class="fa fa-car fa-1x"></i> Каталог запчастей', 'url' => ['/site/about']],
                    ['label' => '<i class="fa fa-tasks fa-1x"></i> Достижения', 'url' => ['/site/about']],
                    ['label' => '<i class="fa fa-commenting-o fa-1x"></i> Отзывы', 'url' => ['/site/about']],
                    ['label' => '<i class="fa fa-map-marker fa-1x"></i> Схема проезда', 'url' => ['/site/contact']],
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
    <!-- загружаем форму для popup окна-->
    <?php echo app\modules\callback\widgets\Callback::widget();?>
</header>
<div class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>

</div>
