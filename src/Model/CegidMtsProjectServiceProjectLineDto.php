<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsProjectServiceProjectLineDto
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * Libellé de la prestation.
     *
     * @var string|null
     */
    protected $itemDescription;
    /**
     * Code de la prestation.
     *
     * @var string|null
     */
    protected $itemCode;
    /**
     * Type de l'affaire.
     *
     * @var string|null
     */
    protected $projectType;
    /**
     * Code de l'affaire.
     *
     * @var string|null
     */
    protected $projectCode;
    /**
     * Libellé de l'affaire.
     *
     * @var string|null
     */
    protected $projectDescription;
    /**
     * Libellé formaté de l'affaire.
     *
     * @var string|null
     */
    protected $formattedProjectLabel;
    /**
     * Unité activité.
     *
     * @var string|null
     */
    protected $activityUnit;
    /**
     * N° identifiant ligne d'affaire.
     *
     * @var int|null
     */
    protected $lineOrderNumber;

    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTime $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTime $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Libellé de la prestation.
     */
    public function getItemDescription(): ?string
    {
        return $this->itemDescription;
    }

    /**
     * Libellé de la prestation.
     */
    public function setItemDescription(?string $itemDescription): self
    {
        $this->initialized['itemDescription'] = true;
        $this->itemDescription = $itemDescription;

        return $this;
    }

    /**
     * Code de la prestation.
     */
    public function getItemCode(): ?string
    {
        return $this->itemCode;
    }

    /**
     * Code de la prestation.
     */
    public function setItemCode(?string $itemCode): self
    {
        $this->initialized['itemCode'] = true;
        $this->itemCode = $itemCode;

        return $this;
    }

    /**
     * Type de l'affaire.
     */
    public function getProjectType(): ?string
    {
        return $this->projectType;
    }

    /**
     * Type de l'affaire.
     */
    public function setProjectType(?string $projectType): self
    {
        $this->initialized['projectType'] = true;
        $this->projectType = $projectType;

        return $this;
    }

    /**
     * Code de l'affaire.
     */
    public function getProjectCode(): ?string
    {
        return $this->projectCode;
    }

    /**
     * Code de l'affaire.
     */
    public function setProjectCode(?string $projectCode): self
    {
        $this->initialized['projectCode'] = true;
        $this->projectCode = $projectCode;

        return $this;
    }

    /**
     * Libellé de l'affaire.
     */
    public function getProjectDescription(): ?string
    {
        return $this->projectDescription;
    }

    /**
     * Libellé de l'affaire.
     */
    public function setProjectDescription(?string $projectDescription): self
    {
        $this->initialized['projectDescription'] = true;
        $this->projectDescription = $projectDescription;

        return $this;
    }

    /**
     * Libellé formaté de l'affaire.
     */
    public function getFormattedProjectLabel(): ?string
    {
        return $this->formattedProjectLabel;
    }

    /**
     * Libellé formaté de l'affaire.
     */
    public function setFormattedProjectLabel(?string $formattedProjectLabel): self
    {
        $this->initialized['formattedProjectLabel'] = true;
        $this->formattedProjectLabel = $formattedProjectLabel;

        return $this;
    }

    /**
     * Unité activité.
     */
    public function getActivityUnit(): ?string
    {
        return $this->activityUnit;
    }

    /**
     * Unité activité.
     */
    public function setActivityUnit(?string $activityUnit): self
    {
        $this->initialized['activityUnit'] = true;
        $this->activityUnit = $activityUnit;

        return $this;
    }

    /**
     * N° identifiant ligne d'affaire.
     */
    public function getLineOrderNumber(): ?int
    {
        return $this->lineOrderNumber;
    }

    /**
     * N° identifiant ligne d'affaire.
     */
    public function setLineOrderNumber(?int $lineOrderNumber): self
    {
        $this->initialized['lineOrderNumber'] = true;
        $this->lineOrderNumber = $lineOrderNumber;

        return $this;
    }
}
