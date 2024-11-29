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
	'CLI_DESCRIPTION_DB_LIST'					=> 'Lista alla installerade och tillgängliga migreringar.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Uppdaterar databasen genom att tillämpa migreringar.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Återställ en migrering.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Tar bort ett konfigurationsalternativ',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Inaktiverar angivet tillägg.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Aktiverar angivet tillägg.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Hittar migrationer som forumet inte är beroende på.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Får ett konfigurationsalternativs värde',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Ökar ett konfigurationsalternativs värde',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Listar alla tillägg i databasen och i filsystemet.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Miljönamnet.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Kör i felsäkert läge (utan tillägg).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Lansera skalet.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Rensar angivet tillägg.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Listar de typer av text som kan repareras.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Tillgängliga reparerare:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Reparerar lagrad text med de aktuella text_formatter-tjänsterna.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Typ av text att reparera. Lämna tomt för att reparera allt.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Spara inga ändringar; skriv bara ut vad som skulle hända',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE'	=> 'Omtolka alla BBCkoder utan undantag. Observera att alla tidigare inaktiverade BBC-koder kommer att omarbetas, aktiveras och återges helt.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Lägsta post-ID att bearbeta',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Högsta post-ID att bearbeta',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Ungefärligt antal poster att bearbeta åt gången',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Börja reparera där den senaste exekveringen slutade',

	

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Ställer en konfigurationsalternativs värde endast om gamla matchar det aktuella värdet',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Ställer en konfigurationsalternativs värde',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Ta bort alla befintliga miniatyrer.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Generera alla saknade miniatyrer.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Återskapa alla miniatyrer.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Kontrollera om tavlan är uppdaterad.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Namn på tillägget som ska kontrolleras (om alla, kontrollerar alla tillägg)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Kör kontrollkommandot med cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Kör kommandot och välj att endast kontrollera stabila eller instabila versioner.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" är inte en giltig stabilitet.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Aktivera (eller avaktivera) ett användarkonto.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Användarnamn på kontot som ska aktiveras.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Inaktivera användarens konto',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Användaren är redan aktiv.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Användaren är redan inaktiv.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Lägg till en ny användare.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Användarnamn för den nya användaren',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Lösenord för den nya användaren',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'E-postadress till den nya användaren',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Skicka e-post om kontoaktivering till den nya användaren (skickas inte som standard)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Ta bort ett användarkonto.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Användarnamn på användaren som ska raderas',
	'CLI_DESCRIPTION_USER_DELETE_ID'			=> 'Ta bort användarkonton efter ID.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> 'Användar-ID för användarna som ska raderas',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Ta bort alla inlägg av användaren. Utan detta alternativ kommer användarens inlägg att behållas.', 
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Rensa användarnamn igen.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Det gick inte att inaktivera tillägget %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Lyckades inaktivera tillägget %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Kunde inte aktivera tillägget %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Lyckades aktivera tillägget %s',
	'CLI_EXTENSION_NAME'				=> 'Namn på tillägget',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Kunde inte tömma tillägget %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Lyckades tömma tillägget %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Det gick inte att uppdatera tillägget %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Tillägget har uppdaterats %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Inga tillägg kunde hittas.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Tillgänglig',
	'CLI_EXTENSIONS_DISABLED'			=> 'Inaktiverad',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktiverad',

	

	'CLI_MIGRATION_NAME'					=> 'Migreringsnamn, inklusive namnutrymmet (använd snedstreck istället för bakåtstreck för att undvika problem).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Tillgängliga migreringar',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Installerade migrationer',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Visa endast tillgängliga migreringar',
	'CLI_MIGRATIONS_EMPTY'                  => 'Inga migrationer.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reparerar %1$s (range %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reparerar %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Repareringen slutade med framgång',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) borttagna.',
	'CLI_THUMBNAIL_DELETING'	=> 'Ta bort miniatyrer',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) hoppades över.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) genererade.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Genererar miniatyrer',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Alla miniatyrer har återskapats.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Alla miniatyrer har tagits bort.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Inga miniatyrer att generera.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Inga miniatyrer att radera.',

	'CLI_USER_ADD_SUCCESS'			=> 'Användaren %s har lagts till.',
	'CLI_USER_DELETE_CONFIRM'		=> 'Är du säker på att du vill ta bort "%s"? [j/N]',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'Är du säker på att du vill ta bort användar-ID:n "%s"? [j/N]',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'Användar-ID:n har raderats.',
	'CLI_USER_DELETE_ID_START'		=> 'Ta bort användare med ID',
	'CLI_USER_DELETE_NONE'			=> 'Inga användare raderades av användar-ID.',
	'CLI_USER_RECLEAN_START'		=> 'Rengör användarnamn igen',
	'CLI_USER_RECLEAN_DONE'			=> [
		0	=>			'Rengöring klar. Inga användarnamn behövde rengöras.',
		1	=>			'Rengöring klar. %d användarnamn har rensats.',
		2	=>			'Rengöring klar. %d användarnamn rensades.',
	],

	'CLI_DESCRIPTION_EXTENSION_MANAGE'					=> 'Hanterar ett tillägg',
	'CLI_DESCRIPTION_EXTENSION_MANAGE_ARGUMENT'			=> 'Tillägg att hantera',
	'CLI_DESCRIPTION_EXTENSION_INSTALL'					=> 'Installera det eller de angivna tilläggen.',
	'CLI_DESCRIPTION_EXTENSION_INSTALL_OPTION_ENABLE'	=> 'Aktivera tillägg(er) efter installationen',
	'CLI_DESCRIPTION_EXTENSION_INSTALL_ARGUMENT'		=> 'Tillägg(er) att installera, t.ex.: leverantör/paket',
	'CLI_DESCRIPTION_EXTENSION_LIST_AVAILABLE'			=> 'Lista tillägg tillgängliga för installation.',
	'CLI_DESCRIPTION_EXTENSION_REMOVE'					=> 'Ta bort den eller de angivna tilläggen.',
	'CLI_DESCRIPTION_EXTENSION_REMOVE_OPTION_PURGE'		=> 'Rensa förlängning(ar) när du tar bort dem',
	'CLI_DESCRIPTION_EXTENSION_REMOVE_ARGUMENT'			=> 'Förlängning(er) att ta bort, t.ex.: leverantör/paket',
	'CLI_DESCRIPTION_EXTENSION_UPDATE'					=> 'Uppdatera det eller de angivna tilläggen.',
	'CLI_DESCRIPTION_EXTENSION_UPDATE_ARGUMENT'			=> 'Tillägg att uppdatera, t.ex.: leverantör/paket',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Alternativt kan du ange ett cron-uppgiftsnamn för att endast köra den angivna cron-uppgiften.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Aktivera ett användarkonto, eller avaktivera ett konto med alternativet <info>--avaktivera</info>.
För att valfritt skicka ett aktiveringse-postmeddelande till användaren, använd alternativet <info>--send-e-post</info>.',
	'CLI_HELP_USER_ADD'			=> 'Kommandot <info>%command.name%</info> lägger till en ny användare:
Om det här kommandot körs utan alternativ kommer du att bli ombedd att ange dem.
Om du vill skicka ett e-postmeddelande till den nya användaren, använd alternativet <info>--sänd-e-post</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Re-clean användarnamn kommer att kontrollera alla lagrade användarnamn och säkerställa att rena versioner också lagras. Rensade användarnamn är en skiftlägesokänslig form, NFC-normaliserad och omvandlad till ASCII.',
));
