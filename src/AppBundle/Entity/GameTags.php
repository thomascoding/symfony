<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameTags
 *
 * @ORM\Table(name="game_tags", indexes={@ORM\Index(name="slug", columns={"slug"}), @ORM\Index(name="rd_slug", columns={"rd_slug"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class GameTags
{
    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="text", length=65535, nullable=false)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="kol", type="text", length=65535, nullable=false)
     */
    private $kol;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="h1", type="text", length=65535, nullable=false)
     */
    private $h1;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=32, nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="descr_old", type="text", length=16777215, nullable=false)
     */
    private $descrOld;

    /**
     * @var string
     *
     * @ORM\Column(name="up_txt_old", type="text", length=16777215, nullable=false)
     */
    private $upTxtOld;

    /**
     * @var string
     *
     * @ORM\Column(name="img_old", type="text", length=255, nullable=false)
     */
    private $imgOld;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_descr", type="text", length=65535, nullable=false)
     */
    private $seoDescr;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_keywords", type="text", length=65535, nullable=false)
     */
    private $seoKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="rd_slug", type="string", length=100, nullable=false)
     */
    private $rdSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="text", length=16777215, nullable=false)
     */
    private $descr;

    /**
     * @var string
     *
     * @ORM\Column(name="up_txt", type="text", length=16777215, nullable=false)
     */
    private $upTxt;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="text", length=255, nullable=false)
     */
    private $img;

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
     * Set tag
     *
     * @param string $tag
     * @return GameTags
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set kol
     *
     * @param string $kol
     * @return GameTags
     */
    public function setKol($kol)
    {
        $this->kol = $kol;

        return $this;
    }

    /**
     * Get kol
     *
     * @return string 
     */
    public function getKol()
    {
        return $this->kol;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return GameTags
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
     * Set h1
     *
     * @param string $h1
     * @return GameTags
     */
    public function setH1($h1)
    {
        $this->h1 = $h1;

        return $this;
    }

    /**
     * Get h1
     *
     * @return string 
     */
    public function getH1()
    {
        return $this->h1;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return GameTags
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set descrOld
     *
     * @param string $descrOld
     * @return GameTags
     */
    public function setDescrOld($descrOld)
    {
        $this->descrOld = $descrOld;

        return $this;
    }

    /**
     * Get descrOld
     *
     * @return string 
     */
    public function getDescrOld()
    {
        return $this->descrOld;
    }

    /**
     * Set upTxtOld
     *
     * @param string $upTxtOld
     * @return GameTags
     */
    public function setUpTxtOld($upTxtOld)
    {
        $this->upTxtOld = $upTxtOld;

        return $this;
    }

    /**
     * Get upTxtOld
     *
     * @return string 
     */
    public function getUpTxtOld()
    {
        return $this->upTxtOld;
    }

    /**
     * Set imgOld
     *
     * @param string $imgOld
     * @return GameTags
     */
    public function setImgOld($imgOld)
    {
        $this->imgOld = $imgOld;

        return $this;
    }

    /**
     * Get imgOld
     *
     * @return string 
     */
    public function getImgOld()
    {
        return $this->imgOld;
    }

    /**
     * Set seoDescr
     *
     * @param string $seoDescr
     * @return GameTags
     */
    public function setSeoDescr($seoDescr)
    {
        $this->seoDescr = $seoDescr;

        return $this;
    }

    /**
     * Get seoDescr
     *
     * @return string 
     */
    public function getSeoDescr()
    {
        return $this->seoDescr;
    }

    /**
     * Set seoKeywords
     *
     * @param string $seoKeywords
     * @return GameTags
     */
    public function setSeoKeywords($seoKeywords)
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    /**
     * Get seoKeywords
     *
     * @return string 
     */
    public function getSeoKeywords()
    {
        return $this->seoKeywords;
    }

    /**
     * Set rdSlug
     *
     * @param string $rdSlug
     * @return GameTags
     */
    public function setRdSlug($rdSlug)
    {
        $this->rdSlug = $rdSlug;

        return $this;
    }

    /**
     * Get rdSlug
     *
     * @return string 
     */
    public function getRdSlug()
    {
        return $this->rdSlug;
    }

    /**
     * Set descr
     *
     * @param string $descr
     * @return GameTags
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;

        return $this;
    }

    /**
     * Get descr
     *
     * @return string 
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set upTxt
     *
     * @param string $upTxt
     * @return GameTags
     */
    public function setUpTxt($upTxt)
    {
        $this->upTxt = $upTxt;

        return $this;
    }

    /**
     * Get upTxt
     *
     * @return string 
     */
    public function getUpTxt()
    {
        return $this->upTxt;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return GameTags
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return GameTags
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
