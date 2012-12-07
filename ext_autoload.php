<?php
$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('extbase');
$extensionClassesPath = $extensionPath . 'Classes/';
return array(
	'tx_mediafe_controller_mediafrontendcontroller' => $extensionClassesPath . 'Controller/MediaFrontendController.php',
);
?>