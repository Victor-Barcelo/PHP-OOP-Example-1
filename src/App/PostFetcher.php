<?php

namespace App;
use Goutte\Client;
use Stichoza\Google\GoogleTranslate;

class PostFetcher {
    private $client;
    private $blogUrl;
    private $postSelector;
    private $langFrom;
    private $langTo;

    /** @noinspection MoreThanThreeArgumentsInspection
     * @param $langFrom
     * @param $langTo
     * @param $blogUrl
     * @param $postClass
     */
    function __construct($langFrom, $langTo, $blogUrl, $postClass)
    {
        $this->client = new Client();
        $this->blogUrl = $blogUrl;
        $this->postSelector = $postClass;
        $this->langFrom = $langFrom;
        $this->langTo = $langTo;
    }

    public function getPostNames()
    {
        $crawler = $this->client->request('GET', $this->blogUrl);
        $crawler->filter($this->postSelector)->each(
            function ($node) {
                echo GoogleTranslate::staticTranslate($node->text(), $this->langFrom, $this->langTo) . "\n";
            }
        );
    }
}