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
    private ?float $voiture = null;

    #[ORM\Column]
    private ?float $train = null;

    #[ORM\Column]
    private ?float $bus = null;

    #[ORM\Column]
    private ?float $avion = null;

    #[ORM\Column]
    private ?float $veloMecanique = null;

    #[ORM\Column]
    private ?float $veloElectrique = null;

    #[ORM\Column]
    private ?float $voitureElectrique = null;

    #[ORM\Column]
    private ?float $moto = null;

    #[ORM\Column]
    private ?float $bateau = null;

    #[ORM\Column]
    private ?float $metro = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?float $tramway = null;

    #[ORM\Column]
    private ?float $rer = null;

    #[ORM\Column]
    private ?int $idUser = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $infos = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVoiture(): ?float
    {
        return $this->voiture;
    }

    public function setVoiture(float $voiture): static
    {
        $this->voiture = $voiture;

        return $this;
    }

    public function getTrain(): ?float
    {
        return $this->train;
    }

    public function setTrain(float $train): static
    {
        $this->train = $train;

        return $this;
    }

    public function getBus(): ?float
    {
        return $this->bus;
    }

    public function setBus(float $bus): static
    {
        $this->bus = $bus;

        return $this;
    }

    public function getAvion(): ?float
    {
        return $this->avion;
    }

    public function setAvion(float $avion): static
    {
        $this->avion = $avion;

        return $this;
    }

    public function getVeloMecanique(): ?float
    {
        return $this->veloMecanique;
    }

    public function setVeloMecanique(float $veloMecanique): static
    {
        $this->veloMecanique = $veloMecanique;

        return $this;
    }

    public function getVeloElectrique(): ?float
    {
        return $this->veloElectrique;
    }

    public function setVeloElectrique(float $veloElectrique): static
    {
        $this->veloElectrique = $veloElectrique;

        return $this;
    }

    public function getVoitureElectrique(): ?float
    {
        return $this->voitureElectrique;
    }

    public function setVoitureElectrique(float $voitureElectrique): static
    {
        $this->voitureElectrique = $voitureElectrique;

        return $this;
    }

    public function getMoto(): ?float
    {
        return $this->moto;
    }

    public function setMoto(float $moto): static
    {
        $this->moto = $moto;

        return $this;
    }

    public function getBateau(): ?float
    {
        return $this->bateau;
    }

    public function setBateau(float $bateau): static
    {
        $this->bateau = $bateau;

        return $this;
    }

    public function getMetro(): ?float
    {
        return $this->metro;
    }

    public function setMetro(float $metro): static
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

    public function getTramway(): ?float
    {
        return $this->tramway;
    }

    public function setTramway(float $tramway): static
    {
        $this->tramway = $tramway;

        return $this;
    }

    public function getRer(): ?float
    {
        return $this->rer;
    }

    public function setRer(float $rer): static
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

    public function getInfos(): ?string
    {
        return $this->infos;
    }

    public function setInfos(?string $infos): static
    {
        $this->infos = $infos;

        return $this;
    }
}
