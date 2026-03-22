<?php

namespace App\Entity;

use App\Repository\TrajetsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrajetsRepository::class)]
class Trajets
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $voiture = null;

    #[ORM\Column]
    private ?int $train = null;

    #[ORM\Column]
    private ?int $bus = null;

    #[ORM\Column]
    private ?int $avion = null;

    #[ORM\Column]
    private ?int $veloMecanique = null;

    #[ORM\Column]
    private ?int $veloElectrique = null;

    #[ORM\Column]
    private ?int $voitureElectrique = null;

    #[ORM\Column]
    private ?int $moto = null;

    #[ORM\Column]
    private ?int $bateau = null;

    #[ORM\Column]
    private ?int $metro = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $tramway = null;

    #[ORM\Column]
    private ?int $rer = null;

    #[ORM\Column]
    private ?int $idUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVoiture(): ?int
    {
        return $this->voiture;
    }

    public function setVoiture(int $voiture): static
    {
        $this->voiture = $voiture;

        return $this;
    }

    public function getTrain(): ?int
    {
        return $this->train;
    }

    public function setTrain(int $train): static
    {
        $this->train = $train;

        return $this;
    }

    public function getBus(): ?int
    {
        return $this->bus;
    }

    public function setBus(int $bus): static
    {
        $this->bus = $bus;

        return $this;
    }

    public function getAvion(): ?int
    {
        return $this->avion;
    }

    public function setAvion(int $avion): static
    {
        $this->avion = $avion;

        return $this;
    }

    public function getVeloMecanique(): ?int
    {
        return $this->veloMecanique;
    }

    public function setVeloMecanique(int $veloMecanique): static
    {
        $this->veloMecanique = $veloMecanique;

        return $this;
    }

    public function getVeloElectrique(): ?int
    {
        return $this->veloElectrique;
    }

    public function setVeloElectrique(int $veloElectrique): static
    {
        $this->veloElectrique = $veloElectrique;

        return $this;
    }

    public function getVoitureElectrique(): ?int
    {
        return $this->voitureElectrique;
    }

    public function setVoitureElectrique(int $voitureElectrique): static
    {
        $this->voitureElectrique = $voitureElectrique;

        return $this;
    }

    public function getMoto(): ?int
    {
        return $this->moto;
    }

    public function setMoto(int $moto): static
    {
        $this->moto = $moto;

        return $this;
    }

    public function getBateau(): ?int
    {
        return $this->bateau;
    }

    public function setBateau(int $bateau): static
    {
        $this->bateau = $bateau;

        return $this;
    }

    public function getMetro(): ?int
    {
        return $this->metro;
    }

    public function setMetro(int $metro): static
    {
        $this->metro = $metro;

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

    public function getTramway(): ?int
    {
        return $this->tramway;
    }

    public function setTramway(int $tramway): static
    {
        $this->tramway = $tramway;

        return $this;
    }

    public function getRer(): ?int
    {
        return $this->rer;
    }

    public function setRer(int $rer): static
    {
        $this->rer = $rer;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }
}
