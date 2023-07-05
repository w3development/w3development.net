<?php
declare(strict_types=1);
namespace In2code\Powermail\ViewHelpers\Condition;

use TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationExtensionNotConfiguredException;
use TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationPathDoesNotExistException;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use In2code\Powermail\Utility\ConfigurationUtility;

/**
 * Class IsIpInformationEnabledGloballyViewHelper
 */
class IsIpInformationEnabledGloballyViewHelper extends AbstractViewHelper
{

    /**
     * @return bool
     * @throws ExtensionConfigurationExtensionNotConfiguredException
     * @throws ExtensionConfigurationPathDoesNotExistException
     */
    public function render(): bool
    {
        return !ConfigurationUtility::isDisableIpLogActive();
    }
}
