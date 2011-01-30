<?php
/**
*
* This file is part of Swedish STK translation.
* Copyright (C) 2010 phpBB-se.com
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
* @package   Support Toolkit
* @author    Simon Assgård <sassgard@gmai.com> (Simon Assgård) http://www.phpbb-se.com/
* @copyright (c) 2009 phpBB Group
* @license   http://opensource.org/licenses/gpl-license.php GNU Public License
* @version   $Id: common.php 482 2010-07-05 10:07:42Z erikfrerejean $
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// í ª ì î Ö
//

$lang = array_merge($lang, array(
	'REPARSE_ALL'				=> 'Omtolka alla BBKoder',
	'REPARSE_ALL_EXPLAIN'		=> 'När denna är ikryssad kommer BBkod-omtolkningen tolka om forumets totala innehåll; som standards så kommer verktyget endast att tolk om inlägg/privata meddelanden/signaturer som tidigare blivit tolkade av phpBB.',
	'REPARSE_BBCODE'			=> 'Genomför omtolkning av BBkoden',
	'REPARSE_BBCODE_COMPLETE'	=> 'BBkoder är omtolkade.',
	'REPARSE_BBCODE_CONFIRM'	=> 'Är du säker på att du vill omtolka alla BBkoder? Vänligen notera att detta verktyget kan potentiellt förstöra din databas. Använd därför inte detta verktyg <strong>före du har gjorten backup på din databas</strong>. Notera också att detta verktyg kan ta en stund att köras.',
	'REPARSE_BBCODE_PROGRESS'	=> 'Steg %1$d färdigt. Börjar nu med steg %2$d...',
	'REPARSE_BBCODE_SWITCH_MODE'	=> array(
		1	=> 'Färdig med omtolkningen av inlägg, fortsätter med privata meddanden.',
		2	=> 'Färdig med omtolkningen av privata meddelanden, fortsätter med signaturer.',
	),
	'REPARSE_IDS_INVALID'			=> 'ID-numrerna du anvgav var inte korrekta; vänligen notera att inläggs IDs ska separeras med komma (e.x. 1,2,3,5,8,13).',
	'REPARSE_POST_IDS'				=> 'Omtolkning av specifika inlägg',
	'REPARSE_POST_IDS_EXPLAIN'		=> 'För att tolka om specifika inlägg enbart, specifera inläggs-ID numrerna separerade med komma.',
	'REPARSE_PM_IDS'				=> 'Omtolkning av specifika PMs',
	'REPARSE_PM_IDS_EXPLAIN'		=> 'För att endast tolka om PMs, separera PM ID-numrerna med komma (e.g. 1,2,3,5,8,13).',
));

?>