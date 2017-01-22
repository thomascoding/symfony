<?php

namespace AppBundle\Request;


use Symfony\Component\HttpFoundation\Request;

class GameRequest
{
    /**
     * @var boolean
     */
    private $published = true;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @return int
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param int $published
     */
    public function setPublished($published)
    {
        $this->published = (bool)($published);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = strip_tags($name);
    }

    public function exchangeHttpRequest(Request $httpRequest)
    {
        $this->setName($httpRequest->get('name'));
    }
}