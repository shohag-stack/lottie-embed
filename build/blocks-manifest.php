<?php
// This file is generated. Do not modify it manually.
return array(
	'lottie-embed' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/lottie-embed',
		'version' => '0.1.0',
		'title' => 'Lottie Embed',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'jsonUrl' => array(
				'type' => 'string',
				'default' => 'https://lottie.host/c7d7d859-c2a2-4cb5-9de6-a607de25a940/0LyHkOfpLB.json'
			),
			'loop' => array(
				'type' => 'boolean',
				'default' => false
			),
			'autoPlay' => array(
				'type' => 'boolean',
				'default' => true
			),
			'speed' => array(
				'type' => 'number',
				'default' => 1
			),
			'direction' => array(
				'type' => 'number',
				'default' => 1
			),
			'containerBg' => array(
				'type' => 'string',
				'default' => '#ffffff'
			)
		),
		'textdomain' => 'lottie-embed',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
