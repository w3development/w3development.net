<?php

namespace Netzmacher\Slick\TCA\Ctrl;

use Netzmacher\Slick\Utility\Typo3VersionUtility;

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2019-2022 -  Dirk Wildt <http://wildt.at.die-netzmacher.de>
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
 * @author      Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package     TYPO3
 * @subpackage  Slick
 * @version     4.5.2
 * @since       4.5.2
 */
class Icons
{

	private static $icons = [
			'slickdefault' => [
					'identifier' => 'contains-slickdefault'
					, 'key' => 'slickdefault' // <- Key must be the part behind contain- of the identifier!
					, 'label' => 'Slick'
					, 'source' => 'EXT:slick/Resources/Public/Icons/ext_icon-default'  // <- without ext
			],
			'slickblue' => [
					'identifier' => 'contains-slickblue'
					, 'key' => 'slickblue' // <- Key must be the part behind contain- of the identifier!
					, 'label' => 'Slick blue'
					, 'source' => 'EXT:slick/Resources/Public/Icons/ext_icon-blue'  // <- without ext
			],
			'slickgrey' => [
					'identifier' => 'contains-slickgrey'
					, 'key' => 'slickgrey' // <- Key must be the part behind contain- of the identifier!
					, 'label' => 'Slick grey'
					, 'source' => 'EXT:slick/Resources/Public/Icons/ext_icon-grey'  // <- without ext
			],
	];

	/**
	 * Get Icons
	 *
	 * @return      void
	 * @version     4.5.2
	 * @since       4.5.2
	 * @internal		#i0064
	 */
	static public function GetIcons()
	{
		$ext = SELF::_Ext();
		$icons = self::$icons;
		foreach( ( array ) $icons as $key => $icon )
		{
			$icons[ $key ][ 'source' ] = $icon[ 'source' ] . '.' . $ext;
		}
		return $icons;
	}

	/**
	 * Register Icons
	 *
	 * @return      void
	 * @version     4.5.2
	 * @since       4.5.2
	 */
	static public function RegisterIcons()
	{
		if( Typo3VersionUtility::get() < 7006000 )
		{
			return;
		}

		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( \TYPO3\CMS\Core\Imaging\IconRegistry::class );
		$icons = self::GetIcons();
		foreach( ( array ) $icons as $icon )
		{
			$iconRegistry->registerIcon(
							$icon[ 'identifier' ]
							, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
							, [ 'source' => $icon[ 'source' ] ]
			);
		}
	}

	/**
	 *
	 * @return      string
	 * @access			private
	 * @version     4.5.2
	 * @since       4.5.2
	 */
	static private function _Ext()
	{
		switch( TRUE )
		{
			case( Typo3VersionUtility::get() < 7006000 ):
				return 'gif';
			case( Typo3VersionUtility::get() >= 7006000 ):
			default:
				return 'svg';
		}
	}

//	/**
//	 * Get icon array with classes and paths
//	 *
//	 * @return      void
//	 * @version     4.5.2
//	 * @since       4.5.2
//	 */
//	static private function _getClassWiIcons()
//	{
//		$ext = SELF::_Ext();
//
//		return array(
//				'ext-slickdefault' => SELF::$pathDefault . '.' . $ext
//				, 'ext-slickblue' => SELF::$pathBlue . '.' . $ext
//				, 'ext-slickgrey' => SELF::$pathGrey . '.' . $ext
//		);
//	}
}
