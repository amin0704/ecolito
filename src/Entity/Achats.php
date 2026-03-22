<?php

namespace App\Entity;

use App\Repository\AchatsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AchatsRepository::class)]
class Achats
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $smartphone = null;

    #[ORM\Column]
    private ?int $tablette = null;

    #[ORM\Column]
    private ?int $television = null;

    #[ORM\Column]
    private ?int $electromenager = null;

    #[ORM\Column]
    private ?int $veloMecanique = null;

    #[ORM\Column]
    private ?int $veloElectrique = null;

    #[ORM\Column]
    private ?int $produitLivre = null;

    #[ORM\Column]
    private ?int $cosmetique = null;

    #[ORM\Column]
    private ?int $tshirt = null;

    #[ORM\Column]
    private ?int $chaussures = null;

    #[ORM\Column]
    private ?int $jean = null;

    #[ORM\Column]
    private ?int $manteau = null;

    #[ORM\Column]
    private ?int $veste = null;

    #[ORM\Column]
    private ?int $pantalon = null;

    #[ORM\Column]
    private ?int $pull = null;

    #[ORM\Column]
    private ?int $livre = null;

    #[ORM\Column]
    private ?int $journal = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $iduser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getSmartphone(): ?int
    {
        return $this->smartphone;
    }



    public function setSmartphone(int $smartphone): static
    {
        $this->smartphone = $smartphone;

        return $this;
    }

    public function getTablette(): ?int
    {
        return $this->tablette;
    }

    public function setTablette(int $tablette): static
    {
        $this->tablette = $tablette;

        return $this;
    }

    public function getTelevision(): ?int
    {
        return $this->television;
    }

    public function setTelevision(int $television): static
    {
        $this->television = $television;

        return $this;
    }

    public function getElectromenager(): ?int
    {
        return $this->electromenager;
    }

    public function setElectromenager(int $electromenager): static
    {
        $this->electromenager = $electromenager;

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

    public function getProduitLivre(): ?int
    {
        return $this->produitLivre;
    }

    public function setProduitLivre(int $produitLivre): static
    {
        $this->produitLivre = $produitLivre;

        return $this;
    }

    public function getCosmetique(): ?int
    {
        return $this->cosmetique;
    }

    public function setCosmetique(int $cosmetique): static
    {
        $this->cosmetique = $cosmetique;

        return $this;
    }

    public function getTshirt(): ?int
    {
        return $this->tshirt;
    }

    public function setTshirt(int $tshirt): static
    {
        $this->tshirt = $tshirt;

        return $this;
    }

    public function getChaussures(): ?int
    {
        return $this->chaussures;
    }

    public function setChaussures(int $chaussures): static
    {
        $this->chaussures = $chaussures;

        return $this;
    }

    public function getJean(): ?int
    {
        return $this->jean;
    }

    public function setJean(int $jean): static
    {
        $this->jean = $jean;

        return $this;
    }

    public function getManteau(): ?int
    {
        return $this->manteau;
    }

    public function setManteau(int $manteau): static
    {
        $this->manteau = $manteau;

        return $this;
    }

    public function getVeste(): ?int
    {
        return $this->veste;
    }

    public function setVeste(int $veste): static
    {
        $this->veste = $veste;

        return $this;
    }

    public function getPantalon(): ?int
    {
        return $this->pantalon;
    }

    public function setPantalon(int $pantalon): static
    {
        $this->pantalon = $pantalon;

        return $this;
    }

    public function getPull(): ?int
    {
        return $this->pull;
    }

    public function setPull(int $pull): static
    {
        $this->pull = $pull;

        return $this;
    }

    public function getLivre(): ?int
    {
        return $this->livre;
    }

    public function setLivre(int $livre): static
    {
        $this->livre = $livre;

        return $this;
    }

    public function getJournal(): ?int
    {
        return $this->journal;
    }

    public function setJournal(int $journal): static
    {
        $this->journal = $journal;

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

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }
}
