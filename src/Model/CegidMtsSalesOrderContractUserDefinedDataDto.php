<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsSalesOrderContractUserDefinedDataDto
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
     * Table libre 1.
     *
     * @var string|null
     */
    protected $userDefinedTable1Code;
    /**
     * Table libre 2.
     *
     * @var string|null
     */
    protected $userDefinedTable2Code;
    /**
     * Table libre 3.
     *
     * @var string|null
     */
    protected $userDefinedTable3Code;

    /**
     * Table libre 1.
     */
    public function getUserDefinedTable1Code(): ?string
    {
        return $this->userDefinedTable1Code;
    }

    /**
     * Table libre 1.
     */
    public function setUserDefinedTable1Code(?string $userDefinedTable1Code): self
    {
        $this->initialized['userDefinedTable1Code'] = true;
        $this->userDefinedTable1Code = $userDefinedTable1Code;

        return $this;
    }

    /**
     * Table libre 2.
     */
    public function getUserDefinedTable2Code(): ?string
    {
        return $this->userDefinedTable2Code;
    }

    /**
     * Table libre 2.
     */
    public function setUserDefinedTable2Code(?string $userDefinedTable2Code): self
    {
        $this->initialized['userDefinedTable2Code'] = true;
        $this->userDefinedTable2Code = $userDefinedTable2Code;

        return $this;
    }

    /**
     * Table libre 3.
     */
    public function getUserDefinedTable3Code(): ?string
    {
        return $this->userDefinedTable3Code;
    }

    /**
     * Table libre 3.
     */
    public function setUserDefinedTable3Code(?string $userDefinedTable3Code): self
    {
        $this->initialized['userDefinedTable3Code'] = true;
        $this->userDefinedTable3Code = $userDefinedTable3Code;

        return $this;
    }
}
