<?php use yii\bootstrap\Nav; ?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-5">
                <!-- Nav Starts -->
                <nav class="navbar-footer" role="navigation">
                    <?
                    $menuItems = [
                            ['label' => '<i class="fa fa-home fa-1x"></i> Главная', 'url' => ['/site/index']],
                            ['label' => '<i class="fa fa-question fa-1x"></i> О нас', 'url' => ['/site/about']],
                            ['label' => '<i class="fa fa-car fa-1x"></i> Каталог запчастей', 'url' => ['/site/about']]
                    ];
                    echo Nav::widget([
                            'encodeLabels' => false,
                            'options' => ['class' => ''],
                            'items' => $menuItems,
                    ]);
                    ?>
                </nav>
                <nav class="navbar-footer" role="navigation">
                    <?
                    $menuItems = [
                            ['label' => '<i class="fa fa-tasks fa-1x"></i> Достижения', 'url' => ['/site/about']],
                            ['label' => '<i class="fa fa-commenting-o fa-1x"></i> Отзывы', 'url' => ['/site/about']],
                            ['label' => '<i class="fa fa-map-marker fa-1x"></i> Схема проезда', 'url' => ['/site/contact']],
                    ];
                    echo Nav::widget([
                            'encodeLabels' => false,
                            'options' => ['class' => ''],
                            'items' => $menuItems,
                    ]);
                    ?>
                </nav>
            </div>

            <div class="contacts col-lg-4 col-sm-4 ">
                <h4>Свяжитесь с нами</h4>
                <p><b>Автосервис "Семь звезд"</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
                    <span class="glyphicon glyphicon-earphone"></span> (831) 220-97-15</p>
                <button class="btn btn-success callback"
                        entity="Заявка с кнопки обратного звонка в шапке">
                    Оставить заявку
                </button>
            </div>

            <div class="socialButton col-lg-3 col-sm-3">
                <a href="#"><i class="fa fa-vk fa-2x"></i></a>
                <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
            </div>
        </div>

    </div>
</footer>