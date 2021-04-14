<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Collège Adventiste des Côteaux';
?>
<div class="site-index">

    <div class="jumbotron jumbo">
        <h1>Collège Adventiste des Côteaux</h1>

        <p class="lead"><strong>BUT:</strong> Développer chez chaque élève : </p>
        <ol class="butlist well">
            <li>Une acceptation de Dieu et de sa parole </li>
        <li>Une vie saine, balancée et équilibrée </li>
        <li>Une citoyenneté responsable</li>
        <li>La capacité intellectuelle</li>
        <li>Des options de caractère</li>
</ol>

        <p><a class="btn btn-lg btn-success" href="<?php echo Url::toRoute('site/about'); ?>" >Qui sommes-nous</a></p>
    </div>

    <div class="body-content" style="display:none;">

        <div class="row" >
            <div class="col-lg-4">
                <h2>Kindergarten</h2>

                

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
