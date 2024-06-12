<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsSalesOrderSalesOrderKey
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
     * Nature.
     *
     * @var string|null
     */
    protected $documentType;
    /**
     * Souche.
     *
     * @var string|null
     */
    protected $documentStub;
    /**
     * Numéro.
     *
     * @var int|null
     */
    protected $number;
    /**
     * Indice.
     *
     * @var int|null
     */
    protected $index;

    /**
     * Nature.
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    /**
     * Nature.
     */
    public function setDocumentType(?string $documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * Souche.
     */
    public function getDocumentStub(): ?string
    {
        return $this->documentStub;
    }

    /**
     * Souche.
     */
    public function setDocumentStub(?string $documentStub): self
    {
        $this->initialized['documentStub'] = true;
        $this->documentStub = $documentStub;

        return $this;
    }

    /**
     * Numéro.
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Numéro.
     */
    public function setNumber(?int $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;

        return $this;
    }

    /**
     * Indice.
     */
    public function getIndex(): ?int
    {
        return $this->index;
    }

    /**
     * Indice.
     */
    public function setIndex(?int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }
}
