<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('sezgin/filesarea', [
	'areas' => [
		'files' => [
			'label'   => 'Dateimanager',
			'icon'    => 'archive',
			'menu'    => true,
			'views' => [
				require __DIR__ . '/views/files.php'
			]
		]
	]
]);