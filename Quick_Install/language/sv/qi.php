<?php
/**
*
* qi [English]
*
* @package quickinstall
* @version $Id$
* @copyright (c) 2007, 2008 eviL3
* @copyright (c) 2010 Jari Kanerva (tumba25)
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
	'ABOUT_QUICKINSTALL' => 'Om phpBB3 Snabbinstallation',
	'ADMIN_EMAIL' => 'Admin email',
	'ADMIN_EMAIL_EXPLAIN' => 'Admin email för användning till ditt forum',
	'ADMIN_NAME' => 'Administratör användarnamn',
	'ADMIN_NAME_EXPLAIN' => 'Standard adminanvändarnamnet som skall användas till dina forum. Detta kan ändras när forum är skapade.',
	'ADMIN_PASS' => 'Administratörslösenord',
	'ADMIN_PASS_EXPLAIN' => 'Standard administratörlösenordet som skall användas till dina forum. Detta kan ändras när forum är skapade.',
	'ALT_ENV' => 'Alternate environment',
	'AUTOMOD' => 'AutoMOD',
	'AUTOMOD_EXPLAIN' => 'Ställ in så att AutoMOD installeras som standard. Detta kan ändras när du skapar ett forum.',
	'AUTOMOD_INSTALL' => 'Installera AutoMOD',

	'BACK_TO_MAIN' => '<a href="%s">Återgå till huvudsidan</a>',
	'BACK_TO_MANAGE' => '<a href="%s">Återgå till managementsidan</a>', -----------------------------------------
	'BOARD_CREATED' => 'Forumet skapat!',
	'BOARD_DBNAME' => 'Forumets databas och katalognamn',
	'BOARD_DESC' => 'Forumsbeskrivning',
	'BOARD_EMAIL' => 'Forumets email',
	'BOARD_EMAIL_EXPLAIN' => 'Avsändarens e-mail för ditt skapta forum.',
	'BOARD_NAME' => 'Forumnamn',
	'BOARDS_DELETED' => 'Forumen är nu borttagna.',
	'BOARDS_DELETED_TITLE' => 'Borttagna forum',
	'BOARDS_DIR' => 'Forumkatalog',
	'BOARDS_DIR_EXPLAIN' => 'Katalogen där dina forum kommer att bli skapade. PHP behöver ha skrivtillstånd till denna katalog.',
	'BOARDS_LIST' => 'Lista av forum',
	'BOARDS_NOT_WRITABLE' => 'Forumets katalog är inte skrivbar.',

	'CACHE_NOT_WRITABLE' => 'Cachekatalogen är inte skrivbar.',
,
	'CHANGELOG' => 'Changelog',
	'CHECK_ALL' => 'Kontrollera alla',
	'CONFIG_EMPTY' => 'Nuvarande config array är tom. Detta är troligtvis värt en buggrapport.',
	'CONFIG_NOT_WRITABLE' => 'qi_config.php filen är inte skrivbar.',
	'COOKIE_DOMAIN' => 'Kakdomän',
	'COOKIE_DOMAIN_EXPLAIN' => 'Detta borde vanligtvis vara localhost.',
	'COOKIE_SECURE' => 'Kaksäkerhet',
	'COOKIE_SECURE_EXPLAIN' => 'Om din server kör med SSL så sätt detta till aktiverat, annars så lämna det som inaktiverat. Att ha detta aktiverat och inte köra med SSL kommer resultera i felmeddelanden vid omdirigering.',
	'CREATE_ADMIN' => 'Skapa admin',
	'CREATE_ADMIN_EXPLAIN' => 'Välj ja om du vill att en admin skall skapas, detta kommer inte vara en skapare. Detta kommer vara en tester_1.',
	'CREATE_MOD' => 'Skapa moderator',
	'CREATE_MOD_EXPLAIN' => 'Välj ja om du vill att en gobal moderator skall skapas. Denna kommer att vara tester_1 eller tester_2 om en admin är skapad.',

	'DB_EXISTS' => 'Databasen %s finns redan.',
	'DB_PREFIX' => 'Databasprefix',
	'DB_PREFIX_EXPLAIN' => 'Detta är tillagt före databasnamnen för att undvika överskrivning av databaser som inte används utav Snabbinstallation.',
	'DBHOST' => 'Databasserver',
	'DBHOST_EXPLAIN' => 'Vanligtvis localhost.',
	'DBMS' => 'DBMS',
	'DBMS_EXPLAIN' => 'Ditt databassystem. Om du är osäker så sätt det till MySQL.',
	'DBPASSWD' => 'Databaspassword',
	'DBPASSWD_EXPLAIN' => 'Lösenordet till din databasanvändare',
	'DBPORT' => 'Databasport',
	'DBPORT_EXPLAIN' => 'Kan mestadels lämnas tomt.',
	'DBUSER' => 'Databasanvändare',
	'DBUSER_EXPLAIN' => 'Your database user. This needs to be a user with permissions to create new databases.',
	'DBUSER_EXPLAIN' => 'Din databasanvändare. Detta behöver vara en användare med tillstånd att skapa nya databaser.',
	'DEFAULT' => 'standard',
	'DEFAULT_ENV' => 'Standardmiljö (senaste phpBB)',
	'DEFAULT_LANG' => 'Standardspråk',
	'DEFAULT_LANG_EXPLAIN' => 'Detta språket kommer att användas till de skapade forumen.',
	'DELETE' => 'Ta bort',
	'DELETE_FILES_IF_EXIST' => 'Ta bort filer om de finns',
	'DIR_EXISTS' => 'Katalogen %s finns redan.',
	'DISABLED' => 'Används ej',
	'DROP_DB_IF_EXISTS' => 'Droppa databasen om den redan finns',---------------------------------------------

	'EMAIL_DOMAIN' => 'Emaildomän',
	'EMAIL_DOMAIN_EXPLAIN' => 'Emaildoämen som kommer att användas till testare. Deras email kommer att vara tester_x@&lt;domain.se&gt;.',
	'EMAIL_ENABLE' => 'Aktivera email',
	'EMAIL_ENABLE_EXPLAIN' => 'Aktivera forumemails. För ett localt testforum brukar detta vanligtvis vara inaktiverat, såvida du inte testar emailen.',
	'ENABLED' => 'Aktiverad',

	'GENERAL_ERROR' => 'Generelt fel',

	'IN_SETTINGS' => 'Hantera dina Snabbinstallationsinställningar.',
	'INCLUDE_MODS' => 'Inkludera MODs',
	'INCLUDE_MODS_EXPLAIN' => 'Välj kataloger från sources/mods/-katalogen i denna listan, dessa filer kommmer sedan bli kopierade till ditt nya forums root-sökväg, och skriva över gamla filer (så du kan ha pre-moddade forum här till exemple). Om du väljer "Inga", så kommer det inte att användas (för att det är jobbigt att välja bort).',
	'INSTALL_BOARD' => 'Installera ett forum',
	'INSTALL_QI' => 'Installera Snabbinstallation',
	'IS_NOT_VALID' => 'Är inte giltig.',

	'LICENSE' => 'Licens?',
	'LICENSE_EXPLAIN' => 'Detta skript är släppt under <a href="license.txt">GNU General Public License version 2</a> dessa termer. Detta är mestadels för att det använder en stor mängd av phpBBs kod, som också är släppt under denna lisensen, och kräver viss modifiering för att användas. Men också för att det är en underbar licens som håller gratis programvara gratis :).',
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Installerad utav phpBB Snabbinstallation version %s</strong>',

	// To translators: Lorem Ipsum is a dummy placeholder string. Do not translate this string.
	'LOREM_IPSUM' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

	'MAKE_WRITABLE' => 'Gör filer world-skrivbara',
	'MAKE_WRITABLE_EXPLAIN' => 'Gör filerna, config.php, och kataloger world-skrivbara som standard. Detta kan ändras när du skapar forum.',
	'MANAGE_BOARDS' => 'Hantera forum',
	'MAX' => 'Max',
	'MIGHT_TAKE_LONG' => '<strong>Notera:</strong> Att skapa ett forum kan ta en stund, kanske upp till en minut eller mer, så tryck <strong>inte</strong> på submit flera gånger.',
	'MIN' => 'Min',

	'NEED_EMAIL_DOMAIN' => 'En e-maildomän krävs för att skapa testanvändare',
	'NEED_WRITABLE' => 'Snabbinstallation kräver att forum och cache-katalogerna är skrivbara hela tiden.<br />qi_config.php filen kräver behöver endast vara skrivbar under installationen av Snabbinstallation.',
	'NO' => 'Nej',
	'NO_ALT_ENV' => 'Den specifierade alternativmiljön existerar inte.',
	'NO_AUTOMOD' => 'AutoMOD kunde inte hittas i sources-katalogen. Du behöver ladda ner AutoMOD och kopiera root-innehållet till sources/automod.',
	'NO_BOARDS' => 'Du har inga forum.',
	'NO_DB' => 'Ingen databas är vald.',
	'NO_IMPACT_WIN' => 'Denna inställningen har ingen verkan på Windowssystem äldre än Windows 7.',
	'NO_MODULE' => 'Modulen %s kunde inte laddas.',
	'NO_PASSWORD' => 'Inget lösenord',
	'NO_DBPASSWD_ERR' => 'Du har anget ett databaslösenord och valt inget lösenord. Du kan inte både <strong>ha</strong> och <strong>inte ha</strong> ett lösenord',
	'NONE' => 'Inget',
	'NUM_CATS' => 'Antal kategorier',
	'NUM_CATS_EXPLAIN' => 'Antalet forumskategorier som skall skapas.',
	'NUM_FORUMS' => 'Antal forum',
	'NUM_FORUMS_EXPLAIN' => 'Antalet forum som skall skapas, dom kommer att spridas ut jämt över de skapta kategorierna.',
	'NUM_NEW_GROUP' => 'Nyregistrerade',
	'NUM_NEW_GROUP_EXPLAIN' => 'Antalet användare som skall placeras i gruppen nyregistrerade.<br />Om detta antalet är större än antalet användare, så kommer alla användare att placeras i gruppen nyregistrerade.',
	'NUM_REPLIES' => 'Antal svar',
	'NUM_REPLIES_EXPLAIN' => 'Antalet svar. Varje tråd kommer att få ett slumpmässigt antal svar mellan dessa max och min-värden.',
	'NUM_TOPICS' => 'Antal trådar',
	'NUM_TOPICS_EXPLAIN' => 'Antalet trådar att skapa i varje forum. Varje forum kommer att få ett slumpmässigt antal trådar mella ndessa max och min-värden.',
	'NUM_USERS' => 'Antal användare',
	'NUM_USERS_EXPLAIN' => 'Antalet användare ditt forum kommer att befolkas med.<br />Dom kommer att få ett slumpmässigt namn Testare_x (x är 1 till num_users). Dom kommer alla att få lösenordet "123456"',

	'ONLY_LOCAL' => 'Notera: Snabbinstallation är endast avsett för att användas lokalt.<br />Det borde inte användas på en web server åtkomlig via internet. ',
	'OPTIONS' => 'Inställningar',
	'OPTIONS_ADVANCED' => 'Avancerade inställningar',

	'POPULATE' => 'Befolka forum',
	'POPULATE_OPTIONS' => 'Befolkningsinställningar',
	'POPULATE_MAIN_EXPLAIN' => 'Användare: testare x, Lösenord: 123456',
	'POPULATE_EXPLAIN' => 'Befolkar forumet med antalet användare, forum, svar och trådar som du specifierar nedan. Notera att desto fler användare, forum, svar och trådar du vill ha, desto längre tid tar det att skapa forumet. <br />Alla dessa inställningar kan ändras när du skapar ett forum.',

	'QI_ABOUT' => 'Om',
	'QI_ABOUT_ABOUT' => 'Storebror älskar dej och vill att du ska vara lycklig.',
	'QI_DST' => 'Sommartid',
	'QI_DST_EXPLAIN' => 'Vill du att sommartiden skall vara på eller av?',
	'QI_LANG' => 'Snabbinstallation språk',
	'QI_LANG_EXPLAIN' => 'Språket som Snabbinstallation kommer att använda. Det måste finnas en katalog med detta namnet i language/. Detta språket kommer också att användas som standardspråk på ditt forum om det språket går att finna i sources/phpBB3/language/.',
	'QI_MAIN' => 'Huvudsida',
	'QI_MAIN_ABOUT' => 'Installera ett nytt forum här.<br /><br />“Forumets databasnamn” är det enda fältet du behöver att fylla, de andra fylls med standardvärden från <em>includes/qi_config.php</em>.<br /><br />Klicka på “Avancerade inställningar” för fler valmöjligheter.',
	'QI_MANAGE' => 'Hantera forum',
	'QI_MANAGE_ABOUT' => 'o_O',
	'QI_TZ' => 'Tidszon',
	'QI_TZ_EXPLAIN' => 'Din tidszon. Detta kommer att vara standardtidszonen för ditt forum. -1, 0, 1 etc.',
	'QUICKINSTALL' => 'phpBB Snabbinstallation',

	'REDIRECT' => 'Omdirigera',
	'REDIRECT_EXPLAIN' => 'Sätt omdirigera till nya forum som standard. Detta kan ändras när du skapar ett forum.',
	'REDIRECT_BOARD' => 'Omdirigera till nytt forum',
	'REQUIRED' => 'är omdirigerad',
	'RESET' => 'Rensa',

	'SELECT' => 'Välj',
	'SETTINGS' => 'Inställningar',
	'SETTINGS_FAILURE' => 'Det finns felmeddelande, ta en titt i rutan nedanför.',
	'SETTINGS_SUCCESS' => 'Dina inställningar blev sparade.',
	'SERVER_NAME' => 'Servernamn',
	'SERVER_NAME_EXPLAIN' => 'Detta borde vanligtvis vara localhost då Snabbinstallation <strong>inte</strong> är ämnat för publika servrar. ',
	'SERVER_PORT' => 'Serverport',
	'SERVER_PORT_EXPLAIN' => 'Vanligtvis 80.',
	'SITE_DESC' => 'Webbplatsbeskrivning',
	'SITE_DESC_EXPLAIN' => 'Standardbeskrivningen för ditt/dina forum. Detta kan ändras när forumet skapas.',
	'SITE_NAME' => 'Webbplatsnamn',
	'SITE_NAME_EXPLAIN' => 'Standardnamnet som används till dina forum. Detta kan ändras när forumet skapas.',
	'SMTP_AUTH' => 'Autentisering metoden för SMTP',
	'SMTP_AUTH_EXPLAIN' => 'Används endast om användarnamn/lösenord är valt.',
	'SMTP_DELIVERY' => 'Använd SMTP-server för e-mail',
	'SMTP_DELIVERY_EXPLAIN' => 'Välj “Ja” om du vill eller måste skicka e-mail via en namngiven server istället för den lokala mailfunktionen.',
	'SMTP_HOST' => 'SMTP-serveraddress',
	'SMTP_HOST_EXPLAIN' => 'Adressen till den SMTP-server du vill använda',
	'SMTP_PASS' => 'SMTP-lösenord',
	'SMTP_PASS_EXPLAIN' => 'Ange endast ett lösenord om din SMTP-server kräver detta.',
	'SMTP_PORT' => 'SMTP-serverport',
	'SMTP_PORT_EXPLAIN' => 'Ändra endast detta om du vet att din SMTP-server använder en annan port. ',
	'SMTP_USER' => 'SMTP-användarnamn',
	'SMTP_USER_EXPLAIN' => 'Ange endast ett användarnamn om din SMTP-server kräver detta.',
	'STAR_MANDATORY' => '* = obligatoriska',
	'SUBMIT' => 'Skicka',
	'SUBSILVER' => 'Installera Subsilver2',
	'SUBSILVER_EXPLAIN' => 'Ange om du vill att Subsilver2 stilen skall bli installerad och om du vill att det skall vara standardstilen. Detta kan ändras när du skapar ett forum.',
	'SUCCESS' => 'Lycka',

	'TABLE_PREFIX' => 'Tabellprefix',
	'TABLE_PREFIX_EXPLAIN' => 'Tabellprefixet som kommer att användas till dina forum. Du kan ändra detta i avancerade inställningar när du skapar ett forum.',
	'TEST_CAT_NAME' => 'Testkategori %d',
	'TEST_FORUM_NAME' => 'Testforum %d',
	'TEST_POST_START' => 'Testsvar %d', // This will be on the first line in each post and then filled with lorem ipsum.
	'TEST_TOPIC_TITLE' => 'Testtråd %d',

	'UNCHECK_ALL' => 'Avmarkera alla',
	'UP_TO_DATE' => 'Storebror säger att du är aktuell.',
	'UP_TO_DATE_NOT' => 'Storebror säger att du inte är aktuell.',
	'UPDATE_CHECK_FAILED' => 'Storebrors versionskontroll misslyckades.',
	'UPDATE_TO' => '<a href="%1$s">Uppdatera till version %2$s.</a>',

	'YES' => 'Ja',

	'VERSION_CHECK' => 'Storebrors versionkontroll',
	'VISIT_BOARD' => '<a href="%s">Besök forumet</a>',

	'WHAT' => 'Vad?',
	'WHAT_EXPLAIN' => 'phpBB3 Snabbinstallation är ett skript för att snabbt installera phpBB. Ganska uppenbart... ;-)',
	'WHO_ELSE' => 'Vem annars?',
	'WHO_ELSE_EXPLAIN' => '<ul><li>' . implode('</li><li>', array(
		'Credits go to the phpBB team, especially the development team which created such a wonderful piece of software.',
		'Thanks to the phpBB.com MOD team (especially Josh, aka “A_Jelly_Doughnut”) for AutoMOD, which is included in this package.',
		'Thanks to Mike TUMS for the nice logo!',
		'Thanks to the beta testers!',
		'Thanks to the phpBB community including phpBB.com, startrekguide.com and phpBBModders.net!',
	)) . '</li></ul>',
	'WHO_WHEN' => 'Vem? När?',
	'WHO_WHEN_EXPLAIN' => 'phpBB3 QuickInstall was originally created by Igor “eviL&lt;3” Wiedler in the summer of 2007. It was partially rewritten by him in march 2008.<br />Since March 2010 this project is mantained by Jari “Tumba25” Kanerva.',
	'WHY' => 'Why?',
	'WHY_EXPLAIN' => 'Just as with phpBB2, if you do a lot of modding (creating modifications), you cannot put all MODs into a single phpBB installation. So it’s best to have separate installations. Now the problem is that it’s a pain to copy the files and go through the installation process every time. To speed up this process, quickinstall was born.',
));

?>