<?php
/** 
*
* acp_styles [Swedish] (phpBB 3.0.11)
*
* @package language
* @version $Id: styles.php 36 2012-06-27 08:50:58Z Peetra.mammapappa $
* @copyright (c) 2006 phpBB Group, modified and translated by Swedish translation team
* @source file is copyright (c) 2005 phpBB Group, modified and translated by Swedish translation team
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
* @author (c) 2006-2008 Jonathan Gulbrandsen, 2008-2012 Petra Brandt
* Translators: Swedish translation team, working at http://www.phpbb-se.com Contact team leader at peetra.mammapappa@gmail.com 
*
* This file is part of the Swedish language package for phpBB 3.0.x.
* Copyright (c) 2006-2010 Swedish translation team
*
* The Swedish language package for phpBB 3.0.x is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License as published by the Free Software
* Foundation, version 2 of the License.
*
* The Swedish Language package for phpBB 3.0.x is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
* A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with this language
* package. If not, see <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>.
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Bildpaket innehåller alla knappar, kategori, mappar, osv. och andra ej stil specifika bilder som används på forumet. Här kan du redigera, exportera eller ta bort existerande bildpaket och importera eller aktivera nya paket.',
	'ACP_STYLES_EXPLAIN'	=> 'Här kan du hantera alla tillgängliga stilar för ditt forum. En stil består av en mall, ett tema och ett bildpaket. Du kan ändra existerande stilar, ta bort, inaktivera, aktivera, skapa eller importera nya. Du kan också se hur en stil kommer att se ut genom att använda förhandsgranskningen. Den nuvarande standardstilen markeras med en stjärna (*). Här visas också det totala antal av användarna som använder varje stil, observera att åsidosättning av användarstilar inte reflekteras här.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'En malluppsättning innehåller all HTML som används för att generera utseendet på ditt forum. Här kan du redigera existerande malluppsättningar, ta bort, exportera, importera och förhandsgranska uppsättningar. Du kan också ändra mallkoden som används för att generera BBCode.',
	'ACP_THEMES_EXPLAIN'	=> 'Härifrån kan du skapa, installera, redigera, ta bort och exportera teman. Ett tema är kombinationen av färger och bilder som läggs på dina mallar för att definiera det grundläggande utseendet på ditt forum. Antalet alternativ här beror på din serverkonfiguration och phpBB installation, se manualen för mer information. Observera att när du skapar nya teman så är det frivilligt att använda ett redan existerande tema som bas.',
	'ADD_IMAGESET'			=> 'Skapa bildpaket',
	'ADD_IMAGESET_EXPLAIN'	=> 'Här kan du skapa ett nytt bildpaket. Beroende på din serverkonfiguration och filbehörigheter så kan du ha ytterligare alternativ här. Till exempel kan det vara möjligt att basera detta bildpaket på ett redan existerande. Det kan också gå att ladda upp eller importera (från store-katalogen) ett bildpaketsarkiv. Om du laddar upp eller importerar ett arkiv så kan bildpaketsnamnet frivilligt tas från arkivnamnet (för att göra detta lämna bildpaketsnamn tomt).',
	'ADD_STYLE'				=> 'Skapa stil',
	'ADD_STYLE_EXPLAIN'		=> 'Här kan du skapa en ny stil. Beroende på din serverkonfiguration och filbehörigheter så kan du ha ytterligare alternativ här. Till exempel kan det gå att basera denna stil på en redan existerande. Det kan också gå att ladda upp eller importera (från store-katalogen) ett stilarkiv. Om du laddar upp eller importerar ett arkiv så kommer stilnamnet att avgöras automatiskt.',
	'ADD_TEMPLATE'			=> 'Skapa mall',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Här kan du lägga till en ny mall. Beroende på din serverkonfiguration och filbehörigheter så kan du ha ytterligare alternativ här. Till exempel kan det gå att basera denna malluppsättning på en redan existerande. Det kan också gå att ladda upp eller importera (från store-katalogen) att mallarkiv. Om du laddar upp eller importerar ett arkiv så kan mallnamnet frivilligt tas från arkivnamnet (för att göra detta lämna mallnamnet tomt).',
	'ADD_THEME'				=> 'Skapa tema',
	'ADD_THEME_EXPLAIN'		=> 'Här kan du lägga till ett nytt tema. Beroende på din serverkonfiguration och filbehörigheter så kan du ha ytterligare alternativ här. Till exempel kan det gå att basera detta tema på ett redan existerande. Det kan också gå att ladda upp eller importera (från store-katalogen) att temaarkiv. Om du laddar upp eller importerar ett arkiv så kan temanamnet frivilligt tas från arkivnamnet (för att göra detta lämna temanamnet tomt).',
	'ARCHIVE_FORMAT'		=> 'Arkivfilstyp',
	'AUTOMATIC_EXPLAIN'		=> 'Lämna tomt för att försöka detektera automatiskt.',

	'BACKGROUND'			=> 'Bakgrund',
	'BACKGROUND_COLOUR'		=> 'Bakgrundsfärg',
	'BACKGROUND_IMAGE'		=> 'Bakgrundsbild',
	'BACKGROUND_REPEAT'		=> 'Bakgrundsupprepning',
	'BOLD'					=> 'Fet',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Cachad',
	'CACHE_FILENAME'				=> 'Mallfil',
	'CACHE_FILESIZE'				=> 'Filstorlek',
	'CACHE_MODIFIED'				=> 'Ändrad',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Är du säker på att du vill uppdatera all bildpaketsdata? Inställningarna från bildpaketets konfigurationsfil kommer att skriva över alla ändringar som gjorts i bildpaketet via bildpaketsredigeraren.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Är du säker på att du vill rensa bort alla cachade versioner av dina mallfiler?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Är du säker på att du vill uppdatera all malldata i databasen med innehållet i mallfilerna på filsystemet? Detta kommer att skriva över alla ändringar som gjorts med mallredigeraren medan mallen var lagrad i databasen.',
	'CONFIRM_THEME_REFRESH'			=> 'Är du säker på att du vill uppdatera all temadata i databasen med innehållet i temat på filsystemet? Detta kommer att skriva över alla ändringar som har gjorts i temaredigeraren medan temat var lagrat i databasen.',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> 'Skapa nytt bildpaket',
	'CREATE_STYLE'					=> 'Skapa ny stil',
	'CREATE_TEMPLATE'				=> 'Skapa ny malluppsättning',
	'CREATE_THEME'					=> 'Skapa nytt tema',
	'CURRENT_IMAGE'					=> 'Nuvarande bild',

	'DEACTIVATE_DEFAULT'		=> 'Du kan inte inaktivera standardstilen.',
	'DELETE_FROM_FS'			=> 'Ta bort från filsystemet',
	'DELETE_IMAGESET'			=> 'Ta bort bildpaket',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Här kan du ta bort det valda bildpaketet från databasen. Kom ihåg att det inte går att ångra. När bildpaketet har raderats är det borta för alltid. Det är rekommenderat att du först exporterar ditt bildpaket för möjlig framtida användning.',
	'DELETE_STYLE'				=> 'Ta bort stil',
	'DELETE_STYLE_EXPLAIN'		=> 'Här kan du ta bort den valda stilen. Var försiktig när du tar bort stilar, det går inte att ångra.',
	'DELETE_TEMPLATE'			=> 'Ta bort mall',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Här kan du ta bort den valda malluppsättningen från databasen. Kom ihåg att det inte går att ångra. När mallarna raderats är de borta för alltid. Det är rekommenderat att du först exporterar din malluppsättning för möjlig framtida användning.',
	'DELETE_THEME'				=> 'Ta bort tema',
	'DELETE_THEME_EXPLAIN'		=> 'Här kan du ta bort det valda temat från databasen. Kom ihåg att det inte går att ångra. När temat raderats är det borta för alltid. Det är rekommenderat att du först exporterar ditt tema för möjlig framtida användning.',
	'DETAILS'					=> 'Detaljer',
	'DIMENSIONS_EXPLAIN'		=> 'Om du väljer ja här så kommer höjd/bredd-parametrar att inkluderas.',

	'EDIT_DETAILS_IMAGESET'				=> 'Redigera bildpaketsdetaljer',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Här kan du ändra vissa bildpaketsdetaljer så som dess namn.',
	'EDIT_DETAILS_STYLE'				=> 'Redigera stil',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Genom att använda formuläret nedan så kan du ändra denna existerande stil. Du kan ändra kombineringen av mall, tema och bildpaket som definierar stilen själv. Du kan också göra stilen till standardstil.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Redigera malldetaljer',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Här kan du ändra vissa malldetaljer så som dess namn. Du kan också byta lagring av stilmallen från filsystemet till databasen och tvärtom. Detta alternativ är beroende av din PHP-konfiguration och om din malluppsättning kan skrivas till av webbservern.',
	'EDIT_DETAILS_THEME'				=> 'Redigera temadetaljer',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Här kan du redigera vissa temadetaljer så som dess namn. Du kan också byta lagring av stilmallen från filsystemet till databasen och tvärtom. Detta alternativ är beroende av din PHP-konfiguration och om din stilmall kan skrivas till av webbservern.',
	'EDIT_IMAGESET'						=> 'Redigera bildpaket',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Här kan du ändra de individuella bilder som definierar bildpaketet. Du kan också ange dimensioner för bilden. Dimensioner är frivilliga, om du anger de så kan det få bukt med vissa tolkningsproblem i vissa webbläsare. Om du inte anger de sänker du storleken på databasposten något.',
	'EDIT_TEMPLATE'						=> 'Redigera mall',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Här kan du ändra din malluppsättning direkt. Kom ihåg att dessa förändringar är permanenta och inte kan ångras när de väl skickats in. Om PHP kan skriva till mallfilerna i din styles-katalog så kommer alla ändringar som görs här skrivas direkt till dessa filer. Om PHP inte kan skriva till dessa filer så kommer de att kopieras till databasen och alla ändringar kommer endast reflekteras där. Var försiktig när du redigerar din malluppsättning, kom ihåg att stänga alla variabeltermer {XXXX} och konditionspåståenden.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Mallfilen kunde inte skrivas till så malluppsättningen är nu lagrad i databasen med den förändrade filen.',
	'EDIT_THEME'						=> 'Redigera tema',
	'EDIT_THEME_EXPLAIN'				=> 'Här kan du ändra det valda temat, ändra färger, bilder, osv.',
	'EDIT_THEME_STORED_DB'				=> 'Stilmallsfilen kunde inte skrivas till så skrivmallen är nu lagrad i databasen med dina förändringar.',
	'EDIT_THEME_STORE_PARSED'			=> 'Temat kräver att stilmallen tolkas. Detta är endast möjligt om temat lagras i databasen.', 
	'EDITOR_DISABLED'					=> 'Stilredigeraren är inaktiverad.',
	'EXPORT'							=> 'Exportera',

	'FOREGROUND'			=> 'Förgrund',
	'FONT_COLOUR'			=> 'Textfärg',
	'FONT_FACE'				=> 'Teckensnitt',
	'FONT_FACE_EXPLAIN'		=> 'Du kan ange flera teckensnitt separerade med kommatecken. Om en användare inte har det första teckensnittet installerat så kommer det första andra som fungerar att väljas.',
	'FONT_SIZE'				=> 'Teckenstorlek',

	'GLOBAL_IMAGES'			=> 'Globala',

	'HIDE_CSS'				=> 'Dölj rå CSS',

	'IMAGE_WIDTH'				=> 'Bildbredd',
	'IMAGE_HEIGHT'				=> 'Bildhöjd',
	'IMAGE'						=> 'Bild',
	'IMAGE_NAME'				=> 'Bildnamn',
	'IMAGE_PARAMETER'			=> 'Parameter',
	'IMAGE_VALUE'				=> 'Värde',
	'IMAGESET_ADDED'			=> 'Nytt bildpaket lades till på filsystemet.',
	'IMAGESET_ADDED_DB'			=> 'Nytt bildpaket lades till i databasen.',
	'IMAGESET_DELETED'			=> 'Bildpaket togs bort.',
	'IMAGESET_DELETED_FS'		=> 'Bildpaket togs bort från databasen men några filer kan finnas kvar på filsystemet.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Bildpaketsdetaljer uppdaterades.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Välj en arkiveringsmetod.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Copyrighttexten kan inte vara längre än 60 tecken.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Bildpaketsnamnet kan endast innehålla alfanumeriska tecken, -, +, _ och mellanslag.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Ett bildpaket med det namnet finns redan.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Bildpaketsnamnet kan inte vara längre än 30 tecken.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Arkivet du angav innehåller inte ett giltigt bildpaket.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Du måste välja ett namn för detta bildpaket.',
	'IMAGESET_EXPORT'			=> 'Exportera bildpaket',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Här kan du exportera ett bildpaket i form av ett arkiv. Detta arkiv kommer att innehålla all information som behövs för att installera bildpaketet på ett annat forum. Du kan välja om du vill ladda ner filen direkt eller placera den i din store-mapp för senare nerladdning eller via FTP.',
	'IMAGESET_EXPORTED'			=> 'Bildpaket exporterades och lagrades i %s.',
	'IMAGESET_NAME'				=> 'Bildpaketsnamn',
	'IMAGESET_REFRESHED'		=> 'Bildpaket uppdaterades.',
	'IMAGESET_UPDATED'			=> 'Bildpaket uppdaterades.',
	'ITALIC'					=> 'Kursiv',

	'IMG_CAT_BUTTONS'		=> 'Översatta knappar',
	'IMG_CAT_CUSTOM'		=> 'Egna bilder',
	'IMG_CAT_FOLDERS'		=> 'Trådikoner',
	'IMG_CAT_FORUMS'		=> 'Kategoriikoner',
	'IMG_CAT_ICONS'			=> 'Allmänna ikoner',
	'IMG_CAT_LOGOS'			=> 'Loggor',
	'IMG_CAT_POLLS'			=> 'Omröstningsbilder',
	'IMG_CAT_UI'			=> 'Allmänna användargränssnittelement',
	'IMG_CAT_USER'			=> 'Ytterligare bilder',

	'IMG_SITE_LOGO'			=> 'Huvudlogga',
	'IMG_UPLOAD_BAR'		=> 'Uppladdningsframstegsbar',
	'IMG_POLL_LEFT'			=> 'Omröstning vänster ända',
	'IMG_POLL_CENTER'		=> 'Omröstning mitt',
	'IMG_POLL_RIGHT'		=> 'Omröstning högre ända',
	'IMG_ICON_FRIEND'		=> 'Lägg till som vän',
	'IMG_ICON_FOE'			=> 'Markera som en ignorerad användare',

	'IMG_FORUM_LINK'			=> 'Kategorilänk',
	'IMG_FORUM_READ'			=> 'Kategori',
	'IMG_FORUM_READ_LOCKED'		=> 'Kategori låst',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Underkategori',
	'IMG_FORUM_UNREAD'			=> 'Kategori olästa inlägg',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Kategori olästa inlägg låst',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Underkategori olästa inlägg',
 	'IMG_SUBFORUM_READ'			=> 'Legend underkategori',
 	'IMG_SUBFORUM_UNREAD'		=> 'Legend underkategori olästa inlägg',

	'IMG_TOPIC_MOVED'			=> 'Tråd flyttad',

	'IMG_TOPIC_READ'				=> 'Tråd',
	'IMG_TOPIC_READ_MINE'			=> 'Tråd postad i',
	'IMG_TOPIC_READ_HOT'			=> 'Tråd populär',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Tråd populär postad i',
	'IMG_TOPIC_READ_LOCKED'			=> 'Tråd låst',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Tråd låst postad i',

	'IMG_TOPIC_UNREAD'				=> 'Tråd olästa inlägg',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Tråd postad i olästa',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Tråd populär olästa inlägg',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Tråd populär postad i olästa',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Tråd låst olästa',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Tråd låst postad i olästa',

	'IMG_STICKY_READ'				=> 'Notis',
	'IMG_STICKY_READ_MINE'			=> 'Notis postad i',
	'IMG_STICKY_READ_LOCKED'		=> 'Notis låst',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Notis låst postad i',
	'IMG_STICKY_UNREAD'				=> 'Notis olästa inlägg',
	'IMG_STICKY_UNREAD_MINE'		=> 'Notis postad i olästa',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Notis låst olästa inlägg',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Notis låst postad i olästa',

	'IMG_ANNOUNCE_READ'					=> 'Anslag',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Anslag postat i',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Anslag låst',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Anslag låst postat i',
	'IMG_ANNOUNCE_UNREAD'				=> 'Anslag olästa inlägg',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Anslag postat i olästa',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Anslag låst olästa inlägg',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Anslag låst postat i olästa',

	'IMG_GLOBAL_READ'					=> 'Globalt',
	'IMG_GLOBAL_READ_MINE'				=> 'Globalt postad i',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Globalt låst',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Globalt låst postad i',
	'IMG_GLOBAL_UNREAD'					=> 'Globalt olästa inlägg',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Globalt postats i olästa',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Globalt låst olästa inlägg',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Globalt låst postats i olästa',

	'IMG_PM_READ'		=> 'Läst personligt meddelande',
	'IMG_PM_UNREAD'		=> 'Oläst personligt meddelande',

	'IMG_ICON_BACK_TOP'		=> 'Upp',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Skicka e-post',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Skicka meddelande',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Webbplats',

	'IMG_ICON_POST_DELETE'			=> 'Ta bort inlägg',
	'IMG_ICON_POST_EDIT'			=> 'Redigera inlägg',
	'IMG_ICON_POST_INFO'			=> 'Visa inläggsuppgifter',
	'IMG_ICON_POST_QUOTE'			=> 'Citera inlägg',
	'IMG_ICON_POST_REPORT'			=> 'Rapportera inlägg',
	'IMG_ICON_POST_TARGET'			=> 'Miniinlägg',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nytt miniinlägg',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Bilaga',
	'IMG_ICON_TOPIC_LATEST'			=> 'Senaste inlägg',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Senaste olästa inlägg',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Inlägg rapporterat',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Inlägg ej godkänt',

	'IMG_ICON_USER_ONLINE'		=> 'Användare online',
	'IMG_ICON_USER_OFFLINE'		=> 'Användare offline',
	'IMG_ICON_USER_PROFILE'		=> 'Visa profil',
	'IMG_ICON_USER_SEARCH'		=> 'Sök inlägg',
	'IMG_ICON_USER_WARN'		=> 'Varna användare',

	'IMG_BUTTON_PM_FORWARD'		=> 'Vidarebefordra personligt meddelande',
	'IMG_BUTTON_PM_NEW'			=> 'Nytt personligt meddelande',
	'IMG_BUTTON_PM_REPLY'		=> 'Svara på personligt meddelande',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Låst tråd',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Ny tråd',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Svara på tråd',

	'IMG_USER_ICON1'		=> 'Användardefinierad bild 1',
	'IMG_USER_ICON2'		=> 'Användardefinierad bild 2',
	'IMG_USER_ICON3'		=> 'Användardefinierad bild 3',
	'IMG_USER_ICON4'		=> 'Användardefinierad bild 4',
	'IMG_USER_ICON5'		=> 'Användardefinierad bild 5',
	'IMG_USER_ICON6'		=> 'Användardefinierad bild 6',
	'IMG_USER_ICON7'		=> 'Användardefinierad bild 7',
	'IMG_USER_ICON8'		=> 'Användardefinierad bild 8',
	'IMG_USER_ICON9'		=> 'Användardefinierad bild 9',
	'IMG_USER_ICON10'		=> 'Användardefinierad bild 10',
	'INACTIVE_STYLES'		=> 'Inaktiva stilar',

	'INCLUDE_DIMENSIONS'		=> 'Inkludera dimensioner',
	'INCLUDE_IMAGESET'			=> 'Inkludera bildpaket',
	'INCLUDE_TEMPLATE'			=> 'Inkludera mall',
	'INCLUDE_THEME'				=> 'Inkludera tema',
	'INHERITING_FROM'            => 'Ärver malluppsättnig av',
	'INSTALL_IMAGESET'			=> 'Installera bildpaket',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Här kan du installera ditt valda bildpaket. Du kan ändra vissa detaljer om du vill eller använda standardvärdena.',
	'INSTALL_STYLE'				=> 'Installera stil',
	'INSTALL_STYLE_EXPLAIN'		=> 'Här kan du installera en ny stil och om lämpligt de motsvarande stilelementen. Om du redan har de relevanta stilelementen installerade så kommer de inte skrivas över. Vissa stilar kräver att vissa stilelement redan ska finnas installerade. Om du försöker installera en sådan stil och inte har de krävda elementen så kommer du att informeras om det.',
	'INSTALL_TEMPLATE'			=> 'Installera mall',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Här kan du installera en ny malluppsättning. Beroende på din serverkonfiguration kan du ha ett antal alternativ här nedan.',
	'INSTALL_THEME'				=> 'Installera tema',
	'INSTALL_THEME_EXPLAIN'		=> 'Här kan du installera ditt valda tema. Du kan redigera vissa detaljer om du vill eller använda standardvärdena.',
	'INSTALLED_IMAGESET'		=> 'Installerade bildpaket',
	'INSTALLED_STYLE'			=> 'Installerade stilar',
	'INSTALLED_TEMPLATE'		=> 'Installerade mallar',
	'INSTALLED_THEME'			=> 'Installerade teman',

	'KEEP_IMAGESET'				=> 'Behåll bildpaket för “%s”',
	'KEEP_TEMPLATE'				=> 'Behåll mallen för “%s”',
	'KEEP_THEME'				=> 'Behåll temat för “%s”',
	
	'LINE_SPACING'				=> 'Linjeavstånd',
	'LOCALISED_IMAGES'			=> 'Översatt',
	'LOCATION_DISABLED_EXPLAIN'    => 'Den här inställningen är ärvd och kan inte ändras.',

	'NO_CLASS'					=> 'Kunde inte hitta klass i stilmall.',
	'NO_IMAGESET'				=> 'Kunde inte hitta bildpaket på filsystemet.',
	'NO_IMAGE'					=> 'Ingen bild',
	'NO_IMAGE_ERROR'			=> 'Kunde inte hitta bild på filsystemet.',
	'NO_STYLE'					=> 'Kunde inte hitta stil på filsystemet.',
	'NO_TEMPLATE'				=> 'Kunde inte hitta mall på filsystemet.',
	'NO_THEME'					=> 'Kunde inte hitta tema på filsystemet.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Inga oinstallerade bildpaket hittades.',
	'NO_UNINSTALLED_STYLE'		=> 'Inga oinstallerade stilar hittades.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Inga oinstallerade mallar hittades.',
	'NO_UNINSTALLED_THEME'		=> 'Inga oinstallerade teman hittades.',
	'NO_UNIT'					=> 'Ingen',

	'ONLY_IMAGESET'			=> 'Detta är det enda kvarstående bildpaketet, du kan inte ta bort det.',
	'ONLY_STYLE'			=> 'Detta är den enda kvarstående stilen, du kan inte ta bort den.',
	'ONLY_TEMPLATE'			=> 'Detta är den enda kvarstående malluppsättnigen, du kan inte ta bort den.',
	'ONLY_THEME'			=> 'Detta är det enda kvarstående temat, du kan inte ta bort det.',
	'OPTIONAL_BASIS'		=> 'Frivillig basis',

	'REFRESH'					=> 'Uppdatera',
	'REPEAT_NO'					=> 'Ingen',
	'REPEAT_X'					=> 'Endast horisontellt',
	'REPEAT_Y'					=> 'Endast vertikalt',
	'REPEAT_ALL'				=> 'Båda riktningarna',
	'REPLACE_IMAGESET'			=> 'Ersätt bildpaket med',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Detta bildpaketet kommer att ersätta det som du tar bort i alla stilar som använder det.',
	'REPLACE_STYLE'				=> 'Ersätt stil med',
	'REPLACE_STYLE_EXPLAIN'		=> 'Denna stil kommer att ersätta den som du tar bort för alla medlemmar som använder den.',
	'REPLACE_TEMPLATE'			=> 'Ersätt mall med',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Denna mall kommer att ersätta den som du tar bort i alla stilar som använder den.',
	'REPLACE_THEME'				=> 'Ersätt tema med',
	'REPLACE_THEME_EXPLAIN'		=> 'Detta tema kommer att ersätta det som du tar bort i alla stilar som använder det.',
	'REPLACE_WITH_OPTION'		=> 'Ersätt med “%s”',
	'REQUIRES_IMAGESET'			=> 'Denna stil kräver att bildpaketet %s är installerat.',
	'REQUIRES_TEMPLATE'			=> 'Denna stil kräver att malluppsättningen %s är installerad.',
	'REQUIRES_THEME'			=> 'Denna stil kräver att temat %s är installerat.',

	'SELECT_IMAGE'				=> 'Välj bild',
	'SELECT_TEMPLATE'			=> 'Välj mallfil',
	'SELECT_THEME'				=> 'Välj temafil',
	'SELECTED_IMAGE'			=> 'Vald bild',
	'SELECTED_IMAGESET'			=> 'Valt bildpaket',
	'SELECTED_TEMPLATE'			=> 'Vald mall',
	'SELECTED_TEMPLATE_FILE'	=> 'Vald mallfil',
	'SELECTED_THEME'			=> 'Valt tema',
	'SELECTED_THEME_FILE'		=> 'Vald temafil',
	'STORE_DATABASE'			=> 'Databas',
	'STORE_FILESYSTEM'			=> 'Filsystem',
	'STYLE_ACTIVATE'			=> 'Aktivera',
	'STYLE_ACTIVE'				=> 'Aktiv',
	'STYLE_ADDED'				=> 'Stilen lades till.',
	'STYLE_DEACTIVATE'			=> 'Inaktivera',
	'STYLE_DEFAULT'				=> 'Gör till standardstil',
	'STYLE_DELETED'				=> 'Stilen togs bort.',
	'STYLE_DETAILS_UPDATED'		=> 'Stilen redigerades.',
	'STYLE_ERR_ARCHIVE'			=> 'Välj en arkiveringsmetod.',
	'STYLE_ERR_COPY_LONG'		=> 'Copyrighttexten kan inte vara längre än 60 tecken.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Du måste välja minst ett stilelement.',
	'STYLE_ERR_NAME_CHARS'		=> 'Stilnamnet kan endast innehålla alfanumeriska tecken, -, +, _ och mellanslag.',
	'STYLE_ERR_NAME_EXIST'		=> 'En stil med det namnet finns redan.',
	'STYLE_ERR_NAME_LONG'		=> 'Stilnamnet kan inte vara längre än 30 tecken.',
	'STYLE_ERR_NO_IDS'			=> 'Du måste välja en mall, ett tema och ett bildpaket för denna stil.',
	'STYLE_ERR_NOT_STYLE'		=> 'Den importerade eller uppladdade filen innehöll inget giltigt stilarkiv.',
	'STYLE_ERR_STYLE_NAME'		=> 'Du måste ange ett namn för denna stil.',
	'STYLE_EXPORT'				=> 'Exportera stil',
	'STYLE_EXPORT_EXPLAIN'		=> 'Här kan du exportera en stil i form av ett arkiv. En stil måste inte innehålla alla element men måste innehålla minst ett. Till exempel om du har skapat ett nytt tema och bildpaket för en vanligen använd mall kan du exportera temat och bildpaketet och utelämna mallen. Du kan välja att ladda ner filen direkt eller placera den i din store-mapp för senare nerladdning eller via FTP.',
	'STYLE_EXPORTED'			=> 'Stil exporterad och lagrad i %s.',
	'STYLE_IMAGESET'			=> 'Bildpaket',
	'STYLE_NAME'				=> 'Stilnamn',
	'STYLE_TEMPLATE'			=> 'Mall',
	'STYLE_THEME'				=> 'Tema',
	'STYLE_USED_BY'				=> 'Används av (inklusive robotar)',

	'TEMPLATE_ADDED'			=> 'Malluppsättning lades till och sparades på filsystemet.',
	'TEMPLATE_ADDED_DB'			=> 'Malluppsättning lades till och sparades i databasen.',
	'TEMPLATE_CACHE'			=> 'Mallcache',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Som standard cachar phpBB den kompilerade versionen av dess mallar. Detta minskar belastningen på servern varje gång en sida visas och kan därför reducera sidgenereringstiden. Här kan du visa cachestatus för varje fil och ta bort individuella filer eller rensa hela cachen.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Mallcache tömdes.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Det finns inga cachade mallar.',
	'TEMPLATE_DELETED'			=> 'Malluppsättning togs bort.',
  'TEMPLATE_DELETE_DEPENDENT'    => 'Malluppsättningen kan inte raderas eftersom det finns en eller flera malluppsättningar, som använder delar av den:',
	'TEMPLATE_DELETED_FS'		=> 'Malluppsättning togs bort från databasen men några filer kan finnas kvar på filsystemet.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Malldetaljer uppdaterades.',
	'TEMPLATE_EDITOR'			=> 'Rå HTML mallredigerare',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Höjd på mallredigerare',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Välj en arkiveringsmetod.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Cache-katalogen som används för att spara cachade versioner av mallfiler kunde inte öppnas.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Copyrighttesten kan inte vara längre än 60 tecken.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Mallnamnet kan endast innehålla alfanumeriska tecken, -, +, _ och mellanslag.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'En malluppsättning med det namnet finns redan.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Mallnamnet kan inte vara längre än 30 tecken.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Arkivet du angav innehåller inte en giltig malluppsättning.',
  'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Den nya malluppsättningen kräver att stilen %s är installerad. Den får inte ärva delar av sig själv.', 
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Du måste ange ett namn för denna mall.',
	'TEMPLATE_EXPORT'			=> 'Exportera mallar',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Här kan du exportera en malluppsättning i form av ett arkiv. Detta arkiv kommer att innehålla alla filer som behövs för att installera mallarna på ett annat forum. Du kan välja om du vill ladda ner filen direkt eller spara den i din store-mapp för senare nerladdning eller via FTP.',
	'TEMPLATE_EXPORTED'			=> 'Mallar exporterades och sparades i %s.',
	'TEMPLATE_FILE'				=> 'Mallfil',
	'TEMPLATE_FILE_UPDATED'		=> 'Mallfil uppdaterades.',
  'TEMPLATE_INHERITS'            => 'Denna stil ärver %s och kan inte ha andra lagringsinställningar än stilen den ärver.', 
	'TEMPLATE_LOCATION'			=> 'Lagra mallar i',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Bilder lagras alltid i filsystemet.',
	'TEMPLATE_NAME'				=> 'Mallnamn',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Kan inte skriva till mallfill %s. Var god kontrollera rättigheterna för katalogen och filerna.',
	'TEMPLATE_REFRESHED'		=> 'Mall uppdaterades.',

	'THEME_ADDED'				=> 'Nytt tema lades till på filsystemet.',
	'THEME_ADDED_DB'			=> 'Nytt tema lades till i databasen.',
	'THEME_CLASS_ADDED'			=> 'Egen klass lades till.',
	'THEME_DELETED'				=> 'Temat togs bort.',
	'THEME_DELETED_FS'			=> 'Temat togs bort från databasen men filerna finns kvar på filsystemet.',
	'THEME_DETAILS_UPDATED'		=> 'Temadetaljer uppdaterades.',
	'THEME_EDITOR'				=> 'Temaredigerare',
	'THEME_EDITOR_HEIGHT'		=> 'Höjd på temaredigerare',
	'THEME_ERR_ARCHIVE'			=> 'Välj en arkiveringsmetod.',
	'THEME_ERR_CLASS_CHARS'		=> 'Endast alfanumeriska tecken samt ., :, -, _ och # är tillåtna tecken för klassnamn.',
	'THEME_ERR_COPY_LONG'		=> 'Copyrighttexten kan inte vara längre än 60 tecken.',
	'THEME_ERR_NAME_CHARS'		=> 'Temanamnet kan endast innehålla alfanumeriska tecken, -, +, _ och mellanslag.',
	'THEME_ERR_NAME_EXIST'		=> 'Ett tema med det namnet finns redan.',
	'THEME_ERR_NAME_LONG'		=> 'Temanamnet kan inte vara längre än 30 tecken.',
	'THEME_ERR_NOT_THEME'		=> 'Arkivet du angav innehåller inte ett giltigt tema.',
	'THEME_ERR_REFRESH_FS'		=> 'Detta tema är lagrat i filsystemet så det behöver inte uppdateras.',
	'THEME_ERR_STYLE_NAME'		=> 'Du måste ange ett namn för detta tema.',
	'THEME_FILE'				=> 'Temafil',
	'THEME_EXPORT'				=> 'Exportera tema',
	'THEME_EXPORT_EXPLAIN'		=> 'Här kan du exportera ett tema i form av ett arkiv. Detta arkiv kommer innehålla all data som behövs för att installera detta tema på ett annat forum. Du kan välja om du vill ladda ner filen direkt eller placera den i din store-mapp för senare nerladdning eller via FTP.',
	'THEME_EXPORTED'			=> 'Tema exporterat och lagrat i %s.',
	'THEME_LOCATION'			=> 'Lagra stilmall i',
	'THEME_LOCATION_EXPLAIN'	=> 'Bilder sparas alltid på filsystemet.',
	'THEME_NAME'				=> 'Temanamn',
	'THEME_REFRESHED'			=> 'Temat uppdaterades.',
	'THEME_UPDATED'				=> 'Temat uppdaterades.',

	'UNDERLINE'				=> 'Understruket',
	'UNINSTALLED_IMAGESET'	=> 'Ej installerade bildpaket',
	'UNINSTALLED_STYLE'		=> 'Ej installerade stilar',
	'UNINSTALLED_TEMPLATE'	=> 'Ej installerade mallar',
	'UNINSTALLED_THEME'		=> 'Ej installerade teman',
	'UNSET'					=> 'Odefinierad',

));

?>
