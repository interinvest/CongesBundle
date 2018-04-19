<?php

namespace InterInvest\CongesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Societe
 * @package InterInvest\CongesBundle\Entity
 */
class Societe
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=500, nullable=true, options={"default":""})
     */
    private $nom;

    public function __construct()
    {
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Societe
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
}
