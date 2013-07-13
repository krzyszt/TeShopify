<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'TeShopify\Controller\Index' => 'TeShopify\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'shopify' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/shopify',
                    'defaults' => array(
                        '__NAMESPACE__' => 'TeShopify\Controller',
                        'controller' => 'TeShopify\Controller\Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'teshopify' => __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy'
        )
    ),
);