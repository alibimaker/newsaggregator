<?php
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
/* 신문링크[시작] */
if($q=="chosun") {
    $xml=("http://health.chosun.com/rss/column.xml");
} elseif($q=="joongang") {
    $xml=("http://rss.joins.com/news/joins_health_list.xml");
} elseif($q=="donga"){
    $xml=("http://rss.donga.com/health.xml");
} elseif($q=="hnews"){
    $xml=("http://www.hnews.kr/rss/");
}elseif($q=="mentalnews"){
    $xml=("http://www.mentalnews.kr/rss/S1N2.xml");
}elseif($q=="hkn24"){
    $xml=("http://www.hkn24.com/rss/allArticle.xml");
}elseif($q=="healthdaynews"){
    $xml=("http://www.healthdaynews.co.kr/rss/allArticle.xml");
}elseif($q=="khealth"){
    $xml=("http://www.k-health.com/rss/S1N10.xml");
}elseif($q=="healthpress"){
    $xml=("http://www.healthpress.co.kr/rss/S1N2.xml");
}/* 신문링크[끝] */
/* #다이어트#여성#20대#30대#웨이트트레이닝#식단#댄스#새로운 운동법#패션  관련링크[시작] */
elseif($q=="foodsafetykorea"){
    $xml=("https://feedity.com/foodsafetykorea-go-kr/WlpXUlda.rss");
}elseif($q=="healthinfo"){
    $xml=("http://moins.tistory.com/rss");
}elseif($q=="steptohealth"){
    $xml=("https://feedity.com/steptohealth-co-kr/WlpXUlRU.rss");
}

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
echo("<p><a href='" . $channel_link . "'>" . $channel_title . "</a>");
echo("<br>");
echo($channel_desc . "</p>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=2; $i++) {
    $item_title=$x->item($i)->getElementsByTagName('title')
    ->item(0)->childNodes->item(0)->nodeValue;
    $item_link=$x->item($i)->getElementsByTagName('link')
    ->item(0)->childNodes->item(0)->nodeValue;
    $item_desc=$x->item($i)->getElementsByTagName('description')
    ->item(0)->childNodes->item(0)->nodeValue;
    echo ("<p><a href='" . $item_link
        . "'>" . $item_title . "</a>");
    echo ("<br>");
    echo ($item_desc . "</p>");
}
?>