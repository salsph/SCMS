<?php
/**
 * List of routes
 */

return [
    ['login',           '/admin/login',                   'LoginController:formLogin', 'GET'],
    ['dashboard',       '/admin/',                        'DashboardController:index', 'GET'],
    ['settings',        '/admin/settings',                'SettingsController:',       'GET'],
    ['auth',            '/admin/auth',                    'LoginController:auth',      'POST'],
    ['logout',          '/admin/logout',                  'AdminController:logout',    'GET'],

    ['pages',           '/admin/pages',                   'PageController:listing',    'GET'],
    ['page_create',     '/admin/page/create',             'PageController:create',     'GET'],
    ['page_add',        '/admin/page/add',                'PageController:add',        'POST'],
    ['page_edit',       '/admin/page/edit/(id:num)',      'PageController:edit',       'GET'],
    ['page_update',     '/admin/page/update',             'PageController:update',     'POST'],

    ['posts',           '/admin/posts',                   'PostController:listing',    'GET'],
    ['post_create',     '/admin/post/create',             'PostController:create',     'GET'],
    ['post_add',        '/admin/post/add',                'PostController:add',        'POST'],

    ['settings',        '/admin/settings',                'SettingController:main',    'GET'],
    ['settings_update', '/admin/settings/update',           'SettingController:update',  'POST'],


];