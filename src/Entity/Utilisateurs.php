<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs", uniqueConstraints={@ORM\UniqueConstraint(name="utilisateurs_token_recup_uindex", columns={"token_recup"}), @ORM\UniqueConstraint(name="utilisateurs_mail_utilisateur_uindex", columns={"mail_utilisateur"}), @ORM\UniqueConstraint(name="utilisateurs_nom_utilisateur_uindex", columns={"nom_utilisateur"})}, indexes={@ORM\Index(name="id_droits", columns={"id_droits"})})
 * @ORM\Entity
 */
class Utilisateurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="utilisateur_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $utilisateurId;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_utilisateur", type="string", length=50, nullable=false)
     */
    private $nomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_utilisateur", type="string", length=80, nullable=false)
     */
    private $mdpUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_utilisateur", type="string", length=50, nullable=false)
     */
    private $mailUtilisateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="token_recup", type="integer", nullable=true)
     */
    private $tokenRecup;

    /**
     * @var \Droits
     *
     * @ORM\ManyToOne(targetEntity="Droits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_droits", referencedColumnName="id_droit")
     * })
     */
    private $idDroits;

    public function getUtilisateurId(): ?int
    {
        return $this->utilisateurId;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nomUtilisateur;
    }

    public function setNomUtilisateur(string $nomUtilisateur): self
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    public function getMdpUtilisateur(): ?string
    {
        return $this->mdpUtilisateur;
    }

    public function setMdpUtilisateur(string $mdpUtilisateur): self
    {
        $this->mdpUtilisateur = $mdpUtilisateur;

        return $this;
    }

    public function getMailUtilisateur(): ?string
    {
        return $this->mailUtilisateur;
    }

    public function setMailUtilisateur(string $mailUtilisateur): self
    {
        $this->mailUtilisateur = $mailUtilisateur;

        return $this;
    }

    public function getTokenRecup(): ?int
    {
        return $this->tokenRecup;
    }

    public function setTokenRecup(?int $tokenRecup): self
    {
        $this->tokenRecup = $tokenRecup;

        return $this;
    }

    public function getIdDroits(): ?Droits
    {
        return $this->idDroits;
    }

    public function setIdDroits(?Droits $idDroits): self
    {
        $this->idDroits = $idDroits;

        return $this;
    }


}
