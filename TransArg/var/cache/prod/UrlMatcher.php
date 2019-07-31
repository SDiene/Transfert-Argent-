<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/compte' => [[['_route' => '_apinew_compte', '_controller' => 'App\\Controller\\CompteController::addcompte'], null, ['POST' => 0], null, false, false, null]],
        '/api' => [
            [['_route' => 'apidepot', '_controller' => 'App\\Controller\\DepotController::index'], null, null, null, true, false, null],
            [['_route' => 'apipartenaire', '_controller' => 'App\\Controller\\PartenaireController::index'], null, null, null, true, false, null],
            [['_route' => '_apitransaction', '_controller' => 'App\\Controller\\TransactionController::index'], null, null, null, true, false, null],
            [['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, true, false, null],
        ],
        '/api/depot' => [[['_route' => 'apiadd_depot', '_controller' => 'App\\Controller\\DepotController::addDepot'], null, ['POST' => 0], null, false, false, null]],
        '/api/partenaire' => [[['_route' => 'apiadd_partenaire', '_controller' => 'App\\Controller\\PartenaireController::addPartenaire'], null, ['POST' => 0], null, false, false, null]],
        '/api/transaction' => [[['_route' => '_apiadd_transaction', '_controller' => 'App\\Controller\\TransactionController::addTransaction'], null, ['POST' => 0], null, false, false, null]],
        '/api/user' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|partenaire(?'
                            .'|/([^/]++)(?'
                                .'|(*:43)'
                            .')'
                            .'|(?:/(\\d+))?(*:62)'
                        .')'
                        .'|transaction(?'
                            .'|/([^/]++)(*:93)'
                            .'|(?:/(\\d+))?(*:111)'
                        .')'
                        .'|user/([^/]++)(*:133)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:170)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:201)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:237)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [
            [['_route' => 'apiupdate_partenaire', '_controller' => 'App\\Controller\\PartenaireController::updatePartenaire'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'apishow_partenaire', '_controller' => 'App\\Controller\\PartenaireController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        62 => [[['_route' => 'apilist_partenaire', 'page' => '1', '_controller' => 'App\\Controller\\PartenaireController::list'], ['page'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => '_apishow_transaction', '_controller' => 'App\\Controller\\TransactionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        111 => [[['_route' => '_apilist_transaction', 'page' => '1', '_controller' => 'App\\Controller\\TransactionController::list'], ['page'], ['GET' => 0], null, false, true, null]],
        133 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::updatte'], ['id'], ['PUT' => 0], null, false, true, null]],
        170 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        201 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        237 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
