<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Disc
 * @ORM\Table(name="disc", indexes={@ORM\Index(name="artist_id", columns={"artist_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\DiscRepository")
 */
class Disc
{
    /**
     * @var int
     *
     * @ORM\Column(name="disc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $discId;

    /**
     * @var string
     * @Assert\NotBlank(message="Le titre de l'album doit être renseigné.")
     * @ORM\Column(name="disc_title", type="string", length=255, nullable=false)
     */
    private $discTitle;

    /**
     * @var int|null
     * @Assert\Type(type="integer", message="Seul des chiffres sont autorisé.")
     * @Assert\NotBlank(message="L'année de sortie de l'album doit être renseignée.")
     * @ORM\Column(name="disc_year", type="integer", nullable=false)
     */
    private $discYear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="disc_picture", type="string", length=255, nullable=true)
     */
    private $discPicture;

    /**
     * @var string
     *@Assert\NotBlank(message="Vous devez renseigner le label.")
     * @ORM\Column(name="disc_label", type="string", length=255, nullable=false)
     */
    private $discLabel;

    /**
     * @var string
     *@Assert\NotBlank(message="Vous devez préciser le genre de l'album.")
     * @ORM\Column(name="disc_genre", type="string", length=255, nullable=false)
     */
    private $discGenre;

    /**
     * @var string
     *@Assert\NotBlank(message="Le prix de l'album doit être indiqué.")
     * @ORM\Column(name="disc_price", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $discPrice;

    /**
     * @var \Artist
     *@Assert\NotBlank(message="Vous devez renseigner l'artiste ou le groupe auteur de cet album.")
     * @ORM\ManyToOne(targetEntity="Artist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artist_id", referencedColumnName="artist_id")
     * })
     */
    private $artist;

    public function getDiscId(): ?int
    {
        return $this->discId;
    }

    public function getDiscTitle(): ?string
    {
        return $this->discTitle;
    }

    public function setDiscTitle(string $discTitle): self
    {
        $this->discTitle = $discTitle;

        return $this;
    }

    public function getDiscYear(): ?int
    {
        return $this->discYear;
    }

    public function setDiscYear(?int $discYear): self
    {
        $this->discYear = $discYear;

        return $this;
    }

    public function getDiscPicture(): ?string
    {
        return $this->discPicture;
    }

    public function setDiscPicture(?string $discPicture): self
    {
        $this->discPicture = $discPicture;

        return $this;
    }

    public function getDiscLabel(): ?string
    {
        return $this->discLabel;
    }

    public function setDiscLabel(string $discLabel): self
    {
        $this->discLabel = $discLabel;

        return $this;
    }

    public function getDiscGenre(): ?string
    {
        return $this->discGenre;
    }

    public function setDiscGenre(string $discGenre): self
    {
        $this->discGenre = $discGenre;

        return $this;
    }

    public function getDiscPrice(): ?string
    {
        return $this->discPrice;
    }

    public function setDiscPrice(string $discPrice): self
    {
        $this->discPrice = $discPrice;

        return $this;
    }

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    public function setArtist(?Artist $artist): self
    {
        $this->artist = $artist;

        return $this;
    }


}
