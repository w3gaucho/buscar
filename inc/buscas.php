<?php
$arr=[
    '4shared'=>'https://www.4shared.com/web/q/#query=%s&sort=size%2Cdesc',
    'acronimos'=>'https://www.acronymfinder.com/~/search/af.aspx?string=exact&Acronym=%s',
    'alexa'=>'https://alexa.com/siteinfo/%s',
    'antônimos'=>'https://www.antonimos.com.br/busca.php?q=%s',
    'atom'=>'https://atom.io/packages/search?q=%s',
    'books (b-ok)'=>'https://b-ok.lat/s/?q=%s',
    'bing'=>'https://www.bing.com/search?q=%s',
    'buscape'=>'https://www.buscape.com.br/search?page=1&invalidPath=false&sortBy=prod_items_sort_by_price_asc&q=%s&no-shortcut=1',
    'duck'=>'https://duckduckgo.com/?kl=br-pt&q=%s&ia=web',
    'dicio'=>'https://www.dicio.com.br/pesquisa.php?q=%s',
    'discogs'=>'https://www.discogs.com/search/?q=%s&type=all',
    'emojipedia'=>'https://emojipedia.org/search/?q=%s',
    'extensões (addons mozilla)'=>'https://addons.mozilla.org/en-US/firefox/search/?q=%s&sort=users&type=extension',
    'google'=>'https://www.google.com.br/search?q=%s',
    'maps (google)'=>'https://www.google.com.br/maps?hl=pt&q=%s',
    'mercado livre'=>'https://lista.mercadolivre.com.br/%s',
    'mint (linux mint)'=>'https://community.linuxmint.com/software/view/%s',
    'music (youtube)'=>'https://music.youtube.com/search?q=%s',
    'news (google)'=>'https://www.google.com.br/search?tbm=nws&q=%s',
    'ost (soundtrack)'=>'http://download-soundtracks.com/?s=%s',
    'packagist'=>'https://packagist.org/?query=%s',
    'php'=>'https://www.php.net/manual-lookup.php?pattern=%s&scope=quickref',
    'so (stackoverflow)'=>'https://stackoverflow.com/search?q=%s',
    'tpb (the pirate bay)'=>'https://thepiratebay.org/search.php?q=%s&cat=0',
    'translator (bing)'=>'https://www.bing.com/translator/?text=%s&from=auto&to=pt',
    //'twitter'=>'https://twitter.com/search?f=tweets&vertical=default&q=%s filter:verified&src=typd&lang=pt&f=live',
    'videos (bing)'=>'https://www.bing.com/videos/search?&q=%s&qft=+filterui:msite-youtube.com&FORM=VRFLTR',
    'xvideos'=>'https://www.xvideos.com/?k=%s',
];
ksort($arr);
return $arr;
