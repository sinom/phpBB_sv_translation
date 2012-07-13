<?php
/**
*
* This file is part of Swedish STK translation.
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
* @package    Support Toolkit - Merge Users
* @author     Simon Assgård <sassgard@gmail.com> (Simon Assgård) http://www.phpbb-se.com/
* @copyright (c) 2009 phpBB Group
* @license    http://opensource.org/licenses/gpl-license.php GNU Public License
* @version    $Id$
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'MERGE_USERS'						=> 'Slå samman användare',
	'MERGE_USERS_EXPLAIN'				=> 'Detta verktyget flyttar en användares kontotillgångar till ett annat konto, ursprungsanvändarens inställningar och gruppmedlemskap blir kopierade. Tillgångar är användarrättigheter, bifogade filer, bannlysningar, bokmärken, utkast, forum/tråd bevakningar, inloggningar, omröstningingar, inlägg, privata meddelanden, rapporter, trådar, varningar samt vänner och fiender.',

	'MERGE_USERS_BOTH_FOUNDERS'	=> 'Du kan inte slå samman en grundare med en icke-grundare.',
	'MERGE_USERS_BOTH_IGNORE'	=> 'Du kan inte slå samman en bot med en vanlig användare.',

	'MERGE_USERS_MERGED'		=> 'Användare är nu sammanslagna.',

	'MERGE_USERS_REMOVE_SOURCE'			=> 'Ta bort ursprungsanvändaren',
	'MERGE_USERS_REMOVE_SOURCE_EXPLAIN'	=> 'Väljer du denna, så tas ursprungsanvändaren bort.',

	'MERGE_USERS_SAME_USERS'	=> 'Ursprungsanvändaren och målanvändaren får inte vara samma.',

	'MERGE_USERS_USER_SOURCE_NAME'			=> 'Ursprungsanvändare. (Användarnamn)',
	'MERGE_USERS_USER_SOURCE_ID'			=> 'Ursprungsanvändare. (Användar ID)',
	'MERGE_USERS_USER_SOURCE_NAME_EXPLAIN'	=> 'Inlägg, privata meddelanden, rättigheter, varningar, et cetera flyttas från denna användaren till målanvändaren. Gruppmedlemskap och användarinställningar kopieras.',
 

	'MERGE_USERS_USER_TARGET_NAME'	=> 'Målanvändare. (Användarnamn)',
	'MERGE_USERS_USER_TARGET_ID'	=> 'Målanvändare. (Användar ID)',

	'NO_SOURCE_USER'		=> 'Den eftersökta ursprungsanvändaren finns inte',
	'NO_TARGET_USER'		=> 'Den eftersökta ursprungsanvändaren finns inte',

	'BOTH_SOURCE_USER'		=> 'Fyll endast i ett käll-fällt.',
	'BOTH_TARGET_USER'		=> 'Fyll endast i ett mål-fällt.',
));
