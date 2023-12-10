<?php

declare(strict_types=1);

namespace frontend\modules\main\controllers;

use frontend\models\ContactForm;
use yii\web\Controller;
use Yii;

final class PriceController extends Controller
{

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
