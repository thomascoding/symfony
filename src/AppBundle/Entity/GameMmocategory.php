<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameMmocategory
 *
 * @ORM\Table(name="game_mmocategory", indexes={@ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class GameMmocategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sort", type="integer", nullable=false)
     */
    private $sort;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_rec", type="integer", nullable=false)
     */
    private $sortRec;

    /**
     * @var integer
     *
     * @ORM\Column(name="bond", type="integer", nullable=false)
     */
    private $bond;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="text", length=65535, nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="folder", type="string", length=255, nullable=false)
     */
    private $folder;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var string
     *
     * @ORM\Column(name="down_txt", type="text", length=16777215, nullable=false)
     */
    private $downTxt;

    /**
     * @var integer
     *
     * @ORM\Column(name="down_txt_height", type="integer", nullable=false)
     */
    private $downTxtHeight;

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
     * @ORM\Column(name="tags", type="text", length=65535, nullable=false)
     */
    private $tags;

    /**
     * @var integer
     *
     * @ORM\Column(name="numgames", type="integer", nullable=false)
     */
    private $numgames;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="numdt", type="datetime", nullable=false)
     */
    private $numdt;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_descr", type="text", length=16777215, nullable=false)
     */
    private $seoDescr;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_keywords", type="text", length=16777215, nullable=false)
     */
    private $seoKeywords;

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
     * Set sort
     *
     * @param integer $sort
     * @return GameMmocategory
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer 
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set sortRec
     *
     * @param integer $sortRec
     * @return GameMmocategory
     */
    public function setSortRec($sortRec)
    {
        $this->sortRec = $sortRec;

        return $this;
    }

    /**
     * Get sortRec
     *
     * @return integer 
     */
    public function getSortRec()
    {
        return $this->sortRec;
    }

    /**
     * Set bond
     *
     * @param integer $bond
     * @return GameMmocategory
     */
    public function setBond($bond)
    {
        $this->bond = $bond;

        return $this;
    }

    /**
     * Get bond
     *
     * @return integer 
     */
    public function getBond()
    {
        return $this->bond;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return GameMmocategory
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
     * Set title
     *
     * @param string $title
     * @return GameMmocategory
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
     * Set folder
     *
     * @param string $folder
     * @return GameMmocategory
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * Get folder
     *
     * @return string 
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Set dt
     *
     * @param \DateTime $dt
     * @return GameMmocategory
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
     * Set downTxt
     *
     * @param string $downTxt
     * @return GameMmocategory
     */
    public function setDownTxt($downTxt)
    {
        $this->downTxt = $downTxt;

        return $this;
    }

    /**
     * Get downTxt
     *
     * @return string 
     */
    public function getDownTxt()
    {
        return $this->downTxt;
    }

    /**
     * Set downTxtHeight
     *
     * @param integer $downTxtHeight
     * @return GameMmocategory
     */
    public function setDownTxtHeight($downTxtHeight)
    {
        $this->downTxtHeight = $downTxtHeight;

        return $this;
    }

    /**
     * Get downTxtHeight
     *
     * @return integer 
     */
    public function getDownTxtHeight()
    {
        return $this->downTxtHeight;
    }

    /**
     * Set upTxt
     *
     * @param string $upTxt
     * @return GameMmocategory
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
     * @return GameMmocategory
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
     * Set tags
     *
     * @param string $tags
     * @return GameMmocategory
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set numgames
     *
     * @param integer $numgames
     * @return GameMmocategory
     */
    public function setNumgames($numgames)
    {
        $this->numgames = $numgames;

        return $this;
    }

    /**
     * Get numgames
     *
     * @return integer 
     */
    public function getNumgames()
    {
        return $this->numgames;
    }

    /**
     * Set numdt
     *
     * @param \DateTime $numdt
     * @return GameMmocategory
     */
    public function setNumdt($numdt)
    {
        $this->numdt = $numdt;

        return $this;
    }

    /**
     * Get numdt
     *
     * @return \DateTime 
     */
    public function getNumdt()
    {
        return $this->numdt;
    }

    /**
     * Set seoDescr
     *
     * @param string $seoDescr
     * @return GameMmocategory
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
     * @return GameMmocategory
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
     * Set status
     *
     * @param string $status
     * @return GameMmocategory
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
