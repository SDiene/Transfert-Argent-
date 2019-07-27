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
        '/api' => [[['_route' => '_apicompte', '_controller' => 'App\\Controller\\CompteController::index'], null, null, null, true, false, null]],
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
                    .'|/([^/]++)(*:185)'
                    .'|(?:/(\\d+))?(*:204)'
                    .'|/(?'
                        .'|compte(*:222)'
                        .'|depot(*:235)'
                        .'|partenaire(*:253)'
                        .'|transaction(*:272)'
                        .'|user(*:284)'
                    .')'
                    .'|(*:293)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:329)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:360)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:396)'
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
        185 => [[['_route' => '_apishow_compte', '_controller' => 'App\\Controller\\CompteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => '_apilist_compte', 'page' => '1', '_controller' => 'App\\Controller\\CompteController::list'], ['page'], ['GET' => 0], null, false, true, null]],
        222 => [[['_route' => '_apiadd_compte', '_controller' => 'App\\Controller\\CompteController::add'], [], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        235 => [[['_route' => 'apiadd_depot', '_controller' => 'App\\Controller\\DepotController::add'], [], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        253 => [[['_route' => 'apinew_partenaire', '_controller' => 'App\\Controller\\PartenaireController::add'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => '_apiadd_transaction', '_controller' => 'App\\Controller\\TransactionController::Ajout'], [], ['POST' => 0], null, false, false, null]],
        284 => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::adduser'], [], ['POST' => 0], null, false, false, null]],
        293 => [
            [['_route' => 'apidepot', '_controller' => 'App\\Controller\\DepotController::index'], [], null, null, true, false, null],
            [['_route' => 'apipartenaire', '_controller' => 'App\\Controller\\PartenaireController::index'], [], null, null, true, false, null],
            [['_route' => '_apitransaction', '_controller' => 'App\\Controller\\TransactionController::index'], [], null, null, true, false, null],
            [['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], [], null, null, true, false, null],
        ],
        329 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        360 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        396 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
