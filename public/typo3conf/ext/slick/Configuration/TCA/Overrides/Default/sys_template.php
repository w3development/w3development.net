<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
				'slick'
				, 'Configuration/TypoScript/Default/'
				, 'Slick [01.1.1]'
);
ExtensionManagementUtility::addStaticFile(
				'slick'
				, 'Configuration/TypoScript/ImageWoFigure/'
				, 'Slick [01.2.1] +Image without figure [Dangerous: affects all images!]'
);
ExtensionManagementUtility::addStaticFile(
				'slick'
				, 'Configuration/TypoScript/Dev/'
				, 'Slick [99.1.1] +Dev: static JavaScript'
);

