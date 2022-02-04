<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/deals' => [[['_route' => 'deals', '_controller' => 'App\\Controller\\AdvertController::deals'], null, null, null, false, false, null]],
        '/requests' => [[['_route' => 'requests', '_controller' => 'App\\Controller\\AdvertController::requests'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/deals/view/([^/]++)(*:27)'
                .'|/adverts/([^/]++)(*:51)'
                .'|/category/([^/]++)(*:76)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:114)'
                    .'|wdt/([^/]++)(*:134)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:180)'
                            .'|router(*:194)'
                            .'|exception(?'
                                .'|(*:214)'
                                .'|\\.css(*:227)'
                            .')'
                        .')'
                        .'|(*:237)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'view_advert', '_controller' => 'App\\Controller\\AdvertController::view'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'city_adverts', '_controller' => 'App\\Controller\\AdvertController::advertsByCity'], ['slug'], null, null, false, true, null]],
        76 => [[['_route' => 'category_view', '_controller' => 'App\\Controller\\CategoryController::view'], ['slug'], null, null, false, true, null]],
        114 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        134 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        180 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        194 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        214 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        227 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        237 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
