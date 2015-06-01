<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Arrangement',
	'Arrangementer'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Arrangementer');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_arrangementer_domain_model_arrangement', 'EXT:arrangementer/Resources/Private/Language/locallang_csh_tx_arrangementer_domain_model_arrangement.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_arrangementer_domain_model_arrangement');
$GLOBALS['TCA']['tx_arrangementer_domain_model_arrangement'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement',
		'label' => 'titel',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',

		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'titel,beskrivelse,start_dato,slut_dato,pris,open_for_participants,tilmeldingstekst,maalgruppe,registrerings_dato,sted,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Arrangement.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_arrangementer_domain_model_arrangement.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_arrangementer_domain_model_sted', 'EXT:arrangementer/Resources/Private/Language/locallang_csh_tx_arrangementer_domain_model_sted.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_arrangementer_domain_model_sted');
$GLOBALS['TCA']['tx_arrangementer_domain_model_sted'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_sted',
		'label' => 'navn',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'navn,gadenavn_og_nummer,post_nummer,bynavn,url,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Sted.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_arrangementer_domain_model_sted.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    $_EXTKEY,
    'tx_arrangementer_domain_model_arrangement'
);
