<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2022 Swedish translation group.
*
*
* For more information about the language pack, please visit
* http://phpbb.se/forum/viewforum.php?f=49
*
*
* @package		phpBB Sweden
* @author		Simon Assgård <sassgard@gmail.com> (Sinom) <http://www.phpbb.se/>
* @copyright 	(c) phpBB Limited <https://www.phpbb.com/> & phpBB Sweden <http://www.phpbb.se/>
* @license		GNU General Public License, version 3 (GPL-3.0)
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
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	=> 'Saknar värde för argumentet #%1$s: <strong>%3$s</strong> i klassen <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'			=> 'Ingen kontroller har blivit angiven.',
	'CONTROLLER_METHOD_NOT_SPECIFIED'	=> 'Ingen metod var angiven för kontrollen.',
	'CONTROLLER_SERVICE_UNDEFINED'		=> 'Tjänsten för kontrollen "<strong>%s</strong>" är inte definerad i ./config/services.yml.',
));
