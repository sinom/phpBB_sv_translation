<?php
/**
*
* acp_email [Swedish] (phpBB 3.0.10)
*
* @package language
* @version $Id: email.php 36 2012-06-27 08:50:58Z Peetra.mammapappa $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Här kan du skicka ett meddelande till antingen alla användare eller alla användare i en specifik grupp <strong>som har inställningen att ta emot massutskick aktiverad</strong>. Ett e-postmeddelande kommer att skickas ut till den angivna administrativa e-postadressen med en hemlig kopia till alla mottagare. Grundinställningen är att endast inkludera 50 mottagare i ett sådant e-postmeddelande, om det är fler mottagare än så kommer fler e-postmeddelanden att skickas ut. Ha tålamod om du skickar till ett stort antal användare och stoppa inte sidladdningen halvvägs igenom. Det är normalt att det tar lång tid för massutskick att skickas ut, du kommer att underrättas när skriptet har körts färdigt.',
	'ALL_USERS'						=> 'Alla användare',

	'COMPOSE'				=> 'Skriv',

	'EMAIL_SEND_ERROR'		=> 'Det uppstod ett eller fler fel när meddelandet skulle skickas. Titta i %sfelloggen%s för detaljerade felmeddelanden.',
	'EMAIL_SENT'			=> 'Meddelandet skickades.',
	'EMAIL_SENT_QUEUE'		=> 'Detta meddelande står i kö för att skickas.',

	'LOG_SESSION'			=> 'Logga e-postsessionen till den kritiska loggen',

	'SEND_IMMEDIATELY'		=> 'Skicka omedelbart',
	'SEND_TO_GROUP'			=> 'Skicka till grupp',
	'SEND_TO_USERS'			=> 'Skicka till användare',
	'SEND_TO_USERS_EXPLAIN'	=> 'Genom att skriva in namn här så åsidosätter du eventuellt val av grupp ovan. Skriv ett användarnamn per rad.',

	'MAIL_BANNED'			=> 'Användare, som är bannade via sin e-postadress',
	'MAIL_BANNED_EXPLAIN'	=> 'Då man sänder ett massutskick till en grupp, kan man välja ifall bannade användare också ska få e-postbrevet.',
	'MAIL_HIGH_PRIORITY'	=> 'Hög',
	'MAIL_LOW_PRIORITY'		=> 'Låg',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Meddelandeprioritet',
	'MASS_MESSAGE'			=> 'Ditt meddelande',
	'MASS_MESSAGE_EXPLAIN'	=> 'Kom ihåg att du här endast kan skriva oformaterad text. All formatering kommer att tas bort innan meddelandet skickas.',

	'NO_EMAIL_MESSAGE'		=> 'Du måste skriva ett meddelande.',
	'NO_EMAIL_SUBJECT'		=> 'Du måste ange ett ämne för ditt meddelande.',
));

?>