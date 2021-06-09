<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droits
 *
 * @ORM\Table(name="droits", uniqueConstraints={@ORM\UniqueConstraint(name="droits_niveau_droit_uindex", columns={"niveau_droit"})})
 * @ORM\Entity
 */
class Droits
{
    /**
     * @var int
     *
     * @ORM\Column(name="droits_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $droitsId;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau_droit", type="integer", nullable=false)
     */
    private $niveauDroit;

    /**
     * @var string
     *
     * @ORM\Column(name="label_droit", type="string", length=100, nullable=false)
     */
    private $labelDroit;

    public function getDroitsId(): ?int
    {
        return $this->droitsId;
    }

    public function getNiveauDroit(): ?int
    {
        return $this->niveauDroit;
    }

    public function setNiveauDroit(int $niveauDroit): self
    {
        $this->niveauDroit = $niveauDroit;

        return $this;
    }

    public function getLabelDroit(): ?string
    {
        return $this->labelDroit;
    }

    public function setLabelDroit(string $labelDroit): self
    {
        $this->labelDroit = $labelDroit;

        return $this;
    }


}
