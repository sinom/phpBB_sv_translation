<?php
/**
*
* capcha_recaptcha[Swedish] (phpBB 3.0.10)
*
* @package language
* @version $Id: captcha_recaptcha.php 36 2012-06-27 08:50:58Z Peetra.mammapappa $
* @copyright (c) 2006 phpBB Group, modified and translated by Swedish translation team
* @source file is copyright (c) 2005 phpBB Group, modified and translated by Swedish translation team
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
* @author (c) 2008-2012 Peetra
* Translators: Swedish translation team, working at http://www.phpbb-se.com contact translation team leader at peetra.mammapappa@gmail.com
*
* This file is part of the Swedish language package for phpBB 3.0.x.
* Copyright (c) 2006-2012 Swedish translation team
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
	'RECAPTCHA_LANG'				=> 'en',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Du behöver ett konto på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> för att kunna använda reCaptcha.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Den visuella konfirmationskoden som du angav är felaktig',

	'RECAPTCHA_PUBLIC'				=> 'Public reCaptcha key',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Din publika reCaptcha nyckel. Nycklar kan erhållas på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Private reCaptcha key',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Din privata reCaptcha nyckel. Nycklar kan erhållas på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>',

	'RECAPTCHA_EXPLAIN'				=> 'För att förhindra automatiska registreringar så kräver forumet att du skriver in en verifieringskod. Koden visas i bilden nedan.',
));

?>
