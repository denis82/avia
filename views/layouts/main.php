<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">  
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div id="page">
        <div id="header">		
            <div > <?= Html::img('@web/images/header.jpg', ['alt' => 'Наш логотип']) ?></div>
        </div>
        <div id="cont">
        <div class="row">
            
<!--левый блок-->
        <div class="col-md-3">
            <div id="">             
                <div class="sidebar_item">     
<!--                    <ul>-->
                        <?php
                            NavBar::begin([
//                                'brandLabel' => 'My Company',
                                'brandUrl' => Yii::$app->homeUrl,
                                'options' => [
                                    //'class' => 'navbar-inverse navbar-fixed-top',
                                ],
                            ]);
                            echo Nav::widget([
                                'options' => ['class' => 'nav nav-pills nav-stacked'],
                                'items' => [
                                    ['label' => 'Мой профиль', 'url' => ['/account/index']],
                                    ['label' => 'Клуб', 'url' => ['/account/about']],
                                    ['label' => 'Форум', 'url' => ['/account/contact']],
                                    ['label' => 'Настройки', 'url' => ['/account/contact']],
                                    Yii::$app->user->isGuest ? (
                                        ['label' => 'Login', 'url' => ['/site/login']]
                                    ) : (
                                        '<li>'
                                        . Html::beginForm(['/site/logout'], 'post')
                                        . Html::submitButton(
                                            'Logout (' . Yii::$app->user->identity->username . ')',
                                            ['class' => 'btn btn-link logout']
                                        )
                                        . Html::endForm()
                                        . '</li>'
                                    )
                                ],
                            ]);
                            NavBar::end();
                        ?>
                    <!--</ul>-->
                </div>                     
            </div>
        </div>    
<!--центральный блок-->	
            <div class="col-md-6">
                <div id="center">
                    <div class="content">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                        <?= $content ?>
                    </div>
                </div>
            </div>
<!--правый блок -->
            <div class="col-md-3">
                <div id="">
                    <? if (isset($block_right)):?>
                        <? foreach ($block_right as $rblock):?>
                            <?=$rblock?>
                        <?endforeach?>
                    <?endif?>
                    <?if(isset($block_auth)):?>
                    <div id="auth">
                        <? foreach ($block_auth as $auth):?>
                            <?=$auth?>
                        <?endforeach?>
                    </div>    
                    <?endif?>
                </div>
            </div>
        </div>
    </div>    
</div>
    <div class="container">
        <?//= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
        <?//= $content ?>
    </div>
    <div id="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
