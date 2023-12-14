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
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <div class="navigation-bar">
        <nav class="navbar navbar-expand-lg navbar-light lev-bg fixed-top navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand d-md-block" href="/">
                    <?= Html::img($myAssetBundle->baseUrl . '/images/footer.png') ?>
                </a>
                <div class="collapse navbar-collapse" id="navbarMenuBlock">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <?= Html::a(Yii::t('app','Головна'), ['/'], ['class' => 'nav-link main']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a(Yii::t('app','Послуги'), ['/serve'], ['class' => 'nav-link serve']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a(Yii::t('app','Ціни'), ['/price'], ['class' => 'nav-link price']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a(Yii::t('app','Контакти'), ['/contact'], ['class' => 'nav-link contact']) ?>
                        </li>
                    </ul>
                </div>
                <div class="social-icons d-none d-sm-block">
                    <div  class="text-white text-center">
                        <small class="d-none d-md-block"><?= Yii::t('app','Зв\'язок') ?></br></small>
                        <a class="text-decoration-none text-white" href="tel:+380986073304">098-607-33-04</br></a>
                        <small class="d-none d-md-block"><small>Пн.-Пт. з 09:00 до 18:00</small></small>
                    </div>
                </div>
            </div>
        </nav>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
