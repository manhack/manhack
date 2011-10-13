<?php

if (getenv("QUERY_STRING")!="") {
        $qs=getenv("QUERY_STRING");
}
if (substr($qs,0,7)=="http://") {
        $qs=substr($qs,7);
}

if ($setdefault)
{
  $qs = $setdefault ;
}

?>

<html>
<head>
  <title>manhack.net./ WHOIS &amp; Cie</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  
  <meta name="Description" content="manhack.net permet d'utiliser plus de 500 fonctionnalités de quelques 300 moteurs de recherche et bases de données à partir d'une seule et même interface, en quelques clics." />

  <meta name="keywords" content="whois, moteurs de recherche, bases de données, archives, intelligence économique, veille stratégique, journalisme, journaliste, recherche, recouper, valider, validation, vérifier, information, outil, sidebar, panel, signaux faibles, rewriting.net, jean marc manach" />
  
  <script type="text/javascript" src="textsizer.js">
  </script> 
  
      <script type="text/javascript" src="onlyone.js"></script>
  
           
<script type="text/javascript" src="searchbox.js"></script>  
<script type="text/javascript">
var textbox = "false";
</script>

<script type="text/javascript" language="Javascript">
function go(s) {
 if (document.f.t.value) { window.open ("http://" + s + document.f.t.value, "messageWindow",
 "location=yes,menubar=yes,scrollbars=yes,titlebar=yes,toolbar=yes,status=yes,resizable=yes"); }
 else { alert("Merci d'entrer une URL dans la case ci-dessus"); }
}
function gw(s) {
 if (document.f.t.value) { window.open ("http://" + s + dom(), "messageWindow",
 "location=yes,menubar=yes,scrollbars=yes,titlebar=yes,toolbar=yes,status=yes,resizable=yes"); }
 else { alert("Merci d'entrer une URL dans la case ci-dessus"); }
}

function gs(s) {
 if (!document.f.t.value) { alert("Merci d'entrer une URL dans la case ci-dessus"); }
 else if (!document.f.q.value) { alert("Merci d'entrer des mots-clefs dans la case prévue à cet effet"); }
 else {
  var domain = dom();
  window.open ("http://" + s + domain + " " + document.f.q.value, "messageWindow",
  "location=yes,menubar=yes,scrollbars=yes,titlebar=yes,toolbar=yes,status=yes,resizable=yes");
 }
}
function gt(tool) {
 if (!document.f.t.value) { alert("Merci d'entrer une URL dans la case ci-dessus"); }
 else if (tool=="google") { window.open ("http://translate.google.com/translate?u=http://" + document.f.t.value + "&langpair=" + document.f.langpair.value,
 "messageWindow", "location=yes,menubar=yes,scrollbars=yes,titlebar=yes,toolbar=yes,status=yes,resizable=yes"); }
}
function dom() {
 var u = document.f.t.value;
 if (u.indexOf("/")>-1) { u = u.substring(0,u.indexOf("/")); }
 return u;
}
function go_google(s) {
   if (document.f.t.value) {
     var domaine = dom() ;
     if (domaine.indexOf ("www.") > -1)
     {
       domaine = domaine.substring (4, domaine.length) ;
     }
     window.open ("http://" + s + domaine, "messageWindow", "location=yes,menubar=yes,scrollbars=yes,titlebar=yes,toolbar=yes,status=yes,resizable=yes");
   }
   else { alert("Merci d'entrer une URL dans la case ci-dessus");  }
 }

function show() {
 var sp = parent.location.href.indexOf("?http://");
 if (sp != -1) {
  document.f.t.value = parent.location.href.substring( sp+8, parent.location.href.length );
  go("");
 }
}
function check() {
 if (document.f.t.value.toLowerCase().indexOf("http://")>-1) {
  alert("Merci d'enlever 'http://' de l'URL");
  document.f.t.focus();
 }
}
</script>        



<!--
<br /> <b>Bookmarklet :</b> le lien qui suit vous permettra, d'un simple clic lorsque vous visitez une page web, 
d'entrer son URL dans cette même page, vous économisant ainsi du temps. Il vous suffit pour cela de rajouter 
ce bookmarklet à votre barre de liens (via un glisser-déposer -drag'n drop- ou au moyen du bouton droit de votre souris).
Bookmarklet : <a
href="javascript:void(location.href='http://manhack.net/bar.php?'+location.href)">Whois
&amp; Cie</a>

<br>


<div class="bigger" align="center"><b>Voir aussi la page <a href="bdd.html">Bases de données</a></b></div><br>

 **************** -->



    
</head>

<table cellspacing="0" cellpadding="0" border="0">
<tr>
<!--droite-->
<td valign="top">

<table bgcolor="#eeeeee" width="150" height="100%">
  <tr>
    <td valign="top" height="100%">

<div class="bigger" align="right"><b><a href="http://manhack.net">manhack.net&nbsp;&gt;&gt;</a></b></div>
 
    </td>
  </tr>
</table>

</td>
<td valign="top">


<table>
  <tr>
    <td valign="top" align="left">
	
<div class="bigger"><b>&gt;&gt; WHOIS &amp; Cie</b></div>

<br /><br />

<span class="small">

Une chose est de trouver des informations,
une autre est de les vérifier.

<br /><br />

Cette interface réunit plus de 500 fonctionnalités de quelques 300 moteurs
et bases de données que vous pouvez interroger à partir d'un seul et même
formulaire, en quelques clics.

<br /><br />

Vous pouvez aussi l'installer en mode sidebar/panel/toolbar dans votre
propre navigateur, en un seul clic, afin de pouvoir en profiter quand bon
vous semble : simplicité, rapidité, efficacité...

<br /><br />
<!-- 
<em>"Un must (...) On est pas loin de l'exhaustivité (...) Simply a killer application"</em><br />
Suite de la <a href="http://manhack.net/wiki/index.php?page=RevueDePresse">revue de presse</a> sur le <a href="http://manhack.net/wiki/">wiki</a> de manhack.net.

<br /><br />
-->
Voir aussi : <a
href="http://rewriting.net/2006/05/09/manhacknet-depasse-la-barre-des-500-fonctionnalites/">manhack.net
dépasse la barre des 500 fonctionnalités</a> et,<br />
pour une présentation générique, <a
href="http://rewriting.net/2005/07/06/whois-and-cie-la-veille-simplifiee/">"Whois
& Cie" : la veille (encore) simplifiée</a>, <br />
ainsi que les liens et modes d'emploi qui suivent.


<!--
Cette interface vous permet d'interroger plus de 200 moteurs de recherche et bases de données à partir d'un seul et même formulaire, en quelques clics.

Vous pouvez, soit utiliser le formulaire sis dessus (qui ouvrira de nouvelles fenêtres), <br />
soit utiliser celui de la barre de droite (le résultat apparaîtra dans cette même fenêtre), <br />
soit installer cette "sidebar/panel/toolbar" dans votre navigateur (voir le mode d'emploi).

<br /><br />

<div class="bigger"><b>&gt;&gt; <a href="#mod">Modes d'emploi</a></b></div>

<br />

De quoi pouvoir simplement, et rapidement, recouper et valider les
informations disponibles sur l'internet.

Une chose est de trouver des informations sur l'internet, une autre est de les vérifier, recouper et valider. Les deux prennent du temps, et requièrent l'utilisation d'un plus ou moins grand nombre de moteurs de recherche et bases de données.

Cette interface -que vous pouvez aussi utiliser en mode "panel" ou
"sidebar"- vous permet d'effectuer des recherches concernant une URL ou des mots-clefs sur plus de 200 moteurs et bases de données à partir d'un seul et même formulaire.

-->

<br /><br /><br />

</span>


    </td>
  </tr>
</table>

    </td>
  </tr>
</table>

    </td>
  </tr>
</table>
      

<table cellspacing="0" cellpadding="0" border="0">
<tr>
<!--droite-->
<td valign="top">

<table bgcolor="#eeeeee" width="150" height="100%">
  <tr>
      <td valign="top">
      

<a name="mod"></a>

<div class="bigger" align="right"><b>[typo <a
href="javascript:ts('body',1)">++</a>&gt;|&lt;<a
href="javascript:ts('body',-1)">---</a>]</b></div> 


    </td>
  </tr>
</table>

</td>
<td valign="top">
  
<table height="100%" width="100%">

  <tr>
    <td valign="top" align="left">

<div class="bigger"><b>&gt;&gt;&nbsp;Modes&nbsp;d'emploi&nbsp;&amp;&nbsp;Cie</b></div> 
        
<span class="small">


<ul id="mainnav">
    <li>
Installation
    <ul>
      <li>

Plutôt que d'avoir à revenir sur manhack.net, vous pouvez "installer" son interface de recherche dans votre propre navigateur, en mode sidebar, ou panel (avec <a
href="http://www.mozilla-europe.org/fr/products/firefox/">Firefox</a>, <a href="http://www.opera.com">Opera</a> &amp; <a
href="http://frenchmozilla.sourceforge.net/">Mozilla</a>).

<br /><br />

<b>Firefox :</b>
<script type="text/javascript">
function nsSidebar_l(title,url) {
if (window.sidebar) {
window.sidebar.addPanel(title,url,"")
} else {
alert("Navigateur comptable Mozilla requis pour installer cette sidebar")
}
}
</script>
<a href="#" onclick="nsSidebar_l('Whois&amp;Cie','http://manhack.net/side.php');return false;" 
title="cliquez ici pour installer la sidebar Whois &amp; Co.">cliquez ici</a> pour rajouter un "favori" 
vous permettant, d'un clic, de lancer la version complète de la sidebar,

<script type="text/javascript">
function nsSidebar(title,url) {
if (window.sidebar) {
window.sidebar.addPanel(title,url,"")
} else {
alert("Navigateur comptable Mozilla requis pour installer cette sidebar")
}
}
</script> <a href="#" onclick="nsSidebar('Whois&amp;Cie','http://manhack.net/sidebar.php');return false;" 
title="cliquez ici pour installer la sidebar Whois &amp; Co.">cliquez là</a> pour la version compacte.

<br /><br />

<b>Opera :</b> <a href="http://manhack.net/side.php" rel="sidebar" title="Whois&amp;Cie">cliquez sur ce lien</a>
pour installer la version complète de la sidebar, ou <a href="http://manhack.net/sidebar.php" rel="sidebar" 
title="Whois_l&amp;Cie">sur celui-ci</a> pour le modèle réduit, et vérifiez que la page est bien rajoutée
à votre "panel" (touche <b>F4</b>).

<br /> <br>

<b>Mozilla : </b> cliquez sur le bouton <b>F9</b> pour ouvrir la sidebar, puis
<script language="JavaScript">
function sidebare_l()
{ if ((typeof window.sidebar == "object") &&
      (typeof window.sidebar.addPanel == "function"))
 { window.sidebar.addPanel ("Whois&amp;Cie","http://manhack.net/side.php",""); } } </script>
<a href="javascript:sidebare_l();">sur celui-ci</a> pour la version complète, ou 
<script language="JavaScript">
function sidebare()
{ if ((typeof window.sidebar == "object") &&
      (typeof window.sidebar.addPanel == "function"))
 { window.sidebar.addPanel ("Whois_l&amp;Cie","http://manhack.net/sidebar.php",""); } } </script>
<a href="javascript:sidebare();">sur ce lien</a> pour le modèle réduit.

<br /><br />


<b>Internet Explorer (expérimental) : </b> <a href="javascript:void(_search=open('http://manhack.net/sideIE.php','_search'))" title="manhack.net Sidebar">Cliquez ici</a> pour le lancer dans votre sidebar/panel de Recherche de façon temporaire (il vous faudra répéter l'opération au prochaine démararge d'Internet Explorer); <br />
ou sur le lien qui suit pour l'installer à demeure (via le menu "Affichage -> Volet d'exploration"), ce qui nécessite une modification -automatique, et sans risque, a priori- de la base de registre (voir les explications sur <a href="http://www.howtocreate.co.uk/tutorials/jsexamples/createSidebar.php">howtocreate.co.uk</a>, et un exemple sur <a href="http://twiki.org/cgi-bin/view/Codev/InternetExplorerSidebar">twiki.org</a>); le seul poblème détecté, à ce jour, est qu'une fois désinstallée, il est peut s'avérer difficile de réinstaller la sidebar... <br />
Si quelqu'un a une idée, des suggestions, qu'il ou elle n'hésite pas à <a href="http://jean-marc.manach.net">me contacter</a>.

<br />

<script type="text/javascript" language="javascript1.2"><!--

/************************
     Sidebar panels
http://www.howtocreate.co.uk/tutorials/jsexamples/createSidebar.php
second paragraphe : 
else if( window.opera && window.print ) {
	//Opera 6+; use a regular link with the rel attribute set to 'sidebar' and a title to create a Hotlist panel
	document.write( '<p><a title="manhack.net" rel="sidebar" href="http:\/\/manhack.net\/sideIE.php">Add Hotlist panel<\/a><\/p>' );
}
dernier paragraphe : 
************************
       Bookmarks
************************

if( window.external && ( navigator.platform == 'Win32' || ( window.ScriptEngine && ScriptEngine().indexOf('InScript') + 1 ) ) ) {
	//if the browser supports the 'external' object, you can use it to create bookmarks on Win32
	//checking for AddFavorite produces errors for no good reason, so I use a platform detect
	//iCab also supports the 'external' object but calls the bookmark a 'Hotlist entry'
	document.write( '<p><a href="javascript:window.external.AddFavorite( location.href.replace( \/#.*\/, \'\' ), document.title );">Add ' + ( ( navigator.platform == 'Win32' ) ? 'to favourites' : 'Hotlist entry' ) + '<\/a><\/p>' );
} 

else if( window.opera && document.childNodes ) {
	//use a regular link with the rel attribute set to 'sidebar' and a title
	//this can be added as a bookmark in Opera 7+ instead of a Hotlist panel
	document.write( '<p><a title="'+document.title+'" rel="sidebar" href="'+location.href+'" onclick="alert(\'You will need to untick the \\\'Show in hotlist panel\\\' tickbox\');">Add bookmark<\/a><\/p>' );
}
************************/

if( window.sidebar && window.sidebar.addPanel ) {
	//Gecko; use JavaScript to add the sidebar panel
	document.write( '<p><a href="javascript:window.sidebar.addPanel( \'manhack.net\', \'http:\/\/manhack.net\/sideIE.php\', \'\' );">Add sidebar panel<\/a><\/p>' );
} else if( window.ActiveXObject && navigator.platform == 'Win32' && !navigator.__ice_version ) {
	//IE 4+ (Win); the Explorer Bar panel is a form of registry controlled ActiveX control, so test for ActiveX and Windows
	//ICEbrowser also fakes certain activeX abilities, so I will hide it from this script
	//installation requires registry changes - I simply use two .reg files - one to install, one to uninstall
	document.write( '<p><a href="SidebarPanel.reg">Install Explorer Bar panel<\/a>' );
	document.write( ' | <a href="UninstallSidebarPanel.reg">Uninstall Explorer Bar panel<\/a><\/p>' );
} else if( window.ActiveXObject && navigator.platform.indexOf('Mac') + 1 && !navigator.__ice_version && ( !window.ScriptEngine || ScriptEngine().indexOf('InScript') == -1 ) ) {
	//IE 4+ (Mac); the page can be manually added to the Page Holder - open the page for them to add it
	document.write( '<p><a href="http:\/\/manhack.net\/sideIE.php" onclick="window.alert(\'Once the page has loaded, open your Page Holder, click \\\'Add\\\' then use the Page Holder Favorites button to store it as a Page Holder Favourite.\');" target="_blank">Install Page Holder panel<\/a><\/p>' );
}

/************************
        Homepage
************************/

if( document.all && document.all[0] && document.all[0].addBehavior && !navigator.__ice_version ) {
	//if the first tag in the document provides behaviour methods, you can use behaviours to set the homepage
	//ICEbrowser also fakes certain behaviour abilities, so I will hide it from this script
	document.write( '<p><a href="javascript:window.alert(\'Attempt to set homepage failed.\\nPlease click the link normally.\');" onclick="this.addBehavior(\'#default#homePage\');this.setHomePage(\'http:\/\/manhack.net\');return false;" onmouseover="window.status=\'setHomePage();\';return true;" onmouseout="window.status=window.defaultStatus;">Set this site as your homepage<\/a><\/p>' );
}

//--></script>

<br /><br />

</li>
</ul>
</li>
  <li>
Introduction
    <ul>
      <li>

Pour effectuer une recherche avec manhack, entrez l'URL, le ou les mot(s) clef(s) qui vous intriguent dans le champ idoine; puis, cliquez sur l'une des rubriques pour en dérouler le menu, et les possiblités; cliquez enfin sur le ou les moteurs de recherche de votre choix afin d'obtenir le résultat, et voilà.

<br /><br />

En plaçant votre souris sur les noms ou accronymes des moteurs de recherche indexés, une présentation succinte devrait a priori apparaître sous le pointeur. Les signes <b>typo ++&gt;|&lt;---</b> permettent quant à eux de grossir, ou rapetisser, les caractères. Votre navigateur doit être configuré pour autoriser le <b>javascript</b>. 

<br><br>

Le bouton <b>go</b> permet de visiter la page dont vous avez entrez l'URL dans le formulaire, <b>goo</b> permet d'effectuer une recherche sur Google, <b>Anon</b> de visiter la page au travers d'un proxy anonymisant, <b>en&gt;fr</b> de traduire de l'anglais au français, <b>int</b> d'interroger d'autres traducteurs multilingues.

<br /><br />

      </li>
    </ul>

  </li>
<li>
Historique
    <ul>
      <li>

Cette interface, dérivée de l'<a  href="http://www.faganfinder.com/urlinfo/">URLinfo</a> de l'excellent <a href="http://www.faganfinder">FaganFinder</a>, a initialement été créée pour répondre à mes propres besoins de <a href="http://jean-marc.manach.net">journaliste</a>, avant qu'elle n'intègre les services &amp; outils proposés par <a
href="http://transfert.net/demo.php">Transfert.net</a>, qui a depuis fermé.<br /><br />

J'ai donc repris mes billes. Work in progress, elle est régulièrement mise à jour, au fur et à mesure des outils et moteurs que je découvre, ou que l'on me propose d'intégrer (n'hésitez pas, à ce titre, à <a href="http://jean-marc.manach.net">me contacter</a>).

<br /><br />

      </li>
    </ul>
  </li>
  <li>
Rubriques
    <ul>
      <li>

La rubrique <b>Administrativa</b> vous permet d'obtenir moult informations au sujet d'une <b>URL</b> (et non de mots-clefs, contrairement aux autres rubriques) : coordonnées du détenteur d'un nom de domaine, de ses prestataires techniques, tests techniques (ping, lookup, trace, conformité aux standards du W3C, etc.), son (éventuelle) déclaration à la CNIL, popularité (Alexa &amp; Page Rank), référencement, homonymies (à partir d'un mot-clef), cybersquattings, piratages, accusations de spamming, archives,
etc.

<br><br>

<b>Sur le web</b> et <b>Dans les actus</b> permettent d'interroger plusieurs dizaines de (méta)moteurs de recherche anglo-saxons et français. <b>Réf.</b> agrège un certain nombre de bases de données administratives et (para)gouvernementales (service-public.fr, le Journal Officiel, l'Assemblée et le Sénat, etc.), des moteurs de recherche spécialisés dans le droit, la bibliographie, les institutions européennes et américaines, etc.

<br><br>

<b>Corporate</b> permet d'interroger des moteurs de recherche économiques ou de communiqués de presse, <b>Alter</b> des bases de données "altermondialistes", et <b>Blogs</b> les... blogs. <b>E-mails</b> regroupe des moteurs de recherche de newsgroups et listes de discussion, mais aussi de trouver trace (ou non) d'adresses email, de contacts ICQ, MSN et de clefs PGP.

<br><br>

<b>Dicos</b> permet de vérifier la définition, l'orthographe, les synonymes ou la féminisation d'un terme, de comprendre les acronymes et de trouver des explications de termes techniques ou informatiques. <b>Biz</b> regroupe plusieurs comparatifs de prix, et <b>Varia</b> des moteurs et bases de données divers et variés.

<br /><br />
      
      </li>
    </ul>
  </li>
  <li>
Vie privée
    <ul>
      <li>

manhack.net n'utilise aucune espèce de base de données, et ne stocke bien évidemment (exception faite des "logs" basiques d'Apache : qui vient d'où, avec quel type de navigateur, quand, etc.) aucune des requêtes effectuées par ses utilisateurs. Il suffit de regarder le <a href="http://web-sniffer.net/?url=http://manhack.net/mot.php">fichier source</a> de la barre de recherche pour s'apercevoir que tout repose sur du javascript, et qu'il n'y a donc aucune possibilité de traçabilité. 

<br /><br />

      </li>
    </ul>
  </li>
  <li>
Contact, MaJ, Mailing Liste, RSS/XML
    <ul>
      <li> 

Contact, critiques &amp; suggestions : <a href="http://jean-marc.manach.net">jean-marc.manach.net</a> <br />
ou via mon blog/notes, <a href="http://rewriting.net">rewriting.net</a>.

<br />
<br />

Pour être tenu informé des mises à jour, abonnez-vous au flux RSS/XML de manhack.net : <br />

<a href="http://manhack.net/wiki/rss.xml"><img src="http://manhack.net/wiki/rss2.gif" alt="RSS 2.0"/></a><br /><br />

et/ou à la <a href="http://manhack.net/cgi-bin/mailman/listinfo/whois">liste de diffusion</a> de manhack.net :

<FORM Method=POST ACTION="http://manhack.net/cgi-bin/mailman/subscribe/whois">
<INPUT type="Text" name="email" size="20" value="Adresse email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<INPUT type="Submit" name="email-button" size="20" value="Abonnez-vous"><br />
<INPUT type="Password" name="pw" size="20"> (mot de passe)<br />
<INPUT type="Password" name="pw-conf" size="20"> (confirmez le mot de passe)<br />
</FORM> 



</li>
</ul>
</li>
<em>(Cliquez sur les titres pour dérouler les textes)</em>
<!--
<br />
<b>+++</b> http://www.feeddigest.com/ 
<br />

<li>
Le Portail des copains
  <ul>
   <li>
            
<?php
include ("http://app.feeddigest.com/digest3/VCX84CLTAT.html");
?>

</li>
</ul>
</li>

<li>
rewriting.net
  <ul>
     <li>
<?php
include ("http://app.feeddigest.com/digest3/7MCFTKT52U.html");
?>
</li>
</ul>
</li>

<li>
Guerrelec
  <ul>
       <li>
<?php
include ("http://app.feeddigest.com/digest3/1HXLLF47HQ.html");
?>
       </li>
       </ul>
       </li>

</ul>
-->
</span>

    </td>
  </tr>
</table>

    </td>
  </tr>
</table>

    </td>
  </tr>
</table>

</body>
</html>
