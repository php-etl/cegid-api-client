<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsItemsItemDataDto
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
     * Origine du frais => Article ou Ligne d'affaire ou Affectation Article - Ressource.
     *
     * @var string|null
     */
    protected $origin;
    /**
     * Code de l'article.
     *
     * @var string|null
     */
    protected $itemCode;
    /**
     * Libellé de l'article.
     *
     * @var string|null
     */
    protected $itemCaption;
    /**
     * Mode de saisie.
     *
     * @var string|null
     */
    protected $inputType;
    /**
     * Mode de valorisation PR.
     *
     * @var string|null
     */
    protected $costEntryType;
    /**
     * Mode de valorisation PV.
     *
     * @var string|null
     */
    protected $sellingEntryType;
    /**
     * Numéro de ligne d'origine de l'article.
     *
     * @var int|null
     */
    protected $lineNumber;
    /**
     * TVA récupérable.
     *
     * @var bool|null
     */
    protected $isVatRecoverable;
    /**
     * Facturable.
     *
     * @var bool|null
     */
    protected $isBillable;
    /**
     * Unité d'activité.
     *
     * @var string|null
     */
    protected $activityUnit;
    /**
     * Libellé de l'unité de l'activité.
     *
     * @var string|null
     */
    protected $activiteUnitLabel;
    /**
     * Taux de la TVA.
     *
     * @var float|null
     */
    protected $vATRate;
    /**
     * Prix de vente.
     *
     * @var float|null
     */
    protected $sellingPrice;
    /**
     * Prix de revient.
     *
     * @var float|null
     */
    protected $costPrice;
    /**
     * Prix maximum.
     *
     * @var float|null
     */
    protected $maxCostPrice;
    /**
     * API de récupération de la liste des articles de type frais.
     *
     * @var string|null
     */
    protected $item;
    /**
     * Identifiant FDM.
     *
     * @var int|null
     */
    protected $identifier;

    /**
     * Origine du frais => Article ou Ligne d'affaire ou Affectation Article - Ressource.
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * Origine du frais => Article ou Ligne d'affaire ou Affectation Article - Ressource.
     */
    public function setOrigin(?string $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;

        return $this;
    }

    /**
     * Code de l'article.
     */
    public function getItemCode(): ?string
    {
        return $this->itemCode;
    }

    /**
     * Code de l'article.
     */
    public function setItemCode(?string $itemCode): self
    {
        $this->initialized['itemCode'] = true;
        $this->itemCode = $itemCode;

        return $this;
    }

    /**
     * Libellé de l'article.
     */
    public function getItemCaption(): ?string
    {
        return $this->itemCaption;
    }

    /**
     * Libellé de l'article.
     */
    public function setItemCaption(?string $itemCaption): self
    {
        $this->initialized['itemCaption'] = true;
        $this->itemCaption = $itemCaption;

        return $this;
    }

    /**
     * Mode de saisie.
     */
    public function getInputType(): ?string
    {
        return $this->inputType;
    }

    /**
     * Mode de saisie.
     */
    public function setInputType(?string $inputType): self
    {
        $this->initialized['inputType'] = true;
        $this->inputType = $inputType;

        return $this;
    }

    /**
     * Mode de valorisation PR.
     */
    public function getCostEntryType(): ?string
    {
        return $this->costEntryType;
    }

    /**
     * Mode de valorisation PR.
     */
    public function setCostEntryType(?string $costEntryType): self
    {
        $this->initialized['costEntryType'] = true;
        $this->costEntryType = $costEntryType;

        return $this;
    }

    /**
     * Mode de valorisation PV.
     */
    public function getSellingEntryType(): ?string
    {
        return $this->sellingEntryType;
    }

    /**
     * Mode de valorisation PV.
     */
    public function setSellingEntryType(?string $sellingEntryType): self
    {
        $this->initialized['sellingEntryType'] = true;
        $this->sellingEntryType = $sellingEntryType;

        return $this;
    }

    /**
     * Numéro de ligne d'origine de l'article.
     */
    public function getLineNumber(): ?int
    {
        return $this->lineNumber;
    }

    /**
     * Numéro de ligne d'origine de l'article.
     */
    public function setLineNumber(?int $lineNumber): self
    {
        $this->initialized['lineNumber'] = true;
        $this->lineNumber = $lineNumber;

        return $this;
    }

    /**
     * TVA récupérable.
     */
    public function getIsVatRecoverable(): ?bool
    {
        return $this->isVatRecoverable;
    }

    /**
     * TVA récupérable.
     */
    public function setIsVatRecoverable(?bool $isVatRecoverable): self
    {
        $this->initialized['isVatRecoverable'] = true;
        $this->isVatRecoverable = $isVatRecoverable;

        return $this;
    }

    /**
     * Facturable.
     */
    public function getIsBillable(): ?bool
    {
        return $this->isBillable;
    }

    /**
     * Facturable.
     */
    public function setIsBillable(?bool $isBillable): self
    {
        $this->initialized['isBillable'] = true;
        $this->isBillable = $isBillable;

        return $this;
    }

    /**
     * Unité d'activité.
     */
    public function getActivityUnit(): ?string
    {
        return $this->activityUnit;
    }

    /**
     * Unité d'activité.
     */
    public function setActivityUnit(?string $activityUnit): self
    {
        $this->initialized['activityUnit'] = true;
        $this->activityUnit = $activityUnit;

        return $this;
    }

    /**
     * Libellé de l'unité de l'activité.
     */
    public function getActiviteUnitLabel(): ?string
    {
        return $this->activiteUnitLabel;
    }

    /**
     * Libellé de l'unité de l'activité.
     */
    public function setActiviteUnitLabel(?string $activiteUnitLabel): self
    {
        $this->initialized['activiteUnitLabel'] = true;
        $this->activiteUnitLabel = $activiteUnitLabel;

        return $this;
    }

    /**
     * Taux de la TVA.
     */
    public function getVATRate(): ?float
    {
        return $this->vATRate;
    }

    /**
     * Taux de la TVA.
     */
    public function setVATRate(?float $vATRate): self
    {
        $this->initialized['vATRate'] = true;
        $this->vATRate = $vATRate;

        return $this;
    }

    /**
     * Prix de vente.
     */
    public function getSellingPrice(): ?float
    {
        return $this->sellingPrice;
    }

    /**
     * Prix de vente.
     */
    public function setSellingPrice(?float $sellingPrice): self
    {
        $this->initialized['sellingPrice'] = true;
        $this->sellingPrice = $sellingPrice;

        return $this;
    }

    /**
     * Prix de revient.
     */
    public function getCostPrice(): ?float
    {
        return $this->costPrice;
    }

    /**
     * Prix de revient.
     */
    public function setCostPrice(?float $costPrice): self
    {
        $this->initialized['costPrice'] = true;
        $this->costPrice = $costPrice;

        return $this;
    }

    /**
     * Prix maximum.
     */
    public function getMaxCostPrice(): ?float
    {
        return $this->maxCostPrice;
    }

    /**
     * Prix maximum.
     */
    public function setMaxCostPrice(?float $maxCostPrice): self
    {
        $this->initialized['maxCostPrice'] = true;
        $this->maxCostPrice = $maxCostPrice;

        return $this;
    }

    /**
     * API de récupération de la liste des articles de type frais.
     */
    public function getItem(): ?string
    {
        return $this->item;
    }

    /**
     * API de récupération de la liste des articles de type frais.
     */
    public function setItem(?string $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;

        return $this;
    }

    /**
     * Identifiant FDM.
     */
    public function getIdentifier(): ?int
    {
        return $this->identifier;
    }

    /**
     * Identifiant FDM.
     */
    public function setIdentifier(?int $identifier): self
    {
        $this->initialized['identifier'] = true;
        $this->identifier = $identifier;

        return $this;
    }
}