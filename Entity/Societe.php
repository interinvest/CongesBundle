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

    /**
     * @var string
     *
     * @ORM\Column(name="nb_jours_rtt", type="decimal", precision=13, scale=3, nullable=false)
     */
    private $nbJoursRtt;

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

    /**
     * Set nbJoursRtt
     *
     * @param integer $nbJoursRtt
     *
     * @return Societe
     */
    public function setNbJoursRtt($nbJoursRtt)
    {
        $this->nbJoursRtt = $nbJoursRtt;

        return $this;
    }

    /**
     * Get nbJoursRtt
     *
     * @return integer
     */
    public function getNbJoursRtt()
    {
        return $this->nbJoursRtt;
    }
}
