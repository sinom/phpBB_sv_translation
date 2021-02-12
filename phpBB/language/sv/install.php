<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2021 Swedish translation group.
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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Installationspanel',
	'SELECT_LANG'	=> 'Välj språk',

	'STAGE_INSTALL'	=> 'Installera phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introduktion',
	'INTRODUCTION_BODY'		=> 'Välkommen till phpBB3!<br /><br />phpBB® är den mest använda open source bulletin board-lösningen i världen. phpBB3 är den senaste installationen i en paketlinje som startades år 2000. Liksom dess föregångare är phpBB3 funktionrikt, användarvänlig och fullt stödd av phpBB-teamet. phpBB3 förbättras väsentligt på vad som gjorde phpBB2 populär, och lägger till vanligt förekommande funktioner som inte var närvarande i tidigare versioner. Vi hoppas att det överstiger dina förväntningar.<br /><br />Detta installationssystem leder dig genom att installera phpBB3, uppdatera till den senaste versionen av phpBB3 från tidigare versioner, samt konvertera till phpBB3 från ett annat diskussionssystem (inklusive phpBB2). För mer information uppmanar vi dig att läsa <a href="../docs/INSTALL.html">installationsguiden</a>.<br /><br />För att läsa phpBB3-licensen eller lära dig om att få stöd och vår inställning till det, välj önskat alternativ på sidmenyn. För att fortsätta, välj lämplig flik ovan.',

	// Support page
	'SUPPORT_TITLE'		=> 'Support',
	'SUPPORT_BODY'		=> 'Fullständig support ges för den aktuella stabila versionen av phpBB3, utan kostnad. Detta inkluderar:</p><ul><li>installation</li><li>konfiguration</li><li>tekniska frågor</li><li>problem relaterade till potentiella buggar i mjukvaran</li><li>uppdatering från releasekandidater (RC) till den senaste stabila versionen</li><li>konvertering från phpBB 2.0.x till phpBB3</li><li>konvertering från andra diskussionsforummjukvaror till phpBB3 </li></ul><p>Vi rekommenderar användare som fortfarande använder betaversioner av phpBB3 att ersätta sina installationer med en fräsch kopia av den senaste versionen.</p><h2>MODdar / Stilar</h2><p>För problem relaterade till MODdar, posta i lämpligt modifikationsforum.<br />För problem relaterade till stilar, mallar och bildpaket, posta i lämpligt stilforum.<br /><br />Om din fråga är relaterad till ett specifikt paket, posta direkt i tråden dedikerad till paketet.</p><h2>Att få support</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Välkomstpaketet för phpBB</a><br /><a href="https://www.phpbb.com/support/">Supportsektionen</a><br />Snabbstartsguide<br /><br />För att försäkra dig själv om att du håller dig uppdaterad med de senaste nyheterna och versionerna, varför inte <a href="https://www.phpbb.com/support/">prenumerera på vårt nyhetsbrev</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Välkommen till installationen',
	'INSTALL_INTRO_BODY'	=> 'Med detta alternativ så kan du installera phpBB3 på sin server.</p><p>För att fortsätta så måste du ha dina databasinställningar till hands. Om du inte känner till dina databasinställningar, kontakta ditt webbhotell och fråga efter dem. Du kan inte fortsätta utan de. Du behöver:</p>
	<ul>
		<li>Databastypen - databasen som du kommer att använda.</li>
		<li>Databasens servervärdnamn eller DSN - adressen till databasservern.</li>
		<li>Databasens serverport - porten för databasservern (i de flesta fall behövs inte detta).</li>
		<li>Databasnamnet - namnet på databasen på servern.</li>
		<li>Databasens användarnamn och lösenord - inloggningsinformationen för att komma åt databasen.</li>
	</ul>
	<p><strong>Observera:</strong> om du installerar med SQLite ska du ange den fullständiga sökvägen till din databasfil i DSN-fältet och lämna användarnamn och lösenordsfälten tomma. Av säkerhetsskäl bör du se till att databasfilen inte är lagrad på en plats som kan nås från webben.</p>

	<p>phpBB3 stödjer följande databaser:</p>
	<ul>
		<li>MySQL 4.1.3 eller nyare (MySQLi krävs)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 eller nyare (direkt eller via ODBC)</li>
		<li>MS SQL Server 2005 eller nyare (native)</li>
		<li>Oracle</li>
	</ul>

	<p>Endast de databaser som din server stödjer kommer att visas.',

	'ACP_LINK'	=> 'Ta mig till <a href="%1$s">ACP (administrationspanelen)</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB är redan installerat.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB är inte installerat än.'
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Filen finns ej',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Filen %1$s måste finnas för att phpBB ska kunna installeras.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Filen %1$s bör finnas för en bättre användarupplevelse.',
	'FILE_NOT_WRITABLE'						=> 'Det går ej att skriva till filen',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Det måste gå att skriva till filen %1$s för att phpBB ska kunna installeras.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Det måste gå att skriva till filen %1$s för en bättre användarupplevelse.',

	'DIRECTORY_NOT_EXISTS'						=> 'Katalogen finns ej',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Katalogen %1$s måste finnas för att phpBB ska kunna installeras.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Katalogen %1$s bör finnas för en bättre användarupplevelse.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Det går ej att skriva till katalogen',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Det måste gå att skriva till katalogen %1$s för att phpBB ska kunna installeras.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Det måste gå att skriva till katalogen %1$s för en bättre användarupplevelse.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP-version >= 5.3.3',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB kräver PHP-version 7.1.3 eller högre.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-funktionen getimagesize() finns tillgänglig',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Obligatoriskt</strong> - För att phpBB ska fungera som det ska så måste getimagesize-funktionen finnas.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 stöd',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB kommer <strong>inte</strong> att fungera om din PHP-installation inte kompilerats med UTF-8 stöd i PCRE-extension.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON support',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> '<strong>Obligatorisk</strong> - För att phpBB skall fungera korrekt, så måste PHP JSON vara tillgänglig.',
	'PHP_MBSTRING_SUPPORT'				=> 'PHP mbstring support',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'För att phpBB ska fungera korrekt måste PHP mbstring-tillägget vara tillgängligt.',	
	'PHP_XML_SUPPORT'					=> 'Stöd för PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'För att phpBB ska fungera som det ska så måste stöd för PHP XML/DOM finnas.',
	'PHP_SUPPORTED_DB'					=> 'Databaser som stöds',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '<strong>Obligatoriskt</strong> - Du måste ha stöd för minst en kompatibel databas inom PHP. Om inga databasmoduler visas som tillgängliga bör du kontakta ditt webbhotell eller granska det relevanta PHP-installationsdokumentet för hjälp.',

	'RETEST_REQUIREMENTS'	=> 'Testa systemkraven igen',

	'STAGE_REQUIREMENTS'	=> 'Systemkrav'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Du måste fylla i alla fält i detta block.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Installationsrutinen upptäckte en tidsöverskridelse',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Installationsrutinen upptäckte en tidsöverskridelse, du kan ladda om sidan, vilket kan leda till korrumperad data. Vi rekommenderar att du antingen höjer serverns inställningar för tidsöverskridelser eller försöker använda CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Ange installationsdata',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Administratörskonfiguration',

	// Form labels
	'ADMIN_CONFIG'				=> 'Konfiguration av administrationskontot',
	'ADMIN_PASSWORD'			=> 'Administratörens lösenord',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bekräfta administratörens lösenord',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Ange ett lösenord som består av 6 till 30 tecken.',
	'ADMIN_USERNAME'			=> 'Administratörens användarnamn',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Ange ett användarnamn som består av 3 till 20 tecken.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'E-postadressen du angav är ogiltig.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Lösenorden du angav stämmer inte överens.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Lösenordet du angav är för långt. Det får inte bestå av fler än 30 tecken.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Lösenordet du angav är för kort. Det måste bestå av minst 6 tecken.',
	'INST_ERR_USER_TOO_LONG'		=> 'Användarnamnet du angav är för långt. Det får inte bestå av fler än 20 tecken.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Användarnamnet du angav är för kort. Det måste bestå av minst 3 tecken.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Bulletin-forumskonfiguration',
	'DEFAULT_LANGUAGE'	=> 'Standardspråk',
	'BOARD_NAME'		=> 'Titel på forumet',
	'BOARD_DESCRIPTION'	=> 'Kort beskrivning av forumet',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Databasinställningar',

	// Form labels
	'DB_CONFIG'				=> 'Databaskonfiguration',
	'DBMS'					=> 'Databastyp',
	'DB_HOST'				=> 'Värdnamn för databasserver eller DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN står för Data Source Name och är endast relevant för ODBC installationer. För PostgreSQL; Använd localhost för att ansluta till den lokala servern via UNIX  domain socket och 127.0.0.1 för att ansluta med TCP. För SQLite anger du hela sökvägen till din databasfil.',
	'DB_PORT'				=> 'Databasserverport',
	'DB_PORT_EXPLAIN'		=> 'Lämna detta tomt om du inte vet att servern opererar på en port som inte är standard.',
	'DB_PASSWORD'			=> 'Databaslösenord',
	'DB_NAME'				=> 'Databasnamn',
	'DB_USERNAME'			=> 'Databasanvändarnamn',
	'DATABASE_VERSION'		=> 'Databasversion',
	'TABLE_PREFIX'			=> 'Prefix för tabeller i databasen',
	'TABLE_PREFIX_EXPLAIN'	=> 'Prefixet får bara innehåll alfanumeriskt tecken (a-z + A-Z + 0-9) och understreck (_). Det bör inte börja med ett understreck.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Databasinstallationsfel',
	'INST_ERR_NO_DB'				=> 'Kunde inte ladda PHP-modulen för den valda databastypen.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Prefixet du angav är felaktigt. Det får bara innehåll alfanumeriskt tecken (a-z + A-Z + 0-9) och understreck (_).',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Tabellprefixet du angav är för långt. Det får inte bestå av fler än %d tecken.',
	'INST_ERR_DB_NO_NAME'			=> 'Inget databasnamn angavs.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Databasfilen du angivit finns inom ditt forums katalogträd. Du bör placera denna fil i en plats som inte är tillgänglig från webben.',
	'INST_ERR_DB_CONNECT'			=> 'Kunde inte ansluta till databasen, se felmeddelande nedan.',
	'INST_ERR_DB_NO_ERROR'			=> 'Inget felmeddelande gavs.',
	'INST_ERR_PREFIX'				=> 'Tabeller med det angivna prefixet finns redan, välj ett annat alternativ.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Versionen av MySQL som är installerad på denna maskin är inte kompatibel med “MySQL with MySQLi Extension”-alternativet som du har valt. Försök med “MySQL”-alternativet istället.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Versionen av SQLite tillägget som du har installerad är för gammal, den måste uppgraderas till minst 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Versionen av Oracle som är installerad på denna maskin kräver att du ställer in <var>NLS_CHARACTERSET</var>-parametern till <var>UTF8</var>. Uppgradera din installation till 9.2eller ändra parametern.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Databasen du har valt skapades inte med <var>UNICODE</var> eller <var>UTF8</var> kodning. Försök installera med en databas med <var>UNICODE</var> eller <var>UTF8</var> kodning.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Kan ej skriva till schemafilen',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-postinställningar',

	// Package info
	'PACKAGE_VERSION'					=> 'Installerad paketversion',
	'UPDATE_INCOMPLETE'				=> 'Din installation av phpBB har ej uppdaterats fullständigt.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Läs informationen nedan för att lösa felet.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Ofullständig uppdatering</h1>

		<p>Vi har registrerat att den senaste uppdateringen av din phpBB-installation ej har utförts fullständigt. Går till <a href="%1$s" title="%1$s">databasuppdateringen</a>, välj <em>Uppdatera endast databasen</em> och klicka på <strong>Skicka</strong>. Glöm ej att radera katalogen "install" efter utförd uppdatering av databasen.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'En ny utgåva <strong>%1$s</strong> finns tillgänglig. Vänligen läs <a href="%2$s" title="%2$s"><strong>kungörelsen</strong></a> för att får mer information.',
	'SERVER_CONFIG'				=> 'Serverkonfiguration',
	'SCRIPT_PATH'				=> 'Skriptsökväg',
	'SCRIPT_PATH_EXPLAIN'		=> 'Sökvägen där phpBB finns, relativt till domännamnet, t.ex. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Hälsningar forumledningen',
	'CONFIG_SITE_DESC'				=> 'En kort text som beskriver ditt forum',
	'CONFIG_SITENAME'				=> 'dindomän.com',

	'DEFAULT_INSTALL_POST'			=> '<t>Detta är ett exempelinlägg i din installation av phpBB3. Allting verkar fungera. Du kan ta bort detta inlägg om du vill och fortsätta konfigurera ditt forum. Under installationen så skapades din första huvudkategori och kategori och tilldelades en lämplig uppsättning behörigheter för de fördefinierade användargrupperna administratörer, robotar, globala moderatorer, gäster, registrerade användare och registrerade COPPA-användare. Om du väljer att ta bort din första huvudkategori och din första kategori, glöm inte att tilldela behörigheter till alla dessa användargrupper för alla nya huvudkategorier och kategorier du skapar. [b]Det är rekommenderat att byta namn på din första huvudkategori och din första kategori och kopiera behörigheter[/b] från dessa när du skapar nya huvudkategorier och kategorier. Ha det kul!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Din första huvudkategori',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beskrivning av din första kategori.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Din första kategori',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Webbplatsadministratör',
	'REPORT_WAREZ'					=> 'Inlägget innehåller länkar till olaglig eller piratkopierad programvara.',
	'REPORT_SPAM'					=> 'Inlägget innehåller reklam för en annan webbplats eller produkt.',
	'REPORT_OFF_TOPIC'				=> 'Inlägget håller sig inte till ämnet.',
	'REPORT_OTHER'					=> 'Inlägget passar inte in i någon av ovanstående kategorier, använd fältet för vidare information.',

	'SMILIES_ARROW'					=> 'Pil',
	'SMILIES_CONFUSED'				=> 'Förvirrad',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Gråter eller väldigt ledsen',
	'SMILIES_EMARRASSED'			=> 'Generad',
	'SMILIES_EVIL'					=> 'Ond eller väldigt arg',
	'SMILIES_EXCLAMATION'			=> 'Utrop',
	'SMILIES_GEEK'					=> 'Nörd',
	'SMILIES_IDEA'					=> 'Idé',
	'SMILIES_LAUGHING'				=> 'Skrattar',
	'SMILIES_MAD'					=> 'Arg',
	'SMILIES_MR_GREEN'				=> 'Herr Grön',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Fråga',
	'SMILIES_RAZZ'					=> 'Retas',
	'SMILIES_ROLLING_EYES'			=> 'Rullar med ögonen',
	'SMILIES_SAD'					=> 'Ledsen',
	'SMILIES_SHOCKED'				=> 'Chockerad',
	'SMILIES_SMILE'					=> 'Ler',
	'SMILIES_SURPRISED'				=> 'Förvånad',
	'SMILIES_TWISTED_EVIL'			=> 'Väldigt ond',
	'SMILIES_UBER_GEEK'				=> 'Ultranörd',
	'SMILIES_VERY_HAPPY'			=> 'Väldigt glad',
	'SMILIES_WINK'					=> 'Blink',

	'TOPICS_TOPIC_TITLE'			=> 'Välkommen till phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Översikt',
	'MENU_INTRO'		=> 'Introduktion',
	'MENU_LICENSE'		=> 'License',
	'MENU_SUPPORT'		=> 'Support',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Skapa konfigurationsfil',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Lägga till konfigurationsinställningar',
	'TASK_ADD_DEFAULT_DATA'				=> 'Lägga till standardinställningar i databasen',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Skapa databasschema-fil',
	'TASK_SETUP_DATABASE'				=> 'Ställer in databas',
	'TASK_CREATE_TABLES'				=> 'Skapar tabeller',

	// Install data
	'TASK_ADD_BOTS'			=> 'Registerar bots',
	'TASK_ADD_LANGUAGES'	=> 'Installerar tillgängliga språk',
	'TASK_ADD_MODULES'		=> 'Installerar moduler',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Installerar paketerade tillägg',
	'TASK_NOTIFY_USER'			=> 'Skickar meddelanden',
	'TASK_POPULATE_MIGRATIONS'	=> 'Fyller migreringar',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Installationen har slutförts',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modul kunde ej hittas',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'En modul kunde ej hittas eftersom servicen, %s, är odefinerad.',

	'TASK_NOT_FOUND'				=> 'Aktivitet kunde ej hittas',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'En aktivitet kunde ej hittas eftersom servicen, %s, är odefinerad.',

	'SKIP_MODULE'	=> 'Hoppa över modul “%s”',
	'SKIP_TASK'		=> 'Hoppa över aktivitet “%s”',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Alla installationsaktiviteters service bör börja med “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Installationsaktiviteters servicedefinition är ogiltig. Servicebenämningen är “%1$s”, förväntad class-namnrymd är “%2$s”. Mer information finns i dokumentationen för task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Kan ej skriva till installationsrutinens konfigureringsfil.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Installera phpBB',
	'CLI_UPDATE_BOARD'				=> 'Uppdatera phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Visa konfigureringen som kommer att användas',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validera konfigureringsfilen',
	'CLI_CONFIG_FILE'				=> 'Konfigureringsfil som skall användas',
	'MISSING_FILE'					=> 'Kan ej öppna filen %1$s',
	'MISSING_DATA'					=> 'Konfigureringsfilen saknar data eller innehåller eventuellt ogiltiga inställningar.',
	'INVALID_YAML_FILE'				=> 'Kunde ej parsa YAML-filen %1$s',
	'CONFIGURATION_VALID'			=> 'Konfigureringsfilen är ogiltig',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Uppdatera phpBB-installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Med detta alternativ kan du uppdatera din phpBB-installation till den senaste versionen.<br />Under processen kommer alla dina filer integritetskontrolleras. Du kan granska alla skillnader och filer innan uppdateringen sker.<br /><br />Filuppdateringen kan göras på två olika sätt.</p><h2>Manuell uppdatering</h2><p>Med denna uppdatering så laddar du endast ner ditt personliga set av ändrade filer så att du kan försäkra dig om att du inte förlorar några förändringar du gjort i filerna. När du laddat ner detta paket så måste du ladda upp dessa filer manuellt till sina rätta platser under din phpBB-rotkatalog. När du är klar så kan du göra filkontrollen igen för att se om du flyttat filerna till sin rätta platser.</p><h2>Automatisk uppdatering via FTP</h2><p>Denna metod liknar den första men kräver inte att du laddar ner de ändrade filerna och laddar upp dem på egen hand. Detta kommer att göras åt dig. För att använda detnna metod måste du känna till dina inloggningsdetaljer för FTP. När du är klar kommer du omdirigeras till filkontrollen igen för att kolla att allt uppdaterades korrekt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '
		<h1>Utgivingskungörelsen</h1>
		<p>Läs utgivingskungörelsen för den senaste versionen innan du fortsätter uppdateringsprocessen, den kan innehålla användbar information. Den innehåller också länkar till nerladdningar och en logg över ändringar i den nya versionen.</p>
		<br />
		<h1>Hur du uppdaterar din installation med det automatiska uppdateringspaketet</h1>
		<p>Det rekommenderade sättet att uppdatera din installation som visas här är endast giltigt för det automatiska uppdateringspaketet. Du kan också uppdatera din installation genom sätten som visas i INSTALL.html-dokumentet. Stegen för att uppdatera phpBB3 automatiskt är:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Gå till <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com nerladdningssida</a> och ladda ner det rätta "Automatic Update Package" arkivet.<br /><br /></li>
			<li>Packa upp arkivet.<br /><br /></li>
			<li>Ladda upp hela den okomprimerade install-mappen till din phpBB-rotkatalog (där din config.php-fil ligger).<br /><br /></li>
		</ul>
		<p>När du laddat upp denna så kommer ditt forum att vara offline för vanliga användare eftersom install-katalogen du laddade upp nu finns där.<br /><br />
		<strong><a href="%1$s" title="%1$s">Börja nu uppdateringsprocessen genom att gå till install-katalogen i din webbläsare</a>.</strong><br />
		<br />
		Du kommer sedan att guidas genom uppdateringsprocessen. Du kommer meddelas när uppdateringen är slutförd.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Typ av uppdatering som skall utföras',

	'UPDATE_TYPE_ALL'		=> 'Uppdatera filsystem och databas',
	'UPDATE_TYPE_DB_ONLY'	=> 'Uppdatera endast databasen',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Metod för uppdatering av filer',

	'UPDATE_FILE_METHOD'			=> 'Metod för uppdatering av filer',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Ladda ner ändrade filer i ett komprimerat arkiv',
	'UPDATE_FILE_METHOD_FTP'		=> 'Uppdatera filer via FTP (automatiskt)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Uppdatera filer via direkt filåtkomst (automatiskt)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Välj arkivformat',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP-inställningar',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Giltig uppdateringskatalog kunde ej hittas, kontrollera att du har laddat upp alla erforderliga filer.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Din installation är av den senaste versionen. Det finns ingen anledning att köra uppdateringsverktyget. Om du vill göra en integritetskontroll på dina filer så försäkra dig om att du laddat upp de rätta uppdateringsfilerna.',
	'OLD_UPDATE_FILES'				=> 'Uppdateringsfilerna är gamla. Dessa uppdaterinsfiler är för att uppdatera från phpBB %1$s till phpBB %2$s men den senaste versionen av phpBB är %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Uppdateringsfilerna är inte kompatibla med din installerade version. Din nuvarande installerade version är %1$s och uppdateringsfilerna är till för att uppdatera phpBB %2$s till %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Uppdatera filer',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Kontrollera filerna som skall uppdateras',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Filjämförelsefunktionen kunde ej öppna %s.',

	'UPDATE_FILE_DIFF'		=> 'Jämför ändrade filer',
	'ALL_FILES_DIFFED'		=> 'Alla ändrade filer har jämförts.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Uppdatera filerna',

	'DOWNLOAD'							=> 'Ladda ner',
	'DOWNLOAD_CONFLICTS'				=> 'Ladda ner konflikterna för denna fil',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Sök efter &lt;&lt;&lt; för att hitta konflikter',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Ladda ner modifierat filarkiv',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'När du laddat ner klart så packar du upp arkivet. Du kommer i den att hitta de ändrade filerna som du måste ladda upp till din phpBB-rotkatalog. Ladda upp filerna till deras respektive plats. När du laddat upp alla filerna, kontrollera filerna igen med knappen nedan.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Filerna är redan uppdaterade.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Filerna får inte diffas.',
	'FILE_USED'						=> 'Information används från',			// Single file
	'FILES_CONFLICT'				=> 'Filer som resulterar i konflikt',
	'FILES_CONFLICT_EXPLAIN'		=> 'Följande filer har ändrats och representerar inte originalfilerna från den gamla versionen. phpBB har upptäckt att dessa kommer att skapa konflikter om de sammanfogas. Undersök dessa konflikter och försök att lösa det manuellt eller fortsätt med uppdateringsprocessen genom att använda föredragen sammanfogningsmetod. Om du löser konflikterna manuellt måste du kontrollera filerna igen efter att ha ändrat dem. Du kan också välja föredragen sammanfogningsmetod enskilt för varje fil. Den första kommer resultera i en fil där de rader som hamnat i konflikt från din gamla fil kommer att försvinna, den andra kommer resultera i att rader från den nyare filen försvinner.',
	'FILES_DELETED'					=> 'Borttagna filer',
	'FILES_DELETED_EXPLAIN'			=> 'Följande filer finns inte i nya versionen. Dessa filer måste tas bort ifrån din installation.',
	'FILES_MODIFIED'				=> 'Ändrade filer',
	'FILES_MODIFIED_EXPLAIN'		=> 'Följande filer har ändrats och representerar inte originalfilerna från den gamla versionen. Den uppdaterade filen kommer att vara en sammanfogning av dina förändringar och den nya filen.',
	'FILES_NEW'						=> 'Nya filer',
	'FILES_NEW_EXPLAIN'				=> 'Följande filer finns inte i din installation. Dessa kommer att läggas till i din installation.',
	'FILES_NEW_CONFLICT'			=> 'Nya filer som resulterar i konflikter',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Följande filer är nya inom den senaste versionen men det har upptäckts en fil med samma namn på samma plats. Denna fil kommer att skrivas över med den nya filen.',
	'FILES_NOT_MODIFIED'			=> 'Ej ändrade filer',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Följande filer är inte ändrade och representerar originalfilerna från den phpBB-version som du vill uppdatera från.',
	'FILES_UP_TO_DATE'				=> 'Redan uppdaterade filer',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Följande filer är redan uppdaterade och behöver inte uppdateras.',
	'FILES_VERSION'					=> 'Filversioner',
	'TOGGLE_DISPLAY'				=> 'Visa/dölj fillista',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Uppdaterar filerna',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Filuppdateringen “%1$s“ misslyckades. Installationsrutinen försöker återvända till “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Filuppdateringen misslyckades. Ytterligare alternativa metoder finns ej.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Fortsätt uppdateringen',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Kontrollera filerna igen',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Uppdatera databasen',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Databasuppdateringen lyckades. Du kan nu fortsätta uppdateringsprocessen.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Uppdaterar tillägg',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Den angivna konverteraren finns inte.',
	'DEV_NO_TEST_FILE'			=> 'Inga värden angavs för test_file-variabeln i konverteraren. Om du är användaren av denna konverterare så ska du inte se detta fel, rapportera detta meddelande till författaren av konverteraren. Om du är författaren av konverteraren så måste du ange namnet för filen som finns i källforumet så att sökvägen kan bekräftas.',
	'COULD_NOT_FIND_PATH'		=> 'Kunde inte hitta sökvägen till ditta förra forum. Kontrollera dina inställningar och försök igen.<br />» %s var den angivna källsökvägen.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3-konfigurationsvariabeln för “%s” är tom.',

	'MAKE_FOLDER_WRITABLE'		=> 'Försäkra dig om att denna mapp finns och kan skrivas till av webbservern och försök sedan igen:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Försäkra dig om att dessa mappar finns och kan skrivas till av webbservern och försök sedan igen:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Testa igen',

	'NO_TABLES_FOUND'			=> 'Inga tabeller hittades.',
	'TABLES_MISSING'			=> 'Kunde inte hitta dessa tabeller<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Kontrollera ditt tabellprefix och försök igen.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Fortsätt konverteringen',
	'CONTINUE_CONVERT_BODY'		=> 'Ett tidigare konverteringsförsök har upptäckts. Du kan nu välja mellan att starta en ny konvertering eller fortsätta med den påbörjade.',
	'CONVERT_NEW_CONVERSION'	=> 'Ny konvertering',
	'CONTINUE_OLD_CONVERSION'	=> 'Fortsätt tidigare påbörjad konvertering',

	// Start conversion
	'SUB_INTRO'					=> 'Introduktion',
	'CONVERT_INTRO'				=> 'Välkommen till phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Härifrån kan du importera data från andra (installerade) forumsystem. Listan nedan visar alla konverteringsmoduler som finns för tillfället. Om det inte finns någon konverterare nedan för den forumprogramvara du vill konvertera från, besök vår webbplats där flera konverteringsmoduler kan finnas tillgängliga för nedladdning.',
	'AVAILABLE_CONVERTORS'		=> 'Tillgängliga konverterare',
	'NO_CONVERTORS'				=> 'Inga konverterare finns tillgängliga för användning.',
	'CONVERT_OPTIONS'			=> 'Alternativ',
	'SOFTWARE'					=> 'Forummjukvara',
	'VERSION'					=> 'Version',
	'CONVERT'					=> 'Konvertera',

	// Settings
	'STAGE_SETTINGS'			=> 'Inställningar',
	'TABLE_PREFIX_SAME'			=> 'Tabellprefixet måste vara samma som mjukvaran du konverterar från använder.<br />» Angivet tabellprefix var %s.',
	'DEFAULT_PREFIX_IS'			=> 'Konverteraren kunde inte hitta tabeller med det angivna prefixet. Försäkra dig om att du angav korrekt information för forumet du konverterar från. Standardtabellprefixet för %1$s är <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Ange konverteringsalternativ',
	'FORUM_PATH'				=> 'Forumsökväg',
	'FORUM_PATH_EXPLAIN'		=> 'Detta är den <strong>relativa</strong> sökvägen till ditt föregående forum från <strong>roten av din phpBB3 installation</strong>.',
	'REFRESH_PAGE'				=> 'Uppdatera sida för att fortsätta konverteringen',
	'REFRESH_PAGE_EXPLAIN'		=> 'Om satt till ja så kommer konverteraren uppdatera sidan för att fortsätta konverteringen automatiskt när ett steg slutförts. Om detta är din första konvertering för att testa och hitta evenutella fel i förväg så föreslår vi att du sätter detta till Nej.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Konvertering utförs',

	'AUTHOR_NOTES'				=> 'Författaranteckningar<br />» %s',
	'STARTING_CONVERT'			=> 'Börjar konverteringsprocessen',
	'CONFIG_CONVERT'			=> 'Konverterar konfigurationen',
	'DONE'						=> 'Klar',
	'PREPROCESS_STEP'			=> 'Kör för-processfunktioner/frågor',
	'FILLING_TABLE'				=> 'Fyller tabell <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Fyller tabeller',
	'DB_ERR_INSERT'				=> 'Fel under behandling av <code>INSERT</code> fråga.',
	'DB_ERR_LAST'				=> 'Fel under behandling av <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fel under utförande av <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fel under utförande av <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Fel under körning av <code>SELECT</code> fråga.',
	'STEP_PERCENT_COMPLETED'	=> 'Steg <strong>%d</strong> av <strong>%d</strong>',
	'FINAL_STEP'				=> 'Utför sista steget',
	'SYNC_FORUMS'				=> 'Startar synkroniseringen av kategorier',
	'SYNC_POST_COUNT'			=> 'Synkroniserar inläggsräknaren',
	'SYNC_POST_COUNT_ID'		=> 'Synkroniserar inläggsräknaren från <var>inlägg</var> %1$s till %2$s.',
	'SYNC_TOPICS'				=> 'Startar synkroniseringen av trådar',
	'SYNC_TOPIC_ID'				=> 'Synkroniserar trådar från <var>topic_id</var> %1$s till %2$s.',
	'PROCESS_LAST'					=> 'Utför sista steget',
	'UPDATE_TOPICS_POSTED'		=> 'Genererar trådpostningsinformation',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Ett fel uppstod när trådpostningsinformationen skulle genereras. Du kan försöka göra detta igen i administrationspanelen efter att  konverteringen slutförts.',
	'CONTINUE_LAST'				=> 'Fortsätt med de sista uppgifterna',
	'CLEAN_VERIFY'				=> 'Städar upp och bekräftar den slutgiltiga strukturen',
	'NOT_UNDERSTAND'			=> 'Kunde inte förstå %s #%d, tabell %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Namnkonflikt: %s och %s är båda alias<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Konvertering slutförd',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Du har nu konverterat ditt forum till phpBB 3.3! Du kan nu logga in på ditt forum. Försäkra dig om att inställningarna överförts korrekt innan du aktiverar ditt forum genom att ta bort install-katalogen. Kom ihåg att hjälp för hur man använder phpBB finns att få i <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">dokumentationen</a>, på det <a href="https://www.phpbb.com/community/viewforum.php?f=661">engelska supportforumet</a> och på det svenska supportforumet.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-uppladdning av bilagor är aktiverat på det gamla forumet. Inaktivera FTP-uppladdning och försäkra dig om att ett giltig uppladdningskatalog är angiven. Kopiera sen alla bifogade filer till den nya katalogen som ska vara tillgänglig från webben. Starta om konverteraren efter att du har gjort detta.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Det finns ingen konfigurationsinformation tillgänglig för konverteringen.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Kunde inte hämta information om kategoriåtkomst.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kunde inte hämta huvudkategorier.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kunde inte hämta din forumkonfiguration.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Kunde inte komma åt/läsa “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Kunde inte hämta gruppautentiseringsinformation.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inkonsekvens i tabellen "groups" upptäcktes i add_bots() - du måste lägga till alla specialgrupper om du gör det manuellt.',
	'CONV_ERROR_INSERT_BOT'				=> 'Kunde inte infoga robot i tabellen users.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Kunde inte infoga robot i tabellen bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kunde inte infoga användare i tabellen user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Meddelandetolkningsfel',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Påpekande till utvecklaren: du måste ange $convertor[\'avatar_path\'] för att använda %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Den relativa sökvägen till källforumet har inte angivits.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Påpekande till utvecklaren: du måste ange $convertor[\'avatar_gallery_path\'] för att använda %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Gruppen “%1$s” kunde inte hittas i %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Påpekande till utvecklaren: du måste ange $convertor[\'ranks_path\'] för att använda %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Påpekande till utvecklaren: du måste ange $convertor[\'smilies_path\'] för att använda %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Påpekande till utvecklaren: du måste ange $convertor[\'upload_path\'] för att använda %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Kunde inte infoga/uppdatera behörighetsinställningar.',
	'CONV_ERROR_PM_COUNT'				=> 'Kunde inte välja PM-antal för mapp.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Kunde inte infoga ny kategori som skulle ersätta gammal huvudkategori.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Kunde inte infoga ny kategori som skulle ersätta gammal kategori.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kunde inte hämta användarautentiseringsinformation.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Fel grupp “%1$s” definierad i %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Denna sida samlar in den data som krävs för att komma åt källforumet. Ange databasdetaljerna till ditt föregående forum; konverteraren kommer inte att ändra någonting i databasen som anges nedan. Källforumet bör inaktiveras för att konverteringen ska bli konsekvent.',
	'CONV_SAVED_MESSAGES'				=> 'Sparade meddelanden',

	'PRE_CONVERT_COMPLETE'			=> 'Alla steg före konvertering har slutförts. Du kan nu starta den riktiga konverteringsprocessen. Kom ihåg att du kan behöva göra och ändra flera saker manuellt. Efter konverteringen, kontrollera framförallt behörigheter, bygg om sökindexet som inte konverterats och försäkra dig även om att filer kopierats korrekt, till exempel visningsbilder och smilies.',
));
