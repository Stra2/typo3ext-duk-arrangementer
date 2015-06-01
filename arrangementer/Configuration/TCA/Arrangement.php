<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_arrangementer_domain_model_arrangement'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_arrangementer_domain_model_arrangement']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden, titel, beskrivelse, start_dato, slut_dato, pris, open_for_participants, tilmeldingstekst, maalgruppe, registrerings_dato, sted',
	),
	'types' => array(
		'1' => array('showitem' => 'hidden;;1, titel, beskrivelse;;;richtext:rte_transform[mode=ts_links], start_dato, slut_dato, pris, open_for_participants, tilmeldingstekst, maalgruppe, registrerings_dato, sted, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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

		'titel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement.titel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'beskrivelse' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement.beskrivelse',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'start_dato' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement.start_dato',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
		'slut_dato' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement.slut_dato',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
		'pris' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement.pris',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'open_for_participants' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement.open_for_participants',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'tilmeldingstekst' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement.tilmeldingstekst',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'maalgruppe' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement.maalgruppe',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'registrerings_dato' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement.registrerings_dato',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
		'sted' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:arrangementer/Resources/Private/Language/locallang_db.xlf:tx_arrangementer_domain_model_arrangement.sted',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_arrangementer_domain_model_sted',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		
	),
);
