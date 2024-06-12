<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsStockModelsManualMovementStockDetailKey
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
     * Article.
     *
     * @var string|null
     */
    protected $product;
    /**
     * Dépôt.
     *
     * @var string|null
     */
    protected $warehouse;
    /**
     * Statut de disponibilité.
     *
     * @var string|null
     */
    protected $availabilityStatus;
    /**
     * Statut de flux.
     *
     * @var string|null
     */
    protected $fluxStatus;
    /**
     * Emplacement.
     *
     * @var string|null
     */
    protected $location;
    /**
     * Lot interne.
     *
     * @var string|null
     */
    protected $internalBatchNumber;
    /**
     * Série interne.
     *
     * @var string|null
     */
    protected $internalSerialNumber;
    /**
     * Indice article.
     *
     * @var string|null
     */
    protected $productIndex;
    /**
     * Marque.
     *
     * @var string|null
     */
    protected $brand;
    /**
     * Choix qualité.
     *
     * @var string|null
     */
    protected $qualityLevel;
    /**
     * Référence affectation.
     *
     * @var string|null
     */
    protected $allocationReference;

    /**
     * Article.
     */
    public function getProduct(): ?string
    {
        return $this->product;
    }

    /**
     * Article.
     */
    public function setProduct(?string $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    /**
     * Dépôt.
     */
    public function getWarehouse(): ?string
    {
        return $this->warehouse;
    }

    /**
     * Dépôt.
     */
    public function setWarehouse(?string $warehouse): self
    {
        $this->initialized['warehouse'] = true;
        $this->warehouse = $warehouse;

        return $this;
    }

    /**
     * Statut de disponibilité.
     */
    public function getAvailabilityStatus(): ?string
    {
        return $this->availabilityStatus;
    }

    /**
     * Statut de disponibilité.
     */
    public function setAvailabilityStatus(?string $availabilityStatus): self
    {
        $this->initialized['availabilityStatus'] = true;
        $this->availabilityStatus = $availabilityStatus;

        return $this;
    }

    /**
     * Statut de flux.
     */
    public function getFluxStatus(): ?string
    {
        return $this->fluxStatus;
    }

    /**
     * Statut de flux.
     */
    public function setFluxStatus(?string $fluxStatus): self
    {
        $this->initialized['fluxStatus'] = true;
        $this->fluxStatus = $fluxStatus;

        return $this;
    }

    /**
     * Emplacement.
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * Emplacement.
     */
    public function setLocation(?string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    /**
     * Lot interne.
     */
    public function getInternalBatchNumber(): ?string
    {
        return $this->internalBatchNumber;
    }

    /**
     * Lot interne.
     */
    public function setInternalBatchNumber(?string $internalBatchNumber): self
    {
        $this->initialized['internalBatchNumber'] = true;
        $this->internalBatchNumber = $internalBatchNumber;

        return $this;
    }

    /**
     * Série interne.
     */
    public function getInternalSerialNumber(): ?string
    {
        return $this->internalSerialNumber;
    }

    /**
     * Série interne.
     */
    public function setInternalSerialNumber(?string $internalSerialNumber): self
    {
        $this->initialized['internalSerialNumber'] = true;
        $this->internalSerialNumber = $internalSerialNumber;

        return $this;
    }

    /**
     * Indice article.
     */
    public function getProductIndex(): ?string
    {
        return $this->productIndex;
    }

    /**
     * Indice article.
     */
    public function setProductIndex(?string $productIndex): self
    {
        $this->initialized['productIndex'] = true;
        $this->productIndex = $productIndex;

        return $this;
    }

    /**
     * Marque.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Marque.
     */
    public function setBrand(?string $brand): self
    {
        $this->initialized['brand'] = true;
        $this->brand = $brand;

        return $this;
    }

    /**
     * Choix qualité.
     */
    public function getQualityLevel(): ?string
    {
        return $this->qualityLevel;
    }

    /**
     * Choix qualité.
     */
    public function setQualityLevel(?string $qualityLevel): self
    {
        $this->initialized['qualityLevel'] = true;
        $this->qualityLevel = $qualityLevel;

        return $this;
    }

    /**
     * Référence affectation.
     */
    public function getAllocationReference(): ?string
    {
        return $this->allocationReference;
    }

    /**
     * Référence affectation.
     */
    public function setAllocationReference(?string $allocationReference): self
    {
        $this->initialized['allocationReference'] = true;
        $this->allocationReference = $allocationReference;

        return $this;
    }
}
