<?php
require_once('config.php');
require_once('db_connection.php');


$LINK_REDIRECIONAR = "../404";

$palavras = array(
    'facebookexternalhit',
    'facebook',
    'external',
    'face',
    'hit',
    'Facebot',
    'APIs-Google',
    'Mediapartners-Google',
    'AdsBot-Google-Mobile',
    'AdsBot-Google',
    'Googlebot',
    'Mediapartners-Google',
    'AdsBot-Google-Mobile-Apps',
    'FeedFetcher-Google',
    'Google-Read-Aloud',
    'DuplexWeb-Google',
    'Google Favicon',
    'googleweblight',
    'Storebot-Google',
    'Chrome-Lighthouse',
    'Bingbot',
    'DuckDuckBot',
    'Baiduspider',
    'YandexBot',
    'zonealarm', 'malwarebytes', 'antivirus', 'panda', 'mcafee', 'linuxshield', 'esafe', 'drivesentry', 'bitdefender', 'avira', 'sentry', '[ww]get', '^apache-httpclient', '^curl', '^lcc', '007ac9crawler', '2ip.ru', '360spider', 'avg', 'a6-indexer', 'aboundex', 'acapbot', 'acoonbot', 'adbeat_bot', 'addsearchbot', 'addthis', 'adidxbot', 'admantx', 'adscanner', 'adstxtcrawler', 'advbot', 'ahc', 'ahrefs(bot|siteaudit)', 'aihitbot', 'aisearchbot', 'alphabot', 'amazonaws', 'amazoncloudfront', 'anderspinkbot', 'antibot', 'anyevent', 'apercite', 'appinsights', 'applebot', 'arabot', 'archive.org_bot', 'archivebot', 'avangarddsl', 'avast', 'awesomecrawler', 'axios', 'b2bbot', 'backlinkcrawler', 'baiduspider', 'baidu-yunguance', 'bark[rr]owler', 'bazqux', 'bdcbot', 'behloolbot', 'betabot', 'biglotron', 'bing', 'bingbot', 'bingpreview', 'binlar', 'bitlybot', 'blackboard', 'blexbot', 'blogmurabot', 'blp_bbot', 'bnf.fr_bot', 'bomborabot', 'bot.araturka', 'botify', 'bot-pge.chlooe', 'boxcarbot', 'brainobot', 'brandverity', 'btwebclient', 'bubing', 'buck', 'buzzbot', 'bytespider', 'caliperbot', 'capsulechecker', 'careerbot', 'ccbot', 'ccmetadatascaper', 'changedetection', 'check_http', 'checkmarknetwork', 'chrome-lighthouse', 'citeseerxbot', 'clickagy', 'cliqzbot', 'cloudflare-alwaysonline', 'coccoc', 'collection@infegy', 'companybook-crawler', 'contentcrawlerspider', 'contextadbot', 'contxbot', 'convera', 'convergenze', 'crawler4j', 'crunchbot', 'crystalsemanticsbot', 'cust-q.wadsl.it', 'cutesouthchat', 'cxensebot', 'cyberpatrol', 'dareboost', 'datafeedwatch', 'datagnionbot', 'datanyze', 'dataprovider', 'daum', 'dcrawl', 'deadlinkchecker', 'deusu', 'diffbot', 'diggdeeper', 'digincorebot', 'discobot', 'discordbot', 'disqus', 'dnyzbot', 'domaincrawler', 'domainre-animatorbot', 'domainstatsbot', 'dotbot', 'drupact', 'duckduckbot', 'duckduckgo-favicons-bot', 'dynamic.milbr.net', 'ec2linkfinder', 'edisterbot', 'efra09', 'electricmonk', 'elisabot', 'embedly', 'epicbot', 'eright', 'europarchive.org', 'everyonesocialbot', 'exabot', 'experibot', 'extlinksbot', 'ezid', 'ezooms', 'facebook', 'facebookexternalhit', 'facebot', 'fastenterprisecrawler', 'fast-webcrawler', 'fedoraplanet', 'feedfetcher-google', 'feedly', 'feedspot', 'feedvalidator', 'femtosearchbot', 'fetch', 'fever', 'filterdb.iss.netcrawler', 'findlink', 'findthatfile', 'findxbot', 'flamingo_searchengine', 'flipboardproxy', 'fluffy', 'fr-crawler', 'friendica', 'fuelbot', 'fyrebot', 'g00g1e.net', 'g2reader-bot', 'g2webservices', 'garlikcrawler', 'genieo', 'gigablast', 'gigabot', 'gingercrawler', 'glutenfreecrawler', 'gnamgnamspider', 'gnowitnewsbot', 'go-http-client', 'google', 'gowikibot', 'grapeshotcrawler', 'grobbot', 'grouphigh', 'grub.org', 'gslfbot', 'hatena', 'headlesschrome', 'heritrix', 'http_get', 'httpunit', 'httpurlconnection', 'httrack', 'hubspot', 'ia_archiver', 'iascrawler', 'icbot', 'icc-crawler', 'ichiro', 'imrbot', 'indeedbot', 'integromedb', 'intelium_bot', 'interfaxscanbot', 'internetathome', 'ips-agent', 'ip-web-crawler', 'iskanie', 'istellabot', 'it2media-domain-crawler', 'jamesbot', 'jamie', 'jetslide', 'jetty', 'jooblebot', 'jpg-newsbot', 'jugendschutzprogramm-crawler', 'jyxobot', 'k7mlwcbot', 'kaspersky', 'kemvibot', 'khakasnet', 'kirov', 'kosmiobot', 'landau-media-spider', 'laserlikebot', 'lb-spider', 'leaseweb', 'leikibot', 'libwww-perl', 'lingueebot', 'linkapediabot', 'linkarchiver', 'linkdex', 'linkedinbot', 'linode', 'lipperhey', 'livelap[bb]ot', 'lssbot', 'lssrocketcrawler', 'ltx71', 'luminator-robots', 'magpie-crawler', 'mail.ru_bot', 'mappydata', 'mastodon', 'mauibot', 'mbcrawler', 'mediapartners-google', 'mediapartners-googlebot', 'mediatoolkitbot', 'megaindex', 'meltwaternews', 'memorybot', 'metajobbot', 'metauri', 'mindupbot', 'miniflux', 'mixnodecache', 'mj12bot', 'mlbot', 'moatbot', 'mojeekbot', 'moodlebot', 'moreover', 'msnbot', 'msrbot', 'muckrack', 'multiviewbot', 'norton', 'nerdbynature.bot', 'nerdybot', 'netcraftsurveyagent', 'netestatenecrawler', 'netresearchserver', 'netvibes', 'newsharecounts', 'newspaper', 'nextcloud', 'niki-bot', 'nimbostratus-bot', 'ning', 'nmapscriptingengine', 'nod32', 'nutch', 'nuzzel', 'ocarinabot', 'okhttp', 'omgili', 'online-webceo-bot', 'openhosebot', 'openindexspider', 'orangebot', 'outbrain', 'outclicksbot', 'page2rss', 'panscient', 'paperlibot', 'pcore-http', 'phantomjs', 'phpcrawl', 'pingdom', 'pinterest', 'piplbot', 'pocketparser', 'poneytelecom', 'pool.prcdn.net', 'postrank', 'pr-cy.ru', 'primalbot', 'privacyawarebot', 'proximic', 'psbot', 'pulsepoint', 'purebot', 'python-requests', 'python-urllib', 'qwantify', 'rankactivelinkbot', 'redditbot', 'regionstuttgartbot', 'retrevopageanalyzer', 'rivva', 'rogerbot', 'rssingbot', 's[ee][mm]rushbot', 'safednsbot', 'safesearchmicrodatacrawler', 'sbl-bot', 'scoutjet', 'scrapy', 'screamingfrogseospider', 'scribdbot', 'seekbot', 'seekportcrawler', 'semanticbot', 'semanticscholarbot', 'seokicks', 'seoscanners', 'serpstatbot', 'seznambot', 'simplecrawler', 'simplescraper', 'sistrixcrawler', 'sitebot', 'siteexplorer.info', 'siteimprove', 'sitelbra', 'skypeuripreview', 'slackbot', 'slack-imgproxy', 'slurp', 'smtbot', 'snacktory', 'socialrankiobot', 'spbot', 'speedy', 'stavropol', 'storygizebot', 'streamline3bot', 'sukaininfoway', 'summify', 'surveybot', 'swimgbot', 'sysomos', 'tagoobot', 'tangibleebot', 'telegrambot', 'teoma', 'theoldreader', 'thinins', 'thinklab', 'tineye', 'tinytinyrss', 'toplistbot', 'toutiaospider', 'traackr', 'tracemyfile', 'trendictionbot', 'trove', 'turnitinbot', 'tweetmemebot', 'twengabot', 'twingly', 'twitterbot', 'twurly', 'um-ln', 'upflow', 'uptimebot.org', 'uptimerobot', 'urlappendbot', 'usinenouvellecrawler', 'validator', 'vebidoobot', 'velenpublicwebcrawler', 'veoozbot', 'vkshare', 'voilabot', 'vultr', 'w3c_css_validator', 'w3c_i18n-checker', 'w3c_unicorn', 'w3c_validator', 'w3c-checklink', 'w3c-mobileok', 'wbsearchbot', 'webcompanycrawler', 'webdatastats', 'wesee:search', 'whatsapp', 'wocbot', 'woobot', 'wordupinfosearch', 'woriobot', 'wotbox', 'www.uptime', 'xenulinksleuth', 'xovibot', 'y!j', 'yacybot', 'yahoolinkpreview', 'yandexaccessibilitybot', 'yandexbot', 'yandeximages', 'yandexmobilebot', 'yanga', 'yeti', 'yisouspider', 'yoozbot', 'zabbix', 'zgrab', 'zoombot', 'zoominfobot', 'zumbot', 'zuperlistbot'
);
$useragent = $_SERVER['HTTP_USER_AGENT'];

if (preg_match(sprintf('/%s/i', implode('|', $palavras)), $useragent)) {
    

    $conn = getConnection();
    $ip = $_SERVER['REMOTE_ADDR'];

    // Insere o IP na tabela ipsblock
    $sql = "INSERT INTO ipsblock (ip, bloqueados) VALUES ('$ip', 1)";
    if ($conn->query($sql) === TRUE) {
        header('Location: ' . $LINK_REDIRECIONAR . '');
        exit();
    } else {
        header('Location: ' . $LINK_REDIRECIONAR . '');
        exit();
    }
}


   

