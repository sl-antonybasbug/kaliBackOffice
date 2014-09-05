<?php

namespace Gbl\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transporteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gbl\BackOfficeBundle\Repository\TransporteurRepository")
 */
class Transporteur
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @ORM\OneToMany(targetEntity="Commande", mappedBy="transporteur")
     */
    protected $commandes;

    public function __construct()
    {
    	$this->nom    = '';
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
     * @return Transporteur
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
     * Add commandes
     *
     * @param \Gbl\BackOfficeBundle\Entity\Commande $commandes
     * @return Transporteur
     */
    public function addCommande(\Gbl\BackOfficeBundle\Entity\Commande $commandes)
    {
    	$this->commandes[] = $commandes;
    
    	return $this;
    }
    
    /**
     * Remove commandes
     *
     * @param \Gbl\BackOfficeBundle\Entity\Commande $commandes
     */
    public function removeProduit(\Gbl\BackOfficeBundle\Entity\Commande $commandess)
    {
    	$this->commandes->removeElement($commandes);
    }
    
    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
    	return $this->commandes;
    }
    
}
