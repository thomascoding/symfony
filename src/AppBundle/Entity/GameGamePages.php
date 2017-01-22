<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameGamePages
 *
 * @ORM\Table(name="game_game_pages", indexes={@ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class GameGamePages
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="text", length=65535, nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="altname", type="text", length=65535, nullable=true)
     */
    private $altname;

    /**
     * @var string
     *
     * @ORM\Column(name="system_req", type="text", length=65535, nullable=true)
     */
    private $systemReq;

    /**
     * @var string
     *
     * @ORM\Column(name="partner", type="text", length=255, nullable=true)
     */
    private $partner;

    /**
     * @var string
     *
     * @ORM\Column(name="trailer", type="text", length=65535, nullable=true)
     */
    private $trailer;

    /**
     * @var string
     *
     * @ORM\Column(name="gameplay", type="text", length=16777215, nullable=true)
     */
    private $gameplay;

    /**
     * @var string
     *
     * @ORM\Column(name="excerpt", type="text", length=16777215, nullable=true)
     */
    private $excerpt;

    /**
     * @var string
     *
     * @ORM\Column(name="gallery", type="text", length=65535, nullable=true)
     */
    private $gallery;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rotate", type="boolean", nullable=false)
     */
    private $rotate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set title
     *
     * @param string $title
     * @return GameGamePages
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return GameGamePages
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return GameGamePages
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return GameGamePages
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return GameGamePages
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return GameGamePages
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set altname
     *
     * @param string $altname
     * @return GameGamePages
     */
    public function setAltname($altname)
    {
        $this->altname = $altname;

        return $this;
    }

    /**
     * Get altname
     *
     * @return string 
     */
    public function getAltname()
    {
        return $this->altname;
    }

    /**
     * Set systemReq
     *
     * @param string $systemReq
     * @return GameGamePages
     */
    public function setSystemReq($systemReq)
    {
        $this->systemReq = $systemReq;

        return $this;
    }

    /**
     * Get systemReq
     *
     * @return string 
     */
    public function getSystemReq()
    {
        return $this->systemReq;
    }

    /**
     * Set partner
     *
     * @param string $partner
     * @return GameGamePages
     */
    public function setPartner($partner)
    {
        $this->partner = $partner;

        return $this;
    }

    /**
     * Get partner
     *
     * @return string 
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * Set trailer
     *
     * @param string $trailer
     * @return GameGamePages
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;

        return $this;
    }

    /**
     * Get trailer
     *
     * @return string 
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * Set gameplay
     *
     * @param string $gameplay
     * @return GameGamePages
     */
    public function setGameplay($gameplay)
    {
        $this->gameplay = $gameplay;

        return $this;
    }

    /**
     * Get gameplay
     *
     * @return string 
     */
    public function getGameplay()
    {
        return $this->gameplay;
    }

    /**
     * Set excerpt
     *
     * @param string $excerpt
     * @return GameGamePages
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    /**
     * Get excerpt
     *
     * @return string 
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * Set gallery
     *
     * @param string $gallery
     * @return GameGamePages
     */
    public function setGallery($gallery)
    {
        $this->gallery = $gallery;

        return $this;
    }

    /**
     * Get gallery
     *
     * @return string 
     */
    public function getGallery()
    {
        return $this->gallery;
    }

    /**
     * Set rotate
     *
     * @param boolean $rotate
     * @return GameGamePages
     */
    public function setRotate($rotate)
    {
        $this->rotate = $rotate;

        return $this;
    }

    /**
     * Get rotate
     *
     * @return boolean 
     */
    public function getRotate()
    {
        return $this->rotate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return GameGamePages
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
