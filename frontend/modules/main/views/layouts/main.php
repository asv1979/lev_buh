<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\modules\main\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

$myAssetBundle = AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang='<?= Yii::$app->language ?>' class='h-100'>
    <head>
        <meta charset='<?= Yii::$app->charset ?>'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class='d-flex flex-column h-100'>
    <?php $this->beginBody() ?>

    <header>
        <div class='navigation-bar'>
            <nav class='navbar navbar-expand-lg navbar-light lev-bg fixed-top navbar-fixed-top'>
                <div class='container'>
                    <a class='navbar-brand d-md-block' href='/'>
                        <?= Html::img($myAssetBundle->baseUrl . '/images/icon.png') ?>
                    </a>
                    <div class='navbar-brand text-white text-left d-none d-md-block'>
                        <?= Yii::t('app', 'Бухгалтерська') ?></br>
                        <?= Yii::t('app', 'агенція "ЛЕВ"') ?></br>
                        <small>
                            <?= Yii::t('app', 'наш супровід ваш спокій') ?>
                        </small>
                    </div>
                    <div class='collapse navbar-collapse' id='navbarMenuBlock'>
                        <ul class='navbar-nav ml-auto'>
                            <li class='nav-item'>
                                <?= Html::a(Yii::t('app', 'Головна'), ['/'], ['class' => 'nav-link main']) ?>
                            </li>
                            <li class='nav-item'>
                                <?= Html::a(Yii::t('app', 'Послуги'), ['/serve'], ['class' => 'nav-link serve']) ?>
                            </li>
                            <li class='nav-item'>
                                <?= Html::a(Yii::t('app', 'Ціни'), ['/price'], ['class' => 'nav-link price']) ?>
                            </li>
                            <li class='nav-item'>
                                <?= Html::a(Yii::t('app', 'Контакти'), ['/contact'], ['class' => 'nav-link contact']) ?>
                            </li>
                        </ul>
                    </div>
                    <div class='d-none d-sm-block'>
                        <div class='text-white text-center'>
                            <small class='d-none d-md-block'><?= Yii::t('app', 'Зв\'язок') ?></br></small>
                            <a class='text-decoration-none text-white' href='tel:+380986073304'>098-607-33-04</br></a>
                            <small class='d-none d-md-block'><small>Пн.-Пт. з 09:00 до 18:00</small></small>
                        </div>
                    </div>
                </div>
            </nav>
    </header>

    <main role='main' class='flex-shrink-0'>
        <div class='container'>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
    <hr class='before-footer-ln'>

    <footer class='footer mt-auto py-3 lev-bg text-muted'>
        <div class='container cw '>
            <div class='row'>
                <div class='col-lg-4'>
                    <p class='free-icon'>&nbsp;</p>

                    <p>&nbsp;</p>
                </div>
                <div class='col-lg-4'>
                    <p><?= Html::img($myAssetBundle->baseUrl . '/images/phone.png') ?></p>
                    <p>
                    <h2><?= Yii::t('app', 'Контакти') ?></h2></p>
                    <p>+380986073304</p>
                    <p>email</p>
                    <p>
                    <ul class='social-icons-block'>
                        <li class='social-icons icon-first'>
                            <a rel='noopener noreferrer' target='_blank' href='https://t.me/xxxxx'
                               class='social-icons-link'>
                                <?= Html::img($myAssetBundle->baseUrl . '/images/telegram-48.png') ?>
                            </a>
                        </li>
                        <li class='social-icons'>
                            <a rel='noopener noreferrer' target='_blank' href='viber://chat?number=+380986073304'
                               class='social-icons-link'>
                                <?= Html::img($myAssetBundle->baseUrl . '/images/viber-48.png') ?>
                            </a>
                        </li>
                        <li class='social-icons'>
                            <a rel='noopener noreferrer' target='_blank'
                               href='https://www.facebook.com/profile.php?id=xxxxxxxxx' class='social-icons-link'>
                                <?= Html::img($myAssetBundle->baseUrl . '/images/facebook-48.png') ?>
                            </a>
                        </li>
                    </ul>
                    </p>
                </div>
                <div class='col-lg-4'>
                    <p><?= Html::img($myAssetBundle->baseUrl . '/images/map.png') ?></p>
                    <p>
                    <h2><?= Yii::t('app', 'Адреса офісу') ?></h2></p>
                    <p><?= Yii::t('app', 'м. Харків смт.Піcочин вул. Така, 333') ?></p>
                </div>
            </div>
            <svg xmlns='http://www.w3.org/2000/svg' width='3000px' height='31' style='width:100%'>
                <path d='M0 15.5 L3000 15.5' style='fill:none;stroke:rgba(255, 255, 255, 0.27);stroke-width:1px'></path>
            </svg>
            <div class='row footer-menu-block'>
                <div class='col-lg-4 footer-brand'>
                    <a class='navbar-brand d-md-block' href='/'>
                        <?= Html::img($myAssetBundle->baseUrl . '/images/icon_60.png') ?>
                        <?= Yii::t('app', 'Бухгалтерська агенція "ЛЕВ"') ?>
                    </a>
                </div>
                <div class='col-lg-8 footer-menu'>
                    <ul class=''>
                        <li class='nav-item'>
                            <?= Html::a(Yii::t('app', 'Послуги'), ['/serve'], ['class' => 'nav-link']) ?>
                        </li>
                        <li class='nav-item'>
                            <?= Html::a(Yii::t('app', 'Про компанію'), ['/about'], ['class' => 'nav-link']) ?>
                        </li>
                        <li class='nav-item'>
                            <?= Html::a(Yii::t('app', 'Відгуки'), ['/testimonials'], ['class' => 'nav-link main']) ?>
                        </li>
                        <li class='nav-item'>
                            <?= Html::a(Yii::t('app', 'Контакти'), ['/contact'], ['class' => 'nav-link']) ?>
                        </li>
                    </ul>
                </div>
            </div>
            <svg xmlns='http://www.w3.org/2000/svg' width='3000px' height='31' style='width:100%'>
                <path d='M0 15.5 L3000 15.5' style='fill:none;stroke:rgba(255, 255, 255, 0.27);stroke-width:1px'></path>
            </svg>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
