<?php
/** 
*
* acp_modules [Swedish] (phpBB 3.0.11)
*
* @package language
* @version $Id: modules.php 2 2010-06-24 01:12:10Z tumba25 $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Här kan du hantera alla moduler. Kom ihåg att administrationspanelen har en menystruktur i tre nivåer (Kategori -> Kategori -> Modul) när de andra har en menystruktur i två nivåer (Kategori -> Modul) som måste behållas. Kom ihåg att du kan låsa ute dig själv om du inaktiverar eller tar bort de moduler som ansvarar för modulhanteringen självt.',
	'ADD_MODULE'					=> 'Lägg till modul',
	'ADD_MODULE_CONFIRM'			=> 'Är du säker på att du vill lägga till den valda modulen med det valda läget?',
	'ADD_MODULE_TITLE'				=> 'Lägg till modul',

	'CANNOT_REMOVE_MODULE'	=> 'Kunde inte ta bort modul, den har tilldelade underliggande moduler. Ta bort eller flytta alla underliggande moduler innan du utför denna handling.',
	'CATEGORY'				=> 'Kategori',
	'CHOOSE_MODE'			=> 'Välj modulläge',
	'CHOOSE_MODE_EXPLAIN'	=> 'Välj det modulläge som ska användas.',
	'CHOOSE_MODULE'			=> 'Välj modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Välj filen som ska anropas av modulen.',
	'CREATE_MODULE'			=> 'Skapa ny modul',

	'DEACTIVATED_MODULE'	=> 'Inaktiverad modul',
	'DELETE_MODULE'			=> 'Ta bort modul',
	'DELETE_MODULE_CONFIRM'	=> 'Är du säker på att du vill ta bort denna modul?',

	'EDIT_MODULE'			=> 'Redigera modul',
	'EDIT_MODULE_EXPLAIN'	=> 'Här kan du ange modulspecifika inställningar.',

	'HIDDEN_MODULE'			=> 'Dold modul',

	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'Modulen lades till.',
	'MODULE_DELETED'			=> 'Modulen togs bort.',
	'MODULE_DISPLAYED'			=> 'Modulen visas',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Om du inte vill visa denna modul, men använda den, ställ in detta till nej.',
	'MODULE_EDITED'				=> 'Modulen ändrades.',
	'MODULE_ENABLED'			=> 'Modul aktiverad',
	'MODULE_LANGNAME'			=> 'Modulspråknamn',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Ange det modulnamn som ska visas. Använd språkkonstant om namnet ska hämtas från språkfilen.',
	'MODULE_TYPE'				=> 'Modultyp',

	'NO_CATEGORY_TO_MODULE'	=> 'Kunde inte göra om kategori till modul. Ta bort/flytta alla underliggande moduler innan du utför denna handling.',
	'NO_MODULE'				=> 'Ingen modul hittades.',
	'NO_MODULE_ID'			=> 'Inget modul-id specificerat.',
	'NO_MODULE_LANGNAME'	=> 'Inget modulspråknamn specificerat.',
	'NO_PARENT'				=> 'Ingen ovanliggande modul',

	'PARENT'				=> 'Ovanliggande modul',
	'PARENT_NO_EXIST'		=> 'Ovanliggande modul finns inte.',

	'SELECT_MODULE'			=> 'Välj en modul',
));

?>