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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Här kan du konfigurera huvudinställningarna för bilagor och de anslutna specialkategorierna.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Här kan du lägga till, ta bort, ändra eller inaktivera dina filtypsgrupper. Vidare alternativ inkluderar tilldelningen av en speciell kategori till de, ändring av nerladdningsmekanismen och definiering av en uppladdningsikon som kommer att visas innan bilagan som hör till gruppen.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Här kan du hantera dina tillåtna filtyper. För att aktivera dina filtyper, se filtypsgruppshanteringen. Vi rekommenderar starkt att du inte tillåter några skriptfiltyper (så som <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, och så vidare…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Här kan du se föräldralösa filer. Detta händer oftast när användare bifogar filer men aldrig skickar in inlägget. Du kan ta bort filerna eller bifoga de till existerande inlägg. Bifogning till inlägg kräver ett giltigt inläggs-ID, du måste fastställa detta ID själv. Detta kommer att tilldela den redan uppladdade bilagan till inlägget du angav.',
	'ADD_EXTENSION'						=> 'Lägg till filtyp',
	'ADD_EXTENSION_GROUP'				=> 'Lägg till filtypsgrupp',
	'ADMIN_UPLOAD_ERROR'				=> 'Fel när filen skulle bifogas: “%s”.',
	'ALLOWED_FORUMS'					=> 'Tillåtna kategorier',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Kan bifoga de tilldelade filtyperna i de valda (eller alla om valt) kategorierna.',
	'ALLOWED_IN_PM_POST'				=> 'Tillåten',
	'ALLOW_ATTACHMENTS'					=> 'Tillåt bilagor',
	'ALLOW_ALL_FORUMS'					=> 'Tillåt för alla kategorier',
	'ALLOW_IN_PM'						=> 'Tillåt i personliga meddelanden',
	'ALLOW_PM_ATTACHMENTS'				=> 'Tillåt bilagor i personliga meddelanden',
	'ALLOW_SELECTED_FORUMS'				=> 'Endast kategorier valda nedan',
	'ASSIGNED_EXTENSIONS'				=> 'Tilldelade filtyper',
	'ASSIGNED_GROUP'					=> 'Tilldelad filtypsgrupp',
	'ATTACH_EXTENSIONS_URL'				=> 'Filtyper',
	'ATTACH_EXT_GROUPS_URL'				=> 'Filtypsgrupper',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maximal filstorlek',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maximal storlek på en fil som laddas upp i ett personligt meddelande. Om detta värde är 0, begränsas storleken på filen som ska laddas upp endast av din PHP-konfiguration.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maximal filstorlek för personliga meddelanden',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maximal storlek för en fil i personliga meddelanden. Om detta värde är 0, begränsas storleken på filen som ska laddas upp endast av din PHP-konfiguration.',
	'ATTACH_ORPHAN_URL'					=> 'Föräldralösa bilagor',
	'ATTACH_POST_ID'					=> 'Inläggs-ID',
	'ATTACH_POST_TYPE'					=> 'Inläggstyp',
	'ATTACH_QUOTA'						=> 'Total bilagekvot',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maximalt hårddiskutrymme tillgängligt för alla bilagor på hela forumet, 0 är obegränsat.',
	'ATTACH_TO_POST'					=> 'Bifoga fil till inlägg',


	'CAT_IMAGES'				=> 'Bilder',
	'CHECK_CONTENT'				=> 'Kontrollera bilagor',
	'CHECK_CONTENT_EXPLAIN'		=> 'Vissa webbläsare kan luras till att acceptera en felaktig mimetyp för uppladdade filer. Detta alternativ tillförsäkrar att sådana filer med största sannolikhet nekas.',
	'CREATE_GROUP'				=> 'Skapa ny grupp',
	'CREATE_THUMBNAIL'			=> 'Skapa miniatyrbild',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Skapa en miniatyrbild i alla möjliga situationer.',

	'DEFINE_ALLOWED_IPS'			=> 'Definiera tillåtna IP-adresser/värdnamn',
	'DEFINE_DISALLOWED_IPS'			=> 'Definiera otillåtna IP-adresser/värdnamn',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'För att ange flera olika IP-adresser eller värdnamn, ange varje på en ny rad. För att ange en kedja med IP-adresser, separera början och slut med -, använd “*” som jokertecken.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Du kan ta bort flera IP-adresser (eller undantagna) på samma gång genom att använda den rätta kombinationen av mus och tangentbord för din dator och webbläsare. Undantagna IP-adresser har en blå bakgrund.',
	'DISPLAY_INLINED'				=> 'Visa bilder inom inlägget',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Om satt till Nej så kommer bildbilagor att visas som en länk.',
	'DISPLAY_ORDER'					=> 'Sortering av bilagor',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Visa bilagor sorterade efter tid.',

	'EDIT_EXTENSION_GROUP'			=> 'Redigera filtypsgrupp',
	'EXCLUDE_ENTERED_IP'			=> 'Aktivera detta för att undanta den angivna IP-adressen/värdnamnet.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Undanta IP från tillåtna IP-adresser/värdnamn',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Undanta IP från otillåtna IP-adresser/värdnamn',
	'EXTENSIONS_UPDATED'			=> 'Filtyp uppdaterad.',
	'EXTENSION_EXIST'				=> 'Filtypen %s finns redan.',
	'EXTENSION_GROUP'				=> 'Filtypsgrupp',
	'EXTENSION_GROUPS'				=> 'Filtypsgrupper',
	'EXTENSION_GROUP_DELETED'		=> 'Filtypsgrupp borttagen.',
	'EXTENSION_GROUP_EXIST'			=> 'Filtypsgruppen %s finns redan.',

	'EXT_GROUP_ARCHIVES'			=> 'Arkiv',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokument',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Nerladdningsbara filer',

	'EXT_GROUP_IMAGES'				=> 'Bilder',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Text',

	'FILES_GONE'			=> 'Vissa av filerna som du har valt för radering existerar ej. De har antagligen redan raderats. Filerna som existerade raderades.',
	'FILES_STATS_WRONG'		=> 'Din filstatistik är antagligen ogiltig och måste synkroniseras igen. Aktuella värden: antal bilagor = %1$d, total storlek för bilagor = %2$s.<br />Klicka %3$shär%4$s för att synkronisera statistiken.',

	'GO_TO_EXTENSIONS'		=> 'Gå till filtypshanteringen',
	'GROUP_NAME'			=> 'Gruppnamn',

	'IMAGE_LINK_SIZE'			=> 'Bildlänksdimensioner',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Visar bildbilaga som en textlänk om bilden är större än så här. För att inaktivera detta beteende, sätt värdena till 0px och 0px.',
	'IMAGE_QUALITY'				=> 'Kvalitet på uppladdade bilagor (endast JPEG)',
	'IMAGE_QUALITY_EXPLAIN'		=> 'Ange värde mellan 50% (mindre filstorlek) och 90% (högre kvalitet). Kvalitet högre än 90% ökar filstorleken och inaktiveras. Inställningen gäller endast om maximala bilddimensioner är inställda på ett annat värde än 0px med 0px.',
	'IMAGE_STRIP_METADATA'		=> 'Rader bildmetadata (endast JPEG)',
	'IMAGE_STRIP_METADATA_EXPLAIN'	=> 'Remsa Exif-metadata, t.ex. författarnamn, GPS-koordinater och kamerainformation. Inställningen gäller endast om maximala bilddimensioner är inställda på ett annat värde än 0px med 0px.',

	'MAX_ATTACHMENTS'				=> 'Maximalt antal bilagor per inlägg',
	'MAX_ATTACHMENTS_PM'			=> 'Maximalt antal bilagor per personligt meddelande',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximal filstorlek',
	'MAX_IMAGE_SIZE'				=> 'Maximala bilddimensioner',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximal storlek på bildbilagor. Sätt båda dessa värden till 0px för att inaktivera kontroll av dimensioner.',
	'MAX_THUMB_WIDTH'				=> 'Maximal miniatyrbildsbredd i pixlar',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Genererade miniatyrbilder kommer inte att överskrida bredden inställd här.',
	'MIN_THUMB_FILESIZE'			=> 'Minsta filstorlek för miniatyrbild',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Skapa inte en miniatyrbild för bilder mindre än så här.',
	'MODE_INLINE'					=> 'Inom inlägget',
	'MODE_PHYSICAL'					=> 'Fysisk',

	'NOT_ALLOWED_IN_PM'			=> 'Endast tillåten i inlägg',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Inte tillåten',
	'NOT_ASSIGNED'				=> 'Inte tilldelad',
	'NO_ATTACHMENTS'			=> 'No attachments found for this period.',
	'NO_EXT_GROUP'				=> 'Ingen',
	'NO_EXT_GROUP_ALLOWED_PM'	=> 'Det finns inga <a href="%s">tillåtna tilläggsgrupper</a> för privata meddelanden.',
	'NO_EXT_GROUP_ALLOWED_POST'	=> 'Det finns inga <a href="%s">tillåtna tilläggsgrupper</a> för inlägg.',


	'NO_EXT_GROUP_NAME'			=> 'Inget gruppnamn angivet',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Ingen filtypsgrupp angiven.',
	'NO_FILE_CAT'				=> 'Ingen',
	'NO_IMAGE'					=> 'Ingen bild',
	'NO_THUMBNAIL_SUPPORT'		=> 'Miniatyrbildsstöd har inaktiverats. För att det ska fungera måste antingen GD-extension finnas tillgänglig eller så måste Imagemagick vara installerad. Ingen av dessa hittades.',
	'NO_UPLOAD_DIR'				=> 'Uppladdningskatalogen du angav finns inte.',
	'NO_WRITE_UPLOAD'			=> 'Uppladdningskatalogen du angav kan inte skrivas till. Ändra behörigheterna så att webbservern kan skriva till den.',

	'ONLY_ALLOWED_IN_PM'	=> 'Endast tillåten i personliga meddelanden',
	'ORDER_ALLOW_DENY'		=> 'Tillåt',
	'ORDER_DENY_ALLOW'		=> 'Neka',

	'REMOVE_ALLOWED_IPS'			=> 'Ta bort eller häv undantag för <em>tillåtna</em> IP-adresser/värdnamn',
	'REMOVE_DISALLOWED_IPS'			=> 'Ta bort eller häv undantag för <em>otillåtna</em> IP-adresser/värdnamn',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Är du säker på att du vill synkronisera filstatistiken?',

	'SEARCH_IMAGICK'				=> 'Sök efter Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Tillåt/Neka-lista',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Ändra standardbeteendet när säkra nerladdningar är aktiverade för Tillåt/Neka-listan till en <strong>whitelist</strong> (Tillåt) eller en <strong>blacklist</strong> (Neka).',
	'SECURE_DOWNLOADS'				=> 'Aktivera säkra nerladdningar',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Om detta alternativ är aktiverat kan endast de IP-adresser/värdnamn du anger ladda ner filer.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Säkra nerladdningar är inte aktiverade. Inställningarna nedan kommer att tillämpas när du aktiverat säkra nerladdningar.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP-listan uppdaterades.',
	'SECURE_EMPTY_REFERRER'			=> 'Tillåt tom hänvisare',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Säkra nerladdningar baseras på hänvisare. Vill du tillåta nerladdningar för de som utelämnar hänvisaren?',
	'SETTINGS_CAT_IMAGES'			=> 'Bildkategoriinställningar',
	'SPECIAL_CATEGORY'				=> 'Specialkategori',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Specialkategorier skiljer sig i hur de presenteras i inlägg.',
	'SUCCESSFULLY_UPLOADED'			=> 'Laddades upp.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Filtypsgrupp lades till.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Filtypsgrupp uppdaterades.',

	'UPLOADING_FILES'				=> 'Laddar upp filer',
	'UPLOADING_FILE_TO'				=> 'Laddar upp fil “%1$s” till inlägg nummer %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Du har inte behörighet att ladda upp filer till kategori “%s”.',
	'UPLOAD_DIR'					=> 'Uppladdningskatalog',
	'UPLOAD_DIR_EXPLAIN'			=> 'Lagringssökväg för bilagor. Observera att om du ändrar denna katalog och bilagor redan laddats upp så måste du kopiera de gamla filerna till den nya platsen.',
	'UPLOAD_ICON'					=> 'Uppladdningsikon',
	'UPLOAD_NOT_DIR'				=> 'Uppladdningsplatsen du angav verkar inte vara en katalog.',
));
