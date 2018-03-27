<?php

namespace II\Bundle\CongeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use II\Bundle\SecurityBundle\Entity\User;

/**
 * CongeUtilisateur
 *
 * @ORM\Table(name="conge_utilisateur")
 * @ORM\Entity(repositoryClass="II\Bundle\CongeBundle\Entity\CongeUtilisateurRepository")
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
     * @var User
     *
     * @ORM\OneToOne(targetEntity="II\Bundle\SecurityBundle\Entity\User", inversedBy="congeUtilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur", referencedColumnName="id")
     * })
     */
    private $utilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_rtt", type="integer", nullable=true)
     */
    private $hasRTT;

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
     * Set hasRTT
     *
     * @param integer $hasRTT
     *
     * @return CongeUtilisateur
     */
    public function setHasRTT($hasRTT)
    {
        $this->hasRTT = $hasRTT;

        return $this;
    }

    /**
     * Get hasRTT
     *
     * @return integer
     */
    public function getHasRTT()
    {
        return $this->hasRTT;
    }

    /**
     * Set utilisateur
     *
     * @param \II\Bundle\SecurityBundle\Entity\User $utilisateur
     *
     * @return CongeUtilisateur
     */
    public function setUtilisateur(\II\Bundle\SecurityBundle\Entity\User $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \II\Bundle\SecurityBundle\Entity\User
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
