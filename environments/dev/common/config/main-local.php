<?php

return [
    'components' => [
        'db' => [
            'db' => [
                'on afterOpen' => function ($event): void {
                    $event->sender->createCommand("SET timezone to 'Europe/Kyiv';")->execute();
                },
            ],
        ],
    ],
];
