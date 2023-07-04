<?php

declare(strict_types = 1);

namespace Netzmacher\Slick\Form\Element;

use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2020-2022 -  Dirk Wildt <http://wildt.at.die-netzmacher.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * Class for rendering a HTML page by TCPDF methods
 *
 * @package TYPO3
 * @subpackage org
 * @author Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @version 6.0.0
 * @since 6.0.0
 */
class SheetHelpPromptHelp extends AbstractFormElement
{

	/**
	 * Path to locallang file (with : as postfix)
	 *
	 * @var string
	 */
	protected $_locallangPath = 'LLL:EXT:slick/Resources/Private/Language/Flexform.xlf:';

	/**
	 * Max width of the div area of the prompt
	 *
	 * @var string
	 */
	protected $_maxWidth = '600px';

	/**
	 * render( ) : Returns a note, how to configure filter by constant editor
	 *
	 * @return string
	 * @access public
	 * @version 6.0.0
	 * @since 6.0.0
	 *
	 */
	public function render()
	{
		return $this->_divPrompt( 'sheet.help.prompt' );
	}

	/**
	 * _divPrompt( ) :
	 *
	 * @param string $llLabel
	 * @return string
	 * @access private
	 * @version 6.0.0
	 * @since 6.0.0
	 *
	 */
	private function _divPrompt( $llLabel )
	{
		//.message-notice
		//.message-information
		//.message-ok
		//.message-warning
		//.message-error

		$subject = LocalizationUtility::translate( $this->_locallangPath . $llLabel, '<i>' . $llLabel . '</i>' );

		$prompt = '
      <div class="typo3-message message-information" style="max-width:' . $this->_maxWidth . ';">
        <div class="message-body">
          ' . $subject . '
        </div>
      </div>';

		return $prompt;
	}

}
