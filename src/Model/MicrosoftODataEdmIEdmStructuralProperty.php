<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class MicrosoftODataEdmIEdmStructuralProperty
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
    protected $defaultValueString;
    /**
     * @var string|null
     */
    protected $concurrencyMode;
    /**
     * @var string|null
     */
    protected $propertyKind;
    /**
     * @var MicrosoftODataEdmIEdmTypeReference|null
     */
    protected $type;
    /**
     * @var MicrosoftODataEdmIEdmStructuredType|null
     */
    protected $declaringType;
    /**
     * @var string|null
     */
    protected $name;

    public function getDefaultValueString(): ?string
    {
        return $this->defaultValueString;
    }

    public function setDefaultValueString(?string $defaultValueString): self
    {
        $this->initialized['defaultValueString'] = true;
        $this->defaultValueString = $defaultValueString;

        return $this;
    }

    public function getConcurrencyMode(): ?string
    {
        return $this->concurrencyMode;
    }

    public function setConcurrencyMode(?string $concurrencyMode): self
    {
        $this->initialized['concurrencyMode'] = true;
        $this->concurrencyMode = $concurrencyMode;

        return $this;
    }

    public function getPropertyKind(): ?string
    {
        return $this->propertyKind;
    }

    public function setPropertyKind(?string $propertyKind): self
    {
        $this->initialized['propertyKind'] = true;
        $this->propertyKind = $propertyKind;

        return $this;
    }

    public function getType(): ?MicrosoftODataEdmIEdmTypeReference
    {
        return $this->type;
    }

    public function setType(?MicrosoftODataEdmIEdmTypeReference $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getDeclaringType(): ?MicrosoftODataEdmIEdmStructuredType
    {
        return $this->declaringType;
    }

    public function setDeclaringType(?MicrosoftODataEdmIEdmStructuredType $declaringType): self
    {
        $this->initialized['declaringType'] = true;
        $this->declaringType = $declaringType;

        return $this;
    }

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
}