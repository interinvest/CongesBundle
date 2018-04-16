<?php

namespace InterInvest\CongesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="conge_societe")
 * @ORM\Entity(repositoryClass="InterInvest\CongesBundle\Repository\SocieteRepository")
 */
class Societe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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