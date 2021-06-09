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
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AcceuilController::index'], null, null, null, false, false, null]],
        '/artist' => [[['_route' => 'artist_index', '_controller' => 'App\\Controller\\ArtistController::index'], null, ['GET' => 0], null, true, false, null]],
        '/artist/new' => [[['_route' => 'artist_new', '_controller' => 'App\\Controller\\ArtistController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/disc' => [[['_route' => 'disc_index', '_controller' => 'App\\Controller\\DiscController::index'], null, ['GET' => 0], null, true, false, null]],
        '/disc/new' => [[['_route' => 'disc_new', '_controller' => 'App\\Controller\\DiscController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/droits' => [[['_route' => 'droits_index', '_controller' => 'App\\Controller\\DroitsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/droits/new' => [[['_route' => 'droits_new', '_controller' => 'App\\Controller\\DroitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateurs' => [[['_route' => 'utilisateurs_index', '_controller' => 'App\\Controller\\UtilisateursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateurs/new' => [[['_route' => 'utilisateurs_new', '_controller' => 'App\\Controller\\UtilisateursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/artist/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/d(?'
                    .'|isc/([^/]++)(?'
                        .'|(*:238)'
                        .'|/edit(*:251)'
                        .'|(*:259)'
                    .')'
                    .'|roits/([^/]++)(?'
                        .'|(*:285)'
                        .'|/edit(*:298)'
                        .'|(*:306)'
                    .')'
                .')'
                .'|/utilisateurs/([^/]++)(?'
                    .'|(*:341)'
                    .'|/edit(*:354)'
                    .'|(*:362)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'artist_show', '_controller' => 'App\\Controller\\ArtistController::show'], ['artistId'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'artist_edit', '_controller' => 'App\\Controller\\ArtistController::edit'], ['artistId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'artist_delete', '_controller' => 'App\\Controller\\ArtistController::delete'], ['artistId'], ['POST' => 0], null, false, true, null]],
        238 => [[['_route' => 'disc_show', '_controller' => 'App\\Controller\\DiscController::show'], ['discId'], ['GET' => 0], null, false, true, null]],
        251 => [[['_route' => 'disc_edit', '_controller' => 'App\\Controller\\DiscController::edit'], ['discId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        259 => [[['_route' => 'disc_delete', '_controller' => 'App\\Controller\\DiscController::delete'], ['discId'], ['POST' => 0], null, false, true, null]],
        285 => [[['_route' => 'droits_show', '_controller' => 'App\\Controller\\DroitsController::show'], ['droitsId'], ['GET' => 0], null, false, true, null]],
        298 => [[['_route' => 'droits_edit', '_controller' => 'App\\Controller\\DroitsController::edit'], ['droitsId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        306 => [[['_route' => 'droits_delete', '_controller' => 'App\\Controller\\DroitsController::delete'], ['droitsId'], ['POST' => 0], null, false, true, null]],
        341 => [[['_route' => 'utilisateurs_show', '_controller' => 'App\\Controller\\UtilisateursController::show'], ['utilisateurId'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'utilisateurs_edit', '_controller' => 'App\\Controller\\UtilisateursController::edit'], ['utilisateurId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        362 => [
            [['_route' => 'utilisateurs_delete', '_controller' => 'App\\Controller\\UtilisateursController::delete'], ['utilisateurId'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
