<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameTagsForgame
 *
 * @ORM\Table(name="game_tags_forgame", indexes={@ORM\Index(name="idgame", columns={"idgame"}), @ORM\Index(name="idtag", columns={"idtag"}), @ORM\Index(name="category", columns={"category"}), @ORM\Index(name="idgame_2", columns={"idgame", "idtag"})})
 * @ORM\Entity
 */
class GameTagsForgame
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idgame", type="integer", nullable=false)
     */
    private $idgame;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtag", type="integer", nullable=false)
     */
    private $idtag;

    /**
     * @var string
     *
     * @ORM\Column(name="nametag", type="string", length=50, nullable=false)
     */
    private $nametag;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=50, nullable=false)
     */
    private $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idgame
     *
     * @param integer $idgame
     * @return GameTagsForgame
     */
    public function setIdgame($idgame)
    {
        $this->idgame = $idgame;

        return $this;
    }

    /**
     * Get idgame
     *
     * @return integer 
     */
    public function getIdgame()
    {
        return $this->idgame;
    }

    /**
     * Set idtag
     *
     * @param integer $idtag
     * @return GameTagsForgame
     */
    public function setIdtag($idtag)
    {
        $this->idtag = $idtag;

        return $this;
    }

    /**
     * Get idtag
     *
     * @return integer 
     */
    public function getIdtag()
    {
        return $this->idtag;
    }

    /**
     * Set nametag
     *
     * @param string $nametag
     * @return GameTagsForgame
     */
    public function setNametag($nametag)
    {
        $this->nametag = $nametag;

        return $this;
    }

    /**
     * Get nametag
     *
     * @return string 
     */
    public function getNametag()
    {
        return $this->nametag;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return GameTagsForgame
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
