<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api' => [[['_route' => '_apicompte', '_controller' => 'App\\Controller\\CompteController::index'], null, null, null, true, false, null]],
        '/partenaire' => [[['_route' => 'partenaire', '_controller' => 'App\\Controller\\PartenaireController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/([^/]++)(*:23)'
                    .'|(?:/(\\d+))?(*:41)'
                    .'|/(?'
                        .'|compte(*:58)'
                        .'|transaction(*:76)'
                        .'|user(*:87)'
                    .')'
                    .'|(*:95)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:130)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:161)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:197)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => '_apishow_compte', '_controller' => 'App\\Controller\\CompteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => '_apilist_compte', 'page' => '1', '_controller' => 'App\\Controller\\CompteController::list'], ['page'], ['GET' => 0], null, false, true, null]],
        58 => [[['_route' => '_apiadd_compte', '_controller' => 'App\\Controller\\CompteController::Ajout'], [], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        76 => [[['_route' => '_apiadd_transaction', '_controller' => 'App\\Controller\\TransactionController::Ajout'], [], ['POST' => 0], null, false, false, null]],
        87 => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::register'], [], ['POST' => 0], null, false, false, null]],
        95 => [
            [['_route' => '_apitransaction', '_controller' => 'App\\Controller\\TransactionController::index'], [], null, null, true, false, null],
            [['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], [], null, null, true, false, null],
        ],
        130 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        161 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        197 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
