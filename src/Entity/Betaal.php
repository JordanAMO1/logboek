<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BetaalRepository")
 */
class Betaal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetimetz")
     */
    private $datum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bank;

    /**
     * @ORM\Column(type="float")
     */
    private $bedrag;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(string $bank): self
    {
        $this->bank = $bank;

        return $this;
    }

    public function getBedrag(): ?float
    {
        return $this->bedrag;
    }

    public function setBedrag(float $bedrag): self
    {
        $this->bedrag = $bedrag;

        return $this;
    }
}
