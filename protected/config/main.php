<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'KKN',

    // preloading 'log' component
    //'preload'=>array('log'),
    //'language' => 'id',
    'defaultController' => 'berita',
    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
    ),

    // application components
    'components'=>array(
        'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName' => false,
            'urlSuffix' => '.html',
            'rules'=>array(
                'admin' => 'admin/default/index',
                'admin/<controller:\w+>/<id:\d+>'=>'admin/<controller>/view',
                'admin/<controller:\w+>/<id:\d+>/<action:\w+>'=>'admin/<controller>/<action>',
                'admin/<controller:\w+>/<action:\w+>'=>'admin/<controller>/<action>',
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<id:\d+>/<action:\w+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        
        'db'=> include('database.php'),
        
        'errorHandler'=>array(
            // use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                
                array(
                    'class'=>'CWebLogRoute',
                    'showInFireBug' => true,
                ),
                
            ),
        ),
        'widgetFactory'=>array(
            'widgets'=>array(
                'CGridView'=>array(
                    'cssFile' => false,
                ),
                'CDetailView'=>array(
                    'cssFile' => false,
                ),
                'CListView'=>array(
                    'cssFile' => false,
                ),
                'CActiveForm' => array(
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                        'validateOnChange' => false,
                    ),
                ),
            ),
        ),
        'mailer' => array(
            'class' => 'application.extensions.mailer.EMailer',
            'Mailer' => 'smtp',
            'SMTPAuth' => true,
            'Host' => 'mail.nevisa.web.id',
            'Username' => 'kkn+nevisa.web.id',
            'Password' => 'kkn',
            'From' => 'ata@nevisa.co.id',
            'FromName' => 'LPPM'
        ),
    ),
    
    'modules'=>array(
        'gii'=>array(
            'class'=>'ext.giix.GiiModule',
            'password'=>'rahasia',
            // 'ipFilters'=>array(...a list of IPs...),
            'newFileMode'=>0644,
            'newDirMode'=>0755,
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>array(
        // this is used in contact page
        'adminEmail'=>'ata@navisa.web.id',
    ),
);
