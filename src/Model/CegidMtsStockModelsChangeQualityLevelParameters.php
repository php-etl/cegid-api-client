<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsStockModelsChangeQualityLevelParameters
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
     * Dépôt.
     *
     * @var string|null
     */
    protected $warehouse;
    /**
     * Article.
     *
     * @var string|null
     */
    protected $product;
    /**
     * Choix qualité de départ.
     *
     * @var string|null
     */
    protected $originQualityLevel;
    /**
     * Liste des détails de stock à modifier (Clé de détail + Quantité).
     *
     * @var list<CegidMtsStockModelsChangeQualityLevelRowParameters>|null
     */
    protected $movements;
    /**
     * Choix qualité d'arrivée.
     *
     * @var string|null
     */
    protected $destQualityLevel;
    /**
     * Bloc-note.
     *
     * @var string|null
     */
    protected $notepad;

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
     * Choix qualité de départ.
     */
    public function getOriginQualityLevel(): ?string
    {
        return $this->originQualityLevel;
    }

    /**
     * Choix qualité de départ.
     */
    public function setOriginQualityLevel(?string $originQualityLevel): self
    {
        $this->initialized['originQualityLevel'] = true;
        $this->originQualityLevel = $originQualityLevel;

        return $this;
    }

    /**
     * Liste des détails de stock à modifier (Clé de détail + Quantité).
     *
     * @return list<CegidMtsStockModelsChangeQualityLevelRowParameters>|null
     */
    public function getMovements(): ?array
    {
        return $this->movements;
    }

    /**
     * Liste des détails de stock à modifier (Clé de détail + Quantité).
     *
     * @param list<CegidMtsStockModelsChangeQualityLevelRowParameters>|null $movements
     */
    public function setMovements(?array $movements): self
    {
        $this->initialized['movements'] = true;
        $this->movements = $movements;

        return $this;
    }

    /**
     * Choix qualité d'arrivée.
     */
    public function getDestQualityLevel(): ?string
    {
        return $this->destQualityLevel;
    }

    /**
     * Choix qualité d'arrivée.
     */
    public function setDestQualityLevel(?string $destQualityLevel): self
    {
        $this->initialized['destQualityLevel'] = true;
        $this->destQualityLevel = $destQualityLevel;

        return $this;
    }

    /**
     * Bloc-note.
     */
    public function getNotepad(): ?string
    {
        return $this->notepad;
    }

    /**
     * Bloc-note.
     */
    public function setNotepad(?string $notepad): self
    {
        $this->initialized['notepad'] = true;
        $this->notepad = $notepad;

        return $this;
    }
}
