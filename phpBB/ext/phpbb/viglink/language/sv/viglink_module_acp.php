<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink-inställningar',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink är en tredjepartstjänst som diskret tjänar pengar på länkar som lagts upp av användare av ditt forum utan någon förändring av användarupplevelsen. När användare klickar på dina utgående länkar till produkter eller tjänster och köper något, betalar handlarna VigLink en provision, varav en del doneras till phpBB-projektet. Genom att välja att aktivera VigLink och donera intäkter till phpBB-projektet stödjer du vår öppen källkodsorganisation och säkerställer vår fortsatta ekonomiska säkerhet.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Du kan när som helst ändra dessa inställningar i panelen ”<a href="%1$s">VigLink-inställningar</a>”.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Du kommer inte längre att omdirigeras till den här sidan när du har skickat in dina inställningar nedan genom att klicka på knappen Skicka.',
	'ACP_VIGLINK_ENABLE'			=> 'Aktivera VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Aktiverar användning av VigLink-tjänster.',
	'ACP_VIGLINK_EARNINGS'			=> 'Gör anspråk på dina egna intäkter (valfritt)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Du kan göra anspråk på dina egna intäkter genom att registrera ett VigLink Convert-konto.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink-tjänster har blivit inaktiverade av phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Gör anspråk på dina intäkter',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Du kan göra anspråk på dina forumets intäkter från VigLink monetiserade länkar, istället för att donera intäkterna till phpBB-projektet. För att hantera dina kontoinställningar, registrera ett “VigLink Convert”-konto genom att klicka på “Convert account”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Konvertera konto',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink-konverteringskontolänken kunde inte hämtas.',
));
