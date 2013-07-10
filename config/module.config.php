<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'TeShopify\Controller\Index' => 'TeShopify\Controller\IndexController',
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