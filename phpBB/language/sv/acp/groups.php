<?php
/**
*
* acp_groups [Swedish] (phpBB 3.0.10)
*
* @package language
* @version $Id: groups.php 36 2012-06-27 08:50:58Z Peetra.mammapappa $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Från denna panel kan du administrera alla dina användargrupper. Du kan ta bort, skapa och redigera existerande grupper. Vidare kan du välja gruppledare, ändra gruppstatus (öppnen/gömd/stängd) samt ställa in gruppnamn och beskrivning.',
	'ADD_USERS'						=> 'Lägg till användare',
	'ADD_USERS_EXPLAIN'				=> 'Här kan du lägga till nya medlemmar till gruppen. Du kan göra gruppen till standardgrupp för de valda användarna. Du kan också göra dem till gruppledare. Ange varje användarnamn på en ny rad.',

	'COPY_PERMISSIONS'				=> 'Kopiera behörigheter från',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'När gruppen skapats kommer den att ha samma behörigheter som den du väljer här.',
	'CREATE_GROUP'					=> 'Skapa ny grupp',

	'GROUPS_NO_MEMBERS'				=> 'Denna grupp har inga medlemmar',
	'GROUPS_NO_MODS'				=> 'Inga gruppledare utsedda',
	'GROUP_APPROVE'					=> 'Godkänn medlem',
	'GROUP_APPROVED'				=> 'Godkända medlemmar',
	'GROUP_AVATAR'					=> 'Gruppvisningsbild',
	'GROUP_AVATAR_EXPLAIN'			=> 'Denna bild kommer att visas i gruppens kontrollpanelen.',
	'GROUP_CLOSED'					=> 'Stängd',
	'GROUP_COLOR'					=> 'Gruppfärg',
	'GROUP_COLOR_EXPLAIN'			=> 'Definierar den färg som medlemmars användarnamn ska visas i, lämna blankt för att använda användarens normalfärg.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Är du säker på att du vill lägga till användaren %1$s till gruppen?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Är du säker på att du vill lägga till användarna %1$s till gruppen?',
	'GROUP_CREATED'					=> 'Gruppen skapades.',
	'GROUP_DEFAULT'					=> 'Gör till standardgrupp för medlem',
	'GROUP_DEFS_UPDATED'			=> 'Standardgrupp inställd för alla valda medlemmar.',
	'GROUP_DELETE'					=> 'Ta bort medlem från gruppen',
	'GROUP_DELETED'					=> 'Gruppen togs bort och användarnas standardgrupper inställda.',
	'GROUP_DEMOTE'					=> 'Avsäg gruppledarskap',
	'GROUP_DESC'					=> 'Gruppbeskrivning',
	'GROUP_DETAILS'					=> 'Gruppdetaljer',
	'GROUP_EDIT_EXPLAIN'			=> 'Här kan du redigera en existerande grupp. Du kan ändra dess namn, beskrivning och typ (öppen, stängd, osv.). Du kan också ställa in vissa gruppomfattande alternativ såsom färg, titel, osv. Ändringar som görs här åsidosätter användarnas nuvarande inställningar. Kom ihåg att gruppmedlemmar kan åsidosätta sina gruppvisningsbilder om du inte ställer in lämpliga användarbehörigheter.',
	'GROUP_ERR_USERS_EXIST'			=> 'De angivna användarna är redan medlemmar i denna grupp.',
	'GROUP_FOUNDER_MANAGE'			=> 'Kan endast hanteras av grundare',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Begränsa hantering av denna grupp till endast grundare. Användare som har gruppbehörigheter kan fortfarande se denna grupp och dess medlemmar.',
	'GROUP_HIDDEN'					=> 'Dold',
	'GROUP_LANG'					=> 'Gruppspråk',
	'GROUP_LEAD'					=> 'Gruppledare',
	'GROUP_LEADERS_ADDED'			=> 'Nya ledare lades till i gruppen.',
	'GROUP_LEGEND'			=> 'Visa gruppen i förklaringen på indexsidan',
	'GROUP_LIST'					=> 'Nuvarande medlemmar',
	'GROUP_LIST_EXPLAIN'			=> 'Detta är en fullständig lista över alla nuvarande medlemmar i denna grupp. Du kan ta bort medlemmar (förutom i vissa specialgrupper) eller lägga till nya.',
	'GROUP_MEMBERS'					=> 'Gruppmedlemmar',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Detta är en fullständig lista över alla medlemmar i denna användargrupp. Den består av olika delar för ledare, användare med väntande medlemskap och existerande medlemmar. Härifrån kan du hantera alla aspekter av vem som är medlem i denna grupp och vad deras roll är. För att ta bort en ledare men behålla de i gruppen använd Avsäg ledarskap istället för ta bort. Använd Befordra för att göra en existerande medlem till ledare.',
	'GROUP_MESSAGE_LIMIT'			=> 'Gruppens gräns för antal personliga meddelande per mapp',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Denna inställning åsidosätter standardgränsen för antal meddelanden per mapp. Ange 0 för att använda användarens standardgräns.',
	'GROUP_MODS_ADDED'				=> 'Nya gruppledare lades till.',
	'GROUP_MODS_DEMOTED'			=> 'Gruppledarna avsades ledarskap.',
	'GROUP_MODS_PROMOTED'			=> 'Gruppmedlemmarna befordrades.',
	'GROUP_NAME'					=> 'Gruppnamn',
 	'GROUP_NAME_TAKEN'				=> 'Gruppnamnet som du valde används redan, välj ett annat alternativ.',
	'GROUP_OPEN'					=> 'Öppen',
	'GROUP_PENDING'					=> 'Väntande medlemmar',
	'GROUP_MAX_RECIPIENTS'			=> 'Maximalt antal tillåtna mottagare per privat meddelande',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Det största antal mottagare ett privat meddelande kan ha. Sätt 0 för att använda de globala foruminställningarna för antal mottagare.',
	'GROUP_OPTIONS_SAVE'			=> 'Gruppomfattande alternativ',
	'GROUP_PROMOTE'					=> 'Befordra till gruppledare',
	'GROUP_RANK'					=> 'Grupptitel',
	'GROUP_RECEIVE_PM'				=> 'Gruppen kan ta emot personliga meddelanden',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Kom ihåg att dolda grupper inte kan ta emot personliga meddelanden, oavsett denna inställning.',
	'GROUP_REQUEST'					=> 'Ansökan',
	'GROUP_SETTINGS_SAVE'			=> 'Gruppomfattande inställningar',
	'GROUP_SKIP_AUTH'				=> 'Undanta gruppledarna från behörigheterna',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Om man har denna inställning påslagen, så har gruppledarna inte längre automatiskt samma behörigheter som gruppen.',
	'GROUP_TYPE'					=> 'Grupptyp',
	'GROUP_TYPE_EXPLAIN'			=> 'Detta avgör vilka användare som kan gå med i eller visa denna grupp.',
	'GROUP_UPDATED'					=> 'Gruppinställningarna uppdaterades.',
	'GROUP_USERS_ADDED'				=> 'Nya användare lades till i gruppen.',
	'GROUP_USERS_EXIST'				=> 'De valda användarna är redan medlemmar.',
	'GROUP_USERS_REMOVE'			=> 'Användarna togs bort från gruppen och nya standarder ställdes in.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Gör till standardgrupp för alla medlemmar',
	'MEMBERS'				=> 'Medlemmar',

	'NO_GROUP'					=> 'Ingen grupp angiven.',
	'NO_GROUPS_CREATED'			=> 'Inga grupper har skapats.',
	'NO_PERMISSIONS'			=> 'Kopiera inte behörigheter',
	'NO_USERS'					=> 'Du angav inga användare.',
	'NO_USERS_ADDED'			=> 'Inga användare lades till gruppen.',
	'NO_VALID_USERS'			=> 'Du har inte angett några användare som det går att utföra den handlingen på.',

	'SPECIAL_GROUPS'			=> 'Fördefinierade grupper',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Fördefinierade grupper är speciella grupper, de kan inte tas bort eller ändras direkt. Du kan dock fortfarande lägga till användare och ändra grundläggande inställningar.',

	'TOTAL_MEMBERS'				=> 'Medlemmar',

	'USERS_APPROVED'				=> 'Användarna godkändes.',
	'USER_DEFAULT'					=> 'Användarens standardtitel',
	'USER_DEF_GROUPS'				=> 'Användardefinierade grupper',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Dessa grupper skapades av dig eller en annan administratör på detta forum. Du kan hantera medlemskap och ändra gruppinställningar eller till och med ta bort gruppen.',
	'USER_GROUP_DEFAULT'			=> 'Sätt som standardgrupp',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Om du sätter ja här kommer denna grupp att sättas som standardgrupp för de användare du lägger till.',
	'USER_GROUP_LEADER'				=> 'Sätt som gruppledare',
));

?>