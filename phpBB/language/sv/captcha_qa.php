<?php
/**
*
* captcha_qa[Swedish] (phpBB 3.0.10)
*
* @package language
* @version $Id: captcha_qa.php 20 2010-11-27 17:06:46Z Peetra.mammapappa $
* @copyright (c) 2006 phpBB Group, modified and translated by Swedish translation team
* @source file is copyright (c) 2005 phpBB Group, modified and translated by Swedish translation team
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
* @author (c) 2009-2012 Peetra
* Translators: Swedish translation team, working at http://www.phpbb-se.com Contact translation team leader at peetra.mammapappa@gmail.com
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
	'CAPTCHA_QA'			=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Den här frågan är till för att förebygga automatiska registreringar.',
	'CONFIRM_QUESTION_WRONG'	=> 'Du har tillhandahållit ett felaktigt svar på frågan.',

	'QUESTION_ANSWERS'		=> 'Svar',
	'ANSWERS_EXPLAIN'		=> 'Var god och ange korrekta svar på frågan',
	'CONFIRM_QUESTION'		=> 'Fråga',

	'ANSWER'			=> 'Svar',
	'EDIT_QUESTION'			=> 'Redigera fråga',
	'QUESTIONS'			=> 'Frågor',
	'QUESTIONS_EXPLAIN'		=> 'För varje fält där Q&amp;A pluginet är aktiverat, kommer en utav de frågor ställas till användaren här. För att använda detta tillägg, måste åtminstone en fråga vara tillgänglig på forumets standardspråk. Dessa frågor bör vara enkla för din målgrupp att besvara, men omöjliga att besvara genom en automatisk robotsökning med Google™. Det bästa resultatet uppnår du genom att använda ett stort urval frågor, som regelbundet bytes ut. Aktivera strikt kontroll, om din fråga baserar sig på skrivning med stor begynnelsebokstav, kommatering eller blanktecken.',
	'QUESTION_DELETED'		=> 'Frågan togs bort',
	'QUESTION_LANG'		=> 'Språk',
	'QUESTION_LANG_EXPLAIN'		=> 'Språket, som den här frågan, med tillhörnade svar är skrivet på.',
	'QUESTION_STRICT'	=> 'Strikt kontroll',
	'QUESTION_STRICT_EXPLAIN'	=> 'Aktivera för att påtvinga blandning av versaler och gemener, samt skilje och interpunktionstecken.',

	'QUESTION_TEXT'		=> 'Fråga',
	'QUESTION_TEXT_EXPLAIN'		=> 'Frågan som ställs till användaren.',

	'QA_ERROR_MSG'				=> 'Var god fyll i alla fält och ange minst ett svar.',
	'QA_LAST_QUESTION'			=> 'Du kan inte ta bort alla frågor medan tillägget är aktivt.',
));

?>
