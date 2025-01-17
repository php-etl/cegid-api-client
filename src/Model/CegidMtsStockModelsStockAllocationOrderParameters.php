<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsStockModelsStockAllocationOrderParameters
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
     * @var list<CegidMtsStockModelsStockAllocationRowOrderParameters>|null
     */
    protected $movements;

    /**
     * @return list<CegidMtsStockModelsStockAllocationRowOrderParameters>|null
     */
    public function getMovements(): ?array
    {
        return $this->movements;
    }

    /**
     * @param list<CegidMtsStockModelsStockAllocationRowOrderParameters>|null $movements
     */
    public function setMovements(?array $movements): self
    {
        $this->initialized['movements'] = true;
        $this->movements = $movements;

        return $this;
    }
}
