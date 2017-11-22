<?php


/** Return needed folder
 *
 * @param $section
 * @return string
 */
function path($section){

    $path_mask = ROOT_DIR . '/%s';

    if(ENV == 'Cms'){
        $path_mask = ROOT_DIR . '/' . strtolower(ENV) . '/%s';
    }

    switch(strtolower($section)){
        case 'controller':
            return sprintf($path_mask, 'Controller');
            break;
        case 'config':
            return sprintf($path_mask, 'Config');
            break;
        case 'model':
            return sprintf($path_mask, 'Model');
            break;
        case 'view':
            return sprintf($path_mask, 'View');
            break;
        case 'language':
            return sprintf($path_mask, 'Language');
            break;
        default:
            return ROOT_DIR;
    }

}

/** return language's meta-info
 * @return array
 */
function language(){

    $lang_path = path('language');
    $languages = [];

    $list = scandir($lang_path);

    foreach ($list as $dir){
        $lang_dir = $lang_path . '/' . $dir;
        $lang_config = $lang_dir . '/config.json';

        if (is_dir($lang_dir) && file_exists($lang_config)){
            $config = file_get_contents($lang_config);
            $languages[] = json_decode($config, true);
        }
    }
    return $languages;

}