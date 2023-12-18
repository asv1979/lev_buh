<?php

declare(strict_types=1);

namespace frontend\modules\main\controllers;

use yii\web\Controller;

final class TestimonialController extends Controller
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
