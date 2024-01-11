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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_APCU_CACHE_NOTICE'				=> 'APCu-cache måste rensas genom administrationens kontrollpanelen.',

	'CLI_CONFIG_CANNOT_CACHED'			=> 'Ange det här alternativet om konfigurationsalternativ ändras alltför ofta för att kunna bli effektivt cachad.',
	'CLI_CONFIG_CURRENT'				=> 'Aktuella konfigurationsvärde, använd 0 och 1 för att ange booleska värden',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Lyckades ta bort konfigurationen %s.',
	'CLI_CONFIG_NEW'					=> 'Nytt konfigurationsvärde, använd 0 och 1 för att ange booleska värden',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Config %s finns inte',
	'CLI_CONFIG_OPTION_NAME'			=> 'Konfigurationsalternativets namn',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Ange det här alternativet om värdet ska skrivas ut utan en ny rad i slutet.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Belopp att öka med',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Lyckades öka config %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Det gick inte att ställa in config %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Lyckades ställa in config %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Skriver ut en lista med färdiga och icke-färdiga cron-jobb.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Kör alla färdiga cron-uppgifter.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Namn på den uppgift som skall köras',
	'CLI_DESCRIPTION_DB_LIST'					=> 'List all installed and available migrations.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Uppdaterar databasen genom att tillämpa migreringar.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Revert a migration.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Tar bort ett konfigurationsalternativ',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Inaktiverar angivet tillägg.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Aktiverar angivet tillägg.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Hittar migrationer som forumet inte är beroende på.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Får ett konfigurationsalternativs värde',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Ökar ett konfigurationsalternativs värde',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Listar alla tillägg i databasen och i filsystemet.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'The Environment name.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Kör i felsäkert läge (utan tillägg).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Lansera skalet.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Rensar angivet tillägg.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Lists the types of text that can be reparsed.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Available reparsers:', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Reparses stored text with the current text_formatter services.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Type of text to reparse. Leave blank to reparse everything.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Do not save any changes; just print what would happen', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Lowest record ID to process', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Highest record ID to process', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Approximate number of records to process at a time', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Start reparsing where the last execution stopped', /*ÄNNU_EJ_ÖVERSATT*/

	

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Ställer en konfigurationsalternativs värde endast om gamla matchar det aktuella värdet',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Ställer en konfigurationsalternativs värde',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Delete all existing thumbnails.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Generate all missing thumbnails.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Recreate all thumbnails.', /*ÄNNU_EJ_ÖVERSATT*/

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Check if the board is up to date.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Name of the extension to check (if all, checks all the extensions)', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Run check command with cache.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Run command choosing to check only stable or unstable versions.', /*ÄNNU_EJ_ÖVERSATT*/

	'CLI_ERROR_INVALID_STABILITY' => '"%s" is not a valid stability.', /*ÄNNU_EJ_ÖVERSATT*/

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Activate (or deactivate) a user account.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Username of the account to activate.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Deactivate the user’s account', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'The user is already active.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'The user is already inactive.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_ADD'					=> 'Add a new user.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Username of the new user', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Password of the new user', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'E-mail address of the new user', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Send account activation email to the new user (not sent by default)', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Delete a user account.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Username of the user to delete', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Delete all posts by the user. Without this option, the user’s posts will be retained.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Re-clean usernames.', /*ÄNNU_EJ_ÖVERSATT*/

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Det gick inte att inaktivera tillägget %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Lyckades inaktivera tillägget %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Kunde inte aktivera tillägget %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Lyckades aktivera tillägget %s',
	'CLI_EXTENSION_NAME'				=> 'Namn på tillägget',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Kunde inte tömma tillägget %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Lyckades tömma tillägget %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Could not update extension %s', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Successfully updated extension %s', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_EXTENSION_NOT_FOUND'			=> 'Inga tillägg kunde hittas.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Tillgänglig',
	'CLI_EXTENSIONS_DISABLED'			=> 'Inaktiverad',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktiverad',

	

	'CLI_MIGRATION_NAME'					=> 'Migration name, including the namespace (use forward slashes instead of backslashes to avoid problems).', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Available migrations', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_MIGRATIONS_INSTALLED'				=> 'Installed migrations', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Show only available migrations', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_MIGRATIONS_EMPTY'                  => 'No migrations.', /*ÄNNU_EJ_ÖVERSATT*/

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reparsing %1$s (range %2$d..%3$d)', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reparsing %s...', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Reparsing ended with success', /*ÄNNU_EJ_ÖVERSATT*/

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) deleted.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_THUMBNAIL_DELETING'	=> 'Deleting thumbnails', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) skipped.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) generated.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_THUMBNAIL_GENERATING'	=> 'Generating thumbnails', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'All thumbnails have been regenerated.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'All thumbnails have been deleted.', /*ÄNNU_EJ_ÖVERSATT*/

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'No thumbnails to generate.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'No thumbnails to delete.', /*ÄNNU_EJ_ÖVERSATT*/

	'CLI_USER_ADD_SUCCESS'		=> 'Successfully added user %s.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_USER_DELETE_CONFIRM'	=> 'Are you sure you want to delete ‘%s’? [y/N]', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_USER_RECLEAN_START'	=> 'Re-cleaning usernames', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_USER_RECLEAN_DONE'	=>	/*ÄNNU_EJ_ÖVERSATT*/ array(
		0	=>			'Re-cleaning complete. No usernames needed to be cleaned.',
		1	=>			'Re-cleaning complete. %d username was cleaned.',
		2	=>			'Re-cleaning complete. %d usernames were cleaned.',
	),
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Optionally you can specify a cron task name to run only the specified cron task.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_HELP_USER_ACTIVATE'	=> 'Activate a user account, or deactivate an account using the <info>--deactivate</info> option.
To optionally send an activation email to the user, use the <info>--send-email</info> option.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_HELP_USER_ADD'			=> 'The <info>%command.name%</info> command adds a new user:
If this command is run without options, you will be prompted to enter them.
To optionally send an email to the new user, use the <info>--send-email</info> option.', /*ÄNNU_EJ_ÖVERSATT*/
	'CLI_HELP_USER_RECLEAN'		=> 'Re-clean usernames will check all stored usernames and ensure clean versions are also stored. Cleaned usernames are a case insensitive form, NFC normalized and transformed to ASCII.', /*ÄNNU_EJ_ÖVERSATT*/
));
