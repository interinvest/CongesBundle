<?php

namespace II\Bundle\CongeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use II\Bundle\MigrationBundle\Entity\Gerant;

/**
 * CongeSociete
 *
 * @ORM\Table(name="conge_societe")
 * @ORM\Entity(repositoryClass="II\Bundle\CongeBundle\Entity\CongeSocieteRepository")
 */
class CongeSociete
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
     * @var Gerant
     *
     * @ORM\OneToOne(targetEntity="II\Bundle\MigrationBundle\Entity\Gerant", inversedBy="congeSociete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gerant", referencedColumnName="ger_id")
     * })
     */
    private $gerant;

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
     * @return CongeSociete
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
     * Set gerant
     *
     * @param \II\Bundle\MigrationBundle\Entity\Gerant $gerant
     *
     * @return CongeSociete
     */
    public function setGerant(\II\Bundle\MigrationBundle\Entity\Gerant $gerant = null)
    {
        $this->gerant = $gerant;

        return $this;
    }

    /**
     * Get gerant
     *
     * @return \II\Bundle\MigrationBundle\Entity\Gerant
     */
    public function getGerant()
    {
        return $this->gerant;
    }
}
