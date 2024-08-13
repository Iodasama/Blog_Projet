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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/articles-list-db' => [[['_route' => 'admin_articles_list_db', '_controller' => 'App\\Controller\\Admin\\AdminArticlesController::adminListArticlesFromDb'], null, null, null, false, false, null]],
        '/admin/insert-formbuilder' => [[['_route' => 'admin_article_insert_formbuilder', '_controller' => 'App\\Controller\\Admin\\AdminArticlesController::insertArticles'], null, null, null, false, false, null]],
        '/admin/books/insert' => [[['_route' => 'admin_insert_book', '_controller' => 'App\\Controller\\Admin\\AdminBookController::insertAdminBook'], null, null, null, false, false, null]],
        '/Admin/categories-list-db' => [[['_route' => 'admin_categories_list_db', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::adminListCategoriesFromDb'], null, null, null, false, false, null]],
        '/Admin-insert-category-formbuilder' => [[['_route' => 'Admin_category_insert_formbuilder', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::insertCategories'], null, null, null, false, false, null]],
        '/admin/users/insert' => [[['_route' => 'admin_insert_user', '_controller' => 'App\\Controller\\Admin\\AdminUserController::insertAdminUser'], null, null, null, false, false, null]],
        '/articles-list-db' => [[['_route' => 'articles_list_db', '_controller' => 'App\\Controller\\Guest\\ArticlesController::listArticlesFromDb'], null, null, null, false, false, null]],
        '/categories-list-db' => [[['_route' => 'categories_list_db', '_controller' => 'App\\Controller\\Guest\\ArticlesController::listCategoriesFromDb'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\Guest\\HomeController::Home'], null, null, null, false, false, null]],
        '/users/insert' => [[['_route' => 'guest_insert_user', '_controller' => 'App\\Controller\\Guest\\UserController::insertUser'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|delete/([^/]++)(*:227)'
                    .'|update\\-formbuilder/([^/]++)(*:263)'
                .')'
                .'|/Admin(?'
                    .'|/delete_category/([^/]++)(*:306)'
                    .'|\\-update\\-category\\-formbuilder/([^/]++)(*:354)'
                .')'
                .'|/show\\-(?'
                    .'|articles/([^/]++)(*:390)'
                    .'|categories/([^/]++)(*:417)'
                .')'
                .'|/users/insert\\-review/([^/]++)(*:456)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'delete_article', '_controller' => 'App\\Controller\\Admin\\AdminArticlesController::deleteArticle'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'admin_article_update_formbuilder', '_controller' => 'App\\Controller\\Admin\\AdminArticlesController::updateArticles'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::deleteCategory'], ['id'], null, null, false, true, null]],
        354 => [[['_route' => 'Admin_category_update_formbuilder', '_controller' => 'App\\Controller\\Admin\\AdminCategoriesController::updateCategories'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'article_db_by_id', '_controller' => 'App\\Controller\\Guest\\ArticlesController::showArticleById'], ['id'], null, null, false, true, null]],
        417 => [[['_route' => 'category_db_by_id', '_controller' => 'App\\Controller\\Guest\\ArticlesController::showCategoryById'], ['id'], null, null, false, true, null]],
        456 => [
            [['_route' => 'users_insert_review', '_controller' => 'App\\Controller\\Guest\\ReviewController::insertReview'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
