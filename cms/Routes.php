<?php
/**
 * List of routes
 */

return [
    ['home', '/', 'HomeController:index'],
    ['news_single', '/news/(id:num)', 'HomeController:news'],

];