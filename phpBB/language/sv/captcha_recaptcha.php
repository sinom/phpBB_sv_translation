<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2024 Swedish translation group.
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
	$lang = [];
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

$lang = array_merge($lang, [
	'RECAPTCHA_LANG'				=> 'sv-SE',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Du behöver ett konto på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> för att kunna använda reCaptcha.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',

	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'sv-SE',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Den visuella konfirmationskoden som du angav är felaktig',
	'RECAPTCHA_NOSCRIPT'				=> 'Vänligen aktivera JavaScript i din webbläsare för att ladda reCaptcha.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'Du behöver ett konto på <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> för att kunna använda reCaptcha.',
	'RECAPTCHA_INVISIBLE'				=> 'Denna CAPTCHA är faktiskt osynlig. För att verifiera att det fungerar bör en liten ikon visas i det nedre högra hörnet av denna sida.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Du har överskridit maximalt antal tillåtna inloggningsförsök. <br> Förutom ditt användarnamn och lösenord kommer den osynliga reCAPTCHA v3 att användas för att autentisera din session.',

	'RECAPTCHA_PUBLIC'				=> 'Site key',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Din sid-reCaptcha nyckel. Nycklar kan erhållas på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Använd reCAPTCHA v2 &gt; Osynlig typ av reCAPTCHA-märke.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Din webbplats reCAPTCHA-nyckel. Nycklar kan erhållas på <a href="https://www.google.com/recaptcha"> www.google.com/recaptcha </a>. Använd reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Secret key',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Din hemliga reCaptcha nyckel. Nycklar kan erhållas på <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> Använd reCAPTCHA v2 &gt; Osynlig typ av reCAPTCHA-märke.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Din hemliga reCAPTCHA-nyckel. Nycklar kan erhållas på <a href="https://www.google.com/recaptcha"> www.google.com/recaptcha </a>. Använd reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Begär domän',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'The domain to fetch the script from and to use when verifying the request.<br>Use <samp>recaptcha.net</samp> when <samp>google.com</samp> is not accessible.',

	'RECAPTCHA_V3_METHOD'				=> 'Request method',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Domänen att hämta skriptet från och att använda vid verifiering av begäran. <br> Använd <samp> recaptcha.net </samp> när <samp> google.com </samp> inte är tillgängligt.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Standardgräns',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Används när ingen av de andra åtgärderna är tillämpliga.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Inloggningströskel',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Inläggströskel',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Registreringströskel',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Rapporteringströskel',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Trösklar',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 returnerar en poäng (<samp> 1.0 </samp> är mycket troligt en bra interaktion, <samp> 0.0 </samp> är mycket troligt en bot). Här kan du ställa in minsta poäng per åtgärd.',

	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 kräver att veta vilken tillgänglig metod du vill använda när du verifierar begäran.',
]);
