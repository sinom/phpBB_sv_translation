<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2025 Swedish translation group.
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
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Visa bilder i inlägg',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Introduktion',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Skapa länkar',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Skapa listor',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Andra frågor',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Citering och utskrift av text med fixerad bredd',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Textformatering',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Bilagor kan placeras på vilken plats som helst i inlägg genom att använda <strong>[attachment=][/attachment]</strong>-taggen, om bilagefunktionen aktiverats av administratören och du har behörighet att bifoga filer. Vid postningsformuläret finns en listruta (och en knapp) för att placera bilagor inom inlägget.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Lägga till bilagor i inlägg',

	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode innehåller en tagg för att infoga bilder i dina inlägg. Två väldigt viktiga saker att komma ihåg när denna tagg används är: många användare uppskattar inte många bilder i inlägg och för det andra så måste bilden redan finnas på Internet (den kan alltså inte finnas enbart på din dator, såvida din dator inte är en webbserver!). För att visa en bild innesluter du URL:en till bilden med <strong>[img][/img]</strong>-taggar. Till exempel:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Som noterat i URL-delen ovan k an du innesluta en bild i en <strong>[url][/url]</strong>-tagg om du så önskar, t.ex.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />som skulle resultera i:<br /><br />',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Lägg till en bild i ett inlägg',



	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode är en speciell variant av HTML. Huruvida du kan använda BBCode, i dina inlägg på forumet, eller inte bestäms av administratören. Dessutom kan du inaktivera BBCode i specifika inlägg via inläggsformuläret. BBCode liknar HTML, taggar innesluts av hakparanteser [ och ] istället för &lt; och &gt; och det ger större kontroll över vad och hur saker och ting visas. Du kan lägga till BBCode till dina inlägg genom ett klickbart gränssnitt (knappar) ovanför meddelanderutan i inläggsformuläret.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Vad är BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBCode har stöd för flera sätt för att skapa URI:er (Uniform Resource Indicators) mer kända som URL:er.<ul><li>Det första av dessa sätt använder <strong>[url=][/url]</strong>-taggen, vad du än skriver in efter =-tecknet kommer att göra att innehållet av den taggen att blir till en URL. Till exempel för att länka till phpBB.com kan du använda:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Besök phpBB!<strong>[/url]</strong><br /><br />Detta skulle skapa följande länk, <a href="http://www.phpbb.com/">Besök phpBB!</a> Observera att länken öppnas i samma ruta eller i en ny ruta beroende på användarens webbläsarinställningar.</li><li>Om du vill att URL:en själv ska visas som länk kan du använda:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Detta skulle skapa följande länk, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Dessutom finns en funktion i phpBB som kallas <i>magiska länkar</i> som automatiskt gör om alla giltiga URL:er till länkar utan att du behöver skriva några taggar eller ens det inledande http://. Pröva till exempel att skriva www.phpbb.com i ditt meddelande, detta kommer automatiskt resultera i att <a href="http://www.phpbb.com/">www.phpbb.com</a> skrivs ut när du visar meddelandet.</li><li>Samma sak gäller e-postadresser, du kan antingen ange en adress explicit genom:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />som kommer att resultera i <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> eller så kan du helt enkelt skriva no.one@domain.adr i ditt meddelande och det kommer automatiskt konverteras till en e-postlänk.</li></ul>Som med alla BBCode-taggar kan du innesluta URL:er runt andra taggar som till exempel <strong>[img][/img]</strong> (se nästa post), <strong>[b][/b]</strong>, osv. Som med formateringstaggar är det upp till dig att försäkra dig om att taggar öppnas och stängs i rätt ordning, till exempel:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />är <span style="text-decoration: underline">inte</span> korrekt och kan leda till att ditt inlägg tas bort så var försiktig.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Länka till en annan webbplats',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Den andra typen av lista, ordnad lista, ger dig kontroll över vad som skrivs ut före varje post. För att skapa en ordnad lista använder du <strong>[list=1][/list]</strong> för att skapa en numrerad lista eller alternativt <strong>[list=a][/list]</strong> för en alfabetisk lista. Som med oordnade listor definieras listposter med <strong>[*]</strong>. Till exempel:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Gå till affären<br /><strong>[*]</strong>Köp en ny dator<br /><strong>[*]</strong>Svär år datorn när den kraschar<br /><strong>[/list]</strong><br /><br />resulterar i följande:<ol style="list-style-type: decimal;"><li>Gå till affären</li><li>Köp en ny dator</li><li>Svär år datorn när den kraschar</li></ol>För en alfabetisk lista använder du:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Det första möjliga svaret<br /><strong>[*]</strong>Det andra möjliga svaret<br /><strong>[*]</strong>Det tredje möjliga svaret<br /><strong>[/list]</strong><br /><br />som resulterar i <ol style="list-style-type: lower-alpha"><li>Det första möjliga svaret</li><li>Det andra möjliga svaret</li><li>Det tredje möjliga svaret</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Skapa en ordnad lista',

	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode har stöd för två typer av listor, oordnade och ordnade. De är i huvudsak likadana som sina HTML-motsvarigheter. En oordnad lista skriver ut varje post i listan efter varandra indraget med ett kultecken. För att skapa en oordnad lista använder du <strong>[list][/list]</strong> och definierar varje post i listan med <strong>[*]</strong>. Till exempel för att lista dina favoritfärger kan du använda:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Röd<br /><strong>[*]</strong>Blå<br /><strong>[*]</strong>Gul<br /><strong>[/list]</strong><br /><br />Detta skulle skapa följande lista:<ul><li>Röd</li><li>Blå</li><li>Gul</li></ul>',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Skapa en oordnad lista',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Om du är detta forums administratör och har behörighet så kan du lägga till ytterligare BBCodes genom egna BBcodes-sektionen.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Kan jag lägga till egna taggar?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Om du vill skriva ut en bit kod eller någonting annat som kräver fixerad bredd, t.ex. Couriertypsnittet så innesluter du den texten i <strong>[code][/code]</strong>-taggar, t.ex.<br /><br /><strong>[code]</strong>echo &quot;Detta är lite kod&quot;;<strong>[/code]</strong><br /><br />All formatering som används inom <strong>[code][/code]</strong>-taggar bibehålls när du senare visar den. Framhävning av PHP-syntaxen kan aktiveras genom <strong>[code=php][/code]</strong> och rekommenderas för PHP-kodexempel eftersom att det ökar läsbarheten.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Utskrift av kod eller text med fixerad bredd',

	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Det finns två sätt du kan citera text, med eller utan en hänvisning.<ul><li>När du använder citeringsfunktionen för att svara på ett inlägg så kommer du att upptäcka att inläggstexten läggs till i meddelanderutan inneslutet i <strong>[quote=&quot;&quot;][/quote]</strong>. Denna metod låter dig citera med hänvisning till en person eller vad du nu väljer att sätta dit! Till exempel, för att citera en bit av Herr Blobbys text skulle du skriva:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Texten Herr Blobby skrev ska stå här<strong>[/quote]</strong><br /><br />Den resulterande utskriften kommer automatiskt att lägga till “Herr Blobby skrev:” före texten. Kom ihåg att du <strong>måste</strong> inkludera citattecken "" runt namnet du citerar, de är inte valfria.</li><li>Den andra metoden låter dig citera någonting utan hänvisning. För att använda detta inneslut texten i <strong>[quote][/quote]</strong>-taggar. När du visar meddelandet kommer texten visas inom en citeringsruta.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Citering av text i svar',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode innehåller taggar som låter dig snabbt byta grundstil på din text. Detta görs på följande sätt: <ul><li>För att göra en bit text till fet, inneslut den med <strong>[b][/b]</strong>, t.ex. <br /><br /><strong>[b]</strong>Hej<strong>[/b]</strong><br /><br />som blir <strong>Hej</strong></li><li>För understruken text använd <strong>[u][/u]</strong>, t.ex.:<br /><br /><strong>[u]</strong>God morgon<strong>[/u]</strong><br /><br />som blir <span style="text-decoration: underline">God morgon</span></li><li>För att kursivera text använd <strong>[i][/i]</strong>, t.ex.<br /><br />Detta är <strong>[i]</strong>suveränt!<strong>[/i]</strong><br /><br />som blir Detta är <i>suveränt!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Hur man skapar fet, kursiv och understruken text',

	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'För att ändra färgen eller storleken på din text kan följande taggar användas. Kom ihåg att det kommer att se olika ut beroende på webbläsare och operativsystem: <ul><li>För att ändra färgen på text innesluter du den med <strong>[color=][/color]</strong>. Du kan antingen ange ett namn på en färg (t.ex. red, blue, yellow, osv.) eller det hexadecimala värdet för en färg, t.ex. #FFFFFF, #000000. För att skapa röd text gör du till exempel så här:<br /><br /><strong>[color=red]</strong>Hej!<strong>[/color]</strong><br /><br />eller<br /><br /><strong>[color=#FF0000]</strong>Hej!<strong>[/color]</strong><br /><br />Båda kommer att bli <span style="color:red">Hej!</span></li><li>För att ändra textstorleken används <strong>[size=][/size]</strong>. Denna tagg är beroende av forumstilen användaren har valt men det rekommenderade formatet är ett numerisk värde som representerar textstorleken i procent, från 20 (väldigt litet) till 200 (väldigt stort). Till exempel:<br /><br /><strong>[size=30]</strong>LITET<strong>[/size]</strong><br /><br />blir i normala fall <span style="font-size:30%;">LITET</span><br /><br />medan:<br /><br /><strong>[size=200]</strong>STORT!<strong>[/size]</strong><br /><br />blir <span style="font-size:200%;">STORT!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Hur man ändrar färgen och storleken på texten',

	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Självklart! För att dra till dig uppmärksamhet kan du till exempel skriva:<br /><br /><strong>[size=200][color=red][b]</strong>TITTA PÅ MIG!<strong>[/b][/color][/size]</strong><br /><br />vilket kommer bli <span style="color:red;font-size:200%;"><strong>TITTA PÅ MIG!</strong></span><br /><br />Vi rekommenderar dock inte att du använder mycket text som ser ut på det här viset! Kom ihåg att det är upp till dig, författaren, att försäkra dig om att taggar stängs korrekt. Till exempel är följande felaktigt:<br /><br /><strong>[b][u]</strong>Detta är felaktigt<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Kan jag kombinera formateringstaggar?',
));
