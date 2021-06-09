<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\AcceuilController::index'], [], [['text', '/']], [], []],
    'artist_index' => [[], ['_controller' => 'App\\Controller\\ArtistController::index'], [], [['text', '/artist/']], [], []],
    'artist_new' => [[], ['_controller' => 'App\\Controller\\ArtistController::new'], [], [['text', '/artist/new']], [], []],
    'artist_show' => [['artistId'], ['_controller' => 'App\\Controller\\ArtistController::show'], [], [['variable', '/', '[^/]++', 'artistId'], ['text', '/artist']], [], []],
    'artist_edit' => [['artistId'], ['_controller' => 'App\\Controller\\ArtistController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'artistId'], ['text', '/artist']], [], []],
    'artist_delete' => [['artistId'], ['_controller' => 'App\\Controller\\ArtistController::delete'], [], [['variable', '/', '[^/]++', 'artistId'], ['text', '/artist']], [], []],
    'disc_index' => [[], ['_controller' => 'App\\Controller\\DiscController::index'], [], [['text', '/disc/']], [], []],
    'disc_new' => [[], ['_controller' => 'App\\Controller\\DiscController::new'], [], [['text', '/disc/new']], [], []],
    'disc_show' => [['discId'], ['_controller' => 'App\\Controller\\DiscController::show'], [], [['variable', '/', '[^/]++', 'discId'], ['text', '/disc']], [], []],
    'disc_edit' => [['discId'], ['_controller' => 'App\\Controller\\DiscController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'discId'], ['text', '/disc']], [], []],
    'disc_delete' => [['discId'], ['_controller' => 'App\\Controller\\DiscController::delete'], [], [['variable', '/', '[^/]++', 'discId'], ['text', '/disc']], [], []],
    'droits_index' => [[], ['_controller' => 'App\\Controller\\DroitsController::index'], [], [['text', '/droits/']], [], []],
    'droits_new' => [[], ['_controller' => 'App\\Controller\\DroitsController::new'], [], [['text', '/droits/new']], [], []],
    'droits_show' => [['droitsId'], ['_controller' => 'App\\Controller\\DroitsController::show'], [], [['variable', '/', '[^/]++', 'droitsId'], ['text', '/droits']], [], []],
    'droits_edit' => [['droitsId'], ['_controller' => 'App\\Controller\\DroitsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'droitsId'], ['text', '/droits']], [], []],
    'droits_delete' => [['droitsId'], ['_controller' => 'App\\Controller\\DroitsController::delete'], [], [['variable', '/', '[^/]++', 'droitsId'], ['text', '/droits']], [], []],
    'utilisateurs_index' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::index'], [], [['text', '/utilisateurs/']], [], []],
    'utilisateurs_new' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::new'], [], [['text', '/utilisateurs/new']], [], []],
    'utilisateurs_show' => [['utilisateurId'], ['_controller' => 'App\\Controller\\UtilisateursController::show'], [], [['variable', '/', '[^/]++', 'utilisateurId'], ['text', '/utilisateurs']], [], []],
    'utilisateurs_edit' => [['utilisateurId'], ['_controller' => 'App\\Controller\\UtilisateursController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'utilisateurId'], ['text', '/utilisateurs']], [], []],
    'utilisateurs_delete' => [['utilisateurId'], ['_controller' => 'App\\Controller\\UtilisateursController::delete'], [], [['variable', '/', '[^/]++', 'utilisateurId'], ['text', '/utilisateurs']], [], []],
];
