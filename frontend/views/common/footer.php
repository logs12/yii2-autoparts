<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h4>Information</h4>
                <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.html" >About</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.html" >Agents</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.html" >Blog</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.html" >Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Newsletter</h4>
                <p>Get notified about the latest properties in our marketplace.</p>

                <? echo \yii\helpers\Html::beginForm('','post', ['class' => 'form-inline']) ?>
                <? echo \yii\helpers\Html::textInput('search', '', ['class' => 'form-control', 'placeholder' => 'Enter Your email address']) ?>

                <? echo \yii\helpers\Html::submitButton('Notify Me!', ['class' => 'btn btn-success']) ?>

                <? echo \yii\helpers\Html::endForm() ?>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Подписывайтесь на нас:</h4>
                <a href="#"><i class="fa fa-vk fa-2x"></i></a>
                <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Свяжитесь с нами</h4>
                <p><b>Автосервис "Семь звезд"</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
                    <span class="glyphicon glyphicon-earphone"></span> (831) 220-97-15</p>
            </div>
        </div>
        <p class="copyright">Copyright 2013. All rights reserved.	</p>

    </div>
</footer>