<?php
require __DIR__ . '/vendor/autoload.php';

use App\ConfigManager;
use App\PostFetcher;

//$cm = new ConfigManager("es","eng","http://victorbarcelo.net/",".post_title");
$cm = new ConfigManager("es","eng","http://www.marca.com/",".peso24");
//$cm = new ConfigManager("eng","es","http://www.johnwatsonblog.co.uk/","#sl-main h3 > a");

$vblog = new PostFetcher($cm->getLangFrom(), $cm->getLangTo(), $cm->getBlogUrl(), $cm->getPostSelector());
$vblog->getPostNames();

