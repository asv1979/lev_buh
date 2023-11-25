<?php

namespace tests\config;

use backend\helpers\BackendKernel;
use backend\modules\crmfo_kernel_modules\Entity\Users;
use yii\helpers\ArrayHelper;
use yii\web\Application;

class BackendKernelLoader
{
    const FRONTEND_MOBILE_USER_ID = 111;

    public static function load()
    {
        $config = ArrayHelper::merge(
            require(__DIR__ . '/../../common/config/main.php'),
            require(__DIR__ . '/../../common/config/main-local.php'),
            require(__DIR__ . '/../../backend/config/main.php'),
            require(__DIR__ . '/../../backend/config/main-local.php')
        );

        $backend = new Application($config);

        self::init();

        self::auth();
    }

    private static function init()
    {
    }

    // авторизуемся в ядре
    private static function auth()
    {
    }
}
