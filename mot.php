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

    <link rel="stylesheet" href="style.css" type="text/css">
    
<script type="text/javascript" src="textsizer.js">
</script> 

    <script type="text/javascript" src="onlyone.js"></script>
    
<body style="margin:0">

<a name="top"></a>

<table><tr><td nowrap>

<span class="small">

<b>[ <a href="http://manhack.net/" target="_content" 
title="Une toolbar ? Kesako...">manhack.net</a> &gt; 
typo <a href="javascript:ts('body',1)">++</a>&gt;|&lt;<a href="javascript:ts('body',-1)">---</a> ]
</b>

<p>
<form style="padding:0px" name="f">
<input type="text" value="URL / mots-clefs" onFocus="this.value=''" onblur="check()" name="t" size="9" style="font-size:9px;height:18px;width:169px"  value=""> <br />
<a href="javascript:go('')" title="Accedez directement a l'URL">go</a>|<a href="javascript:go('search.disconnect.me/searchTerms/search?start=nav&option=Web&query=')" title="Disconnect">ogle</a>|<a href="javascript:go('startpage.com/do/search?query=')" title="Start">Start</a>|<a href="javascript:go('www.seeks.fr/search?q=')" title="Seeks">Seeks</a>|<a href="javascript:go('duckduckgo.com/?&kl=fr-fr&q=')" title="DuckDuckGo">Duck</a>|<a href="javascript:go('search.msn.fr/results.aspx?q=')" title="MSNearch">Bing</a>/
<a href="javascript:go('www.mousematrix.com')" title="A quick and easy way to bypass blocking software - StupidCensorship.com/">an</a>|<a href="javascript:go('anonymouse.org/cgi-bin/anon-www.cgi/http://')" title="Anonymouse.org/">on</a><!-- /<a href="javascript:go('www.workfriendly.net/browse/Office2003Blue/')" title="Un navigateur qui ressemble Ãƒ  Word, pour cacher ce que l'on consulte">Boss</a>/
<a href="javascript:go('proxify.com/u?http://')" title="Anonymous Proxy - proxify.com/">anon</a> /
<a href="javascript:go('www.google.fr/search?defl=all&q=define:+')"
title="Definitions en allemand, anglais, chinois, francais, italien, russe">def</a> -->/<a
href="javascript:go('dico.isc.cnrs.fr/dico/tr/chercher_en?r=')"
title="Dictionnaire anglais-franÃƒÂ§ais du CNRS">en&gt;</a>|<a
href="javascript:go('dico.isc.cnrs.fr/dico/tr/chercher_fr?r=')"
title="Dictionnaire franÃƒÂ§ais-anglais du CNRS">&lt;fr</a>|<a
href="javascript:go('www.faganfinder.com/translate/?perform=translate&from=en&to=fr&res=goif&t=')"
title="Fagan Finder's Translation Wizard - faganfinder.com/translate/">int</a>
<!-- / <a href="javascript:go('' + '/robots.txt')">R</a> 
<a href="javascript:void(location.href='http://' + location.host +
'/robots.txt')">robots.txt</a> -->
</form>

<em>(Cliquez pour decouvrir les moteurs)</em>
<!-- http://www.lexilogos.com/bouscateur.htm -->

<ul id="mainnav">
      
<!-- Web -->

  <li>
Moteurs de recherche
    <ul>
      <li>
  
&nbsp;
<a href="javascript:go('google.fr/search?q=')" title="Google en VF">Google</a> 
(<a href="javascript:go('google.com/search?ned=us&q=')" title="Google en VO">en</a>|<a href="javascript:go('www.google.com/trends?q=')" title="See what the world is searching for">trends</a>|<a href="javascript:go('thelocust.org/projects/instantrss/instantrss.php?url=http://upcome.com/goorss/search.php?query=')" title="GooRSS - Google + RSS">rss</a>|<a href="javascript:go('www.researchbuzz.com/cgi-bin/goofresh.cgi?datemod=0&query=')">Auj'</a>|<a href="javascript:go('www.researchbuzz.com/cgi-bin/goofresh.cgi?datemod=1&query=')">-1j</a>|<a href="javascript:go('www.researchbuzz.com/cgi-bin/goofresh.cgi?datemod=7&query=')">-7j</a>|<a href="javascript:go('www.researchbuzz.com/cgi-bin/goofresh.cgi?datemod=30&query=')">-30j</a>)
<!-- http://www.freshgoo.com/nsindex.php
http://www.researchbuzz.org/archives/001405.shtml
<a href="javascript:go('labs.google.com/cgi-bin/webquotes?q=')" title="Citations recensees par Google">Quotes</a> --> / 
<a href="javascript:go('www.scroogle.org/cgi-bin/nbbw.cgi?Gw=')" title="Google without cookies, search-term records, & access log deleted after 7 days - scroogle.org/">Scroogle</a> 
<br />
      
      </li>
      <li>
  
&nbsp;
<a href="javascript:go('fr.search.yahoo.com/search/fr?p=')" title="Yahoo en VF">Yahoo</a> 
(<a href="javascript:go('search.yahoo.com/search?p=')" title="Yahoo en VO">en</a>|<a href="javascript:go('fr.search.yahoo.com/search?fr=sfp&fl=1&vc=&vl=lang_fr&x=wrt&ybs=1&p=')" title="La recherche multilingue traduit les resultats traduits en francais - fr.docs.yahoo.com/translator/">tr</a>|<a href="javascript:go('mindset.research.yahoo.com/search.php?p=')" title="Yahoo Mindset : Intent-driven Search, Search sorted the way you want - mindset.research.yahoo.com/">mindset</a>) /
<a href="javascript:go('beta.search.msn.fr/results.aspx?q=')" title="MSNearch en VF">MSN</a> 
(<a href="javascript:go('beta.search.msn.fr/results.aspx?q=')" title="MSNearch en VO">en</a>|<a href="javascript:go('search.msn.fr/results.aspx?format=rss&FORM=RSRE&q=')" title="MSNearch en rss">rss</a>)  / 
<a href="javascript:go('vivisimo.com/search?query=')" title="Automatic categorization and meta-search software - vivisimo.com/">Vivisimo</a>

<br>
      
      </li>
      <li>
 
&nbsp;
<a href="javascript:go('www.exalead.com/search/web/results/?q=')" title="Le moteur interactif - beta.exalead.fr/">ExaLead</a> / 
<a href="javascript:go('www.gigablast.com/search?q=')" title="One of the largest and freshest indexes in the world - gigablast.com/">Gigablast</a> / 
<a href="javascript:go('www.profusion.com/nav?agt=0!&cat=1!&queryterm=')" title="ProFusion, the original intelligent meta-search engine on the Web - profusion.com/">Profusion</a> / 
<a href="javascript:go('www.goshme.com/goshMe.jsp?query=')" title="Send your query to over 1000 Specialized and Deep Web Search Engines... - goshme.com/">GoshMe</a> / 
<a href="javascript:go('www.lexxe.com/main.cfm?sstring=')" title="World's first and only search engine that offers short, exact answers directly from webpages - lexxe.com/">Lexxe</a>

<br>
      
      </li>
      <li>
 
&nbsp;
<a href="javascript:go('www.mozbot.fr/search?q=')" title="Nouvelle version de Reacteur.com, qui ajoute des fonctionnalites a Google - mozbot.fr/">Mozbot</a> / 
<a href="javascript:go('www.apocalx.com/now/?o=1&adv=1&q=')" title="Moteur derive de Google et truffe de fonctionnalites - apocalx.com/">ApocalX</a> / 
<a href="javascript:go('fr.dir.com/cgi/recherche?req=')" title="Le moteur de Free (Iliad) - dir.com/">Dir</a> / 
<a href="javascript:go('www.seek.fr/recherche.php?qry_str=')" title="Metamoteur de recherche francophone - seek.fr/">Seek</a>|<a href="javascript:go('www.seekport.fr/q?query=')" title="Seekport, le nouveau moteur de recherche europeen - seekport.fr/">Port</a>|<a href="javascript:go('www.seekscan.com/search.php?ca=1&q=')" title="Enter search term(s) once and get results from all the major search engines! - seekscan.com">Scan</a>
<br>
      
      </li>
      <li>
      
&nbsp;
<a href="javascript:go('ca.findloo.com/fr/search?q=')" title="Effectuer une recherche sur plusieurs moteurs">FindLoo</a> / 
<a href="javascript:go('www.quintura.com/?request=')" title="A visual search engine">Quintura</a> / 
<a href="javascript:go('www.kartoo.com/fr/servlet/H?q=')" title="Metamoteur de recherche presentant ses resultats sous forme de carte - kartoo.com">Kartoo</a> /
<a href="javascript:go('www.whonu.com/web_results.php?q=')" title="A tool that tap into the power of multiple search engines">Whonu</a> / 
<a href="javascript:go('www.myriadsearch.com/myriad.php?query=')" title="Meta-moteur interrogeant Google, Yahoo, MSN et AskJeeves - myriadsearch.com/">Myriad</a>
<br>
      
      </li>
      <li>
      
&nbsp; 
<a href="javascript:go('fr.cydral.com/search.cgi?p=0&t=1&l=fr&f=1&q=')" title="Metamoteur de recherche Web nouvelle generation - fr.cydral.com/">Cydral</a> /  
<a href="javascript:go('www.a9.com/')" title="Le moteur de recherche avance d'Amazon - a9.com/">A9</a>
<!-- <a href="javascript:go('www.mozdex.com:8080/search.jsp?query=')">mozDex</a> --> / 
<a href="javascript:go('all4one.searchallinone.com/cgi-bin/cgi/nph-x.cgi?qry_str=')" title="Combining the worlds best search engines into one - all4one.searchallinone.com/">All4one</a> /
<a href="javascript:go('www.findforward.com/?q=')" title="FindForward combines several search approaches within a single, easy-to-use interface - findforward.com/">FF</a> / 
<a href="javascript:go('www.turboscout.com/index2.php?e=w-Google&q=')" title="Web Images Reference News Products Blogs Audio&Video - turboscout.com/">TScout</a> / 
<a href="javascript:go('www.icerocket.com/search?tab=web&q=')" title="Web, Blogs, News, Moblogs, Images, Multi Media, RSS Builder - icerocket.com/">Icerocket</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('clusty.com/search?query=')" title="Vivisimo clustering algorithm organize search results into folders - clusty.com/">Clusty</a> / 
<a href="javascript:go('www.metacrawler.com/info.metac/search/web/')" title="Search the search engines - metacrawler.com/">MetaCrawler</a> / 
<a href="javascript:go('www.graball.com/r.php?s=')" title="A search engine portal site that search many engines through a single website - graball.com/">GrabAll</a> /  
<a href="javascript:go('roquefort.di.unipi.it:8091/clus-bin/h?q=')" title="A Hierarchical Clustering Engine for Book, News, Blogs and Web-Snippets - snaket.di.unipi.it/">SnakeT</a>
<!-- <a href="javascript:go('snaket.di.unipi.it/clus-bin/h?q=')" title="Snippet Aggregration for KNowledge ExTraction - snaket.di.unipi.it/">SnakeT</a> -->
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('search.infocious.com/q?s=')" title="A next-generation algorithmic search engine">Infocious</a> / 
<a href="javascript:go('www.dogpile.com/info.dogpl.mp/search/web/')" title="All the best search engine piled into one - dogpile.com/">Dogpile</a> / 
<a href="javascript:go('www.cs.northwestern.edu/~agupta/cgi-bin/rainbow.cgi?query=')" title="Trusting two authorities is better than one - cs.northwestern.edu/~agupta/doubletrust/">GooYa!</a>|<a href="javascript:go('www.gahooyoogle.com/search.php?st=Web&q=')" title="Why not use both of them, each billions worth? - Gahoo!Yoogle.com/">Ya!Goo</a> / 
<a href="javascript:go('rankcomparison.di.unipi.it/clus-bin/c?google=1&yahoo=1&altavista=1&alltheweb=1&teoma=1&looksmart=1&overture=1&msn=1&about=1&mozdex=1&aol=1&findwhat=1&gigablast=1&espotting=1&a9=1&q=')" title="A rank comparaison engine - rankcomparison.di.unipi.it/">RankComp</a>
<br>
      
      </li>
      <li>
 
&nbsp;
<a href="javascript:go('www.up.univ-mrs.fr/cgi-veronis/nebuloscope?req=')" title="Visualisez sous forme de nuage le "monde lexical" d'une requete sur le Web francophone - aixtal.blogspot.com/2006/01/outil-le-nbuloscope.html">Nebuloscope</a> /
<a href="javascript:go('www.up.univ-mrs.fr/cgi-veronis/chronologue?mot1=')" title="Visualisez de facon graphique l'evolution de termes sur le Web francophone au cours du temps - http://aixtal.blogspot.com/2005/12/outil-le-chronologue.html">Chronologue</a> / 
ftp : <a href="javascript:go('www.filesearching.com/cgi-bin/s?q=')" title="Search for files on FTP servers worldwide - filsearching.com/">1</a>|<a href="javascript:go('www.filewatcher.com/_/?q=')" title="FileWatcher : Searching 450 million files worldwide - filewatcher.com/">2</a> / 
<a href="javascript:go('ixquick.com/do/metasearch.pl?cat=web&cat=web&cmd=process_search&language=francais&query=')" title="Le metachercheur le plus puissant du monde (sic) - ixquick.com/">Ixquick</a> / 
<a href="javascript:go('le-moteur-de-lintelligence-economique-swicki.eurekster.com/')" title="Le moteur de recherche de l'intelligence economique">IE</a>
<br />
      
      </li>
      <li>
 
&nbsp;
<a href="javascript:go('docjax.com/Search/index.shtml?q=')" title="A search engine for documents .doc, .pdf, .xls, .ppt">DocJax</a> / 
<a href="javascript:go('pdfdatabase.com/index.php?q=')" title=".pdf & .doc book search">PdfDatabase</a> 

<br />
<br />
      
      </li>
    </ul>
  </li>
    
    <li>
Administrativa (URL)
    <ul>
      <li>

&nbsp; 
Archive <a href="javascript:go('web.archive.org/web/*dc_pd_ir_/http://')" title="WayBack Machine - archive.org/">.org</a><!-- <a href="javascript:go('recall.archive.org/search?search=go&amp;afterMonth=&amp;afterYear=&amp;beforeMonth=Today&amp;beforeYear=&amp;login=&amp;query=')">Recall</a>
 %A0 Recall is a search engine at the Internet Archive that indexes the text
of over 11 Billion pages dating way back to 1996 --> / 
<a href="javascript:go('siteexplorer.search.yahoo.com/search?ei=UTF-8&p=')" title="Site Explorer allows you to explore all the web pages indexed by Yahoo! Search - siteexplorer.search.yahoo.com/">Y! site</a> / 
<a href="javascript:go('www.spurl.net/discover/domains.php?d=')" title="Page(s) archivee(s) par Spurl - spurl.net/">Spurl</a> / 
<a href="javascript:go('redirect.nyud.net:8090/?url=')" title="Coral is peer-to-peer content distribution network - coralcdn.org/">Coral</a>
<br />
      
      </li>
      <li>
 
&nbsp; 
Google <a href="javascript:go('http://webcache.googleusercontent.com/search?q=cache%3Ahttp%3A%2F%2F')" title="Page archivee (cache) par Google">cache</a> / 
<a href="javascript:go('http://webcache.googleusercontent.com/search?strip=1&q=cache:http://')" title="Page archivee (cache) par Google, sans image ni script">plain</a> / 
<a href="javascript:go('search.disconnect.me/searchTerms/search?start=nav&option=Web&query=site:')" title="Liste des pages referencees par Google">site</a> / 
<a href="javascript:go('search.disconnect.me/searchTerms/search?start=nav&option=Web&query=ext:doc+|+ext:docx+|+ext:odt+|+ext:pdf+|+ext:rtf+|+ext:sxw+|+ext:psw+|+ext:ppt+|+ext:pptx+|+ext:pps+|+ext:cvs+site:')" title="Fichiers .doc recenses par Google sur le site">.ext</a>|<a href="javascript:go('search.disconnect.me/searchTerms/search?start=nav&option=Web&query=intitle:index.of+site:')" title="Index of">Index of</a>
<br />
      
      </li>
      <li>
 
&nbsp; <!--https://pentest-tools.com/reconnaissance/google-hacking-->
<a href="javascript:go('search.disconnect.me/searchTerms/search?start=nav&option=Web&query=ext:xml+|+ext:conf+|+ext:cnf+|+ext:reg+|+ext:inf+|+ext:rdp+|+ext:cfg+|+ext:txt+|+ext:ora+|+ext:ini+site:')" title="Index of">Vuln</a>|<a href="javascript:go('search.disconnect.me/searchTerms/search?start=nav&option=Web&query=ext:sql+|+ext:dbf+|+ext:mdb+site:')" title="Index of">Database</a>|<a href="javascript:go('search.disconnect.me/searchTerms/search?start=nav&option=Web&query=+ext:log+site:')" title="Index of">Log</a>|<a href="javascript:go('search.disconnect.me/searchTerms/search?start=nav&option=Web&query=+ext:bkf+|+ext:bkp+|+ext:bak+|+ext:old+|+ext:backup+site:')" title="Index of">Bak</a>|<a href="javascript:go('search.disconnect.me/searchTerms/search?start=nav&option=Web&query=+inurl:login+site:')" title="Index of">Login</a>
<br />
      
      </li>
      <li>
 
&nbsp; 
<!-- <a href="javascript:go_google('www.easywhois.com/index.php?domain=')">Whois</a>  -->
<a href="javascript:go('www.faganfinder.com/urlinfo/?tab=gen&url=')" title="Multisearch-tool for web pages - faganfinder.com/urlinfo/">URLinfo</a> /
<a href="javascript:go('www.whois.sc/domain-explorer/?q=')" title="Domain name search lookup - whois.sc/">Whois</a> (<a href="javascript:go('www.afnic.fr/outils/whois/')" title="AFNIC, centre d'information et de gestion des noms de domaine en .fr et .re">fr</a>|<a href="javascript:go('www.whois.eu/whois/GetDomainStatus.htm?domainName=')" title="The European Registry of Internet Domain Names - whois.eu/">eu</a>) / 
<a href="javascript:gw('arbiter.wipo.int/cgi-bin/domains/search/DomainSearch?lang=fre&amp;domain=')" title="Recherche de litiges OMPI par nom de domaine - arbiter.wipo.int/domains/">Cybersquatt</a> / 
<a href="javascript:gw('len.vie-privee.org/recherche.php?txt=')" title="Sites declares a la CNIL - cnil.fr/">Cnil</a>
<!-- <a href="javascript:gw('www.cnil.fr/htbin/search.cgi?search_field=all&amp;search_for=')">Cnil</a><br>-->
<br />
      
      </li>
      <li>

&nbsp; 
<a href="javascript:gw('www.whois.net/search.cgi2?str=')" title="Keyword search in domain names (homonymes) - whois.net/">Key</a>|<a href="javascript:go('www.namedroppers.com/cgi-bin/query?counter=29&pos=1&cnt=0&keys=')" title="Perform searches for domain names using multiple keywords - namedroppers.com/">Words</a> / 
<a href="javascript:go('www.copyscape.com/?q=http%3A%2F%2F')" title=" Find copies of your page on the Web - copyscape.com/">&copy;&reg;</a> / 
<a href="javascript:go('www.alexa.com/data/details/main?q=&amp;url=')" title="More about this site - alexa.com/">Alexa</a> / 
<a href="javascript:go('www.alaide.com/outils_pagerank_google.php?url=http%3A%2F%2F')" title="Indicateur de Page Rank - alaide.com/">Rank</a> 
<!-- see also : www.pageranktool.net/google_pr.php?url=http%3A%2F%2F gor different data centres 
http://www.webmastereyes.com/pagerank.php?url=http://www.rewriting.net for all links' PR --> / 
<a href="javascript:go('bugmenot.com/view.php?url=http%3A%2F%2F')" title="Bypass Compulsory Web Registration - bugmenot.com/">Bugmenot</a> 

<br />
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('www.blogpulse.com/profile?url=')" title="BlogPulse Profile">Blogpulse</a> / 
<a href="javascript:go('www.pubsub.com/site_stats.php?site=')" title="InLinks, OutLinks, Entries, LinkRank and SiteStats">PubSub</a> / 
<a href="javascript:go('www.talkdigger.com/index.php?surl=')" title="Talk Digger will ask to 9 major search engines: Who links that URL? - talkdigger.com/">TalkDigger</a> /
<a href="javascript:go('www.touchgraph.com/TGGoogleBrowser.php?start=')" title="Outil graphique (Java) permettant de visualiser des sites similaires (selon Google) - touchgraph.com/">TouchGraph</a>

<br />
      
      </li>
      <li>

&nbsp; 
Pirates <a href="javascript:gw('www.zone-h.org/en/search/what=')" title="Digital attacks - zone-h.org/">web</a>|<a href="javascript:go('www.dshield.org/warning_explanation.php?fip=')" title="Distributed Intrusion Detection System - dshield.org/">IP</a>|<a href="javascript:go('www.stopbadware.org/home/reportsearch?searchtext=')" title="Badware Website Clearinghouse">ware</a> / 
Spam <a href="javascript:go('www.senderbase.org/search?searchString=')" title=" The Leading Email Reputation Service - senderbase.org/">1</a>|<a href="javascript:go('openrbl.org/dnsbl?i=')" title="Multi DNS-Based Blocking List Lookup - openrbl.org/">2</a>|<a href="javascript:go('moensted.dk/spam/?addr=')" title="DNS database list checker - moensted.dk/spam/">3</a> / 
Filtres <a href="javascript:go('database.n2h2.com/cgi-perl/catrpt.pl?req_URL=http://')" title="Liste noire et classification du filtre N2H2 - database.n2h2.com/">1</a>|<a href="javascript:go('www.cleanfeed.co.uk/testsite.php?server=')" title="Liste noire et classification du filtre Cleanfeed - cleanfeed.co.uk/">2</a>|<a href="javascript:go('mtas.surfcontrol.com/mtas/MTAS.asp?url=')" title="Test the site to check if it is in Surf Control list">3</a>|<a href="javascript:go('www.siteadvisor.com/sites/')" title="Keep you safe from spyware, spam, viruses and online scams">4</a> 
<br />
      
      </li>
      <li>
 
&nbsp; 
<a href="javascript:gw('www.nwtools.com/default.asp?prog=express&host=')" title="Network Tools : Ping, Lookup, Trace, etc. - nwtools.com/">Net.Tools</a> /
<!-- see 2 centralops.net/co/DomainDossier.aspx?dom_whois=true&dom_dns=true&traceroute=true&net_whois=true&svc_scan=true&addr= -->
Netcraft <a href="javascript:go('uptime.netcraft.com/up/graph?site=')" title="Web Server Survey - uptime.netcraft.com/">site</a>|<a href="javascript:go('searchdns.netcraft.com/?host=.')" title="Hosting History - searchdns.netcraft.com/">host</a> / 
IP <a href="javascript:go('whois.webhosting.info/')" title="WHOIS with reverse IP & domain name server lookup ! - whois.webhosting.info/">1</a>|<a href="javascript:go('hostip.info/index.html?spip=')" title="IP Address Lookup - Geolocate Visitors by IP Address - hostip.info">2</a> / 
<a href="javascript:go('www.dnsreport.com/tools/dnsreport.ch?domain=')" title="Find and fix DNS problems - dnsreport.com/">DNS</a>
<br />
      
      </li>
      <li>
&nbsp; 
W3 : <a href="javascript:go('validator.w3.org/check?uri=http://')" title="W3C Markup Validation Service - validator.w3.org/">html</a>|<a href="javascript:go('jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2F')" title="Validateur CSS du W3C - jigsaw.w3.org/css-validator/">css</a>|<a href="javascript:go('validator.w3.org/checklink?uri=http%3A%2F%2F')" title="W3 link checker - http://validator.w3.org/checklink/">link</a> /
<a href="javascript:go('www.ocawa.com/faireaudit.htm?lang=fr&url=')" title="Audit d'accessibilite d'une page web - ocawa.com/Testez-votre-site_6_fr/">Audit</a> / 
<a href="javascript:go('www.rankquest.com/tools/Code-Cleaner.php?url=http://')" title="Code Cleaner + Keyword Finder & Analyzer + Lynx View + Link Explorer & Cie - rankquest.com/tools/">Code</a> / 
<a href="javascript:go('www.doctor-html.com/RxHTML/cgi-bin/doc-new.cgi?reportmode=1&Structure=1&Links=1&Spelling=1&Image1_syntax=1&Image1=1&MetaTags=1&TableStructure=1&FormStructure=1&Format_HTML=1&Squish_HTML=1&Frames_Expand=1&Display_Cookies=1&Browser=1&Fonts=1&Show_Commands=1&user_agent=Mozilla%2F4.0+%28compatible%3B+MSIE+6.0%3B+Windows+NT+5.1%29&General_module_display_prefs=score&Links_report_label=URL&doc_url=http%3A%2F%2F')" title="Doctor HTML examines HTML pages for common mistakes - doctor-html.com/RxHTML/">DrHtml</a> /  
<a href="javascript:go('infohound.net/tidy/tidy.pl?_function=tidy&_html=&_file=&x=0&y=0&alt-text=&doctype=auto&drop-empty-paras=y&fix-backslash=y&fix-bad-comments=y&fix-uri=y&join-styles=y&lower-literals=y&ncr=y&new-blocklevel-tags=&new-empty-tags=&new-inline-tags=&new-pre-tags=&quote-ampersand=y&quote-nbsp=y&indent=no&indent-spaces=2&tab-size=4&wrap=68&wrap-asp=y&wrap-jste=y&wrap-php=y&wrap-sections=y&ascii-chars=y&char-encoding=ascii&input-encoding=latin1&output-bom=auto&output-encoding=ascii&_output=warn&_url=http://')" title="A tool for checking and cleaning up HTML source files - infohound.net/tidy/">Tidy</a>
<br />
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('del.icio.us/url/check?url=')" titre="del.icio.us history for this url">del.</a> / 
<a href="javascript:go('www.skweezer.net/')" title="A mobile-optimized browser for Pocket PC, Palm, MS Smartphone, or XHTML-enabled cell phone">Skweezer</a> / 
<a href="javascript:go('web-sniffer.net/?url=http://')" title="View HTTP Request and Response Header - web-sniffer.net/">Header</a> /
<a href="javascript:go('textalyser.net/index.php?lang=fr&q=http://')" title="Outil d'analyse de textes en ligne - textalizer.net/">Textalizer</a> /
<a href="javascript:go('www.webrankinfo.com/outils/analyse-referencement.php?rub=res&amp;url=')" title="Analyse du referencement du site sur Google - webrankinfo.com/outils/">Webrank</a>

<br />
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('www.gritechnologies.com/tools/spider.go?q=')" title="See what your site will look like in search-engine results - gritechnologies.com/tools/spider.go">Poodle</a> / 
<a href="javascript:go('www.webmastereyes.com/index.php?url=http://')" title="Browse the web and see the Page Rank of all links in a page">PageRank</a> /
<a href="javascript:go('ready.mobi/results2.jsp?uri=http://')" title="Rest the mobile-readiness of your site - ready.mobi">Mobi</a> / 
<a href="javascript:go('www.robtex.com/r/x/?f=')" title="robtex swiss army knife internet tool - robtex.com">LookUp</a> /
<a href="javascript:go('tools.pingdom.com/fpt/?url=http://')" title="Pingdom Tools - Full page test">PingDom</a>

<br />
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('www.digitalpoint.com/tools/adsense-sandbox/?url=')" title="Google AdSense Sandbox Tool - digitalpoint.com/tools/">AdSense</a> / 
<a href="javascript:go('www.googspy.com/SearchResults.aspx?q=')" title="GoogSpy - Adwords Competitor Research by Velocityscape - goospy.com/">GooSpy</a>  / 
<a href="javascript:go('view.samurajdata.se/ps.php?url=http%3A%2F%2F')" title="Online viewer for PDF, PostScript and Word - view.samurajdata.se/">pdf|ps|doc2html</a> / 
<a href="javascript:go('www.frappr.com/?a=searchcombine&query=')" title="Frappr (Friend Mapper) lets you see the zip code where people live or work">Frappr</a> 
<br />

      </li>
      <li>
            
&nbsp;
<a href="javascript:go('www.smallmouthbass.biz/google4/google2/google/PHPgoogleSearch5.php?q=http%3A%2F%2F')" title="The Search Tool with Complete Page Analysis for each Result">Golexa</a> / 
<a href="javascript:go('www.socialmeter.com/check?url=http://')" title="Social meter scans the major social websites to analyze a webpage's social popularity">SocialMeter</a> / 
<a href="javascript:go('v04.browsershots.org/?url=http://')" title="Test your web design in different browsers">BrowserShots</a> / 
<a href="javascript:go('redalt.com/Tools/I+Like+Your+Colors?siteuri=http://')" title="I Like Your Colors">Colors</a>

<br />
<br />
      
      </li>
    </ul>
  </li>
  
<!-- Dicos -->

  <li>
Dictionnaires *
    <ul>
      <li>
&nbsp;
<a href="javascript:go('dictionnaire.reverso.net/francais-definition/Ã‚ ')" title="Reverso">Reverso</a> /
<a href="javascript:go('atilf.atilf.fr/dendien/scripts/fast.exe?')" title="Tresor de la Langue Francaise informatise- atilf.atilf.fr/">TLF</a> / 
<a href="javascript:go('littre.reverso.net/dictionnaire-francais/definition/')" title="Version en ligne du dictionnaire Littre de 1872-1877">Littre</a> <!-- cf 2 www.lesensdesmots.com --> / 
<a href="javascript:go('lav.mediadico.com/mediadicolav/asp/dicoweb.asp?nbd=1&emot=')" title="Definitions, synonymes, conjugaisons, Francais/Anglais - lav.mediadico.com/mediadicolav/asp/dicoweb.asp">Dicoweb</a> / 
<a href="javascript:go('fr.wikipedia.org/w/wiki.phtml?search=')">Wikipedia</a> (<a href="javascript:go('wikipedia.org/w/wiki.phtml?search=')">en</a>|<a href="javascript:go('www.qwika.com/find-fr/')" title="Recherche et traductions sur plus de 1000 wikipedias">intl</a>)
<br />
      
      </li>
      <li>

&nbsp;
Ortho <a href="javascript:go('www.sdv.fr/cgi/orthonet/orthonet?mot=')" title="Orthonet, banque de donnee du Conseil international de la langue fran?ise - www.sdv.fr/orthonet/">1</a>|<a href="javascript:go('www.interactive.fr/gc/verify_.pl?verifie=v%E9rifier&lang=francais&text=')" title="WEBGC est un correcteur orthographique de requetes de moteurs de recherche - interactive.fr/gc/verify_.pl">2</a> / 
Syn <a href="javascript:go('dico.isc.cnrs.fr/dico/fr/chercher?r=')" title="Dictionnaire des synonymes francais - dico.isc.cnrs.fr/dico/fr/chercher">1</a>|<a href="javascript:go('www.crisco.unicaen.fr/des/synonymes/')">2</a> / 
<a href="javascript:go('www.verbix.com/webverbix/go.asp?D1=3&H1=103&T1=')" title="On-line verb conjugator in 155 languages - verbix.com/">Conjug.</a> / 
<a href="javascript:go('atilf.atilf.fr/gsouvay/scripts/feminin.exe?PAS_A_PAS=1,7?TYPE_RECHERCHE=0?ENTREE==')">Fem</a> / 
<a href="javascript:go('www.acronymfinder.com/af-query.asp?acronym=')" title="351 000+ acronyms, abbreviations and initialisms - acronymfinder.com/">Acro</a>|<a href="javascript:go('www.ucc.ie/cgi-bin/uncgi/acronym?')" title="University College Cork's acronym server - ucc.ie/cgi-bin/acronym">Nym</a> 
<br />
      
      </li>
      <li>
  
&nbsp;
<a href="javascript:go('www.proz.com/kudoz?sp=ks&keyword_kudoz=')" title="KudoZ network provides a framework for translators - proz.com/kudoz">Kudoz</a> / 
<a href="javascript:go('eurovoc.europa.eu/drupal/?q=fr/search&cl=en&page=1&text=')" title="European Terminology Database - europa.eu.int/eurodicautom/">&euro;rovoc</a> / 
<a href="javascript:go('iate.europa.eu/iatediff/SearchByQuery.do?method=search&sourceLanguage=en&&targetLanguages=fr&domain=0&matching=&typeOfSearch=s&query=')" title="InterActive Terminology for Europe">Iate</a> / 
<!--Voir aussi New European Terminology Database https://iate.cdt.eu.int:443/iatenew/consultation/search/basic.jsp-->
<a href="javascript:go('fr.search.news.yahoo.com/search/fineduc_fr?p=')">Finance</a> /
<a href="javascript:go('bdl.oqlf.gouv.qc.ca/bdl/gabarit_bdl.asp?&T3.x=12&T3.y=18&T1=')" title="Banque de depannage linguistique - www.oqlf.gouv.qc.ca/ressources/bdl.html">Linguist.</a> / 
<a href="javascript:go('www.x-recherche.com/cgi-bin/trouve.cgi?name=languefrancaise&MOTS=')" title="Langue francaise : FAQ, S.O.S. depannage, reponse a vos questions, dossiers - langue-fr.net/">Langue-fr</a> 
<br />

      </li>
      <li>
            
&nbsp;
<a href="javascript:go('jargonf.org/wiki/')">JargonF</a> /
<a href="javascript:go('www.commentcamarche.net/search/search.php3?Mot=')">CCM</a> /
Dico <a href="javascript:go('www.dicofr.com/cgi-bin/n.pl/dicofr/find/')" title="Dictionnaire de l'informatique et de l'internet - dicofr.com">Fr</a>|<a href="javascript:go('www.dicodunet.com/rechercher.php?q=')" title="Dictionnaire en ligne collaboratif sur les e-technologies - dicodunet.com/">duNet</a> / 
<a href="javascript:go('fr.wiktionary.org/wiki/')" title="Wiktionnaire, dictionnaire libre et universel - fr.wiktionary.org/">Wiktionary</a> / 
<br />

      </li>
      <li>

&nbsp;
<a href="javascript:go('www.info-definition.com/')" title="DÃƒÂ©finition, conjugaison, traduction de mots">InfoDef</a> / 
Terminologie <a href="javascript:go('franceterme.culture.fr/FranceTerme/recherche.html?TERME=')" title="Termes recommandes par la Commission gÃƒÂ©nÃƒÂ©rale de terminologie et de neologie">fr</a>|<a href="javascript:go('gdt.oqlf.gouv.qc.ca/resultat.aspx?MotClef=&sMotClefTraite=&sMotClef=&sPriNomLang=&sSecNomLang=&iPointAcces=1a2q5w1&terme=')" title="Grand dictionnaire terminologique - GDT">qc</a> / 
<a href="javascript:go('www.plusdemots.com/mot/')" title="Trouvez des mots du dictionnaire pour les mots croisÃƒÂ©s, les mots du code et les jeux du mots, mÃƒÂªme ScrabbleÃ‚Â® et UpwordsÃ‚Â®">+deMots</a> / 
<a href="javascript:go('www.dafont.com/theme.php?cat=113&page=1&nb_ppp_old=50&nb_ppp=50&psize=m&classt=pop&text=')" title="TÃƒÂ©lÃƒÂ©chargez des polices de caractÃƒÂ¨res, crÃƒÂ©ez des titres & logos">Typos</a> 
<br />

      </li>
      <li>

&nbsp;
<a href="javascript:go('www.termsciences.fr/-/Index/Rechercher/Classique/Naviguer/Resultats/?aGrilleClassique=actualiser&lng=fr&qry=')" title="TermSciences, portail terminologique du CNRS">TermSciences</a> / 
<a href="javascript:go('www.etymonline.com/index.php?term=')" title="Online Etimology Dictionary - etymonline.com/">Etym.</a> / 
<a href="javascript:go('codeflux.com/dict/?query=')">Dict</a> / 
<!-- FOLDOC - Free On-Line Dictionary Of Computing & The Jargon File -->
<a href="javascript:go('onelook.com/?ls=b&amp;w=')">OneLook</a> / 
<!-- Dictionary Search (964 dictionaries indexed) -->
<a href="javascript:go('www.answers.com/main/ntquery?s=')">Answers</a>
<br>
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('www.bing.com/translator/?from=en&to=fr&text=')" title="Bing Translator">Translator</a> / 
<a href="javascript:go('www.allwords.com/query.php?SearchType=2&goquery=Find+it%21&Language=FRA&NLD=1&FRA=1&DEU=1&ITA=1&ESP=1&Keyword=')" title="English Dictionary With Multi-Lingual Search & Translation - allwords.com">AllWords</a> / 
<a href="javascript:go('www.babylon.com/definition/')" title="A database of over 1,300 dictionaries, encyclopedias and glossaries in 50 languages">Babylon</a> / 
<a href="javascript:go('www.systranet.com/fr/fr/dictionary/english-french/this')" title="Systranet">Systranet</a> / 
<a href="javascript:go('www.wordreference.com/fren/')" title="Free online translation dictionaries, plus suggestions">WordRef.</a> 
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.infoplease.com/search.php3?query=')">Infoplease</a> / 
<a href="javascript:go('whatis.techtarget.com/wsearchResults/?query=')">Whatis</a> / 
<a href="javascript:go('translate.google.com/?hl=fr#en|fr|')" title="Babelplex searches the web in 24 International Google Engines">Babelplex</a> / 
<a href="javascript:go('wordnetweb.princeton.edu/perl/webwn?s=')" title="A lexical database for the English language - wordnet.princeton.edu/">WordNet</a> /
<a href="javascript:go('www.foreignword.com/eureka/ext/linksearch/default.asp?lg=fr&Go=Search&q=')" title="Database of 4000+ dictionaries, glossaries and lexicons - foreignword.com/Tools/">Foreign</a>
<br>

      </li>
      <li>
            
&nbsp;

<a href="javascript:go('www.filext.com/detaillist.php?extdetail=')" title="The file extension source - filext.com/">FilExt</a> / 
<a href="javascript:go('www.languefrancaise.net/recherche/liste2.php?moduless=glossrech&rechercher=1&motsclef=')" title="Dictionnaire d'argot et du francais familier - languefrancaise.net/glossaire/">Argot</a> / 
<a href="javascript:go('www.urbandictionary.com/define.php?term=')" title="Urban Dictionary is a slang dictionary with your definitions - urbandictionary.com/">Slang</a> / 
Citations : <a href="javascript:go('www.dicocitations.com/resultat.php?motcle=')" title="Recueil de plus de 51500 citations du monde entier issues de 3993 auteurs - dicocitations.com/">fr</a>|<a href="javascript:go('thinkexist.com/search/searchQuotation.asp?search=')" title="Quotation Search Engine and Directory - thinkexist.com/">en</a> / 
<a href="javascript:go('search.freefind.com/find.html?id=5838232&pid=r&mode=ALL&query=')" title="Dictionnaire du droit prive et vocabulaire de l'arbitrage - sbraudo.club.fr/">Droit prive</a> 
<br />
<br>
      
      </li>
    </ul>
  </li>
  
<!-- Ref. -->

  <li>
References
    <ul>
      <li>

&nbsp; 
<!--<a href="javascript:go('larecherche.service-public.fr/ladoc.cgi?text=')">Serv.-pub.</a>-->
<a href="javascript:go('larecherche.service-public.fr/df/oxide?Rechercher.x=19&Rechercher.y=6&Rechercher=tous&page=resultssprubs&action=launchsearch&DynRubrique=&DynCorpus=&DynDomain=SP&criteriaContent=')">Serv.</a>-<a href="javascript:go('larecherche.service-public.fr/df/oxide?DynDomain=Externes&page=resultsspsites&action=launchsearch&criteriaContent=')">pub.</a> / 
JO : <a href="javascript:go('www.legifrance.gouv.fr/rechExpTexteJorf.do?init=&from=')" title="Rechercher sur le site du JO">1</a>|<a href="javascript:go('www.droit.org/jo/resultat.html?cx=014480990426666649747%3Agnu5kau65qy&cof=FORID%3A11&ie=ISO-8859-1&q=')">2</a> / 
<a href="javascript:go('demo.auracom.fr/cgi-bin/auracom/cgi-bin/aurweb.exe/goov/voir?crita=')">Goov</a>
<!--<a href="http://www.auracom.fr/presse.html">Auracom</a> : Observatoire des sites gouvernementaux--> / 
<a href="javascript:go('bddpublic.refasso.com/annuaire/execution.Asp?FRMSRC=1&FCT=REQUETTE_PUBLIQUE&ACTION=EXECUTER&MotCle1=')">Asso</a> / 
<a href="javascript:go('www.assedic.fr/unijuridis/index.php?selection=rechercher&module=rechercher&lf=hide&mot=')" title="UNIjuridis, le site de l'assurance chomage - assedic.fr/">Assedic</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.rollyo.com/search.html?sid=5943&q=')" title="Textes de loi franÃƒÂ§ais - via rollyo.com/">Lois</a> / 
Google 
<a href="javascript:go('www.google.fr/search?q=site%3Apremier-ministre.gouv.fr+')">p-m</a>.<a href="javascript:go('www.google.fr/search?q=site%3Ainterieur.gouv.fr+')">int</a>.def<a href="javascript:go('www.google.fr/search?q=site%3Adefense.gouv.fr+')">1</a>/<a href="javascript:go('www.defense.gouv.fr/sites/ema/search?From=search_form&Description=&Language=fr&source=deux&SearchableText=')" title="Moteur de recherche interne et externe a defense.gouv.fr - defense.gouv.fr">2</a>.<a href="javascript:go('www.google.fr/search?q=site%3Aagriculture.gouv.fr+')">agri</a>.<a href="javascript:go('www.google.fr/search?q=site%3Aculture.gouv.fr+')">cult</a>.<a href="javascript:go('www.google.fr/search?q=site%3Agouv.fr+')">gouv.fr</a> 
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('recherche2.assemblee-nationale.fr/index.jsp?typeecran=avancee&critere=')">Ass. Nat.</a> /
<a href="javascript:go('www.senat.fr/basile/rechercheGlobale.do?radio=dp&rch=gs&rqg=d&rqg=q&rqg=r&rqg=n&rqg=s&rqg=t&rqg=p&rqg=a&unk=')" title="Senat francais">Senat</a> / 
<!-- <a href="javascript:go('www.senat.fr/Extense/bin/recherche.cgi?fileconf=..%2Fconf%2Frech.conf&filebase=..%2Fconf%2Frech.conf&visio=ON&mots=')">Senat</a> / -->
<a href="javascript:go('larecherche.service-public.fr/df/oxide?page=resultsdfA&action=launchsearch&DynDomain=DFgeneral&criteriaContent=')">BRP</a> /
<!-- Bibliotheque des Rapports Publics
http://discours-publics.ladocumentationfrancaise.fr/rechlogos/servlet/RechServlet?_page=RECH_AV&_type=NEW
-->
<a href="javascript:go('www.plan.gouv.fr/outils/recherche/index.php?search=')">Plan</a> / 
<a href="javascript:go('www.amf-france.org/resultat_simple.asp?slttypeinfo=site&iFullTextQuery=')">AMF</a> /
<a href="javascript:go('www.conseil-etat.fr/ce/outils/index_ou01_li.asp?MOD=avance&D1=on&D7=on&D2=on&D8=on&D3=on&D9=on&D4=on&D10=on&D5=on&D11=on&D6=on&EXP=')">CE</a>
<!-- <a href="javascript:go('www.google.fr/search?q=site%3Acaissedesdepots.fr+')">CDC</a> -->
<br>
      
      </li>
      <li>

&nbsp;
<a
href="javascript:go('www.legicite.com/cgi-bin/search.cgi?id=1&amp;categorie=0&amp;type=0&amp;choix=1&amp;word=')">Leg</a> / 
<a href="javascript:go('droit.francophonie.org/phase3/search.jsp?lang=fr&query=')">Droit</a> / 
<a href="javascript:go('www.droit-ntic.com/recherche/moteur_ap.php?recherche=')">Tic</a> / 
<a href="javascript:go('www.ejustice.fr/search.php?query_string=')" title="Ejustice.fr, le guide de la justice et du droit en France">eJust.</a> /  <a href="javascript:go('europa.eu.int/eur-lex/lex/Result.do?titre=titreettexte&chlang=fr&RechType=RECH_mot&Submit=Recherchez&arg0=')">Lex</a>
<!-- <a href="javascript:go('europa.eu.int/servlet/portail/RenderServlet?search=Query&lg=fr&nb_docs=25&text=')">EurLex</a> --> / 
<a href="javascript:go(curia.eu.int/jurisp/cgi-bin/form.pl?lang=fr&Submit=Rechercher&alldocs=alldocs&docj=docj&docop=docop&docor=docor&docjo=docjo&mots=')">Curia</a> / 
<a href="javascript:go('lawcrawler.findlaw.com/scripts/lc.pl?sites=wlegal&amp;entry=')">Law</a> /
<!-- http://lawcrawler.findlaw.com/more.html US legal and governmental websites, web databases / -->
<a href="javascript:go('www.glin.gov/search.do;?offset=0&fromSearch=true&queryType=ALL&searchBtn=Recherche&includeAllFields=on&searchAll=on&hitsPerPage=10&showSummary=on&queryString=')">Glin</a> 
<!-- Global Legal Information Network -->
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.worldlii.org/form/search/?query=')">Wlii</a> / 
<a href="javascript:go('www.societe.com/cgi-bin/liste?nom=')">RNCS</a> / 

<a href="javascript:go('patft.uspto.gov/netacgi/nph-Parser?Sect1=PTO2&Sect2=HITOFF&p=1&u=%2Fnetahtml%2Fsearch-bool.html&r=0&f=S&l=50&FIELD1=&co1=AND&TERM2=&FIELD2=&d=ptxt&TERM1=')">USPTO</a>
/ <a href="javascript:go('v3.espacenet.com/results?sf=q&FIRST=1&CY=ep&LG=fr&DB=EPODOC&IA=')">OEB</a>
/ 
<a href="javascript:go('www.google.com/patents?as_q=&num=10&btnG=Google+Search&as_epq=')" title="Google's USPTO patent search engine">USPat</a> / TM : <a href="javascript:go('avantiquick.markenbusiness.com/en/search.php?search=')">US</a>
/ <a href="javascript:go('oami.eu.int/CTMOnline/RequestManager/fr_Result?listType=1&transition=ResultsDetailed&selectOrderby2=&denoselect=1&selectOrderby=&idappli=&ntmark=&application=CTMOnline&bAdvanced=0&totalFound=null&language=fr&ownerselect=&blimited=&source=search_basic.jsp&deno=')">EU</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('europa.eu.int/search/s97.vts?QueryText=')">UE</a>
<!--Le portail d'acces au droit de l'Union europeenne-->
<!--Comment trouver l'information sur EUROPA - http://europa.eu.int/geninfo/info/guide/index_fr.htm-->
(<a href="javascript:go('europa.eu.int/rapid/setLanguage.do?language=fr&searchText=')">press</a>)
<!--Rapid, le moteur de recherche des communiques de presse de l'UE--> /
PE :
<!--Comment trouver un document du Parlement europeen - http://www.europarl.eu.int/guide/search/default_fr.htm-->
<a href="javascript:go('www2.europarl.eu.int/omk/sipade2?PROG=AGENDA&L=FR&SORT_ORDER=DD&S_DATE_SITTINGS=%25&MI_TEXT=s%C3%A9curit%C3%A9')">OdJ</a>
(<a href="javascript:go('www2.europarl.eu.int/omk/sipade2?PROG=PRESS&L=FR&SORT_ORDER=DDD&S_DATE_REF=%25&MI_TEXT=')">press</a>) / 
<a href="javascript:go('register.consilium.eu.int/servlet/driver?page=Result&lang=FR&ssf=DATE_DOCUMENT+DESC&fc=REGAISFR&typ=Simple&cmsid=638&ff_FT_TEXT=')">Cons.</a> / 
<!--Registre du Conseil de l'Union Europeenne-->
<a href="javascript:go('www.psinavigator.org/psi/psi.jsp?init=n/a&themlang=fra&resp=u&lctry=all&lctry=eu&lctry=int&lctry=at&lctry=be&lctry=cy&lctry=cz&lctry=de&lctry=dk&lctry=ee&lctry=es&lctry=fi&lctry=fr&lctry=gr&lctry=hu&lctry=ie&lctry=it&lctry=lt&lctry=lu&lctry=lv&lctry=mt&lctry=nl&lctry=pl&lctry=pt&lctry=se&lctry=si&lctry=sk&lctry=uk&exit=n/a&suchbegriff=')">Psi</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.insee.fr/fr/recherche/accueil_docs.asp?titre=')">Insee</a> /
<a href="javascript:go('www.ipsos.fr/CanalIpsos/all_search_article.asp?find=1&gs_form_CTT_KEYWORD=')">Ipsos</a> /
<a href="javascript:go('www.tns-sofres.com/phpdig/search.php?browse=1&refine=1&site=1&option=start&query_string=')" title="TNS Sofres, leader francais et deuxieme groupe mondial des etudes marketing et d'opinion - tns-sofres.com/">Sofres</a> / 
<a href="javascript:go('www.ifop.com/europe/query_eu_fr.idq?CiScope=%2F&TemplateName=query&CiSort=rank%5Bd%5D&HTMLQueryForm=query.htm&CiRestriction=')">Ifop</a> /
<a href="javascript:go('www.google.com/search?site%3Abva.fr+q=')">BVA</a> / 
<a href="javascript:go('www.angus-reid.com/index.cfm/fuseaction/searchSimpleResults?keyword=')" title="Daily information on worldwide public opinion - angus-reid.com/">AngusReid</a> 
<!-- <a href="javascript:go('mediasig.premier-ministre.gouv.fr/scripts/SimpleSearchTrt.cfm?TypeRech=organisme&nom=')" title="MediaSig, annuaire presse du gouvernement">MediaSig</a> -->
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.picosearch.com/cgi-bin/ts.pl?index=216028&query=" title="A non-profit research center studying the social effects of the Internet on Americans - pewinternet.org/">Pew</a> / 
<a href="javascript:go('www.firstgov.gov/fgsearch/index.jsp?ms0=%A0&mt0=all&st=AS&rn=2&parsed=true&db=www-fed-all&mw0=')">1stGov</a> /
<a href="javascript:go('search.ftc.gov/query.html?col=full&col=hsr&col=news&qt=')">FTC</a> / 
<a href="javascript:go('www.sec.gov/cgi-bin/txt-srch-sec?text=')">SEC</a> /
<a href="javascript:go('www.sec.gov/cgi-bin/browse-edgar?CIK=&filenum=&State=&SIC=&owner=include&action=getcompany&company=')">Edgar</a> / 
<!-- SEC Filings & Forms (EDGAR) -->
<a href="javascript:go('search.loc.gov:8765/query.html?qt=')">LOC</a>
<!-- Library of Congress
<a href="javascript:go('catalog.loc.gov/cgi-bin/Pwebrecon.cgi?Search_Code=FT*&PID=4379&CNT=25&HIST=1&Search_Arg=')">LOC</a>
-->
/ <a href="javascript:go('www.searchmil.com/cgi-bin/search.dll?q=')">.mil</a>
<br />
      
      </li>
      <li>
      
&nbsp;
ISBN <a href="javascript:go('fr.isbn.pl/C-63/K-')">1</a>|<a href="javascript:go('isbn.nu/cgi-bin/design-books?frontpage=yes&title=&author=')" title="Search for books and compare prices - isbn.nu">2</a> / 
<a href="javascript:go('print.google.com/print?q=" title="Search the full text of books (and discover new ones) - print.google.com/">Print</a> / 
<a href="javascript:go('scholar.google.com/scholar?q=" title="Use Google Scholar to find articles from a wide variety of academic publishers, professional societies, preprint repositories and universities - scholar.google.com/">Scholar</a> / 
<a href="javascript:go('www.google.com/u/bnf?hl=fr&q=')">BNF</a> / 
<a href="javascript:go('www.megabooksearch.com/cgi-bin/mbs.pl?stype=both&author=')">Auteurs</a> / 
<a href="javascript:go('www.portail-sudoc.abes.fr/ClientBookLine/recherche/repartition.asp?bNewSearch=true&strTypeRecherche=pr_simple&CodeDocBaseList=FONDS%5FPATRI%5FDOC&CodeDocBaseList=SRUXTCAT&CodeDocBaseList=SUDOC%5FCAT&CodeDocBaseList=LOC&CodeDocBaseList=SUDOC%5FPRODS&CodeDocBaseList=BN%5FOPALE%5FPLUS&CodeDocBaseList=SRURDN&CodeDocBaseList=SARASRUSCDRT&CodeDocBaseList=SUDOC%5FPERSEE%5FB&CodeDocBaseList=SUDOC%5FTHESES&CodeDocBaseListAnyDefault_SUDOC_THESES=ANY&txtMots=')">SuDoc</a> 
<br />
      
      </li>
      <li>
      
&nbsp;
<a href="javascript:go('discours-publics.vie-publique.fr/rechlogos/servlet/RechServlet?_page=LISTE&_num_page=1&doctype=TOUT&_mode=AVANCEE&etendue=tres_elargie&motsrec=')">Discours</a> / 
<a href="javascript:go('fr.encarta.msn.com/encnet/refpages/search.aspx?q=" title="Decouvrez une selection d'articles de l'Encyclopedie Encarta (MSN) - fr.encarta.msn.com/artcenter_/browse.html">Encarta</a> / 
<a href="javascript:go('populationdata.net/cgi-bin/pg-recherchepro.cgi?K=" title="Informations, cartes & statistiques sur les populations & les pays du monde - populationdata.net">PopulationData</a> / 
<a href="javascript:go('www.google.com/unclesam?q=')" title="Search Uncle Sam related sites using Google - google.com/unclesam">GooSam</a>
<br />
<br />
      
      </li>
    </ul>
  </li>

<!-- Actus -->

  <li>
Actualites
    <ul>
      <li>
&nbsp; 
<a href="javascript:go('news.google.fr/news?q=')">Google</a> 
(<a href="javascript:go('news.google.com/news?ned=us&q=')">en</a>|<a href="javascript:go('balluche.free.fr/googlenews2rss.php?q=')">rss</a>) / 
<a href="javascript:go('fr.search.yahoo.com/search/news?p=')">Yahoo</a>
(<a href="javascript:go('fr.search.news.yahoo.com/search/news_fr?p=')">fil</a>|<a href="javascript:go('search.news.yahoo.com/search/news/?c=&amp;p=')">en</a>|<a href="javascript:go('news.search.yahoo.com/news/rss??ei=UTF-8&datesort=1&fl=1&vl=lang_fr&n=10&va=')">rss</a>) / 
<a href="javascript:go('fr.newsbot.msn.com/search/?nq=')">MSN</a> 
(<a href="javascript:go('newsbot.msn.com/search/?nq=')">en</a>) 
<br>

<!--
www.infonetware.com/rtbin/psearch.pl?ndocs=700&base=ignews&cache=no&xbase=inw&html_base=inw&page=infonetware.html&izgui=nav_frame&pref=std&power+search.x=0&power+search.y=0&query=
meta-moteur (avec cluster et envoi par mail) de medias essentiellement anglais
vivisimo.com/search?input-form=advanced-vivisimo-com&v%3Asources=News&v%3Aignore=CNN&v%3Aignore=NYTimes&v%3Aignore=USAToday&v%3Aignore=WashingtonPost&v%3Aignore=BBCNews&v%3Aignore=YahooNews&v%3Asources=BBC&v%3Asources=YahooTechNews&v%3Asources=YahooBizNews&num=500&timeout=5000&language=all&target=top&filter=none&display=url&display=openers&display=summary&display=sources&x=34&y=13&query=
-->
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('news.search.aol.com/search?category=ns_top_collection&query=')" title="AOL news serach engine - news.search.aol.com/">AOL</a> / 
<a href="javascript:go('www.pressed.com/index.php?motcle=')">Pressed</a> /
<a href="javascript:go('fr.allafrica.com/search.html?string=')">Africa</a>
(<a href="javascript:go('allafrica.com/search.html?string=')">en</a>) / 
<a href="javascript:go('www.findarticles.com/cf_0/PI/search.jhtml?magR=all+magazines&amp;key=')">FindArt.</a> /
<a href="javascript:go('www.highbeam.com/library/search.asp?FN=SS&q=')">HighBeam</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('press.jrc.it/NewsBrief/dynamic?language=all&page=1&edition=searchresults&option=')" title="European Media Monitor News Brief">EMM</a>|<a href="javascript:go('press.jrc.it/NewsExplorer/search/fr/entities?query=')" title="European Media Monitor News Explorer">Peo</a> / 
<a href="javascript:go('www.topix.net/search/?q=')">Topix</a> /
<a href="javascript:go('search.wn.com/?version=1&language_id=-1&sort_type=nwf&corpus=twomonth&search_type=any&search_string=')">WNN</a> / 
<a href="javascript:go('www.redtram.com/search/?q=')" title="International News Search Engine - redtram.com/">RedTram</a> / 
<a href="javascript:go('www.newsnetplus.com/search.php?mode=normal&words=')" title="Latest News & Blogs from around the Net">NewsNet+</a> 

<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.inform.com/')" title="Inform tags and scores every topic, industry, organization, person, place and product mentioned throughout articles">Inform</a> / 
<a href="javascript:go('www.daylife.com/search?q=')" title="Daylife organizes search results into time buckets, making it easy for you to find past news">Daylife</a> / 
<a href="javascript:go('www.drudgereportarchives.com/dsp/search.htm?searchFor=')">Drudge</a> / 
<a href="javascript:go('www.newsisfree.com/pages/power/?query=')">NewsIsFree</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.newsnow.co.uk/newsfeed/?search=')">N.Now</a> / 
<a href="javascript:go('newstrove.com/cgi-bin/search.pl?search=')">N.Trove</a> / 
<a href="javascript:go('ww2.newslookup.com/cgi-bin/search.cgi?fmt=meta&q=')">N.Lookup</a> /
<a href="javascript:go('www.rocketnews.com/web/search.jsp?searchTerms=')">RocketN.</a> / 
<a href="javascript:go('en.wikinews.org/wiki/Special:Search?search=')">WikiN.</a> 
<br>
      
      </li>
      <li>

&nbsp;
EU:<a href="javascript:go('www.euractiv.com/Search?simple=true&combine=and&term=')">ractiv</a> /
<a href="javascript:go('www.euobserver.com/index.phtml?search_string_top=')">observer</a> /
<a href="javascript:go('www.eupolitix.com/FR/Search/Search.htm?sfulltext=True&stype1=0&ssort1=5%257c1&ssearch=')">politix</a> / 
<a href="javascript:go('www.eubusiness.com/search?SearchableText=')">business</a> / 
<a href="javascript:go('www.alertnet.org/search/index.htm?key=')" title="Reuters AlertNet is a humanitarian news network of more than 300 contributing NGOs - alertnet.org">AlertNet</a> 
<br>
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('www.liberation.fr/php/pages/pageSearch.php?recherche=')" title="Liberation - libe.fr/">Libe</a> 
/ <a href="javascript:go('www.lemonde.fr/web/recherche_resultats/1,13-0,1-0,0.html?query=')">Le Monde</a> 
(<a href="javascript:go('forums.lemonde.fr/perl/dosearch.pl?Cat=&Forum=All_Forums&Match=Entire%20Phrase&Searchpage=0&Limit=25&Old=allposts&Words=')">F</a>) 
/ <a href="javascript:go('www.leparisien.com/home/search/resultat.html?query=')">Parisien</a>
/ <a href="javascript:go('www.rfi.fr/actufr/statiques/001/recherche_av.asp?isPostBack=1&pg=&IndexPage=&CheckDocuments=on&CheckAudio=on&Geographie=&Thematique=&DateRech=&Chercher=Chercher&Recherche=')">RFI</a> / 
<a href="javascript:go('www.franceacturegions.com/recherche/exec_recherche.php?type=simple&rech_checktitre_ou_article1=2&rech_mots_cle1=')">Fr.Actu.Reg</a> 
<br>
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('www.wikio.fr/search=')" title="Moteur de recherche d'informations bas&eacute; sur les m&eacute;dias, les blogs et les publications des membres">Wikio</a> / 
<a href="javascript:go('actu.voila.fr/recherche.html?kw=')" title="Moteur de recherche d'actualitÃƒÂ©s de Voila">Voila</a> / 
<!-- <a href="javascript:go('fr.newzadig.com/search?q=')" title="Moteur de recherches d'informations sous forme de clusters de mots-cl&eacute;s">NewZadig</a> /
<a href="javascript:go('www.lexpress.fr/recherche/search.asp?sortBy=date&q=')" title="L'Express">Express</a> /  -->
<a href="javascript:go('www.rollyo.com/search.html?sid=6356&q=')" title="Newsmagazines franÃƒÂ§ais - via rollyo.com/">Pressefr</a> / 
<a href="javascript:go('recherche.nouvelobs.com/browse.php?sita=1&q=')" title="Nouvel Observateur">N.Obs</a> / 
<a href="javascript:go('www.20minutes.fr/recherche.php?s=tous&z=article&q=')" title="20minutes">20'</a> 
<br />

      </li>
      <li>
            
&nbsp;
<a href="javascript:go('www.google.com/search?q=site:lesechos.fr+')">Echos</a> /
<!--<a href="javascript:go('www.lesechos.fr/archives/moteur_site/resultat.htm?+(EKO_Article)&amp;SAISIE=')">Echos</a> /
-->
<a href="javascript:go('www.latribune.fr//Home.nsf/(DSMLookupHTML)/PointSearch?OpenDocument&Search=')">Tribune</a> / 
<a href="javascript:go('www.lefigaro.fr/cgi-search/htsearch?config=figaro&words=')">Fig</a>|<a href="javascript:go('www.lefigaro.fr/cgi/edition/genimprime?cle=')">aro</a> /
<!-- <a href="javascript:go('bourse.lefigaro.fr/actualite/recherche2.asp?rubrique=Articles&chaine=')">Figaro</a> /-->
<a href="javascript:go('www.agefi.fr/recherche/default.asp?RechDans=all&depuis=3&keywords=')">Agefi</a> / 
<a href="javascript:go('www.monde-diplomatique.fr/recherche?s=')">Diplo</a> / 
<a href="javascript:go('www.fing.org:80/jsp/liste_resultats.jsp?OBJET=TOUS&SITE_RECHERCHE=TOUS&SEARCH_SOUSRUBRIQUES=true&LANGUE_SEARCH=0&FROM=10&RH=ASSOEDHEC&QUERY=')" title="InternetActu.net, Fondation Internet Nouvelle Generation - fing.org/">Fing</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('slashdot.org/search.pl?query=')">/.</a> / 
<a href="javascript:go('www.google.fr/search?q=site%3Alinuxfr.org+')">DLFP</a> /
<a href="javascript:go('recherche.journaldunet.com/cgi-bin/findall?S=JDNET&amp;KEYWORDS=')">JDN</a>
/ <a href="javascript:go('www.zdnet.fr/rechercher/index.htm?query=')">ZDN</a>
/ <a href="javascript:go('www.google.com/search?sitesearch=transfert.net&hl=fr&q=')">Transfert</a>
/ <a href="javascript:go('rezo.net/recherche.php3?recherche=')">Rezo</a>
/ <a href="javascript:go('www.01net.com/outils/recherche/index.php?SortType=SORT+BY+DATE+DESC&Type=Full&fullText=')" title="01net, L'Ordinateur Individuel, Micro Hebdo, etc. - 01net.com/">01</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('search.atomz.com/search/?sp-a=00050190-sp00000000&sp-f=Windows-1252&sp-q=')">Rumeurs</a>
(<a href="javascript:go('search.atomz.com/search/?sp-a=00062d45-sp00000000&sp-q=')">en</a>)
/ <a href="javascript:go('search.atomz.com/search/?sp-a=sp1002e9aa&sp-f=ISO-8859-1&sp-q=')">Securite</a>
(<a href="javascript:go('search.securityfocus.com/cgi-bin/swsearch/swish.cgi?metaname=alldoc&query=')">en</a>) /
<a href="javascript:go('www.cve.mitre.org/cgi-bin/cvekey.cgi?keyword=')">CVE</a> / 
<a href="javascript:go('www.viruslist.com/eng/viruslistfind.html?rub1=100&rub3=010&rub4=001&findWhere=&findTxt=')">Virus</a>
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('groups.google.com/group/guerrelec/search?group=guerrelec&q=')" title="Liste de diffusion sur la guerre de l'information, la guerre electronique & Cie - groups.google.com/group/guerrelec/">guerrelec</a> / 
<a href="javascript:go('isn-search.ethz.ch/cgi-bin/s_lase.cgi?ps=20&amp;ul=&amp;gr=off&amp;cs=utf-8&amp;q=')">ISN</a>
<!-- Search 2579 Internet Sites of Interest to the International Relations and Security Policy Community --> /
<!--<a href="javascript:go('www.globalsecurity.org/cgi-bin/texis.cgi/webinator/search/?query=')">GlobalSecurity</a> /-->
<a href="javascript:go('cryptome.quintessenz.at/cgi-bin/htsearch?config=cryptome&method=and&format=builtin-long&sort=score&words=')">Cryptome</a> /
<a href="javascript:go('database.statewatch.org/searchdisplay.asp?searchfield=123&noofresults=100&resultsperpage=10&display=123&searchtype=1&searchtext=)" title="Monitoring the state and civil liberties in Europe - statewatch.org/">Statewatch</a> 
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.politicalinformation.com/cgi-bin/texis/webinator/newsearch?query=')" title="A targeted search engine for politics, policy & political news - politicalinformation.com/">Politics</a> / 
<a href="javascript:go('www.hurisearch.org/search/index.php?lang=any&amp;query=')">Huridocs</a> / 
<a href="javascript:go('www.namebase.org/cgi-bin/nb09?Na=')">PIR</a>
(<a href="javascript:go('www.google.com/search?q=site:namebase.org+')">G</a>) / 
<a href="javascript:go('www.newsvine.com/_vine/search?searchIn=x&q=')" title="A place to read, write, and discuss the news">NewsVine</a> 


<br />
<br />
      
      </li>
    </ul>
  </li>

<!-- E-mails -->

  <li>
E-mails
    <ul>
      <li>
&nbsp; 
<a href="javascript:go('groups.google.fr/groups?q=')">Groups</a> 
(<a href="javascript:go('groups.google.com/groups?as_uauthors=')">Authors</a>) / 
<a href="javascript:go('netscan.research.microsoft.com/Static/author/FindAuthor.asp?searchfor=')">UseNetScan</a> / 
<a href="javascript:go('groups.infora.org/perl/thread2?forumtxt=fr.*&textfield=')">Infora</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('search.gmane.org/search.php?query=')">GMane</a> / 
<a href="javascript:go('www.google.com/search?q=site%3Amail-archive.com+')">MailArchive</a> /
<a href="javascript:go('marc.theaimsgroup.com/?w=2&r=1&q=t&s=')">MARC Lists</a> / 
<a href="javascript:go('www.kelforum.com:8080/search.jsp?query=')" title="Le moteur de recherche des forums - kelforum.com/">KelForum</a>
<br />

<!--
Yahoo Groups : <a href="javascript:go('fr.groups.yahoo.com/search?query=')">fr</a> /
<a href="javascript:go('groups.yahoo.com/search?query=')">en</a><br />
<a href="javascript:go('partners.search.msn.com/partner.asp?dom=groups.msn.com&cfg=COENUS&q=')">MSN</a>
-->
      
      </li>
      <li>

&nbsp;
Yahoo : <a href="javascript:go('fr.groups.yahoo.com/search?query=')">fr</a>/<a href="javascript:go('groups.yahoo.com/search?query=')">en</a>
(<a href="javascript:go('www.google.com/search?q=site:groups.yahoo.com+')">goo</a>) /
<a href="javascript:go('partners.search.msn.com/partner.asp?dom=groups.msn.com&cfg=COENUS&q=')">MSN</a>
(<a href="javascript:go('www.google.com/search?q=site:groups.msn.com+')">goo</a>)
/ <a href="javascript:go('lists.topica.com/search/?search_type=msg&query=')">Topica</a>
<br />
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('reverseemail.addresses.com/reverse_email_lookup.php?ReverseEmail=')">Whois</a> / 
Mail <a href="javascript:go('www.gemal.dk/browserspy/mailcheck.cgi?mailaddress=')">Check</a>|
<!-- Email Address Verification Information -->
<a href="javascript:go('www.mailutilities.com/services/eav.html?action=check&amp;email=')">Verify</a>|
<a href="javascript:go('centralops.net/co/EmailDossier.vbs.asp?vrfy_expn=true&email=')" title="Investigate email addresses - centralops.net/co/">Dossier</a> / 
<a href="javascript:go('www.icq.com/whitepages/search_result.php?photo=1&search_type=keyword&keyword2=')">ICQ</a> /
<a href="javascript:go('members.msn.com/results.msnw?SearchType=1&LName=')"
title ="MSN member directory - members.msn.com/">MSN</a> 
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('pgp.mit.edu:11371/pks/lookup?op=vindex&amp;search=')">PGP</a> / 
<a href="javascript:go('www.cs.uu.nl/people/henkp/henkp/pgp/pathfinder/mk_path.cgi?TO=B2D7795E&FROM=')">Trust paths</a> / 
<a href="javascript:go('www.cs.uu.nl/~henkp/henkp/pgp/pathfinder/mk_path.cgi?STAT=')">Stats</a> / 
<a href="javascript:go('webware.lysator.liu.se/jc/wotsap/search/keystatistics?key=')">Stats</a> / 
<a href="javascript:go('webware.lysator.liu.se/jc/wotsap/search/listkeys?keys=')">List keys</a>
<!-- Search forms : http://www.lysator.liu.se/~jc/wotsap/search.html -->
<br /><br />
      
      </li>
    </ul>
  </li>

<!-- People -->

  <li>
Social *
    <ul>
      <li>
&nbsp; 
<a href="javascript:go('www.123people.fr/s/')" title="123people est un moteur de recherche de personnes">123people</a> / 
<a href="javascript:go('www.pipl.com/search/?LastName=')" title="The most comprehensive people search on the web">Pipl</a> / 
<a href="javascript:go('wink.com/people/nm/')" title="The world's largest people search engine">Wink</a> / 
<a href="javascript:go('www.spock.com/q/')" title="The world's leading people search engine.">Spock</a> / 
<a href="javascript:go('www.zoominfo.com/search/PersonQuery.aspx?searchSource=basic&searchParameters=')" title="People & Company search engine">ZoomInfo</a> / 
<a href="javascript:go('whoswho.fr/rechercher?button=Rechercher&act=search_biographie_simple_name&type_recherche=nom&mot=')" title="Who's Who">Who's Who</a>
<br>
<!-- http://www.pandia.com/people/index.html -->
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('www.118218.fr/recherche/lenumero/?validButton=JE+TROUVE&typ=r&b=0&submit=1&q=')" title="118 218">118 218</a> / 
<a href="javascript:go('www.facebook.com/srch.php?nm=')" title="Facebook">Facebook</a> / 
<a href="javascript:go('www.google.fr/search?q=site:copainsdavant.linternaute.com+')" title="Copains d'avant - copainsdavant.com/">Copains</a> / 
<a href="javascript:go('www.ouetu.com/index.php?site1=&page=rechercher&nom=')" title="Recherche de personnes - ouetu.com/">Ouetu</a> / 
<a href="javascript:go('search.geneanet.org/result.php3?lang=fr&name=')" title="Genealogical Database Networl - geneanet.org/">GeneaNet</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.whostalkin.com/search?q=')" title="A social media search tool that allows users to search for conversations">WhosTalkin</a> / 
<a href="javascript:go('www.icerocket.com/search?tab=buzz&q=')" title="Track blogs, twitter, friendfeed and news - icerocket.com">Big Buzz</a> / 
<a href="javascript:go('www.samepoint.com/?q=')" title="Samepoint is a conversation search engine that lets you see what people are talking about.">SamePoint</a>
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('friendfeed.com/search?q=')" title="The easiest way to share online">FriendFeed</a> / 
<a href="javascript:go('socialmention.com/search?q=')" title="A social media search engine that searches user-generated content">SocialMention</a> / 
<a href="javascript:go('www.scoopler.com/search/#')" title="Real-time search">Scoopler</a>
<br />
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('www.twine.com/search?type=&text=')" title="Semantic understanding">Twine</a> / 
<a href="javascript:go('www.freebase.com/search?query=')" title="A social database">Freebase</a> / 
<a href="javascript:go('www.trueknowledge.com/q/')" title="The Internet answer engine">True Knowledge</a> 
<br />
      
      </li>
      <li>

&nbsp;
Forums : <br />
&nbsp;
<a href="javascript:go('www.backtype.com/comments?q=')" title="Search comments made on blogs">Backtype</a> / 
<a href="javascript:go('www.omgili.com/omgili.search?q=')" title="Find out what people are saying">Omgili</a> / 
<a href="javascript:go('boardreader.com/index.php?a=s&x=1&q=')" title="Search Web's forums and message boards">BoardReader</a> / 
<a href="javascript:go('v2.boardtracker.com/search/?search=')" title="Want to know what people are talking about?">BoardTracker</a>
<br />
      

      </li>
      <li>

&nbsp;
Twitter : <br />
&nbsp;
<a href="javascript:go('search.twitter.com/search?q=')" title="twitter">Twitter</a> / 
<a href="javascript:go('www.twazzup.com/search?q=')" title="Cherche et trouve sur twitter">Twazzup</a> / 
<a href="javascript:go('twitturly.com/search?q=')" title="We track and rank what URLs people are talking about on Twitter">Twitturly</a> / 
<a href="javascript:go('www.icerocket.com/search?tab=twitter&lng=&q=')" title="IceRocket twitter search">IceRocket</a> / 
<a href="javascript:go('microplaza.com/search?q=')" title="Discover relevant information  filtered by the people you follow.">MicroPlaza</a> 
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('tweetscan.com/index.php?s=')" title="Tweet Scan searches Twitter, identi.ca and others">TweetScan</a> / 
<a href="javascript:go('hashtags.org/search?q=')" title="Trends and tags on Twitter">HashTags</a> / 
<a href="javascript:go('twemes.com/')" title="Twitter memes and global tags">Twemes</a> / 
<a href="javascript:go('www.tweepz.com/search?q=')" title="Look who's tweeting">Tweepz</a>


<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('twitterfall.com/?trend=')" title="View the latest 'tweets' of upcoming trends and custom searches ">Twitterfall</a> / 
<a href="javascript:go('tweetmi.com/')" title="Real-time Twitter Topics">TweetMi</a> / 
<a href="javascript:go('www.twingly.com/search?content=microblog&q=')" title="Microblog search">Twingly</a> / 
<a href="javascript:go('tweetgrid.com/grid?l=0')" title="A powerful Twitter Search Dashboard that allows you to search for up to 9 different topics">TweetGrid</a> / 
<a href="javascript:go('spy.appspot.com/find/')" title="spy can listen in on the social media conversations">Spy</a> 
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.retweetrank.com/')" title="Find any twitterer's retweetrank!">ReTweetRank</a> / 
<a href="javascript:go('twittercounter.com/')" title="The ultimate Twitter statistics provider">TwitterCounter</a> 
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('friendorfollow.com/')" title="Who are you following that's not following you back?">FriendOrFollow</a> / 
<a href="javascript:go('www.twitteranalyzer.com/mainStatistics.aspx?userId=')" title="Twitter analytic stats">TwitterAnalyzer</a> / 
<a href="javascript:go('twitter.mailana.com/profile.php?person=')" title="Twitter Friends">Mailana</a> / 
<a href="javascript:go('tweetstats.com/graphs/')" title="Graph your Twitter Stats">TweetStats</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.twellow.com/search?q=')" title="Twe Twitter Yellow Pages">Twellow</a> / 
<a href="javascript:go('backtweets.com/search?q=')" title="Search for links on Twitter">BackTweets</a> / 
<a href="javascript:go('real-url.org/')" title="SHORT URL to REAL URL">Real Url</a> / 
<a href="javascript:go('tweleted.com/')" title="Recover deleted Twitter messages">Tweleted</a>
<br />
<br />
      

      </li>
    </ul>
  </li>


<!-- Blogs -->

  <li>
Blogs
    <ul>
      <li>
&nbsp; 
<a href="javascript:go('blogsearch.google.fr/blogsearch?hl=fr&q=')" title="Le moteur de recherche de blogs de Google - blogsearch.google.fr/">Goo</a> / 
<!-- <a href="javascript:go('fr.search.yahoo.com/blog/search?&ei=UTF-8&p=')" title="Yahoo Blog Search">Ya!</a> / -->
<a href="javascript:go('fr.ask.com/blogsearch?s=f&q=')" title="Ask.com">Ask</a> / 
<a href="javascript:go('www.technorati.com/cosmos/links.html?rank=&amp;url=')">Technorati</a>|<a href="javascript:go('technorati.com/chart/')" title="How many blogs have used the term in the past week to the past year">Chart</a> / 
<a href="javascript:go('www.feedster.com/search.php?q=')">Feedster</a> /
<a href="javascript:go('www.syndic8.com/feedlist.php?ShowMatch=')" title="Find RSS and Atom news feeds - syndic8.com/">Syndic8</a> 
<!-- <a href="javascript:go('www.daypop.com/search?q=')">Daypop</a> / 
<a href="javascript:go('www.popdex.com/search/?query=')">Popdex</a> / 
<a href="javascript:go('http://creative-mobs.com/gutentag/posts/')" title="A Search Engine based on tag aggregation">GutenTag</a> --> 
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('recherche.skyblog.com/cgi-bin/findall?origin=home&C=10001&DEFAULT_MODE=mandatory&KEYWORDS=')" title="Skyblog, les blogs de djeun's - skyblog.com/">Sky</a> / 
Blog.<a href="javascript:go('www.blogpulse.com/search?query=')">Pulse</a>
<!-- an automated trend discovery system for blogs -->/ 
<a href="javascript:go('www.blogrunner.com/search?q=')">Runner</a>/ 
<a href="javascript:go('www.blogdigger.com/search.jsp?q=')">Digger</a>/ 
<!-- BlogRunner tracks weblog conversations as they develop across the web. -->
<a href="javascript:go('www.bloglines.com/search?t=1&r=0&q=')">Lines</a>/ 
<a href="javascript:go('www.blogmarks.net/search/')" title="Enlarge your bookmarks - blogmarks.net/">Marks</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.digg.com/search?search=')" title="A news website that combines social bookmarking, blogging, RSS, and non-hierarchical editorial control - digg.com/">Digg</a> / 
<a href="javascript:go('findory.com/search?do=1&q=')" title="We want to help people find the news they need - findory.com/">Findory</a> / 
<a href="javascript:go('tailrank.com/posts/find/?q=')" title="A weblog indexing zeitgeist site which finds hot news - tailrank.com/">TailRank</a> / 
<a href="javascript:go('www.scoopeo.com/search?s=')" title="Portail collaboratif d'infos selectionnes par les internautes - scoopeo.com/">Scoopeo</a> / 
<a href="javascript:go('fuzz.fr/index.php?search/')" title="Site de publication et de notation de news - fuzz.fr/">Fuzz</a> / 
<a href="javascript:go('www.sphere.com/search?q=')" title="Discover high-quality, relevant, and timely blog posts">Sphere</a>
<br>
      
      </li>
      <li>
 

&nbsp; 
<!-- <a href="javascript:go('www.fastbuzz.com/search/results.jsp?query=')">Fastbuzz</a> / 
<a href="javascript:go('www.waypath.com/query?type=kws&key=')">WayPath</a> / 
<a href="javascript:go('www.gataga.com/explore.php?q=')" title="Metasearch engine of bookmarks and tags added by real people">Gataga</a> /
<a href="javascript:go('www.completerss.com/FeedResults.aspx?q=')">CompleteRSS</a>
<br>

      </li>
      <li>
      
&nbsp;
<a href="javascript:go('www.weblogues.com/recherche.php?q=')">Weblogues</a> / -->
Blog<a href="javascript:go('www.blogdimension.com/search?q=')" title="Le premier federateur de la blogosphere francaise - BlogDimension">Dimension</a>|<a href="javascript:go('www.blogolist.com/index.php?findword=')" title="L'index des blogs francophones">olist</a>|<a href="javascript:go('www.blogonautes.com/resultats.blog?tri=maj&tri2=maj&keyword=')" title="Un autre index des blogs francophones">onautes</a>|<a href="javascript:go('www.blogarea.net/Links/blogarea.php?search=')">area</a>|<a href="javascript:go('www.blogouaf.com/api/search.php?search=1&page=1&results=1&type=&query=')" title="Moteur de recherche francophone de blogs d'images et de tags">ouaf</a>
<br>

       </li>
       <li>
            
&nbsp;
<a href="javascript:go('feedvalidator.org/check.cgi?url=http%3A%2F%2F')" title="A  validator for RSS and Atom syndicated feeds - feedvalidator.org/">Feed</a> /
<a href="javascript:go('rss.scripting.com/?url=http%3A%2F%2F')" title="RSS Validator - rss.scripting.com/">RSS</a> / 
<a href="javascript:go('www.rojo.com/tagged-stories/?tag=')" title="Search millions of RSS feeds for the latest news and information">Rojo</a> / 
<a href="javascript:go('blogs.gigablast.com/search?q=') title=""A powerful, new search engine that does real-time indexing - blogs.gigablast.com/">Gigablast</a> / 
<a href="javascript:go('www.icerocket.com/search?tab=web&q=')" title="Web, Blogs, News, Moblogs, Images, Multi Media, RSS Builder - icerocket.com/">Icerocket</a> / 
<a href="javascript:go('www.blinklist.com/tag/')" title="Social Bookmarking merged with People Powered Search and Expert Recommendations - blinklist.com/">BlinkList</a>
<br>

       </li>
       <li>
            
&nbsp;
<a href="javascript:go('del.icio.us/search/?all=')" title="del.icio.us">del.icio.us</a> / 
<a href="javascript:go('shadows.com/tags/')" title="Another social bookmarking service - shadows.com/">Shadows</a> / 
<a href="javascript:go('clipmarks.com/tags/')" title="A bookmarking service wich focuses on paragraphs, not webpages- clipmarks.com/">ClipMarks</a> / 
<a href="javascript:go('www.opinmind.com/search.jsp?q=')" title="Opinmind collects the opinions of bloggers all over the world - opinmind.com/">OpinMind</a> / 
<a href="javascript:go('www.bitacle.com/blogs/search/')" title="Bitacle Blog Search Archive - bitacle.com/">Bitacle</a> 
<br />
<br />
      
      </li>
    </ul>
  </li>


<!-- Corp -->

<a name="suite"></a>
  <li>
Corp.
    <ul>
      <li>

&nbsp; 
<a href="javascript:go('www.categorynet.com/v2//index.php/component/option,com_search/Itemid,81/?searchword=')" title="Portail de la presse, journalisme et des relations presse">Cat.Net</a> / 
<!-- <a href="javascript:go('www.google.fr/search?q=site%3Acyperus.fr+')">Cyperus</a> / -->
<a href="javascript:go('www.boursorama.com/recherche/index.phtml?searchType=normal&recherche=1&periode=all&query=')">Bourso.</a> /
<a href="javascript:go('www.news-eco.com/index.php?loc=IDF&but=search&search=')">News-eco</a> /
<a href="javascript:go('communiques.info-decideurs.com/index.adml?ok.x=0&ok.y=0&r=0&h_op=1&ok.x=21&ok.y=12&search=')">Decideurs</a>
<br>
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('fr.finsearch.yahoo.com/search/quotes_fr?fname_n=txt_name&fname_t=txt_type&fname_x=txt_region&s=fr_sort&tag_t=*&tag_n=')">Yahoo</a>
(<a href="javascript:go('finance.yahoo.com/search?type=&s=')">us</a>) / 
<a href="javascript:go('www.firstinvest.com/cotations/trouve1.asp?Chaine=')">FirstInvest</a> / 
<a href="javascript:go('portal.kompass.com/kinl/cgi-bin/KINL_SOCaction.cgi?_Lang=fr&_Action=46_DETFIC&_Page=comp_list&_Prevact=SOCRECH&_Nbpage=1&_Pgdebut=1&_Secteur=SOC&_KProv=FR001&_Choix=CN&_Zone=WW&_Keyword=')">Kompass</a> / 
<a href="javascript:go('www.indexa.fr/phc/Recherche/index.phc?chaine=')">Indexa</a>
<br />
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('cbs.marketwatch.com/news/newsfinder/default.asp?Property=word&siteid=mktw&value=')">MarketWatch</a> 
(<a href="javascript:go('cbs.marketwatch.com/news/newsfinder/default.asp?Property=word&doctype=2007&scid=2&siteid=mktw&Value=')">PR</a>) / <a href="javascript:go('news.google.com/news?num=20&amp;hl=en&amp;ie=ISO-8859-1&amp;scoring=d&amp;q=+%28+source%3Aprnewswire__press_release_+%7C+source%3Abusiness_wire__press_release_+%7C+source%3Amarket_wire__press_release_+%29')">Google PR</a>
/ <a href="javascript:go('www.corporateinformation.com/cosearch.asp?terms=')">CI</a>
<!--with PRNewswire et plein d'autres sites--> / 
<a href="javascript:go('www.visiobrand.com/index.jsp?catID=0&rub=SITE&searchwords=')">Brand</a>
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('investing.businessweek.com/research/common/symbollookup/symbollookup.asp?lookuptype=public&region=ALL&textIn=')" title="33 pages of data, charts, profiles, and news stories on each of 42,000 public companies in the U.S. and abroad.">CieChannels</a> / 
<a href="javascript:go(finance.google.com/finance?q=')" title="Informations, charts, news and fundamental financial data">Google</a> / 
<a href="javascript:go('www.euronext.com/sitesearch/0,5371,1732_4849749,00.html?searchTarget=quote&path=%2Fquicksearch&fromsearchbox=true&matchpattern=')" title="Europe's leading cross-border exchange - euronext.com/">Euronext</a> / 
<a href="javascript:go('extsearch.worldbank.org/servlet/SiteSearchServlet?q=')" title="Banque Mondiale - worldbank.org/">WorldBank</a>
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.theofficialboard.fr/company/search?option=companyName&q=')" title="DÃƒÂ©couvrez les organigrammes des 20 000 plus grandes entreprises mondiales">TheOfficialBoard</a> / 
<!-- <a href="javascript:go('www.fortune.com/fortune/search?query=')">Fortune</a> / 
<a href="javascript:go('search.ft.com/search/totalSearch_Form.html?vsc_query=')">FT</a> / 
<a href="javascript:go('www.funds-sp.com/globalfunds/search/dsp_Ratings_Search.cfm?q=Ratings-en&s=')">S&P</a> / -->
<a href="javascript:go('www.hoovers.com/free/search/simple/xmillion/index.xhtml?page=1&which=company&query_string=')">Hoovers</a> / 
<a href="javascript:go('www.zoominfo.com/search/CompanyQuery.aspx?searchSource=tab&singleSearchBox=')" title="Find People and Company Summaries - networking7.zoominfo.com/PeopleSearch/">ZoomInfo</a>
<br /><br />
      
      </li>
    </ul>
  </li>

<!-- Alter -->

  <li>
Alter
    <ul>
      <li>
&nbsp;
<a href="javascript:go('www.quechoisir.org/Recherche.jsp?requete=')">UFC QC</a> /
<a href="javascript:go('www.google.fr/search?q=site%3Aindymedia.org+')">Indymedia</a> /
<a href="javascript:go('www.google.fr/custom?sitesearch=transnationale.org&q=')">Transnat.</a> / 
<a href="javascript:go('www.novethic.fr/novethic/site/recherche/rech_resultat.jsp?motif_simple=')">Novethic</a> 
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.alternet.org/search.php?term=')">Alternet</a>  /
<a href="javascript:go('www.oneworld.net/article/searchswitch/?SearchText=')" title="News and views from over 1,600 NGO - oneworld.net/">OneWorld</a> / 
<a href="javascript:go('www.google.com/search?site:zmag.org+q=')" title="A community of people commited to social change - zmag.org/">ZMag</a>  
<a href="javascript:go('thecorporatelibrary.master.com/texis/master/search/?q=')" title="Corporate governance data, analysis & risk assessment tools - thecorporatelibrary.com/">Corp.Library</a>
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.corpwatch.org/search/PSR.jsp?term=')">CorpWatch</a> / 
<a href="javascript:go('www.google.com/custom?sitesearch=prwatch.org&q=')">PRWatch</a> / 
<a href="javascript:go('www.corporatewatch.org.uk/cgi-bin/swish-bin/Swish-Search.cgi?page=1&numpp=10&configfile=swishe.conf&search=')">CorporateWatch</a>
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.google.com/search?q=site%3Aessential.org+')">Essential</a> / 
<a href="javascript:go('www.aflcio.org/corporateamerica/sitesearch.cfm?srchString=')">AFL-CIO</a> /
<a href="javascript:go('multinationalmonitor.org/cgi-bin/htsearch?words=')"
title="Corporate activity, worker health and safety - multinationalmonitor.org/">Multinat. Monitor</a> 
<br />
<br />
      
      </li>
    </ul>
  </li>

<!-- Data -->

  <li>
Data *
    <ul>
      <li>
&nbsp; 
<a href="javascript:go('www.statistique-publique.fr/index.php?php_action=RECHERCHE_texteLibre&TexteLibreSelect=')" title="Le portail de la statistique publique">StatistiquePublique</a> |
<a href="javascript:go('www.insee.fr/fr/publications-et-services/default.asp?page=services%2Frecherche.htm&cx=011031962541167842879%3Aradlwwkh1lw&cof=FORID%3A9&ie=ISO-8859-1&q=')" title="">Insee</a> |
<a href="javascript:go('www.nosdonnees.fr/package?q=')" title="Un registre libre de jeux de donnÃƒÂ©es">NosDonnÃƒÂ©es</a> |
<a href="javascript:go('www.data-publica.com/WebSite_viewQuickSearchResultList?reset:int=1&list_style=search&your_search_text=france&ignore_hide_rows:int=1&sphinxse_query=')" title="Annuaire des donnÃƒÂ©es publiques disponibles en France">DataPublica</a><br />

&nbsp; 
<a href="javascript:go('opendatasearch.org/?q=')" title="">OpenData</a> |
<a href="javascript:go('publicdata.eu/?q=')" title="europe's public data">PublicData</a> |
<a href="javascript:go('search.usa.gov/search?affiliate=datagov&query=')" title="">data.gov</a> |
<a href="javascript:go('data.gov.uk/search/apachesolr_search/')" title="UK's Data Portal">data.uk</a><br />

&nbsp; 
<a href="javascript:go('search.worldbank.org/data?language=FR&format=fr&qterm=')" title="">WorldBank</a> |
<a href="javascript:go('stats.oecd.org/Index.aspx?lang=fr')" title="">OCDE</a> |
<a href="javascript:go('epp.eurostat.ec.europa.eu/portal/page/portal/product_results/search_results?mo=containsall&ms=')" title="">Eurostat</a> |
<a href="javascript:go('data.un.org/Search.aspx?q=')" title="">UnData</a> |
<a href="javascript:go('www.freebase.com/search?limit=30&start=0&query=')" title="An entity graph of people, places and things, built by a community that loves open data.">FreeBase</a> |
<a href="javascript:go('')" title=""></a><br />

&nbsp; 
<a href="javascript:go('timetric.com/search/?q=')" title="Everything you need to publish data and research online">timetric</a> |
<a href="javascript:go('datamarket.com/data/list/?q=')" title="100 million time series from the most important data providers">datamarket</a> |
<a href="javascript:go('www.junar.com/portal/DataServicesFinder/actionSearch?search=')" title="Over 10 050 data streams">Junar</a> |
<a href="javascript:go('scraperwiki.com/tags/')" title="Make bad data good, collaborate & discover new datasets">scraperwiki</a> <br />
<br />
      
      </li>
    </ul>
  </li>

<!-- Soft -->

  <li>
Soft
    <ul>
      <li>
&nbsp; 
Google <a href="javascript:go('www.google.com/linux?hl=fr&q=')" title="Search for Gnu/Linux-related sites using google - google.com/linux">Gnu</a> |
<a href="javascript:go('www.google.com/mac?q=')" title="Search for Apple/Macintosh-related sites using Google - google.com/mac">Mac</a> |
<a href="javascript:go('www.google.com/microsoft?q=')" title="Search Microsoft-related sites using Google - google.com/microsoft">MS</a> / 
<a href="javascript:go('www.beeblex.com/search.php?s=')" title="BeebleX-the PHP search engine - beeblex.com/">Php</a> / 
<a href="javascript:go('www.google.fr/search?hl=frl&q=site%3Aspip.net+OR+site%3Aforum.spip.org+OR+site%3Aspip-contrib.net+')" title="Chercher dans les articles, forum, contrib, lab de SPIP - google.fr/">Spip</a> 

<br>
 
      </li>
      <li>

&nbsp;  
<a href="javascript:go('sourceforge.net/search/?words=')" title="The world's largest development and download repository of Open Source code and applications - sourceforge.net/">SF</a> / 
<a href="javascript:go('freshmeat.net/search/?q=')" title="The Web's largest index of Unix and cross-platform software - freshmeat.net/">FreshMeat</a> / 
<a href="javascript:go('rpm.pbone.net/index.php3?stat=3&limit=1&srodzaj=3&dl=40&search=')" title="RPM search @ rpmbone.net  - rpmbone.net/">RPMBone</a> / 
<a href="javascript:go('fr.rpmfind.net/linux/rpm2html/search.php?query=')" title="RPM repository - rpmfind.net/">RPMFind</a> 
<br>
<br>
      
      </li>
    </ul>
  </li>
      
<!-- Biz -->

  <li>
Biz'
    <ul>
      <li>
&nbsp; 
<a href="javascript:go('fr.finance.yahoo.com/convertisseur/convert?from=USD&to=EUR&amt=')" title="Convertisseur de devises - fr.finance.yahoo.com">Change</a> / 
<a href="javascript:go('search-desc.ebay.fr/search/search.dll?sotextsearched=2&amp;query=')">eBay</a>|<a href="javascript:go('annonces.ebay.fr/search?fln=0&fromAuctions=true&kw=')" title="Kijiji">an</a> / 
<a href="javascript:go('www.priceminister.com/s/')">PriceMinister</a> / 
<a href="javascript:go('www.amazon.fr/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=')" title="Amazon">Amazon</a> 

<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.leboncoin.fr/annonces/offres/occasions/?f=a&th=1&q=')" title="BonCoin">BonCoin</a> / 
<a href="javascript:go('search.vivastreet.fr/search?lb=new&search=1&start_field=1&cat_1=&searchGeoId=0&end_field=&keywords=')" title="">Vivastreet</a> / 
<a href="javascript:go('www.ciao.fr/mssr?q=')" title="">Ciao</a> / 
<a href="javascript:go('fr.shopping.com/xFS?KW=')" title="">Shopping</a> / 
<a href="javascript:go('froogle.google.com/froogle?q=')" title="froogle (fru'gal) n. Smart shopping through Google - froogle.com/">Froogle</a>

<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.acheter-moins-cher.com/asp/annuaire.asp?t=4&kwd=')" title="Comparateur de prix independant - acheter-moins-cher.com/">-cher</a> / 
<a href="javascript:go('www.twenga.fr/search.php?q=')" title="Comparateur 'neutre', ne faisant pas payer les commerÃƒÂ§ants">Twenga</a> /
<a href="javascript:go('www.clubic.com/recherche/recherche.php?textrecherche=')" title="Magazine informatique, comparateur de prix, etc. - clubic.com">Clubic</a> / 
<a href="javascript:go('www.rue-montgallet.com/prix/75/recherche/?site=all&kw=')">Montgallet</a> / 
<a href="javascript:go('www.pricerunner.fr/recherche?q=')" title="Comparez avant d'acheter - pricerunner.fr/">PriceRunner</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('fr.kelkoo.com/ctl/do/search?siteSearchQuery=')" title="Trouvez, comparez, choisissez - fr.kelkoo.com/">Kelkoo</a> / 
<a href="javascript:go('wvw.monsieurprix.com/search/quicksearch.html?q=')" title="Shopping aux meilleurs prix : la vente en ligne simplifie - monsieurprix.com/">MrPrix</a> / 
<a href="javascript:go('www.buycentral.fr/query.html?qry=')" title="Comparer les prix pour mieux acheter - buycentral.fr">BuyCentral</a> / 
<a href="javascript:go('www.i-comparateur.com/search.aspx?q=')" title="Moteur de comparaison de prix - i-comparateur.com">i-Comp</a> / 
<a href="javascript:go('www.2xmoinscher.com/SITE/recherche.asp?strRech=')" title="Achats/ventes securises de produits neufs et d'occasion">2x-cher</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('doorone.fr/xFS?KW=')" title="DoorOne, version web 2.0 de shopping.com">DoorOne</a> / 
<a href="javascript:go('www.webmarchand.com/search.htm?mot=')" title="L'annuaire du commerce en ligne - webmarchand".com/>WebMarchand</a> / 
<a href="javascript:go('www.leguide.com/s/w/')">Le Guide</a> / 
<a href="javascript:go('www.touslesprix.com/sea2.asp?keyword=')" title="Achat au meilleur prix - touslesprix.com/">TousLesPrix</a>
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.codereduc.com/recherche.php?rech=')" title="Le rendez-vous des cyber-acheteurs avertis">Cod</a>|<a href="javascript:go('www.ma-reduc.com/recherche-reduction.php?search=')" title="Des bons de reduction sur 800 sites - ma-reduc.com/">Reduc</a> / 
<a href="javascript:go('www.ceriseclub.com/recherche.php?mots=')" title="Cerise Club, bons de r&eacute;duction, coupons">Cerise</a> / 
<a href="javascript:go('www.achetergagnant.com/?mod=tek&nom=')" title="Acheter gagnant">AchGagn</a> / 
<a href="javascript:go('alatest.fr/pages/search/fr_FR/?searchop=AND&keyword1=')" title="Comparateur de qualit&eacute; recensant plus de 300 000 tests professionnels">Alatest</a> / 
<a href="javascript:go('www.retrevo.com/search?q=')" title="Infos, trucs, FAQ et modes d'emploi de nos 'gadgets' &eacute;lectroniques">Retrevo</a> 

<br>

      </li>
      <li>
            
&nbsp;
<a href="javascript:go('www.monsieurdiscount.com/recherche_site.aspx?text=')" title="">Mister</a>|
<a href="javascript:go('www.vente-discount.com/recherche.php?recherche=')" title="Guide de la vente en ligne discount">Discount</a> / 
<a href="javascript:go('www.mdestock.com/Articles.aspx?s=')" title="">Destock</a>|<a href="javascript:go('www.destocktout.fr/advanced_search_result.php?keywords=')" title="">Tout</a> / 
<a href="javascript:go('www.armenager.com/electromenager/resultats_par_reference.php?reference=')" title="">ArMenager</a> 
<!-- <a href="javascript:go('www.google.fr/search?q=site:declasser.com+')" title="">Declasser</a> / -->
<br>

      </li>
      <li>
            
&nbsp;
<a href="javascript:go('www.eyrolles.com/Informatique/Recherche/index.php?q=')">Eyrolles</a> / <a href="javascript:go('www.chapitre.com/frame_rec.asp?quicksearch=')">Chapitre</a> /
<a href="javascript:go('www3.fnac.com/search/quick.do?text=')" title="Produits culturels et techniques - fnac.com/">FNAC</a> / 
<a href="javascript:go('www.abebooks.fr/servlet/SearchResults?kn=')" title="">Abebooks</a> /
<a href="javascript:go('www.livre-rare-book.com/search/current.seam?quicksearch=')" title="">LivreRare</a>
<br>

      </li>
      <li>
            
&nbsp;
<a href="javascript:go('www.x-recherche.com/cgi-bin/trouve.cgi?name=ziegler&MOTS=')">Ann. Alt.</a> / 
<a href="javascript:go('www.i-m-l.com/resultats.php3?type_rech=motscles&motscles=')">I</a>|<a href="javascript:go('www.i-m-l.com/resultats.php3?type_rech=homologation&homologation=')">M</a>|<a href="javascript:go('www.i-m-l.com/resultats.php3?type_rech=remarques&remarques=')">L</a>

<br />
<br />
      
      </li>
    </ul>
  </li>

<!-- Sciences -->

  <li>
Sci.
    <ul>
      <li>

&nbsp; 
<a href="javascript:go('dbs.cordis.lu/cordis-cgi/srchidadb?CALLER=FR_UNIFIEDSRCH&QZ_WEBSRCH=')">Cordis</a> /
<a href="javascript:go('www.science.gouv.fr/cgi/search?q=')">sci.gouv</a> / 
<a href="javascript:go('gimli.dsi.cnrs.fr/ogpub/new2/smartdyn/smartdyn.php?hideFlags=18&context=1&request=')">CNRS</a> / 
<!-- Moteur experimental sur l'ensemble des sites Education et Recherche --> 
<a href="javascript:go('k0broker.cndp.fr/spinoo/resultatGen.asp?Serveurs=&amp;Acad=&amp;texte=')" title="Moteur de recherche de sites educatifs institutionnels - www.cndp.fr/spinoo/">Spinoo</a>
<!-- Spinoo, le moteur de recherche de l'education --> / 
<a href="javascript:go('www.in-extenso.org/?q=')" title="In-extenso, moteur de recherches en sciences humaines et sociales - in-extenso.org">Sci.Soc.</a> /
<a href="javascript:go('www.adbs.fr/site/search/index.php?q=')" title="Association des professionnels de l'information et de la documentation - adbs.fr/">ADBS</a>
<!-- Sciences humaines et sociales -->
<br>
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('www.refseek.com/search?q=')" title="A web search engine for students and researchers">RefSeek</a> / 
<a href="javascript:go('hal.archives-ouvertes.fr/index.php?action_todo=search_full&access=p&entqr=0&output=xml_no_dtd&ud=1&site=HAL&ie=UTF-8&client=maSortieHAL-HAL&oe=UTF-8&proxystylesheet=maSortieHAL-HAL&sort=date%3AD%3AS%3Ad1&q=')" title="Documents scientifiques de toutes les disciplines">HAL</a> / 
<a href="javascript:go('www.scirus.com/srsapp/search?q=')" title="Search over 167M scientific Webpages - scirus.com/srsapp/">Scirus</a> / 
<a href="javascript:go('liinwww.ira.uka.de/searchbib/index?query=')" title="Collection of Computer Science Bibliographies - liinwww.ira.uka.de/bibliography/">CQSB</a> / 
<a href="javascript:go('citeseer.ist.psu.edu/cis?q=')" title="Scientific literature digital library">CiteSeer</a> /
<a href="javascript:go('insdl.org/search/index.php?formview=searchresults&query=')" title="National Science Digital Library - nsdl.org/">NSDL</a><!--  /
<a href="javascript:go('www.sciseek.com/search/search.php/search::TEXTSEARCH/Term s::')">SciSeek</a>
SciSeek.com is a science search engine -->
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('quod.lib.umich.edu/cgi/b/bib/bib-idx?type=boolean&size=10&rgn1=entire+record&rgn2=entire+record&rgn3=entire+record&c=oaister&searchfield=Keyword&q1=')" title="A union catalog of digital resources">OAIster</a> / 
<a href="javascript:go('fr.citeulike.org/search/all?f=abstract&q=')" title="CiteULike aide les chercheurs &#224; partager, stocker et organiser les publications qu'ils lisent">CiteULike</a> / 
<a href="javascript:go('infomine.ucr.edu/cgi-bin/canned_search?fields=ti;au;kw;su;de;fu&query=')" title="Scholarly Internet Resource Collections - http://infomine.ucr.edu/">Infomine</a> / 
<a href="javascript:go('www.cehoo.com/rec/cehoo_recal.cgi?recmc=')" title="Annuaire - moteur de liens environnement nature - cehoo.com/">Cehoo</a> /
<a href="javascript:go('fce.inist.fr/cgi-bin/public/x_k2search?Dbname=0000&modele=fre%2Fx_k2resu91.htm&OPERATEUR=AND&base=8&base=9&modele_serie=fre%2Fs_k2resu91.htm&modele_fasc=fre%2Ff_k2resu91.htm&modele_art=fre%2Fa_k2resu91.htm&modele_mono=fre%2Fm_k2resu91.htm&collection=a&&tlibre=')" title="Consulter les catalogues de l'Institut de l'Information Scientifique et Technique - fce.inist.fr/">INIST</a> /
<!-- Pres de 8 millions de notices bibliographiques en sciences et techniques -->
<a href="javascript:go('www.persee.fr/quickSearch.do?withPersee=true&firstDisplay=false&query=')" title="Portail de revues scientifiques en sciences humaines et sociales - persee.fr/">Persee</a>
<!-- 
http://www.insee.fr/fr/recherche/Recherche_doc.asp?theme_id=0
-->
<br>
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('www.semanticwebsearch.com/?st=&ss=')" title="A Search Engine for the Semantic Web - semanticwebsearch.com/">Semantic</a> / 
<a href="javascript:go('smealsearch.psu.edu/cs?q=')" title="Academic Business Literature Digital Library - smealsearch2.psu.edu/">SmealSearch</a> / 
<a href="javascript:go('search.eurekalert.org/e3/query.html?qt=')" title="Search science, medicine and technology infos - search.eurekalert.org/">EurekAlert!</a> / 
<a href="javascript:go('www.knowit.com/search.htm?keyword=')" title="The Internet's top-ranked search resource for technology solutions and information - knowit.com/">KnowIT</a> 
<br>
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.cerimes.education.fr/index.php?page=search&smode=0&op1=search_results,0&sp1=')" title="CEntre de Ressources et d'Information sur les Multimedias pour l'Enseignement Superieur - cerimes.education.fr">Cerimes</a> /
<a href="javascript:go('librapport.org/search.php?ou=0&iddomaine=0&q=')" title="Rapports de stage, memoires, theses, exposes - librapport.org/">Librapport</a> / 
<a href="javascript:go('thesa.inist.fr/fre/result_simple_logique.php?contenu=')" title="Plus de 2000 sujets de theses en preparation - thesa.inist.fr">Thesa</a> / 
<a href="javascript:go('aip.completeplanet.com:80/aip-engines/browse?thisPage=%2Fbrowse%2FlocalSearchResults.jsp&successPage=%2Fbrowse%2FlocalSearchResults.jsp&errorFlag=&errorMsg=&event=searchAllDocsEvent&nodePath=%2FTop%2FmyDQM%2FStructure+Reports&nodeHarvestName=&nodeQueryExpr=&nodeQueryType=&directPage=&directSection=4&account=loc&username=dev2_040308&currentPage=0&windowHeight=&windowWidth=&windowTop=&windowLeft=&browserOptionsDirectories=true&browserOptionsLocation=true&browserOptionsMenubar=true&browserOptionsResizable=true&browserOptionsScrollbars=true&browserOptionsStatus=true&browserOptionsToolbar=true&treeQueryType=and&treeQueryTarget=all&treeQueryExpr=')" title="Discover over 70,000+ searchable databases and specialty search engines - aip.completeplanet.com/">CompletePlanet</a>
<br>
<br>
      
      </li>
    </ul>
  </li>

<!-- Varia -->

  <li>
Etc.
    <ul>
      <li>

&nbsp; 
<a href="javascript:go('www.vidal.fr/recherchemedicament.asp?mot=')" title="L'information de rÃƒÂ©fÃƒÂ©rence sur les produits de santÃƒÂ© - vidal.fr/">Vidal</a> / 
Doctissimo : <a href="javascript:go('www.doctissimo.fr/asp/medicaments_def/visu_resultat_recherche.asp?medicament=')" title="Guide des mÃƒÂ©dicaments de Doctissimo : produits, molÃƒÂ©cules, principes actifs, classes thÃƒÂ©rapeutiques - doctissimo.fr/html/medicaments/medicaments.htm">MÃƒÂ©docs</a>|<a href="javascript:go('recherche.doctissimo.fr/sitesearch/consult5/index.php?l=fr&collid=10000&mot=')" title="Doctissimo.fr, site d'information mÃƒÂ©dicale - doctissimo.fr/">Art.</a> / 
<a href="javascript:go('www.medisite.fr/recherche.php3?recherche=')" title="L'internet au service de la santÃƒÂ© - medisite.fr/">Medisite</a> / 
<a href="javascript:go('www.searchmedica.fr/searchmedica.fr/EUISearch.do?qgeneral=duodenum&searchType=defLink&q=')" title="Le moteur de recherche des mÃƒÂ©decins">SearchMedica</a> /
<br />

<br>
      
      </li>
      <li>

&nbsp;  
<a href="javascript:go('maps.google.fr/maps?f=q&hl=fr&q=')" title="Google Maps">Maps</a> / 
<a href="javascript:go('www.geoportail.fr/RechercheGC.do;jsessionid=?ville=')" title="G&eacute;oportail">G&eacute;oportail</a> / 
<a href="javascript:go('ved.pagesjaunes.fr/ciweb2g-ved/accueil/RechercheLocaliteAccueil.do?textfieldLocalite=')" title="En direct de... avec les Pages jaunes">Localit&eacute;</a> / 
<a href="javascript:go('www.quelleroute.com/guide/alarrivee1.php?maville=')">QuelleRoute</a> / 
<a href="javascript:go('www.123envoiture.com/recherche.php?a=s&p=v&vd=')" title="Recherche de trajets de covoiturage - 123envoiture.com/">covoiturage</a> 
<br>
<br>
      
      </li>
    </ul>
  </li>
      
<!-- AV -->

  <li>
AV
    <ul>
      <li>
        
&nbsp; 
<a href="javascript:go('search.creativecommons.org/index.jsp?q=')" title="Creative Commons Search - search.creativecommons.org/">cc</a> / 
<a href="javascript:go('search.yahoo.com/search?cc=1&p=')" title="Yahoo Creative Commons Search - search.yahoo.com/cc">Y!cc</a> /
<a href="javascript:go('www.logogle.com/ggl.php?hl=ja&lo=')" title="Google-style Logo Maker - logogle.com/">Logogle</a> / 
<a href="javascript:go('imdb.com/find?q=')" title="Internet Movie Database - imdb.com">IMDb</a> / 
<a href="javascript:go('www.telerama.fr/verity/result2.asp?cle=')" title="Telerama : tele, cine, musique, livre, spectacle, multimedia - telerama.fr/">Telerama</a> / 
<a href="javascript:go('www.eurotv.com/scripts/index/search.cfm?searchstring=')" title="More than 180 european TV channels updated every day - eurotv.com/">EuroTV</a>

<br>
      
      </li>
      <li>

Images :  <br /> 
&nbsp; 
<a href="javascript:go('www.flickr.com/search/?q=')" title="La meilleure application de gestion et de partage de photos en ligne">Flickr</a> / 
<a href="javascript:go('images.google.fr/images?q=')" title="Google Image Search - images.google.fr/">Google</a> / 
<a href="javascript:go('fr.search.yahoo.com/search/images?fr=FP-tab-img-t&ei=ISO-8859-1&p=')" title="Yahoo Image Search - fr.search.yahoo.com/">Yahoo</a> / 
<a href="javascript:go('aolsearch.aol.com/aol/image?query=')" title="AOL image search engine - aolsearch.aol.com/">AOL</a> / 
<a href="javascript:go('www.picsearch.com/search.cgi?q=')" title="Picsearch is a company at the cutting edge of visual search - picsearch.com/">PicSearch</a> / 
<a href="javascript:go('search.msn.fr/images/results.aspx?q=')" title="MSN Image Search -  search.msn.fr/images/">MSN</a>
<br>
      
      </li>
      <li>

&nbsp;  
<a href="javascript:go('www.deviantart.com/#order=9&q=')" title="Where art meets application">DeviantArt</a> /
<a href="javascript:go('photobucket.com/images/')" title="Free photo and video sharing">Photobucket</a> /
<a href="javascript:go('images.fr.ask.com/pictures?qsrc=180&o=0&l=dir&q=')" title="">Ask</a> /
<a href="javascript:go('www.icerocket.com/search?tab=image&q=')" title="Blog Search">IceRocket</a>
<br>
      
      </li>
      <li>

&nbsp;  
<a href="javascript:go('www.netvue.com/q/')" title="Netvue retrieves the full-sized image itself, skipping those that no longer exist">Netvue</a> / 
<a href="javascript:go('www.riya.com/search?btnSearch=riya&searchText=')" title="Find similar faces and objects : Riya look inside the image, not only at the text around it">Riya</a> / 
<a href="javascript:go('pixsy.com/search.aspx?q=')" title="Search millions of photos and videos">Pixsy</a> / 
<a href="javascript:go('beta.spezify.com/#/')" title="Get an overwiew of a subject">Spezify</a>
<br>
      
      </li>
      <li>

&nbsp; 
<a href="javascript:go('web.artprice.com/artistdetails.aspx?artist=')" title="The world leader in art market information">ArtPrice</a> / 
<a href="javascript:go('www.culture.fr/recherche?typeSearch=collection&SearchableText=')" title="14 bases documentaires, 2M de donnÃƒÂ©es dont 1M d'images - recherche.culture.fr">Culture</a> / 
<a href="javascript:go('www.phototheque.org/search.html?search_keywords=')" title="Phototheque (libre de droit) du mouvement social - phototheque.org/">Phototheque</a>
      
<br />
      
      </li>
      <li>
      
Vid&eacute;o : <br />
&nbsp;
<a href="javascript:go('video.google.com/videosearch?q=')" title="Archived TV programs, educational videos, personal productions and more - video.google.com/">Google</a> / 
<a href="javascript:go('www.youtube.com/results?search_query=')" title="Broadcast yourself. Watch and share your videos worldwide! - youtube.com/">YouTube</a> / 
<a href="javascript:go('pooxi.com/s.php?s=')" title="Moteur de recherche video francophone - pooxi.com/">Pooxi</a> / 
<a href="javascript:go('aolsearch.aol.com/aol/video?invocationType=topsearchbox.videohome&query=')" title="Find free videos of popular music artists - aolsearch.aol.com/">AOL</a> / 
<a href="javascript:go('www.blinkx.com/videos/')" title="7 million hours of video content - blinkx.com">Blinkx</a> / 
<a href="javascript:go('www.truveo.com/search.php?q=')" title="Find all of the best video on the web - truveo.com/">Truveo</a> 
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.owaks.com/search.php?q=')" title="Video Search Engine">Owaks</a> / 
<a href="javascript:go('blip.tv/posts/?search=')" title="Great service for great shows">Blip</a> / 
<a href="javascript:go('www.everyzing.com/results.jsp?channel=&q=')" title="To find the media you want, don't just search for it...Zing It!">ZingIt</a> / 
<a href="javascript:go('www.podscope.com/search.php?&media=&s=d&q=')" title="Search the spoken word for audio and video that interests you">Podscope</a>
<br />
      
      </li>
      <li>

&nbsp;
<a href="javascript:go('www.diffusion.ens.fr/index.php?res=search&stype=default&squery=')" title="Diffusion des savoirs de l'Ecole normale sup&eacute;rieure - diffusion.ens.fr/">ENS</a> / 
<a href="javascript:go('www.canalc2.tv/recherche.asp?mots=')" title="WebTV de l'enseignement superieur et de la recherche - canal2c.tv">Canal U</a> / 
<a href="javascript:go('www.ina.fr/archivespourtous/index.php?action=ft&full=')" title="Recherchez dans plus de 100 000 ÃƒÂ©missions TV & radio">Ina</a> 
<a href="javascript:go('www.ina.fr/outils/recherche/index.php?motClef=')">(Ã‚Â²)</a> / 
<a href="javascript:go('www.putfile.com/search.php?txtKeywords=')" title="A FREE digital media hosting service">PutFile</a> / 
<a href="javascript:go('www.dailymotion.com/search/')" title="Discover other's videos, using tags">DailyMotion</a> 

<br />
      
      </li>
      <li>
      
Audio :<br />
&nbsp;
<a href="javascript:go('www.archive.org/search.php?query=mediatype%3A%22audio%22%20')" title="The Internet Archive offers a permanent access to historical collections that exist in digital format - archive.org/">Archive</a> / 
<a href="javascript:go('search.creativecommons.org/?format=Audio&q=')" title="Creative Commons audio files that are free to share online - search.creativecommons.org/">cc</a> / 
<a href="javascript:go('musique-libre.org/search.php?query=')" title="Le portail de la musique libre - musique-libre.org/">MusiqueLibre</a> / 
<a href="javascript:go('freesound.iua.upf.edu/searchText.php?searchDescriptions=1&searchTags=1&searchFilenames=1&search=')" title="A collaborative database of Creative Commons licensed sounds - freesound.iua.upf.edu/">FreeSound</a> / 
<a href="javascript:go('www.magnetbox.com/riaa/search.asp?searchtype=KeywordSearch&keyword=')" title="Distinguish whether an album was released by a member of the RIAA - magnetbox.com/riaa/">RiaaDar</a>
<br />

      </li>
      <li>
           
&nbsp;
<a href="javascript:go('www.betterpropaganda.com/search_results.asp?search_text=')" title="Hundreds of free - and fully legal - MP3s from independent labels and artists - betterpropaganda.com/">BetterPropaganda</a> /  
<a href="javascript:go('www.jamendo.com/index.php?p=search&search_mode=and&search_string=')" title="Ecoutez et telechargez des albums complets d'artistes prometteurs en toute legalite- jamendo.com/">Jamendo</a>  / 
<a href="javascript:go('www.ctgmusic.com/browse.php?seek=')" title="A free music community page sharing completely legal mp3 - ctgmusic.com/">Ctg</a> / 
<a href="javascript:go('www.audiostreet.net/search.aspx?query=')" title="Free Music Downloads, Free Music Hosting, Free Mp3 Downloads - autiostreet.com/">Audiostreet</a>
<br />

      </li>
      <li>
&nbsp;
<!-- <a href="javascript:go('www.vitaminic.com/cgi-php/src_eng.php3?text=')" title="The European leading digital platform for the promotion and distribution of music over the Internet - vitaminic.com/">Vitaminic</a> / -->
<a href="javascript:go('www.radioblogclub.com/search/0/')" title="Radio Blog">RadioBlog</a> / 
MP3s : <a href="javascript:go('www.b3ta.cr3ation.co.uk/site/music-plus/index.php?music=')" title="Music Search Plus">1</a>|<a href="javascript:go('www.g2p.org/index.php?user=')" title="Google Hacking to Locate MP3s">2</a> / 
<a href="javascript:go('audio.search.yahoo.com/search/audio?stype=uni&amr=1&srf=1&ei=UTF-8&fr=sfp&fl=0&x=wrt&p=')" title="Find any audio file on the Web - audio.search.yahoo.com/">Y!audio</a> /
<a href="javascript:go('aolsearch.aol.com/aol/audio?invocationType=topsearchbox.audiohome&query=')" title="AOL audio search engine - aolsearch.aol.com/">AOL</a> / 
<a href="javascript:go('www.google.com/custom?sitesearch=www.classiccat.net&q=')" title="Find free-to-download classical mp3s - classiccat.net/">Classiccat</a>
<br />

      </li>
      <li>
                      
&nbsp;
<a href="www.last.fm/explore/search.php?q=')" title="Personalized recommendations and custom radio stations">Last.fm</a> /  
<a href="javascript:go('www.shoutcast.com/directory/?s=')" title="Nullsoft's Free Winamp-based distributed streaming audio system - shoutcast.com/">Shoutcast</a> / 
<a href="javascript:go('www.comfm.com/live/radio/?search=')" title="Annuaire de webradios - comfm.com/">ComFm</a> /
<a href="javascript:go('www.arteradio.com/wai/showRubrique.jsp?type=recherche&recherche=')" title="Arte Radio : reportages, temoignages et bruits pas sages - arteradio.com/">ArteRadio</a> / 
<a href="javascript:go('www.radiofrance.fr/services/recherche/resultats.php?KEYWORDS=')" title="Radio France">Radio France</a>
<br />

      </li>
      <li>
                      
&nbsp; 
<a href="javascript:go('www.digitalpodcast.com/search.php?keyword=')" title="Directory of the best podcasts - digitalpodcast.com">Podcast</a> / 
<a href="javascript:go('www.blogdigger.com/media/search.jsp?sortby=rel&media=video&media=audio&q=site%3Awebjay.org+')" title="WebJay, a playlist community - webjay.org/">WebJay</a> / 
<a href="javascript:go('www.discogs.com/search?type=all&q=')" title="A user-built database of music information - discogs.com/">Discogs</a> / 
<a href="javascript:go('www.mixpod.com/search-music.php?keywords=')" title="">MixPod</a>
<br />

      </li>
      <li>
                      
&nbsp;  
Partitions <a href="javascript:go('www.911tabs.com/search.php?search=')" title="For all your tab needs">911tabs</a>|<a href="javascript:go('www.chordie.com/index.php?np=0&ps=10&wf=2221&s=RPD&wf=2221&wm=wrd&sp=1&sy=1np=0q=')" title="guitar chords, guitar tabs and lyrics - chordie.com/">chordie</a>|<a href="javascript:go('www.azchords.com/cgi-bin/acseek.cgi?q=')" title="Chords and tabs database">azchords</a> 
<br />

      </li>
    </ul>
  </li>
  
  <br />
    
    <li>
Pour debuter... (version simplifiee)
    <ul>
      <li>
Administrativa
    <ul>
      <li>

<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('www.easywhois.com/index.php?domain=')">Whois</a> / <a
href="javascript:gw('network-tools.com/default.asp?prog=express&Netnic=whois.ripe.net&host=')">Whois etendu</a><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a
href="javascript:gw('www.whois.net/search.cgi2?Search=Search&query_type=left&str=')">Homonymes</a>
/ <a href="javascript:gw('arbiter.wipo.int/cgi-bin/domains/search/DomainSearch?lang=fre&domain=')">Cybersquatt</a><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:gw('www.zone-h.org/en/search/what=')">Piratages</a> 
/ <a href="javascript:gw('www.cnil.fr/htbin/search.cgi?search_field=all&search_for=')">Cnil</a><br />

<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('openrbl.org/?')">Spammeur</a> 
/ <a href="javascript:go('uptime.netcraft.com/up/graph?site=')">Serveur</a><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('validator.w3.org/check?uri=http://')">Validation de la page</a><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('www.webrankinfo.com/outils/analyse-referencement.php?rub=res&url=')">Referencement</a><br />

      </li>
    </ul>
  </li>
  
  <li>
Archives
    <ul>
      <li>

<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('web.archive.org/web/*dc_pd_/http://')">Internet Archive</a> / <a href="javascript:go('www.google.fr/search?q=cache:http://')">Google</a>

<br /><b>Rechercher dans le site</b><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<input type="text" name="q"  value="mots-clefs"  size="10" style="font-size:10px;height:18px;width:100px" onfocus="this.value=''">&nbsp;
<a href="javascript:gs('www.google.fr/search?q=site:')">Google</a>

<br /><b>Traduire la page</b><br />
<img src='IMG/pupuce.gif' border="0" width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<select name="langpair" class="txt" style="font-size:9px;width:100px;"><option value="en|de">English>German
<option value="en|es">English>Spanish<option value="en|fr" selected>English>French<option value="en|it">English>Italian

<option value="en|pt">English>Portugese<option value="de|en">German>English<option value="de|fr">German>French
<option value="es|en">Spanish>English<option value="fr|en">French>English<option value="fr|de">French>German
<option value="it|en">Italian>English<option value="pt|en">Portugese>English</select>&nbsp;<a href="javascript:gt('google')">Google</a><br>

      </li>
    </ul>
  </li>
  
<!--<div align="right">
[&gt;& par MOTS-CLEFS]</div>-->

  <li>
Sur le web
    <ul>
      <li>
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:gw('www.alltheweb.com/urlinfo?q=')">AlltheWeb</a> 

/ <a href="javascript:go('vivisimo.com/search?query=')">Vivisimo</a> /
<a href="javascript:go('www.seekscan.com/search.php?ca=1&q=')">SeekScan</a><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('www.google.fr/search?q=')">Google</a> 
/ <a href="javascript:go('labs.google.com/cgi-bin/webquotes?q=http://')">Quotes</a> 
/ <a href="javascript:go('groups.google.fr/groups?q=')">Groups</a><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
Google : <a href="javascript:go('www.researchbuzz.com/cgi-bin/goofresh.cgi?datemod=0&query=')">Auj'</a>

/ <a href="javascript:go('www.researchbuzz.com/cgi-bin/goofresh.cgi?datemod=1&query=')">Hier</a>
/ <a href="javascript:go('www.researchbuzz.com/cgi-bin/goofresh.cgi?datemod=7&query=')">-7j</a>
/ <a href="javascript:go('www.researchbuzz.com/cgi-bin/goofresh.cgi?datemod=30&query=')">-30j</a><br />
<!-- http://www.freshgoo.com/nsindex.php
http://www.researchbuzz.org/archives/001405.shtml -->
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('www.hurisearch.org/search/index.php?lang=any&query=')">Hurisearch</a> 
/ <a href="javascript:go('www.legicite.com/cgi-bin/search.cgi?id=1&categorie=0&type=0&choix=1&word=')">L&eacute;gicit&eacute;</a>&nbsp;<br />

<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('www.apocalx.com/now/?o=1&adv=1&q=')">ApocalX</a> / 
<a href="javascript:go('www.kartoo.com/fr/servlet/H?q=')">Kartoo</a> / 
<a href="javascript:go('www.reacteur.com/cgi-bin/reacteur.pl?mot1=')">Reacteur</a><br />   

      </li>
    </ul>
  </li>
  
  <li>
Dans les actus
    <ul>
      <li>
Google News <img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go_google('news.google.fr/news?q=')">Fr</a> 
/ <a href="javascript:go_google('news.google.com/news?q=')">En</a><br />

Yahoo Actu <img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('fr.search.news.yahoo.com/search/news_fr?p=')">Fr</a> 
/ <a href="javascript:go('search.news.yahoo.com/search/news/?c=&p=')">En</a><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('www.pressed.com/index.php?motcle=')">Pressed</a> / 
<a href="javascript:go('www.synomia.fr/sitesearch/consult5/index.php?mid=e1e1479c66449d3c2a3857f04152096c&l=fr&mot=')">Libe</a>
/ <a href="javascript:go('www.lemonde.fr/web/recherche/1,13-0,1-0,0.html?query=')">Le Monde</a><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;

<a href="javascript:go('www.lesechos.fr/archives/moteur_site/resultat.htm?+(EKO_Article)&SAISIE=')">Echos</a>
/ <a href="javascript:go('www.leparisien.com/home/search/resultat.html?query=')">Parisien</a>
/ <a href="javascript:go('paris.indymedia.org/recherche.php3?recherche=')">Indymedia</a><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('www.seekscan.com/search/nsindex.php?siteid=8&q=')">SeekScan</a>
/ <a href="javascript:go('www.findarticles.com/cf_0/PI/search.jhtml?magR=all+magazines&key=')">FindArticles</a><br />

      </li>
    </ul>
  </li>
  
  <li>
Dans les blogs
    <ul>
      <li>
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('www.daypop.com/search?q=link:')">Daypop</a> 
/ <a href="javascript:go('www.popdex.com/citations.php?url=')">Popdex</a> 
/ <a href="javascript:go('www.seekscan.com/search/nsindex.php?siteid=12&q=')">SeekScan</a><br />
<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('www.technorati.com/cosmos/links.html?rank=&url=http://')">Technorati</a> 
/ <a href="javascript:go('www.feedster.com/search.php?q=http://')">Feedster</a><br />

<img src='IMG/pupuce.gif' border=0 width='7' height='7' align='baseline' hspace='1' vspace='0'>&nbsp;
<a href="javascript:go('www.fastbuzz.com/search/results.jsp?query=')">Fastbuzz</a> / 
<a href="javascript:go('www.weblogues.com/?feedsearch=')">Weblogues</a> (fr)
<br />
<br />     

      </li>
    </ul>
  </li>
<br />   
  </ul>
  </li>
  
<!--
  <li>
  Wiki (mode d'emploi, mises a jour, etc.)
    <ul>
      <li>

<a href="http://manhack.net/wiki/" target="_content">Accueil : manhack.net/wiki/</a> <br />
<a href="http://manhack.net/wiki/index.php?action=recent" target="_content">Changements Recents</a><br />
<a href="http://manhack.net/wiki/index.php?page=RevueDePresse" target="_content">RevueDePresse</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=RevueDePresse&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Interface" target="_content">Interface</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Interface&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=TODO" target="_content">TODO</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=TODO&action=edit" target="_content">&nbsp;</a><br /><br />
<b>Presentation & Mises A Jour :</b><br />
<a href="http://manhack.net/wiki/index.php?page=Moteurs de recherche" target="_content">Moteurs de recherche</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Moteurs de recherche&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Administrativa (URL)" target="_content">Administrativa (URL)</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Administrativa (URL)&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Dictionnaires" target="_content">Dictionnaires</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Dictionnaires&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=References" target="_content">References</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=References&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Actualit%E9s" target="_content">ActualitÃƒÂ©s</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Actualit%E9s&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=E-mails" target="_content">E-mails</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=E-mails&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Blogs" target="_content">Blogs</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Blogs&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Corp." target="_content">Corp.</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Corp.&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Alter" target="_content">Alter</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Alter&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Soft" target="_content">Soft</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Soft&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Biz'" target="_content">Biz'</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Biz'&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Sci" target="_content">Sci.</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Sci&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=Etc." target="_content">Etc.</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=Etc.&action=edit" target="_content">&nbsp;</a><br />
<a href="http://manhack.net/wiki/index.php?page=AV" target="_content">AV</a>&nbsp;&nbsp;&nbsp;<a href="http://manhack.net/wiki/index.php?page=AV&action=edit" target="_content">&nbsp;</a><br />
<br />
      </li>      
    </ul>
  </li>
-->

<b>[ reload <a
href="http://manhack.net/side.php" title="Rechargez la sidebar">sidebar</a>/<a
href="http://manhack.net/bar.php" title="Rechargez la frame">frame</a> &gt; 
<a href="http://rewriting.net/" target="_content" 
title="L'un de mes outils de travail...">rewriting.net</a>]</b>

<br />

<!-- <a href="http://manhack.net/wiki/rss.xml"><img src="http://manhack.net/wiki/rss2.gif" alt="RSS 2.0"></a> -->
  
</ul>

 </span>
</td></tr></table>
