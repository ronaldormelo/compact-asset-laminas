<?php
namespace CompactAsset;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'compact-js' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/assets/compact-js[/:id]',
                    'defaults' => [
                        'controller' => 'compact-asset',
                        'action' => 'compact-js',
                    ],
                ],
            ],
            'compact-css' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/assets/compact-css[/:id]',
                    'defaults' => [
                        'controller' => 'compact-asset',
                        'action' => 'compact-css',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\CompactAssetController::class => InvokableFactory::class,
        ],
        'invokables' => [
            'compact-asset' => Controller\CompactAssetController::class,
        ],
    ],
    
];