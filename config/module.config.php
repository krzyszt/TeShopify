<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'TeShopify\Controller\Index' => 'TeShopify\Controller\IndexController',
            'TeShopify\Controller\Webservice' => 'TeShopify\Controller\WebserviceController',
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
     // Doctrine config
    'doctrine' => array(
        'driver' => array(
            'teshopify_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/TeShopify/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'TeShopify\Entity' => 'teshopify_driver'
                )
            )
        )
    )
);