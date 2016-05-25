<?php

/* @var $this yii\web\View */

use frontend\assets\AnimateAsset;
use frontend\assets\MainAsset;
use yii\helpers\Html;
use app\widgets\countdown\Countdown;

AnimateAsset::register($this);

$MainAsset = new MainAsset;
$pathMainAsset = Yii::$app->assetManager->getPublishedUrl($MainAsset->sourcePath);

$this->title = 'My Yii Application';
?>

<div class="main_banner">


   <?/*= Html::img(
            '@web'.$pathMainAsset.'/images/main.jpg',
            ['class' => 'img-responsive','alt' => 'Наш логотип','width' => '100%']
    ) */?>

    <div class="container">
        <h3>ремонт автомобилей</h3>
        <h4>продажа автозапастей по выгодным ценам</h4>
        <div class="row">
            <div class="col-sm-12 col-md-6"></div>
            <div class="col-sm-12 col-md-6">
                <div class="simpleFormCallback">
                    <div class="timer_block">
                        <span>Оставьте заявку</span>
                        и получите<br><b>купон на 1 000 руб.</b><br>на все виды услуг

                    </div>
                    <?= Countdown::widget()?>
                    <div class="order_block">
                        <?php echo logs12\callback\widgets\Callback::widget(['typeView' => 'simpleForm']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="counts">
    <div class="container">
        <div class="col-sm-12 col-md-3 c1">
            <span>10</span>
            <div>высококлассных специалистов, имеющих мировые сертификаты</div>
        </div>
        <div class="col-sm-12 col-md-4 c2">
            <span>5239</span>
            <span>клиентов уже выбрали нас и остались довольны</span>
        </div>
        <div class="col-sm-12 col-md-2 c3">
            <span>7</span>
            <span>лет успешных работ по авторемонту</span>
        </div>
        <div class="col-sm-12 col-md-3 c4">
            <span>12</span>
            <span>месяцев гарантии на все выполненные работы</span>
        </div>
    </div>
</div>

<div class="privilege">
    <div class="container">
        <h2>Все еще не решились отдать свое авто в сервис?</h2>

        <section class="rq col-sm-12 col-md-6">
            <table>
                <tr>
                    <td>
                        <div>Боитесь, что при обращении вам назовут одну цену,
                            а после ремонта – другую?</div>
                    </td>
                    <td><i class="fa fa-question fa-4x"></i></td>
                </tr>
            </table>
        </section>
        <section class="ra col-sm-12 col-md-6">
            <table>
                <tr>
                    <td> <i class="fa fa-exclamation fa-4x"></i></td>
                    <td><span>Прозрачная цена</span>
                        Цена на покраску и ремонтные работы останется неизменной
                        - без дополнительных затрат<br>и наценок на детали.
                    </td>
                </tr>
            </table>
        </section>
       <div class="clearfix"></div>
        <section class="rq col-sm-12 col-md-6">
            <table>
                <tr>
                    <td>Необходим срочный ремонт авто после аварии?</td>
                    <td><i class="fa fa-question fa-4x"></i></td>
                </tr>
            </table>
        </section>
        <section class="ra col-sm-12 col-md-6">
            <table>
                <tr>
                    <td><i class="fa fa-exclamation fa-4x"></i></td>
                    <td>
                        <span>Срочный ремонт</span>
                        Все работы по ремонту и покраске вашего авто
                        будут выполены в срок от 1 до 7 дней в зависимости от сложности.
                    </td>
                </tr>
            </table>
        </section>
        <div class="clearfix"></div>
        <section class="rq col-sm-12 col-md-6">
            <table>
                <tr>
                    <td>Квалификация работников автосервисов вызывает у вас сомнения?</td>
                    <td><i class="fa fa-question fa-4x"></i></td>
                </tr>
            </table>
        </section>
        <section class="ra col-sm-12 col-md-6">
            <table>
                <tr>
                    <td> <i class="fa fa-exclamation fa-4x"></i></td>
                    <td>
                        <span>Только опытные сотрудники</span>
                        Cпециалисты нашего сервиса – профессионалы
                        с опытом работы более 10 лет в сфере покраски и ремонта авто.
                    </td>
                </tr>
            </table>
        </section>
        <div class="clearfix"></div>
        <section class="rq col-sm-12 col-md-6">
            <table>
                <tr>
                    <td>Появилось желание обновить внешний вид авто?</td>
                    <td><i class="fa fa-question fa-4x"></i></td>
                </tr>
            </table>
        </section>
        <section class="ra col-sm-12 col-md-6">
            <table>
                <tr>
                    <td><i class="fa fa-exclamation fa-4x"></i></td>
                    <td>
                        <span>Безупречный вид авто надолго</span>
                        Мы работаем только с проверенными брендами-производителями лакокрасочных
                        покрытий из Америки и Германии, чья надежность проверена годами!
                    </td>
                </tr>
            </table>
        </section>
        <div class="clearfix"></div>
        <section class="rq col-sm-12 col-md-6">
            <table>
                <tr>
                    <td>Хотите гарантий на все выполненные работы?</td>
                    <td><i class="fa fa-question fa-4x"></i></td>
                </tr>
            </table>
        </section>
        <section class="ra col-sm-12 col-md-6">
            <table>
                <tr>
                    <td><i class="fa fa-exclamation fa-4x"></i></td>
                    <td><span>Безупречный вид авто надолго</span>
                        <span>Гарантия 12 месяцев</span>
                        Мы предоставляем гарантию 12 месяцев
                        на все покрасочные и ремонтные работы.
                    </td>
                </tr>
            </table>
        </section>
        <div class="clearfix"></div>

    </div>
</div>-->
<div class="logotips">
    <div class="container">
        <div class="row">
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/ford.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/honda.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/hyundai.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/toyota.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/volvo.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/mazda.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
        </div>
        <div class="row">
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/subaru.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/opel.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/chevrolet.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/volkswagen.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/cadillac.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/nissan.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/audi.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
            <section class="col-sm-12 col-md-2">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/logotips/bmw.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
            </section>
        </div>
    </div>
</div>
<div class="service">
    <div class="container">
        <h2>Услуги автомобильного ремонта и запчасти в одном месте:</h2>
        <div class="row">
            <section class="col-sm-12 col-md-6">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service/сhassis.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <h3>Ремонт ходовой</h3>
                <span>диагностика, замена запчастей, настройка подвески и т.д.</span>
            </section>
            <section class="col-sm-12 col-md-6">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service/electrician.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <h3>Ремонт электрики</h3>
                <span>Устранение неисправностей, установка дополнительного оборудования</span>
            </section>
        </div>
        <div class="row">
            <section class="col-sm-12 col-md-6">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service/engine.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <h3>Ремонт двигателя</h3>
                <span>дизельных и бензиновых моторов любого рабочего объема</span>
            </section>
            <section class="col-sm-12 col-md-6">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service/bus.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <h3>Шиномонтаж</h3>
                <span>замена шин, балансировка колес, развал-схождение, подкачка колес</span>
            </section>
        </div>
        <div class="row">
            <section class="col-sm-12 col-md-6">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service/body.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <h3>Кузовные работы</h3>
                <span>Восстановление авто после ДТП, сварочные и покрасочные работы</span>
            </section>
            <section class="col-sm-12 col-md-6">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service/polish.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <h3>Полировка кузова</h3>
                <span>восстановление внешнего вида, устранение сколов и царапин</span>
            </section>
        </div>
        <div class="row">
            <section class="col-sm-12">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service/spares.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <h3>Автозапчасти</h3>
                <span>замена любой детали по минимальной стоимости в городе</span>
            </section>
        </div>
    </div>
</div>
<div class="service-list">
    <div class="container">
        <h2>Все еще не решились отдать свое авто в сервис?</h2>
        <div class="row">
            <section class="col-sm-12 col-md-4">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service-list/time.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <span>Cоблюдение сроков ремонта автомобиля.</span>
            </section>
            <section class="col-sm-12 col-md-4">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service-list/security.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <span>
                    <b>Полное восстановление геометрии кузова</b>
                    и устранение внутренних повреждений автомобиля,
                    возникших в результате ДТП
                </span>
            </section>
            <section class="col-sm-12 col-md-4">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service-list/schedule.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <span>
                    Мы работаем для вас <b>c 8:00 до 22:00</b>
                    в неделю и готовы в любой момент рассчитать
                    стоимость работ и провести ремонт вашего авто
                </span>
            </section>
        </div>
        <div class="row">
            <section class="col-sm-12 col-md-6">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service-list/parking.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <span>Удобный подъезд и парковка к автосервису</span>
            </section>
            <section class="col-sm-12 col-md-6">
                <?=Html::img(
                        '@web'.$pathMainAsset.'/images/service-list/experts.png',
                        ['class' => 'img-responsive','alt' => 'Наш логотип']
                )?>
                <span>
                    Экспертная команда профессионалов - у нас работают только
                    опытные мастера
                </span>
            </section>
        </div>
    </div>
</div>


<!--<div class="advantages">
    <div class="container">
        <h2>Почему 3000 наших клиентов выбрало нас??</h2>
        <div class="row">
            <section class="w1 col-sm-12 col-md-3">
                <span>Соблюдение<br>сроков</span>
                Мы гарантируем<br>соблюдение сроков<br>ремонта автомобиля.<br>За каждый день<br>просрочки <b>вы получите<br>скидку 5%</b>
            </section>
            <section class="w2 col-sm-12 col-md-3">
                <span>Безопасность в<br>эксплуатации авто</span>
                <b>Полное восстановление<br>геометрии кузова</b><br>и устранение внутренних<br>повреждений<br>автомобиля, возникших<br>в результате ДТП
            </section>
            <section class="w3 col-sm-12 col-md-3">
                <span>Круглосуточная<br>работа</span>
                Мы работаем для вас <br><b>24 часа в сутки 7 дней</b> <br>в неделю и готовы в<br>любой момент рассчитать<br>стоимость работ <br>и провести ремонт<br>вашего авто
            </section>
            <section class="w4 col-sm-12 col-md-3">
                <span>Круглосуточная<br>работа</span>
                Мы работаем для вас <br><b>24 часа в сутки 7 дней</b> <br>в неделю и готовы в<br>любой момент рассчитать<br>стоимость работ <br>и провести ремонт<br>вашего авто
            </section>
        </div>
        <div class="row">
            <section class="w5 col-sm-12 col-md-4">
                <span>Бесплатная<br>эвакуация авто</span>
                В случае, если ваше авто<br>не на ходу, мы <b>бесплатно<br>доставим ваше авто</b> <br>в наш сервис для<br>проведения покрасочных<br>и ремонтных работ
            </section>
            <section  class="w6 col-sm-12 col-md-4">
                <span>Бесплатный<br>выезд специалиста</span>
                Нашим клиентам мы<br>предоставляем<br><b>бесплатный выезд<br>мастера</b> для расчета<br>стоимости ремонта<br>автомобиля
            </section>
            <section  class="w7 col-sm-12 col-md-4">
                <span>Оценка авто<br>по фото</span>
                Мы экономим ваше<br>время! Пришлите нам<br>фото по e-mail или sms <br>и мы <b>дистанционно<br>назовем вам цену</b> <br>на ремонт!
            </section>
        </div>
    </div>
</div>

<div class="services">
    <h2>Как мы работаем:</h2>
    <div class="wrap container">
        <div class="hr"></div>

        <div class="o1"></div>
        <div class="hww_one s1 scale">

            <div class="hww_text">
                <span>ЗАЯВКА</span>
                Вы оставляете заявку <br>на обратный звонок <br>или звоните нам сами
                <a id="go" class="button-callback" rel="leanModal" name="makeorder" >Оставить заявку</a>
            </div>

        </div>
        <div class="o2"></div>
        <div class="hww_one s2 scale">
            <div class="hww_text">
                <span>КОНСУЛЬТАЦИЯ</span>
                Вы получаете от нашего специалиста<br>индивидуальное предложение, уточняете<br>сумму и сроки выполнения работ
            </div>

        </div>
        <div class="o3"></div>
        <div class="hww_one s3 scale">

            <div class="hww_text">
                <span>ОБРАЩЕНИЕ В СЕРВИС</span>
                Вы приезжаете в наш сервис, наш<br>специалист проводит осмотр автомобиля <br>и согласовывает стоимость работы
            </div>

        </div>
        <div class="o4"></div>
        <div class="hww_one s4 scale">
            <div class="hww_text">
                <span>РЕМОНТНЫЕ РАБОТЫ</span>
                Мы проводим полный цикл<br>покрасочных и ремонтных<br>работ
            </div>

        </div>
        <div class="o5"></div>
        <div class="hww_one s5 scale">
            <div class="hww_text">
				<span>АВТОМОБИЛЬ ГОТОВ!</span>
                Покраска завершена!<br>Можете ехать!
            </div>
        </div>
    </div>
</div>
-->

<div id="reviews" class="reviews">
    <h2>Отзывы наших клиентов:</h2>

    <div class="wrap container">
        <div class="review">
            <div class="row">
                <div class="reviewImg col-sm-12 col-md-2">
                    <?= Html::img('@web'.$pathMainAsset.'/images/r1.png',['alt' => 'Наш логотип'])?>
                </div>
                <div class="reviewText col-sm-12 col-md-10">
                    <span>«Будет случай – обращусь к вам еще!»</span>
                    <p>Спасибо ребятам за отличную работу! Попал в аварию, разбил свою Audi, ужасная история!</p>
                    <p>Решился отдать на ремонт, очень переживал, боялся, что покрасят плохо, вкривь и вкось,<br>неудачно подберут цвет. <b>Результат очень порадовал, все сделали качественно и быстро.</b> Будет случай – обращусь к вам еще! </p>
                    <p>Спасибо!</p>
                    <div class="review_name"><em>Эмиль Ворзаев, Audi TT </em></div>
                </div>
            </div>
        </div>
        <div class="review">
            <div class="row">
                <div class="reviewImg col-sm-12 col-md-2">
                    <?= Html::img('@web'.$pathMainAsset.'/images/r2.png',['alt' => 'Наш логотип'])?>
                </div>
                <div class="reviewText col-sm-12 col-md-10">
                    <span>«Заплатил ровно ту сумму, которую назвали в начале...»</span>
                    <p>Весной решил обновить автомобиль – освежить цвет, убрать царапины по бокам.</p>
                    <p><b>После осмотра и диагностики авто назвали нормальную цену, я сразу согласился!</b> Покраска заняла всего три дня. Когда увидел машину, всё понравилось, заплатил ровно ту сумму, которую назвали в начале. Спасибо за качественную работу!!!</p>
                    <div class="review_name"><em>Валентин Стародубов, Hyundai Accent</em></div>
                </div>

            </div>
        </div>
        <div class="review">
            <div class="row">
                <div class="reviewImg col-sm-12 col-md-2">
                    <?=Html::img('@web'.$pathMainAsset.'/images/r3.png',['alt' => 'Наш логотип'])?>
                </div>
                <div class="reviewText col-sm-12 col-md-10">
                    <span>«Уже через 4 дня я забрала машину...»</span>
                    <p>Долго искала сервис для ремонта машины, большинство компаний предлагают свои услуги по завышенным ценам, да еще и качество работ оставляет желать лучшего. <b>Цены адекватные и качество работы на высоком уровне.</b>
                        Что порадовало – все сделали быстро, уже через 4 дня я забрала машину. </p>
                    <p>Обратилась по совету подруги и не жалею! </p>
                    <div class="review_name"><em>Елена Рислова, Mazda 6</em></div>
                </div>
            </div>
        </div>
        <div class="review">
            <div class="row">
                <div class="reviewImg col-sm-12 col-md-2">
                    <?= Html::img('@web'.$pathMainAsset.'/images/r4.png',['alt' => 'Наш логотип'])?>
                </div>
                <div class="reviewText col-sm-12 col-md-10">
                    <span>«Не только провели полную покраску авто, но и помогли <br>подобрать новые дверь и зеркала...»</span>
                    <p>Ремонтировал свой Cорент – вся левая сторона была разбита, что называется, «в мясо». Ребята не только провели полную покраску авто, но и помогли подобрать новые дверь и зеркала. </p>
                    <p><b>Работой остался очень доволен, качество отличное, буду рекомендовать друзьям, спасибо!</b></p>
                    <div class="review_name"><em>Андрей Томилин, KIA Sorento</em></div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="map" class="container-fluid" style="height:300px" ></div>
