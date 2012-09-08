<?php
/** 
*
* acp_database [Swedish] (phpBB 3.0.10)
*
* @package language
* @version $Id: database.php 2 2010-06-24 01:12:10Z tumba25 $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Här kan du säkerhetskopiera all din phpBB-relaterad data. Du kan lagra det resulterande arkivet i din <samp>store/</samp> mapp eller ladda ner det direkt. Beroende på din serverkonfiguration kan du komprimera filen i ett antal olika format.',
	'ACP_RESTORE_EXPLAIN'	=> 'Detta kommer att utföra en fullständig återställning av alla phpBB-tabeller från en sparad fil. Om din server stödjer det kan du använda en gzip eller bzip2-komprimerad textfil och den kommer automatiskt packas upp. <strong>VARNING</strong> Detta kommer att skriva över all befintlig data. Återställning kan ta lång tid så lämna inte denna sida förrän den är slutförd. Säkerhetskopior lagras i <samp>store/</samp>-mappen och antas ha skapats av phpBBs säkerhetskopieringsfunktion. Återställning av säkerhetskopior som inte skapats av det inbyggda systemet kanske inte fungerar.',

	'BACKUP_DELETE'		=> 'Säkerhetskopian togs bort.',
	'BACKUP_INVALID'	=> 'Den valda säkerhetskopian är ogiltig.',
	'BACKUP_OPTIONS'	=> 'Säkerhetskopieringsalternativ',
	'BACKUP_SUCCESS'	=> 'Säkerhetskopian skapades.',
	'BACKUP_TYPE'		=> 'Typ av säkerhetskopiering',

	'DATABASE'					=> 'Databasverktyg',
	'DATA_ONLY'					=> 'Endast data',
	'DELETE_BACKUP'				=> 'Ta bort säkerhetskopia',
 	'DELETE_SELECTED_BACKUP'	=> 'Är du säker på att du vill ta bort den valda säkerhetskopian?',
	'DESELECT_ALL'				=> 'Avmarkera alla',
	'DOWNLOAD_BACKUP'			=> 'Ladda ner säkerhetskopia',

	'FILE_TYPE'			=> 'Filtyp',
	'FILE_WRITE_FAIL'	=> 'Kan inte skriva till katalogen store/.',
	'FULL_BACKUP'		=> 'Fullständig',

	'RESTORE_FAILURE'		=> 'Säkerhetskopian kan vara korrupt.',
	'RESTORE_OPTIONS'		=> 'Återställningsalternativ',
	'RESTORE_SUCCESS'		=> 'Databasen återställdes.<br /><br />Ditt forum bör nu vara återställt till det skick som det var i innan säkerhetskopieringen gjordes.',
	'RESTORE_SELECTED_BACKUP'	=> 'Är du säker på att du vill återställa vald backup?',


 	'SELECT_ALL'			=> 'Välj alla',
	'SELECT_FILE'			=> 'Välj en fil',
	'START_BACKUP'			=> 'Starta säkerhetskopieringen',
	'START_RESTORE'			=> 'Starta återställningen',
	'STORE_AND_DOWNLOAD'	=> 'Lagra och ladda ner',
	'STORE_LOCAL'			=> 'Lagra filen lokalt',
	'STRUCTURE_ONLY'		=> 'Endast struktur',

	'TABLE_SELECT'		=> 'Välj tabeller',
	'TABLE_SELECT_ERROR'=> 'Du måste välja minst en tabell.',
));

?>