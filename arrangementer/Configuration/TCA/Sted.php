<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_arrangementer_domain_model_sted'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_arrangementer_domain_model_sted']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden, navn, gadenavn_og_nummer, post_nummer, bynavn, url',
	),
	'types' => array(
		'1' => array('showitem' => 'hidden;;1, navn, gadenavn_og_nummer, post_nummer, bynavn, url, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(

		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'navn' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_sted.navn',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'gadenavn_og_nummer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_sted.gadenavn_og_nummer',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'post_nummer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_sted.post_nummer',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bynavn' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_sted.bynavn',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'url' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_sted.url',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
	),
);
