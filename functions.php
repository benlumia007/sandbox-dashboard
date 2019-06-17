<?php
/**
 * Dashboard ( functions.php )
 *
 * @package		Dashboard
 * @copyright	Copyright (C) 2019. Benjamin Lu
 * @license		GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author		Benjamin Lu ( https://benjlu.com )
 */

array_map( function( $files ) {
    require_once "framework/{$files}.php";
}, [
    'sites',
    'yaml',
] );