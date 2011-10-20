<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_grbcommerceorder_domain_model_orderarticles'] = array(
	'ctrl' => $TCA['tx_grbcommerceorder_domain_model_orderarticles']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, order_id, title, price_net, price_gross, amount, order_uid',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, order_id, title, price_net, price_gross, amount, order_uid,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_grbcommerceorder_domain_model_orderarticles',
				'foreign_table_where' => 'AND tx_grbcommerceorder_domain_model_orderarticles.pid=###CURRENT_PID### AND tx_grbcommerceorder_domain_model_orderarticles.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
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
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
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
		'order_id' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_commerce_order/Resources/Private/Language/locallang_db.xml:tx_grbcommerceorder_domain_model_orderarticles.order_id',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_commerce_order/Resources/Private/Language/locallang_db.xml:tx_grbcommerceorder_domain_model_orderarticles.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'price_net' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_commerce_order/Resources/Private/Language/locallang_db.xml:tx_grbcommerceorder_domain_model_orderarticles.price_net',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'price_gross' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_commerce_order/Resources/Private/Language/locallang_db.xml:tx_grbcommerceorder_domain_model_orderarticles.price_gross',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'amount' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_commerce_order/Resources/Private/Language/locallang_db.xml:tx_grbcommerceorder_domain_model_orderarticles.amount',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'order_uid' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_commerce_order/Resources/Private/Language/locallang_db.xml:tx_grbcommerceorder_domain_model_orderarticles.order_uid',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_grbcommerceorder_domain_model_order',
				'foreign_field' => 'orderarticles',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
	),
);
?>