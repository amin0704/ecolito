<?php

namespace App\Entity;

use App\Repository\ConsoAlimentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsoAlimentsRepository::class)]
class ConsoAliments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $poulet = null;

    #[ORM\Column]
    private ?float $boeuf = null;

    #[ORM\Column]
    private ?float $fromage = null;

    #[ORM\Column]
    private ?float $pates = null;

    #[ORM\Column]
    private ?float $riz = null;

    #[ORM\Column]
    private ?float $oeufs = null;

    #[ORM\Column]
    private ?float $pommedeterre = null;

    #[ORM\Column]
    private ?float $salade = null;

    #[ORM\Column]
    private ?float $tomate = null;

    #[ORM\Column]
    private ?float $oignons = null;

    #[ORM\Column]
    private ?float $pomme = null;

    #[ORM\Column]
    private ?float $poire = null;

    #[ORM\Column]
    private ?float $orange = null;

    #[ORM\Column]
    private ?float $raisin = null;

    #[ORM\Column]
    private ?float $cafe = null;

    #[ORM\Column]
    private ?float $lait = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $idUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function setIdUser(int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getPoulet(): ?float
    {
        return $this->poulet;
    }

    public function setPoulet(float $poulet): static
    {
        $this->poulet = $poulet;

        return $this;
    }

    public function getBoeuf(): ?int
    {
        return $this->boeuf;
    }

    public function setBoeuf(int $boeuf): static
    {
        $this->boeuf = $boeuf;

        return $this;
    }

    public function getFromage(): ?float
    {
        return $this->fromage;
    }

    public function setFromage(float $fromage): static
    {
        $this->fromage = $fromage;

        return $this;
    }

    public function getPates(): ?float
    {
        return $this->pates;
    }

    public function setPates(float $pates): static
    {
        $this->pates = $pates;

        return $this;
    }

    public function getRiz(): ?float
    {
        return $this->riz;
    }

    public function setRiz(float $riz): static
    {
        $this->riz = $riz;

        return $this;
    }

    public function getOeufs(): ?float
    {
        return $this->oeufs;
    }

    public function setOeufs(float $oeufs): static
    {
        $this->oeufs = $oeufs;

        return $this;
    }

    public function getPommedeterre(): ?float
    {
        return $this->pommedeterre;
    }

    public function setPommedeterre(float $pommedeterre): static
    {
        $this->pommedeterre = $pommedeterre;

        return $this;
    }

    public function getSalade(): ?float
    {
        return $this->salade;
    }

    public function setSalade(float $salade): static
    {
        $this->salade = $salade;

        return $this;
    }

    public function getTomate(): ?float
    {
        return $this->tomate;
    }

    public function setTomate(float $tomate): static
    {
        $this->tomate = $tomate;

        return $this;
    }

    public function getOignons(): ?float
    {
        return $this->oignons;
    }

    public function setOignons(float $oignons): static
    {
        $this->oignons = $oignons;

        return $this;
    }

    public function getPomme(): ?float
    {
        return $this->pomme;
    }

    public function setPomme(float $pomme): static
    {
        $this->pomme = $pomme;

        return $this;
    }

    public function getPoire(): ?float
    {
        return $this->poire;
    }

    public function setPoire(float $poire): static
    {
        $this->poire = $poire;

        return $this;
    }

    public function getOrange(): ?float
    {
        return $this->orange;
    }

    public function setOrange(float $orange): static
    {
        $this->orange = $orange;

        return $this;
    }

    public function getRaisin(): ?float
    {
        return $this->raisin;
    }

    public function setRaisin(float $raisin): static
    {
        $this->raisin = $raisin;

        return $this;
    }

    public function getCafe(): ?float
    {
        return $this->cafe;
    }

    public function setCafe(float $cafe): static
    {
        $this->cafe = $cafe;

        return $this;
    }

    public function getLait(): ?float
    {
        return $this->lait;
    }

    public function setLait(float $lait): static
    {
        $this->lait = $lait;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }
}
