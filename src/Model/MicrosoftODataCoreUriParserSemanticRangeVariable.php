<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class MicrosoftODataCoreUriParserSemanticRangeVariable
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
     * @var string|null
     */
    protected $name;
    /**
     * @var MicrosoftODataEdmIEdmTypeReference|null
     */
    protected $typeReference;
    /**
     * @var int|null
     */
    protected $kind;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getTypeReference(): ?MicrosoftODataEdmIEdmTypeReference
    {
        return $this->typeReference;
    }

    public function setTypeReference(?MicrosoftODataEdmIEdmTypeReference $typeReference): self
    {
        $this->initialized['typeReference'] = true;
        $this->typeReference = $typeReference;

        return $this;
    }

    public function getKind(): ?int
    {
        return $this->kind;
    }

    public function setKind(?int $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;

        return $this;
    }
}
