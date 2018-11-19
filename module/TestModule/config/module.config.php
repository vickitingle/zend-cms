<?php
namespace TestModule;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\TestController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'admin' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/test/index',
                    'defaults' => [
                        'controller'    => Controller\TestController::class,
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    // You can place additional routes that match under the
                    // route defined above here.
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'TestModule' => __DIR__ . '/../view',
        ],
    ],
];
