<?php

declare(strict_types=1);

namespace frontend\modules\test\controllers;

use yii\web\Controller;

final class TestController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex(): string
    {
        return 'Hello Elena!';
    }
}
