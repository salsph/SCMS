<?php
/**
 * List of routes
 */

return [
    ['login',                       '/admin/login',                         'LoginController:formLogin',        'GET'],
    ['dashboard',                   '/admin/',                              'DashboardController:index',        'GET'],
    ['settings',                    '/admin/settings',                      'SettingsController:',              'GET'],
    ['auth',                        '/admin/auth',                          'LoginController:auth',             'POST'],
    ['logout',                      '/admin/logout',                        'AdminController:logout',           'GET'],

    ['pages',                       '/admin/pages',                         'PageController:listing',           'GET'],
    ['page_create',                 '/admin/page/create',                   'PageController:create',            'GET'],
    ['page_add',                    '/admin/page/add',                      'PageController:add',               'POST'],
    ['page_edit',                   '/admin/page/edit/(id:num)',            'PageController:edit',              'GET'],
    ['page_update',                 '/admin/page/update',                   'PageController:update',            'POST'],
    ['page_delete',                 '/admin/page/delete',                   'PageController:delete',            'POST'],

    ['posts',                       '/admin/posts',                         'PostController:listing',           'GET'],
    ['post_create',                 '/admin/post/create',                   'PostController:create',            'GET'],
    ['post_add',                    '/admin/post/add',                      'PostController:add',               'POST'],
    ['post_edit',                   '/admin/post/edit/(id:num)',            'PostController:edit',              'GET'],
    ['post_update',                 '/admin/post/update',                   'PostController:update',            'POST'],
    ['post_delete',                 '/admin/post/delete',                   'PostController:delete',            'POST'],

    ['settings',                    '/admin/settings',                      'SettingController:main',           'GET'],
    ['settings_menus',              '/admin/settings/menus',                'SettingController:menus',          'GET'],
    ['settings_menu_add',           '/admin/settings/aj_menu_add',          'SettingController:menuAdd',        'POST'],
    ['settings_menu_item_add',      '/admin/settings/aj_menu_item_add',     'SettingController:menuItemAdd',    'POST'],
    ['settings_menu_item_update',   '/admin/settings/aj_menu_item_update',  'SettingController:menuItemUpdate', 'POST'],
    ['settings_menu_item_remove',   '/admin/settings/aj_menu_item_remove',  'SettingController:menuItemRemove', 'POST'],
    ['settings_menu_item_sort',     '/admin/setting/aj_menu_sort_items',    'SettingController:menuItemSort',   'POST'],
    ['settings_update',             '/admin/settings/update',               'SettingController:update',         'POST'],


];