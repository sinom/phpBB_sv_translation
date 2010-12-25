<?php
/**
*
* phpbb [Swedish]
*
* @package language
* @copyright  for the translation (c) 2010 Sinom & Peetra http://phpbb-se.com
* @version $Id$
* @copyright (c) 2007, 2008 eviL3
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
		'YESTERDAY'	=> 'F�rrg�r',

		'Sunday'	=> 'S�ndag',
		'Monday'	=> 'M�ndag',
		'Tuesday'	=> 'Tisdag',
		'Wednesday'	=> 'Onsdag',
		'Thursday'	=> 'Torsdag',
		'Friday'	=> 'Fredag',
		'Saturday'	=> 'L�rdag',

		'Sun'		=> 'S�n',
		'Mon'		=> 'M�n',
		'Tue'		=> 'Tis',
		'Wed'		=> 'Ons',
		'Thu'		=> 'Tor',
		'Fri'		=> 'Fre',
		'Sat'		=> 'L�r',

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
