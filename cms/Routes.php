<?php
/**
 * List of routes
 */

return [
    ['home',        '/',              'HomeController:index', 'GET'],
    ['news_single', '/news/(id:num)', 'HomeController:news',  'GET'],

];