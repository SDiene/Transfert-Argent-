<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api' => [
            [['_route' => '_apicompte', '_controller' => 'App\\Controller\\CompteController::index'], null, null, null, true, false, null],
            [['_route' => 'apidepot', '_controller' => 'App\\Controller\\DepotController::index'], null, null, null, true, false, null],
            [['_route' => 'apipartenaire', '_controller' => 'App\\Controller\\PartenaireController::index'], null, null, null, true, false, null],
            [['_route' => '_apitransaction', '_controller' => 'App\\Controller\\TransactionController::index'], null, null, null, true, false, null],
            [['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, true, false, null],
        ],
        '/api/compte' => [[['_route' => '_apinew_compte', '_controller' => 'App\\Controller\\CompteController::addcompte'], null, ['POST' => 0], null, false, false, null]],
        '/api/depot' => [[['_route' => 'apiadd_user', '_controller' => 'App\\Controller\\DepotController::addDepot'], null, ['POST' => 0], null, false, false, null]],
        '/api/partenaire' => [[['_route' => 'apiadd_depot', '_controller' => 'App\\Controller\\PartenaireController::addPartenaire'], null, ['POST' => 0], null, false, false, null]],
        '/api/transaction' => [[['_route' => '_apiadd_transaction', '_controller' => 'App\\Controller\\TransactionController::addTransaction'], null, ['POST' => 0], null, false, false, null]],
        '/api/user' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null]],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/api(?'
                    .'|/(?'
                        .'|partenaire(?'
                            .'|/([^/]++)(?'
                                .'|(*:205)'
                            .')'
                            .'|(?:/(\\d+))?(*:225)'
                        .')'
                        .'|transaction(?'
                            .'|/([^/]++)(*:257)'
                            .'|(?:/(\\d+))?(*:276)'
                        .')'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:314)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:345)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:381)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        205 => [
            [['_route' => 'apiupdate_partenaire', '_controller' => 'App\\Controller\\PartenaireController::updatePartenaire'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'apishow_partenaire', '_controller' => 'App\\Controller\\PartenaireController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        225 => [[['_route' => 'apilist_partenaire', 'page' => '1', '_controller' => 'App\\Controller\\PartenaireController::list'], ['page'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => '_apishow_transaction', '_controller' => 'App\\Controller\\TransactionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        276 => [[['_route' => '_apilist_transaction', 'page' => '1', '_controller' => 'App\\Controller\\TransactionController::list'], ['page'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        345 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        381 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
