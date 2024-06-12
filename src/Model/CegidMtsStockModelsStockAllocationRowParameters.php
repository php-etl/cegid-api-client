<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsStockModelsStockAllocationRowParameters
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
     * @var CegidMtsStockModelsStockAllocationStockDetailKey|null
     */
    protected $stockDetailKey;
    /**
     * Quantité (Unité de stock).
     *
     * @var float|null
     */
    protected $quantity;

    public function getStockDetailKey(): ?CegidMtsStockModelsStockAllocationStockDetailKey
    {
        return $this->stockDetailKey;
    }

    public function setStockDetailKey(?CegidMtsStockModelsStockAllocationStockDetailKey $stockDetailKey): self
    {
        $this->initialized['stockDetailKey'] = true;
        $this->stockDetailKey = $stockDetailKey;

        return $this;
    }

    /**
     * Quantité (Unité de stock).
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * Quantité (Unité de stock).
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }
}
