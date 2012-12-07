<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Mediafrontend',
	array(
		'MediaFrontend' => 'list, show, create, update, delete',
		
	),
	// non-cacheable actions
	array(
		'MediaFrontend' => 'create, update, delete',
	)
);

?>