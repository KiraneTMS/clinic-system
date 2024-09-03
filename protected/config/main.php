<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Sistem Informasi Klinik',

    // preloading 'log' component
    'preload' => array('log'),

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.srbac.controllers.SBaseController', // For SRBAC
    ),

    'modules' => array(
        // SRBAC module configuration for role-based access control
        'srbac' => array(
            'userclass' => 'User', // The name of the user model class
            'userid' => 'id', // The user id attribute
            'username' => 'username', // The username attribute
            'debug' => false, // Whether to enable debug mode
            'pageSize' => 10, // Number of items to display in each page
            'superUser' => 'admin', // Name of the superuser role
            'css' => 'srbac.css', // The file name for the style sheet to use
            'layout' => 'application.views.layouts.main', // The layout to use
            'notAuthorizedView' => 'srbac.views.authitem.unauthorized', // The view to show when user is not authorized
            'alwaysAllowed' => array( // list of actions always allowed
                'SiteLogin',
                'SiteLogout',
                'SiteIndex',
                'SiteAdmin',
                'SiteError',
                'SiteContact',
            ),
            'userActions' => array('Show', 'View', 'List'), // The list of actions to be displayed in the Assign Roles dialog
            'listBoxNumberOfLines' => 15, // Number of lines to show in the roles/users assign tab
            'imagesPath' => 'srbac.images', // Path to icons
            'imagesPack' => 'noia', // Icon pack
            'iconText' => true, // Use text next to the icons in the menu
        ),
    ),

    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => array('site/login'), // Redirect to login if unauthorized
        ),

        // Enable URLs in path-format
        'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),


        // Use a database connection for MySQL
        'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=clinic_db',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),

        'authManager' => array(
            // Enable role-based access control
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
            'itemTable' => 'AuthItem',
            'itemChildTable' => 'AuthItemChild',
            'assignmentTable' => 'AuthAssignment',
        ),

        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),

        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
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
        'adminEmail' => 'webmaster@example.com',
    ),
);
