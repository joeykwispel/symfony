<?php

namespace App\Entity;

use App\Repository\SpelerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpelerRepository::class)
 */
class Speler
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $roepnaam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tus;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $achternaam;

    /**
     * @ORM\OneToMany(targetEntity=Wedstrijd::class, mappedBy="SpelerID1")
     */
    private $wedstrijds;

    public function __construct()
    {
        $this->wedstrijds = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoepnaam(): ?string
    {
        return $this->roepnaam;
    }

    public function setRoepnaam(string $roepnaam): self
    {
        $this->roepnaam = $roepnaam;

        return $this;
    }

    public function getTus(): ?string
    {
        return $this->tus;
    }

    public function setTus(string $tus): self
    {
        $this->tus = $tus;

        return $this;
    }

    public function getAchternaam(): ?string
    {
        return $this->achternaam;
    }

    public function setAchternaam(string $achternaam): self
    {
        $this->achternaam = $achternaam;

        return $this;
    }

    /**
     * @return Collection|Wedstrijd[]
     */
    public function getWedstrijds(): Collection
    {
        return $this->wedstrijds;
    }

    public function addWedstrijd(Wedstrijd $wedstrijd): self
    {
        if (!$this->wedstrijds->contains($wedstrijd)) {
            $this->wedstrijds[] = $wedstrijd;
            $wedstrijd->setSpelerID1($this);
        }

        return $this;
    }

    public function removeWedstrijd(Wedstrijd $wedstrijd): self
    {
        if ($this->wedstrijds->removeElement($wedstrijd)) {
            // set the owning side to null (unless already changed)
            if ($wedstrijd->getSpelerID1() === $this) {
                $wedstrijd->setSpelerID1(null);
            }
        }

        return $this;
    }
    public function __toString(){
        return $this->roepnaam;
    }
}
