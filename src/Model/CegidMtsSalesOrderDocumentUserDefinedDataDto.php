<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsSalesOrderDocumentUserDefinedDataDto
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
     * Date libre 1.
     *
     * @var \DateTime|null
     */
    protected $userDefinedDate1;
    /**
     * Date libre 2.
     *
     * @var \DateTime|null
     */
    protected $userDefinedDate2;
    /**
     * Date libre 3.
     *
     * @var \DateTime|null
     */
    protected $userDefinedDate3;

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

    /**
     * Date libre 1.
     */
    public function getUserDefinedDate1(): ?\DateTime
    {
        return $this->userDefinedDate1;
    }

    /**
     * Date libre 1.
     */
    public function setUserDefinedDate1(?\DateTime $userDefinedDate1): self
    {
        $this->initialized['userDefinedDate1'] = true;
        $this->userDefinedDate1 = $userDefinedDate1;

        return $this;
    }

    /**
     * Date libre 2.
     */
    public function getUserDefinedDate2(): ?\DateTime
    {
        return $this->userDefinedDate2;
    }

    /**
     * Date libre 2.
     */
    public function setUserDefinedDate2(?\DateTime $userDefinedDate2): self
    {
        $this->initialized['userDefinedDate2'] = true;
        $this->userDefinedDate2 = $userDefinedDate2;

        return $this;
    }

    /**
     * Date libre 3.
     */
    public function getUserDefinedDate3(): ?\DateTime
    {
        return $this->userDefinedDate3;
    }

    /**
     * Date libre 3.
     */
    public function setUserDefinedDate3(?\DateTime $userDefinedDate3): self
    {
        $this->initialized['userDefinedDate3'] = true;
        $this->userDefinedDate3 = $userDefinedDate3;

        return $this;
    }
}
