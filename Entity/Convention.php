<?php

namespace InterInvest\CongesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convention
 *
 * @ORM\Table(name="conge_convention")
 * @ORM\Entity(repositoryClass="InterInvest\CongesBundle\Repository\ConventionRepository")
 */
class Convention
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
     * @ORM\Column(name="nb_jours_conge", type="decimal", precision=13, scale=3, nullable=false)
     */
    private $nbJoursConge;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_annee", type="integer", options={"default":0})
     */
    private $nbAnnee;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_jours_conge_supplementaire_par_anciennete", type="decimal", precision=13, scale=3, nullable=false)
     */
    private $nbJoursCongeSupplementaireParAnciennete;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_jours_conge_parental", type="integer", nullable=true)
     */
    private $nbJoursCongeParental;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_jours_deces", type="integer", nullable=true)
     */
    private $nbJoursDeces;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_jours_travailles", type="integer", nullable=true)
     */
    private $nbJoursTravailles;

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
     * @return Convention
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
     * Set nbJoursConge
     *
     * @param string $nbJoursConge
     *
     * @return Convention
     */
    public function setNbJoursConge($nbJoursConge)
    {
        $this->nbJoursConge = $nbJoursConge;

        return $this;
    }

    /**
     * Get nbJoursConge
     *
     * @return string
     */
    public function getNbJoursConge()
    {
        return $this->nbJoursConge;
    }

    /**
     * Set nbJoursCongeSupplementaireParAnciennete
     *
     * @param string $nbJoursCongeSupplementaireParAnciennete
     *
     * @return Convention
     */
    public function setNbJoursCongeSupplementaireParAnciennete($nbJoursCongeSupplementaireParAnciennete)
    {
        $this->nbJoursCongeSupplementaireParAnciennete = $nbJoursCongeSupplementaireParAnciennete;

        return $this;
    }

    /**
     * Get nbJoursCongeSupplementaireParAnciennete
     *
     * @return string
     */
    public function getNbJoursCongeSupplementaireParAnciennete()
    {
        return $this->nbJoursCongeSupplementaireParAnciennete;
    }

    /**
     * Set nbJoursCongeParental
     *
     * @param integer $nbJoursCongeParental
     *
     * @return Convention
     */
    public function setNbJoursCongeParental($nbJoursCongeParental)
    {
        $this->nbJoursCongeParental = $nbJoursCongeParental;

        return $this;
    }

    /**
     * Get nbJoursCongeParental
     *
     * @return integer
     */
    public function getNbJoursCongeParental()
    {
        return $this->nbJoursCongeParental;
    }

    /**
     * Set nbJoursDeces
     *
     * @param integer $nbJoursDeces
     *
     * @return Convention
     */
    public function setNbJoursDeces($nbJoursDeces)
    {
        $this->nbJoursDeces = $nbJoursDeces;

        return $this;
    }

    /**
     * Get nbJoursDeces
     *
     * @return integer
     */
    public function getNbJoursDeces()
    {
        return $this->nbJoursDeces;
    }

    /**
     * Set nbJoursTravailles
     *
     * @param integer $nbJoursTravailles
     *
     * @return Convention
     */
    public function setNbJoursTravailles($nbJoursTravailles)
    {
        $this->nbJoursTravailles = $nbJoursTravailles;

        return $this;
    }

    /**
     * Get nbJoursTravailles
     *
     * @return integer
     */
    public function getNbJoursTravailles()
    {
        return $this->nbJoursTravailles;
    }

    /**
     * Set nbAnnee
     *
     * @param integer $nbAnnee
     *
     * @return Convention
     */
    public function setNbAnnee($nbAnnee)
    {
        $this->nbAnnee = $nbAnnee;

        return $this;
    }

    /**
     * Get nbAnnee
     *
     * @return integer
     */
    public function getNbAnnee()
    {
        return $this->nbAnnee;
    }
}
