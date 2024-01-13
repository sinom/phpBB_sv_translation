<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2024 Swedish translation group.
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

$lang = array_merge($lang, array(
	'CONFIG_NOT_EXIST'					=> 'Konfigurationsinställningar "%s" verkar inte finnas.',

	'GROUP_NOT_EXIST'					=> 'Gruppen "%s" verkar inte finnas.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Tillämnpa beroende av %s.',
	'MIGRATION_DATA_DONE'				=> 'Installerad Data: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Installerar Data: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_DATA_RUNNING'			=> 'Installerar Data: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Förflyttningen är redan installerad (skipped): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Något gick fel under begäran och ett undantag kastades. Ändringarna som gjordes innan felet inträffade omvändes efter bästa förmåga, men du bör kontrollera brädet för fel.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Förflyttningen "%1$s" är inte genomförbar, saknar förflyttning "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'Migreringen är i "%s" inte installerad.', 
	'MIGRATION_NOT_VALID'				=> '%s är inte en giltig förflyttning.',
	'MIGRATION_SCHEMA_DONE'				=> 'Installerat Schema: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Installerar Schema: %1$s; Tid: %2$.2f sekunder', 
	'MIGRATION_SCHEMA_RUNNING'			=> 'Installerar Schema: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Återgången Data: %1$s; Tid: %2$.2f sekunder', 
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Återgår till Data: %1$s; Tid: %2$.2f sekunder', 
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Återgår till Data: %s.', 
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Återgånget Schema: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Återgår till Schema: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Återgår till Schema: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'En migrering är ogiltig. Ett if statement helper saknar förutsättning.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'En migrering är ogiltig. Ett if statement helper saknar giltigt anrop till ett migreringssteg.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'En migrering är ogiltig. En skräddarsydd anropsfunktion kunde inte anropas.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'En migrering är ogiltig. En okänd typ av migreringsredskap påträffades.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'En migrering är ogiltig. Ett odefinierat migreringsredskap påträffades.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'En migrering är ogiltig. En odefinierat migreringsredskapsmetod påträffades.',

	'MODULE_ERROR'						=> 'Ett fel uppstod under installationen av modulen: %s',
	'MODULE_EXISTS'						=> 'En modul finns redan: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Ett flertal moduler med det angivna förälder-modul langname finns redan: %s. Försök använda före/efter-nycklar för att förtydliga modulens placering.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'En obligatorisk modulsinformationsfil saknas: %2$s',
	'MODULE_NOT_EXIST'					=> 'En obligatorisk modul saknas: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Kan ej avgöra föräldra-modulens identifierare: %s', 
	'PERMISSION_NOT_EXIST'				=> 'Behörighetsinställningarna "%s" verkar inte finnas.',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Behörighetsroppen till gruppen "%1$s" verkar inte finnas. Rollid: "%2$s"',
	'ROLE_NOT_EXIST'					=> 'Behörighetsrollen "%s" verkar inte finnas.',
));
