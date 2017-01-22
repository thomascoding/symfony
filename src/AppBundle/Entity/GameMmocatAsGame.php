<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameMmocatAsGame
 *
 * @ORM\Table(name="game_mmocat_as_game", indexes={@ORM\Index(name="cat", columns={"cat"}), @ORM\Index(name="id_game", columns={"id_game"})})
 * @ORM\Entity
 */
class GameMmocatAsGame
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cat", type="integer", nullable=true)
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
     * @param integer $cat
     * @return GameMmocatAsGame
     */
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return integer 
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set idGame
     *
     * @param integer $idGame
     * @return GameMmocatAsGame
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
