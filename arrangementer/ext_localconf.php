<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'DUK.' . $_EXTKEY,
	'Arrangement',
	array(
		'Arrangement' => 'list, show',
		'Sted' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Arrangement' => '',
		'Sted' => '',
		
	)
);
