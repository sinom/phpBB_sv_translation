<?php
/** 
*
* viewforum [Swedish]  (phpBB 3.0.10)
*
* @package language
* @version $Id: viewforum.php 25 2010-11-27 18:50:18Z Peetra.mammapappa $
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
	'ACTIVE_TOPICS'			=> 'Aktiva trådar',
	'ANNOUNCEMENTS'			=> 'Anslag',

	'FORUM_PERMISSIONS'		=> 'Kategoribehörigheter',

	'ICON_ANNOUNCEMENT'		=> 'Anslag',
	'ICON_STICKY'			=> 'Notis',

	'LOGIN_NOTIFY_FORUM'	=> 'Du har underrättats om denna kategori, logga in för att visa den.',

	'MARK_TOPICS_READ'		=> 'Markera alla trådar som lästa',

	'NEW_POSTS_HOT'			=> 'Nya inlägg [ Populär ]', // Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Nya inlägg [ Låst ]', // Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Inga nya inlägg [ Populär ]', // Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Inga nya inlägg [ Låst ]', // Not used anymore
	'NO_READ_ACCESS'		=> 'Du har inte behörighet att läsa trådar i denna kategori.',
	'NO_UNREAD_POSTS_HOT'		=> 'Olästa inlägg [ Populär ]',
	'NO_UNREAD_POSTS_LOCKED'		=> 'Olästa inlägg [ Låst ]',

	'POST_FORUM_LOCKED'		=> 'Kategorin är låst',

	'UNREAD_POSTS_HOT'		=> 'Olästa inlägg [ Populär ]',
	'UNREAD_POSTS_LOCKED'	=> 'Olästa inlägg [ Låst ]',

	'TOPICS_MARKED'			=> 'Trådarna i denna kategori märktes som lästa.',

	'VIEW_FORUM'			=> 'Visa kategori',
	'VIEW_FORUM_TOPIC'		=> '1 tråd',
	'VIEW_FORUM_TOPICS'		=> '%d trådar',
));
?>
