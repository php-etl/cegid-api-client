<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class MicrosoftODataEdmIEdmReferentialConstraint
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
     * @var list<MicrosoftODataEdmEdmReferentialConstraintPropertyPair>|null
     */
    protected $propertyPairs;

    /**
     * @return list<MicrosoftODataEdmEdmReferentialConstraintPropertyPair>|null
     */
    public function getPropertyPairs(): ?array
    {
        return $this->propertyPairs;
    }

    /**
     * @param list<MicrosoftODataEdmEdmReferentialConstraintPropertyPair>|null $propertyPairs
     */
    public function setPropertyPairs(?array $propertyPairs): self
    {
        $this->initialized['propertyPairs'] = true;
        $this->propertyPairs = $propertyPairs;

        return $this;
    }
}