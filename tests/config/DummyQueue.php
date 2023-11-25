<?php

declare(strict_types=1);

namespace tests\config;

use yii\queue\amqp_interop\Queue;

/**
 * Очередь, без возможности добавления задач
 */
final class DummyQueue extends Queue
{
    public function push($job): void
    {
    }
}
