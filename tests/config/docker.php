<?php

declare(strict_types=1);

use tests\config\DummyQueue;

return [
    'components' => array_merge([
    ], require('connections.php')),
];
