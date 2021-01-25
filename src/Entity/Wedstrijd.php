<?php

namespace App\Entity;

use App\Repository\WedstrijdRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WedstrijdRepository::class)
 */
class Wedstrijd
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
    private $ronde;

    /**
     * @ORM\ManyToOne(targetEntity=Speler::class, inversedBy="wedstrijds")
     * @ORM\JoinColumn(nullable=false)
     */
    private $SpelerID1;

    /**
     * @ORM\ManyToOne(targetEntity=Speler::class, inversedBy="wedstrijds")
     * @ORM\JoinColumn(nullable=false)
     */
    private $SpelerID2;

    /**
     * @ORM\Column(type="integer")
     */
    private $score1;

    /**
     * @ORM\Column(type="integer")
     */
    private $score2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRonde(): ?string
    {
        return $this->ronde;
    }

    public function setRonde(string $ronde): self
    {
        $this->ronde = $ronde;

        return $this;
    }

    public function getSpelerID1(): ?Speler
    {
        return $this->SpelerID1;
    }

    public function setSpelerID1(?Speler $SpelerID1): self
    {
        $this->SpelerID1 = $SpelerID1;

        return $this;
    }

    public function getSpelerID2(): ?Speler
    {
        return $this->SpelerID2;
    }

    public function setSpelerID2(?Speler $SpelerID2): self
    {
        $this->SpelerID2 = $SpelerID2;

        return $this;
    }

    public function getScore1(): ?int
    {
        return $this->score1;
    }

    public function setScore1(int $score1): self
    {
        $this->score1 = $score1;

        return $this;
    }

    public function getScore2(): ?int
    {
        return $this->score2;
    }

    public function setScore2(int $score2): self
    {
        $this->score2 = $score2;

        return $this;
    }
}
