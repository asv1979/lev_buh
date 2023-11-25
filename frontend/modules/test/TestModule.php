<?php

declare(strict_types=1);

namespace frontend\modules\test;

use yii\base\Module as BaseModule;

final class TestModule extends BaseModule
{
    public $controllerNamespace = 'frontend\modules\test\controllers';

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();

        //$this->params['test'] = 'test';
    }
}
