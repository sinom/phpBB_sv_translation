<?php
/**
*
* This file is part of Swedish Quick Install translation.
* Copyright (c) 2010 - 2011 Swedish translation group.
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; version 2 of the License.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along
* with this program; if not, write to the Free Software Foundation, Inc.,
* 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*
* @package    Quick Install
* @author     2010 Sinom & Peetra @ http://phpbb-se.com
* @copyright (c) 2007, 2008 eviL3
* @license    http://opensource.org/licenses/gpl-license.php GNU Public License
* @version    $Id$
*
*/

/**
* @ignore
*/
if (!defined('IN_QUICKINSTALL'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> '',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|d M Y|',	// 01 Jan 2007
	'USER_LANG'			=> 'sv',
	'USER_LANG_LONG'	=> 'Svenska',

	'datetime'			=> array(
		'TODAY'		=> 'Idag',
		'TOMORROW'	=> 'Imorgon',
		'YESTERDAY'	=> 'Förrgår',

		'Sunday'	=> 'Söndag',
		'Monday'	=> 'Måndag',
		'Tuesday'	=> 'Tisdag',
		'Wednesday'	=> 'Onsdag',
		'Thursday'	=> 'Torsdag',
		'Friday'	=> 'Fredag',
		'Saturday'	=> 'Lördag',

		'Sun'		=> 'Sön',
		'Mon'		=> 'Mån',
		'Tue'		=> 'Tis',
		'Wed'		=> 'Ons',
		'Thu'		=> 'Tor',
		'Fri'		=> 'Fre',
		'Sat'		=> 'Lör',

		'January'	=> 'Januari',
		'February'	=> 'Februari',
		'March'		=> 'Mars',
		'April'		=> 'April',
		'May'		=> 'Maj',
		'June'		=> 'Juni',
		'July'		=> 'Juli',
		'August'	=> 'Augusti',
		'September' => 'September',
		'October'	=> 'October',
		'November'	=> 'November',
		'December'	=> 'December',

		'Jan'		=> 'Jan',
		'Feb'		=> 'Feb',
		'Mar'		=> 'Mar',
		'Apr'		=> 'Apr',
		'May_short'	=> 'Maj',	// Short representation of "May". May_short used because in English the short and long date are the same for May.
		'Jun'		=> 'Jun',
		'Jul'		=> 'Jul',
		'Aug'		=> 'Aug',
		'Sep'		=> 'Sep',
		'Oct'		=> 'Oct',
		'Nov'		=> 'Nov',
		'Dec'		=> 'Dec',
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'D M d, Y g:i a', // Mon Jan 01, 2007 1:37 pm

));

?>
