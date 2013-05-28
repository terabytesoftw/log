<?php
$rootDir = __DIR__ . '/../..';

$params = array_merge(
	require($rootDir . '/common/config/params.php'),
	require($rootDir . '/common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return array(
	'id' => 'app-console',
	'basePath' => dirname(__DIR__),
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'preload' => array('log'),
	'controllerNamespace' => 'console\controllers',
	'modules' => array(
	),
	'components' => array(
		'db' => $params['components.db'],
		'cache' => $params['components.cache'],
		'log' => array(
			'class' => 'yii\logging\Router',
			'targets' => array(
				array(
					'class' => 'yii\logging\FileTarget',
					'levels' => array('error', 'warning'),
				),
			),
		),
	),
	'params' => $params,
);
