<?php


namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\UtilisateursRepository")
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
        
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Commandes", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
    */
    private $commandes;
    
    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
    */
    private $adresses;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Commandes[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commandes $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setUtilisateur($this);
        }

        return $this;
    }

    public function removeCommande(Commandes $commande): self
    {
        if ($this->commandes->contains($commande)) {
            $this->commandes->removeElement($commande);
            // set the owning side to null (unless already changed)
            if ($commande->getUtilisateur() === $this) {
                $commande->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|UtilisateursAdresses[]
     */
    public function getAdresses(): Collection
    {
        return $this->adresses;
    }

    public function addAdress(UtilisateursAdresses $adress): self
    {
        if (!$this->adresses->contains($adress)) {
            $this->adresses[] = $adress;
            $adress->setUtilisateur($this);
        }

        return $this;
    }

    public function removeAdress(UtilisateursAdresses $adress): self
    {
        if ($this->adresses->contains($adress)) {
            $this->adresses->removeElement($adress);
            // set the owning side to null (unless already changed)
            if ($adress->getUtilisateur() === $this) {
                $adress->setUtilisateur(null);
            }
        }

        return $this;
    }
}
