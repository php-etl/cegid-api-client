<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class MicrosoftODataCoreUriParserSemanticSingleValueNode
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
     * @var MicrosoftODataEdmIEdmTypeReference|null
     */
    protected $typeReference;
    /**
     * @var string|null
     */
    protected $kind;

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

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(?string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;

        return $this;
    }
}
