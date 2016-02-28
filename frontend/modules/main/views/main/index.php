<?php

/* @var $this yii\web\View */

use frontend\assets\AnimateAsset;

AnimateAsset::register($this);

$this->title = 'My Yii Application';
?>

<button class="btn btn-success callback"  data-toggle="modal" data-target="#callbackpop"
        entity="Заявка с кнопки обратного звонка в шапке">
    Заказать звонок
</button>

<div class="counts">
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
</div>

<div class="advantages">
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
    <div class="wrap scroll-animate animate">
        <div class="hww_one hb s1 scale">
            <div class="hww_text">
                <span>ЗАЯВКА</span>
                Вы оставляете заявку <br>на обратный звонок <br>или звоните нам сами
                <a id="go" class="button-callback" rel="leanModal" name="makeorder" >Оставить заявку</a>
            </div>
        </div>
        <div class="hww_one ht s2 scale">
            <span>КОНСУЛЬТАЦИЯ</span>
            Вы получаете от нашего специалиста<br>индивидуальное предложение, уточняете<br>сумму и сроки выполнения работ
        </div>
        <div class="hww_one hb s3 scale">
            <span>ОБРАЩЕНИЕ В POKRAS24</span>
            Вы приезжаете в наш сервис, наш<br>специалист проводит осмотр автомобиля <br>и согласовывает стоимость работы
        </div>
        <div class="hww_one ht s4 scale">
            <span>РЕМОНТНЫЕ РАБОТЫ</span>
            Мы проводим полный цикл<br>покрасочных и ремонтных<br>работ
        </div>
        <div class="hww_one hb s5 scale">
				<span>АВТОМОБИЛЬ ГОТОВ!</span>
            Покраска завершена!<br>Можете ехать!
        </div>
    </div>
</div>
<div class="services">
    <h2>Виды предоставляемых услуг:</h2>
</div>

<div class="reviews">
    <h2>Отзывы наших клиентов:</h2>
</div>
