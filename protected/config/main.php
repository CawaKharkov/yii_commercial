<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Web Application',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.services.*',
        'application.widgets.*',
    ),
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123456',
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
        'yiicCommandMap' => array(
            'migrate' => array(
                'class' => 'system.cli.commands.MigrateCommand',
                'migrationPath' => 'application.migrations',
                'migrationTable' => 'migrations',
                'connectionID' => 'db',
                'templateFile' => 'application.migrations.template',
            ),
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'clientScript'=>array(
            'scriptMap'=>array(
                'jquery.js'=>false,
            ),
            'coreScriptPosition' => '2',
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'urlSuffix' => '/',
            'rules' => array(
                /* 'post/<id:\d+>/<title:.*?>' => 'post/view',
                  'posts/<tag:.*?>' => 'post/index', */
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=yii_commercial',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'cawa123azs',
            'charset' => 'utf8',
            'enableProfiling' => true,
            'enableParamLogging' => true,
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        // 'adminEmail' => 'webmaster@example.com',
        'mainMenu' =>
        [
            'Home' => [
                'controller' => 'site',
                'action' => 'index',
                'label' => 'Home',
            ],
            'Showcase' => [
                'controller' => 'showcase',
                'action' => 'index',
                'label' => 'Showcase',
            ]
        ]
    ),
);