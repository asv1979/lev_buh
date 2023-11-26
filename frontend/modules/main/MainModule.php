<?php

declare(strict_types=1);

namespace frontend\modules\main;

use yii\base\Module as BaseModule;

final class MainModule extends BaseModule
{
    public $controllerNamespace = 'frontend\modules\main\controllers';

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();

        //$this->params['test'] = 'test';
    }
}
