<?php
namespace App;

class ConfigManager
{
    private $langFrom;
    private $langTo;
    private $blogUrl;
    private $postSelector;

    /** @noinspection MoreThanThreeArgumentsInspection
     * @param $langFrom
     * @param $langTo
     * @param $blogUrl
     * @param $postClass
     */
    function __construct($langFrom, $langTo, $blogUrl, $postClass)
    {
        $this->langFrom = $langFrom;
        $this->langTo = $langTo;
        $this->blogUrl = $blogUrl;
        $this->postSelector = $postClass;
    }

    /**
     * @return mixed
     */
    public function getLangFrom()
    {
        return $this->langFrom;
    }

    /**
     * @param mixed $langFrom
     */
    public function setLangFrom($langFrom)
    {
        $this->langFrom = $langFrom;
    }

    /**
     * @return mixed
     */
    public function getLangTo()
    {
        return $this->langTo;
    }

    /**
     * @param mixed $langTo
     */
    public function setLangTo($langTo)
    {
        $this->langTo = $langTo;
    }

    /**
     * @return mixed
     */
    public function getBlogUrl()
    {
        return $this->blogUrl;
    }

    /**
     * @param mixed $blogUrl
     */
    public function setBlogUrl($blogUrl)
    {
        $this->blogUrl = $blogUrl;
    }

    /**
     * @return mixed
     */
    public function getPostSelector()
    {
        return $this->postSelector;
    }

    /**
     * @param mixed $postSelector
     */
    public function setPostSelector($postSelector)
    {
        $this->postSelector = $postSelector;
    }

}