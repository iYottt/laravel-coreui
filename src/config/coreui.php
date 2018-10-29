<?php

return [
	'meta' => [
		'title' => 'Administrator',
		'description' => '',
		'keyword' => '',
	],

	'login' => [
		'username' => 'username',
	],

	'menu' => [
		'items' => [
			[
				'title' => 'Navigation',
			],
			[
				'text' => 'News',
				'link' => '#',
				'icon' => 'note',
				'items' => [
					[
						'text' => 'Latest News',
						'link' => '#',
						'icon' => 'options',
					],
					[
						'text' => 'Notice',
						'link' => '#',
						'icon' => 'options',
					],
				],
			],
			[
				'title' => 'Setting',
			],
			[
				'text' => 'Role',
				'link' => '#',
				'icon' => 'people',
			],
			[
				'text' => 'User',
				'link' => '#',
				'icon' => 'user',
			],
		],
	],

	'footer' => [
		'left' => '',
		'right' => '',
	],
];