<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'root' => [[], ['_controller' => 'App\\Controller\\RootController::index'], [], [['text', '/root']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'overblog_graphql_endpoint' => [[], ['_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::endpointAction', '_format' => 'json'], [], [['text', '/api/graphql/']], [], []],
    'overblog_graphql_batch_endpoint' => [[], ['_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::batchEndpointAction', '_format' => 'json'], [], [['text', '/api/graphql/batch']], [], []],
    'overblog_graphql_multiple_endpoint' => [['schemaName'], ['_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::endpointAction', '_format' => 'json'], ['schemaName' => '[^/]+'], [['variable', '/', '[^/]+', 'schemaName'], ['text', '/api/graphql/graphql']], [], []],
    'overblog_graphql_batch_multiple_endpoint' => [['schemaName'], ['_controller' => 'Overblog\\GraphQLBundle\\Controller\\GraphController::batchEndpointAction', '_format' => 'json'], ['schemaName' => '[^/]+'], [['text', '/batch'], ['variable', '/', '[^/]+', 'schemaName'], ['text', '/api/graphql/graphql']], [], []],
    'overblog_graphiql_endpoint' => [[], ['_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], [], [['text', '/graphiql']], [], []],
    'overblog_graphiql_endpoint_multiple' => [['schemaName'], ['_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'], [], [['variable', '/', '[^/]++', 'schemaName'], ['text', '/graphiql']], [], []],
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_logout' => [[], [], [], [['text', '/logout']], [], []],
    'index' => [[], ['_controller' => 'App\\Lp\\CmsBundle\\Controller\\CmsController::match'], [], [['text', '/']], [], []],
    'easyadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::indexAction'], [], [['text', '/admin/']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::indexAction'], [], [['text', '/admin/']], [], []],
];
