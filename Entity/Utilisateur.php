<?php

namespace InterInvest\CongesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Utilisateur
 * @package InterInvest\CongesBundle\Entity
 */
class Utilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=500, nullable=true, options={"default":""})
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_rtt", type="integer", nullable=true)
     */
    private $hasRtt;

    public function __construct()
    {
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set hasRtt
     *
     * @param integer $hasRtt
     *
     * @return Utilisateur
     */
    public function setHasRtt($hasRtt)
    {
        $this->hasRtt = $hasRtt;

        return $this;
    }

    /**
     * Get hasRtt
     *
     * @return integer
     */
    public function getHasRtt()
    {
        return $this->hasRtt;
    }
}
