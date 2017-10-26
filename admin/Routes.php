<?php
/**
 * List of routes
 */

return [
    ['login',     '/admin/login',    'LoginController:formLogin', 'GET'],
    ['dashboard', '/admin/',         'DashboardController:index', 'GET'],
    ['settings',  '/admin/settings', 'SettingsController:',       'GET'],
    ['auth',      '/admin/auth',     'LoginController:auth',      'POST'],
    ['logout',    '/admin/logout',   'AdminController:logout',    'GET'],
    ['page',      '/admin/page',     'PageController:listing',    'GET'],
    ['page_add',  '/admin/page/add', 'PageController:add',        'GET']
];