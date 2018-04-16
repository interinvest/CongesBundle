<?php

namespace InterInvest\CongesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CongeUtilisateur
 *
 * @ORM\Table(name="conge_utilisateur")
 * @ORM\Entity(repositoryClass="InterInvest\CongesBundle\Repository\CongeUtilisateurRepository")
 */
class CongeUtilisateur
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
     * @var integer
     *
     * @ORM\Column(name="has_rtt", type="integer", nullable=true)
     */
    private $hasRtt;

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
     * @return CongeUtilisateur
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
     * @return CongeUtilisateur
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
