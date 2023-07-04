<?php

/* * ****************************************************************************
 * Pagetree Icons
 * **************************************************************************** */

# #i0064, 191101, dwildt

$icons = \Netzmacher\Slick\TCA\Ctrl\Icons::GetIcons();

foreach( ( array ) $icons as $icon )
{
	$GLOBALS[ 'TCA' ][ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
			$icon[ 'label' ]
			, $icon[ 'key' ]
			, $icon[ 'identifier' ]
	);
	$GLOBALS[ 'TCA' ][ 'pages' ][ 'ctrl' ][ 'typeicon_classes' ][ $icon[ 'identifier' ] ] = $icon[ 'identifier' ];
}
