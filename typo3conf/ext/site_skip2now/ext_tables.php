<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addStaticFile(
    'site_skip2now',
    'Configuration/TypoScript',
    'Skip2Now Site'
);