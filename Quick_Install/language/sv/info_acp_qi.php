<?php
/**
*
* qi [Swedish]
*
* @package		QuickInstall
* @version		$Id$
* @copyright	(c) 2007, 2008 eviL3
* @copyright	(c) 2010 Jari Kanerva (tumba25)
* @translation	2010 - 2011 Sinom & Peetra @ http://phpbb-se.com
* @license		http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Installerad av phpBB´s Snabbinstallation - version %s</strong>',
));

?>
