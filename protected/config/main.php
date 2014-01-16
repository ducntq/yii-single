<?php
/**
 * Do not modify this file unless you're know what you're doing
 */
$configLoader = new ConfigLoader(__DIR__);
define('SITE_BASE_PATH','application.assets');
return array(
    'basePath' => __DIR__ . DIRECTORY_SEPARATOR . '..',
    'name' => '2voi CMS',
    'sourceLanguage' => 'en_US',

    // preloading 'log' component
    'preload' => array('log'),

    // autoloading model and component classes
    'import' => $configLoader->loadConfig('import'),

    'modules' => $configLoader->loadConfig('modules'),

    'components' => $configLoader->loadConfig('components'),

    'params' => $configLoader->loadConfig('params'),

    'behaviors' => $configLoader->loadConfig('behaviors')
);