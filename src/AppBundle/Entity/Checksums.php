<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Checksums
 *
 * @ORM\Table(name="checksums", indexes={@ORM\Index(name="checksum", columns={"checksum"})})
 * @ORM\Entity
 */
class Checksums
{
    /**
     * @var string
     *
     * @ORM\Column(name="checksum", type="string", length=32, nullable=false)
     */
    private $checksum;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=2, nullable=false)
     */
    private $lang;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set checksum
     *
     * @param string $checksum
     * @return Checksums
     */
    public function setChecksum($checksum)
    {
        $this->checksum = $checksum;

        return $this;
    }

    /**
     * Get checksum
     *
     * @return string 
     */
    public function getChecksum()
    {
        return $this->checksum;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Checksums
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
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
