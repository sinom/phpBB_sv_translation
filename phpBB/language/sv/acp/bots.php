<?php
/** 
*
* acp_bots [Swedish] (phpBB 3.0.10)
*
* @package language
* @version $Id: bots.php 2 2010-06-24 01:12:10Z tumba25 $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Hantera robotar',
	'BOTS_EXPLAIN'		=> '“Robotar”, “spindlar” eller “crawlers” är automatiserade agenter som vanligtvis används av sökmotorer för att uppdatera sina databaser. Eftersom de sällan på ett korrekt sätt använder sig av sessioner så kan de förvanska besöksräknare, öka belastningen på servern, och ibland misslyckas med att indexera webbplatsen korrekt. Här kan du definiera en speciell typ av användare för att kunna övervinna dessa problem.',
	'BOT_ACTIVATE'		=> 'Aktivera',
	'BOT_ACTIVE'		=> 'Robot aktiv',
	'BOT_ADD'			=> 'Lägg till robot',
	'BOT_ADDED'			=> 'Den nya roboten lades till.',
	'BOT_AGENT'			=> '“User agent”-matchning',
	'BOT_AGENT_EXPLAIN'	=> 'En sträng som ska matchas mot robotens “user agent”, partiella matchningar är tillåtna.',
	'BOT_DEACTIVATE'	=> 'Inaktivera',
	'BOT_DELETED'		=> 'Roboten togs bort.',
	'BOT_EDIT'			=> 'Redigera robotar',
	'BOT_EDIT_EXPLAIN'	=> 'Här kan du lägga till eller redigera en existerande robot. Du kan definiera en “user agent”-sträng och/eller en eller flera IP-adresser (eller en kedja av adresser) som ska matchas. Var försiktig när du definierar “user agent”-strängar eller adresser. Du kan också specificera en stil eller ett språk som ska visas för roboten när den besöker ditt forum. Detta kan låta dig minska bandbreddsanväningen genom att ställa in en enklare forumstil för robotar. Kom ihåg att ställa in lämpliga behörigheter för den speciella Robot-användargruppen.',
	'BOT_LANG'			=> 'Robotens språk',
	'BOT_LANG_EXPLAIN'	=> 'Språket som visas för roboten när den besöker forumet.',
	'BOT_LAST_VISIT'	=> 'Senaste besöket',
	'BOT_IP'			=> 'Robotens IP-addres',
	'BOT_IP_EXPLAIN'	=> 'Partiella matchningar är tillåtna, separera IP-adresser med ett kommatecken.',
	'BOT_NAME'			=> 'Robotens namn',
	'BOT_NAME_EXPLAIN'	=> 'Används endast för din egen information.',
 	'BOT_NAME_TAKEN'	=> 'Namnet används redan på ditt forum och kan inte användas för roboten.',
	'BOT_NEVER'			=> 'Aldrig',
	'BOT_STYLE'			=> 'Robotens forumstil',
	'BOT_STYLE_EXPLAIN'	=> 'Forumstilen som kommer att visas för roboten när den besöker forumet.',
	'BOT_UPDATED'		=> 'Den existerande roboten uppdaterades.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Den “user agent” du angav liknar den du redan använder. Justera agenten för denna robot.',
	'ERR_BOT_NO_IP'				=> 'IP-adresserna du angav var felaktiga eller så kunde inte värdnamnet hittas.',
	'ERR_BOT_NO_MATCHES'		=> 'Du måste ange minst antingen en “user agent” eller en IP-adress som ska matchas mot denna robot.',

	'NO_BOT'		=> 'Hittade ingen robot med det angivna ID:t.',
	'NO_BOT_GROUP'	=> 'Hittade inte den speciella robotgruppen.',
));

?>