<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * GameGame
 *
 * @ORM\Table(name="game_game", indexes={@ORM\Index(name="in_rec", columns={"recomend"}), @ORM\Index(name="in_name", columns={"name"}), @ORM\Index(name="in_min_name", columns={"min_name"}), @ORM\Index(name="in_dual", columns={"for_dual"}), @ORM\Index(name="in_view", columns={"view"}), @ORM\Index(name="in_name_link", columns={"name_link"}), @ORM\Index(name="category", columns={"category"}), @ORM\Index(name="topx", columns={"topx"}), @ORM\Index(name="dt", columns={"dt", "category"}), @ORM\Index(name="site_rating", columns={"site_rating"}), @ORM\Index(name="dt_2", columns={"dt"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="dup_id", columns={"dup_id"}), @ORM\Index(name="pdt", columns={"pdt"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameRepository")
 */

class Game
{
    /**
     * @var string
     *
     * @ORM\Column(name="min_name", type="text", length=255, nullable=true)
     */
    private $minName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="name2", type="string", length=255, nullable=true)
     */
    private $name2;

    /**
     * @var string
     *
     * @ORM\Column(name="name_link", type="string", length=255, nullable=true)
     */
    private $nameLink;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=16777215, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="view", type="integer", nullable=false)
     */
    private $view;

    /**
     * @var integer
     *
     * @ORM\Column(name="top1", type="integer", nullable=false)
     */
    private $top1;

    /**
     * @var integer
     *
     * @ORM\Column(name="top2", type="integer", nullable=false)
     */
    private $top2;

    /**
     * @var integer
     *
     * @ORM\Column(name="top3", type="integer", nullable=false)
     */
    private $top3;

    /**
     * @var integer
     *
     * @ORM\Column(name="top4", type="integer", nullable=false)
     */
    private $top4;

    /**
     * @var integer
     *
     * @ORM\Column(name="topx", type="integer", nullable=false)
     */
    private $topx;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating_col", type="integer", nullable=false)
     */
    private $ratingCol;

    /**
     * @var integer
     *
     * @ORM\Column(name="recomend", type="integer", nullable=false)
     */
    private $recomend;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pdt", type="datetime", nullable=false)
     */
    private $pdt;

    /**
     * @var integer
     *
     * @ORM\Column(name="w", type="integer", nullable=false)
     */
    private $w;

    /**
     * @var integer
     *
     * @ORM\Column(name="h", type="integer", nullable=false)
     */
    private $h;

    /**
     * @var integer
     *
     * @ORM\Column(name="for_dual", type="integer", nullable=false)
     */
    private $forDual;

    /**
     * @var string
     *
     * @ORM\Column(name="metka", type="string", length=255, nullable=true)
     */
    private $metka;



    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version;

    /**
     * @var integer
     *
     * @ORM\Column(name="site_rating", type="integer", nullable=false)
     */
    private $siteRating;

    /**
     * @var string
     *
     * @ORM\Column(name="swf_url", type="text", length=65535, nullable=false)
     */
    private $swfUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="no_ads", type="integer", nullable=false)
     */
    private $noAds;

    /**
     * @var integer
     *
     * @ORM\Column(name="dup_id", type="integer", nullable=false)
     */
    private $dupId;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="view_lang", type="integer", nullable=false)
     */
    private $viewLang;

    /**
     * @var string
     *
     * @ORM\Column(name="swf_data", type="text", length=65535, nullable=false)
     */
    private $swfData;

    /**
     * @var string
     *
     * @ORM\Column(name="swf_type", type="text", length=65535, nullable=false)
     */
    private $swfType;

    /**
     * @var string
     *
     * @ORM\Column(name="swf_vars", type="text", length=65535, nullable=false)
     */
    private $swfVars;

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
     * Many Games have Many Tags.
     * @ORM\ManyToMany(targetEntity="GameTags")
     * @ORM\JoinTable(name="game_tags_forgame",
     *      joinColumns={@ORM\JoinColumn(name="idgame", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="idgame", referencedColumnName="id")}
     *      )
     */
    private $tags;


    public function __construct () {
        $this->tags = new ArrayCollection();
    }


    /**
     * Set minName
     *
     * @param string $minName
     * @return GameGame
     */
    public function setMinName($minName)
    {
        $this->minName = $minName;

        return $this;
    }

    /**
     * Get minName
     *
     * @return string 
     */
    public function getMinName()
    {
        return $this->minName;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return GameGame
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
     * Set name2
     *
     * @param string $name2
     * @return GameGame
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;

        return $this;
    }

    /**
     * Get name2
     *
     * @return string 
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * Set nameLink
     *
     * @param string $nameLink
     * @return GameGame
     */
    public function setNameLink($nameLink)
    {
        $this->nameLink = $nameLink;

        return $this;
    }

    /**
     * Get nameLink
     *
     * @return string 
     */
    public function getNameLink()
    {
        return $this->nameLink;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return GameGame
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
     * Set category
     *
     * @param string $category
     * @return GameGame
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set view
     *
     * @param integer $view
     * @return GameGame
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer 
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set top1
     *
     * @param integer $top1
     * @return GameGame
     */
    public function setTop1($top1)
    {
        $this->top1 = $top1;

        return $this;
    }

    /**
     * Get top1
     *
     * @return integer 
     */
    public function getTop1()
    {
        return $this->top1;
    }

    /**
     * Set top2
     *
     * @param integer $top2
     * @return GameGame
     */
    public function setTop2($top2)
    {
        $this->top2 = $top2;

        return $this;
    }

    /**
     * Get top2
     *
     * @return integer 
     */
    public function getTop2()
    {
        return $this->top2;
    }

    /**
     * Set top3
     *
     * @param integer $top3
     * @return GameGame
     */
    public function setTop3($top3)
    {
        $this->top3 = $top3;

        return $this;
    }

    /**
     * Get top3
     *
     * @return integer 
     */
    public function getTop3()
    {
        return $this->top3;
    }

    /**
     * Set top4
     *
     * @param integer $top4
     * @return GameGame
     */
    public function setTop4($top4)
    {
        $this->top4 = $top4;

        return $this;
    }

    /**
     * Get top4
     *
     * @return integer 
     */
    public function getTop4()
    {
        return $this->top4;
    }

    /**
     * Set topx
     *
     * @param integer $topx
     * @return GameGame
     */
    public function setTopx($topx)
    {
        $this->topx = $topx;

        return $this;
    }

    /**
     * Get topx
     *
     * @return integer 
     */
    public function getTopx()
    {
        return $this->topx;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return GameGame
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set ratingCol
     *
     * @param integer $ratingCol
     * @return GameGame
     */
    public function setRatingCol($ratingCol)
    {
        $this->ratingCol = $ratingCol;

        return $this;
    }

    /**
     * Get ratingCol
     *
     * @return integer 
     */
    public function getRatingCol()
    {
        return $this->ratingCol;
    }

    /**
     * Set recomend
     *
     * @param integer $recomend
     * @return GameGame
     */
    public function setRecomend($recomend)
    {
        $this->recomend = $recomend;

        return $this;
    }

    /**
     * Get recomend
     *
     * @return integer 
     */
    public function getRecomend()
    {
        return $this->recomend;
    }

    /**
     * Set dt
     *
     * @param \DateTime $dt
     * @return GameGame
     */
    public function setDt($dt)
    {
        $this->dt = $dt;

        return $this;
    }

    /**
     * Get dt
     *
     * @return \DateTime 
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Set pdt
     *
     * @param \DateTime $pdt
     * @return GameGame
     */
    public function setPdt($pdt)
    {
        $this->pdt = $pdt;

        return $this;
    }

    /**
     * Get pdt
     *
     * @return \DateTime 
     */
    public function getPdt()
    {
        return $this->pdt;
    }

    /**
     * Set w
     *
     * @param integer $w
     * @return GameGame
     */
    public function setW($w)
    {
        $this->w = $w;

        return $this;
    }

    /**
     * Get w
     *
     * @return integer 
     */
    public function getW()
    {
        return $this->w;
    }

    /**
     * Set h
     *
     * @param integer $h
     * @return GameGame
     */
    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    /**
     * Get h
     *
     * @return integer 
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * Set forDual
     *
     * @param integer $forDual
     * @return GameGame
     */
    public function setForDual($forDual)
    {
        $this->forDual = $forDual;

        return $this;
    }

    /**
     * Get forDual
     *
     * @return integer 
     */
    public function getForDual()
    {
        return $this->forDual;
    }

    /**
     * Set metka
     *
     * @param string $metka
     * @return GameGame
     */
    public function setMetka($metka)
    {
        $this->metka = $metka;

        return $this;
    }

    /**
     * Get metka
     *
     * @return string 
     */
    public function getMetka()
    {
        return $this->metka;
    }

    /**
     * Set tags
     *
     * @param array $tags
     * @return GameGame
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags->toArray();
    }

    /**
     * Set version
     *
     * @param integer $version
     * @return GameGame
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set siteRating
     *
     * @param integer $siteRating
     * @return GameGame
     */
    public function setSiteRating($siteRating)
    {
        $this->siteRating = $siteRating;

        return $this;
    }

    /**
     * Get siteRating
     *
     * @return integer 
     */
    public function getSiteRating()
    {
        return $this->siteRating;
    }

    /**
     * Set swfUrl
     *
     * @param string $swfUrl
     * @return GameGame
     */
    public function setSwfUrl($swfUrl)
    {
        $this->swfUrl = $swfUrl;

        return $this;
    }

    /**
     * Get swfUrl
     *
     * @return string 
     */
    public function getSwfUrl()
    {
        return $this->swfUrl;
    }

    /**
     * Set noAds
     *
     * @param integer $noAds
     * @return GameGame
     */
    public function setNoAds($noAds)
    {
        $this->noAds = $noAds;

        return $this;
    }

    /**
     * Get noAds
     *
     * @return integer 
     */
    public function getNoAds()
    {
        return $this->noAds;
    }

    /**
     * Set dupId
     *
     * @param integer $dupId
     * @return GameGame
     */
    public function setDupId($dupId)
    {
        $this->dupId = $dupId;

        return $this;
    }

    /**
     * Get dupId
     *
     * @return integer 
     */
    public function getDupId()
    {
        return $this->dupId;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     * @return GameGame
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set viewLang
     *
     * @param integer $viewLang
     * @return GameGame
     */
    public function setViewLang($viewLang)
    {
        $this->viewLang = $viewLang;

        return $this;
    }

    /**
     * Get viewLang
     *
     * @return integer 
     */
    public function getViewLang()
    {
        return $this->viewLang;
    }

    /**
     * Set swfData
     *
     * @param string $swfData
     * @return GameGame
     */
    public function setSwfData($swfData)
    {
        $this->swfData = $swfData;

        return $this;
    }

    /**
     * Get swfData
     *
     * @return string 
     */
    public function getSwfData()
    {
        return $this->swfData;
    }

    /**
     * Set swfType
     *
     * @param string $swfType
     * @return GameGame
     */
    public function setSwfType($swfType)
    {
        $this->swfType = $swfType;

        return $this;
    }

    /**
     * Get swfType
     *
     * @return string 
     */
    public function getSwfType()
    {
        return $this->swfType;
    }

    /**
     * Set swfVars
     *
     * @param string $swfVars
     * @return GameGame
     */
    public function setSwfVars($swfVars)
    {
        $this->swfVars = $swfVars;

        return $this;
    }

    /**
     * Get swfVars
     *
     * @return string 
     */
    public function getSwfVars()
    {
        return $this->swfVars;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return GameGame
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
