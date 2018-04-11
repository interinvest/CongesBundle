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
}
