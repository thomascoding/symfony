<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameCatAsGame
 *
 * @ORM\Table(name="game_cat_as_game", indexes={@ORM\Index(name="cat", columns={"cat"}), @ORM\Index(name="id_game", columns={"id_game"}), @ORM\Index(name="cat_2", columns={"id_game", "cat"})})
 * @ORM\Entity
 */
class GameCatAsGame
{
    /**
     * @var string
     *
     * @ORM\Column(name="cat", type="string", length=100, nullable=true)
     */
    private $cat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_game", type="integer", nullable=true)
     */
    private $idGame;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set cat
     *
     * @param string $cat
     * @return GameCatAsGame
     */
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return string 
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set idGame
     *
     * @param integer $idGame
     * @return GameCatAsGame
     */
    public function setIdGame($idGame)
    {
        $this->idGame = $idGame;

        return $this;
    }

    /**
     * Get idGame
     *
     * @return integer 
     */
    public function getIdGame()
    {
        return $this->idGame;
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
