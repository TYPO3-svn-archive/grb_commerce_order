<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'web',	 			// Make module a submodule of 'web'
		'commerceorder',	// Submodule key
		'',					// Position
		array(
			'Order' => 'list, show, update',
			'Ajax'  => 'showArticles, showCustomerDetails',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_commerceorder.xml',
		)
	);

}


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'COMMERCE - Ordermanagement (Backend)');


t3lib_extMgm::addLLrefForTCAdescr('tx_grbcommerceorder_domain_model_order', 'EXT:grb_commerce_order/Resources/Private/Language/locallang_csh_tx_grbcommerceorder_domain_model_order.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbcommerceorder_domain_model_order');
$TCA['tx_grbcommerceorder_domain_model_order'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_commerce_order/Resources/Private/Language/locallang_db.xml:tx_grbcommerceorder_domain_model_order',
		'label' => 'order_id',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Order.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbcommerceorder_domain_model_order.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbcommerceorder_domain_model_orderarticles', 'EXT:grb_commerce_order/Resources/Private/Language/locallang_csh_tx_grbcommerceorder_domain_model_orderarticles.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbcommerceorder_domain_model_orderarticles');
$TCA['tx_grbcommerceorder_domain_model_orderarticles'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_commerce_order/Resources/Private/Language/locallang_db.xml:tx_grbcommerceorder_domain_model_orderarticles',
		'label' => 'order_id',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/OrderArticles.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbcommerceorder_domain_model_orderarticles.gif'
	),
);

?>