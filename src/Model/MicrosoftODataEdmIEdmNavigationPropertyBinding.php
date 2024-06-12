<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class MicrosoftODataEdmIEdmNavigationPropertyBinding
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
     * @var MicrosoftODataEdmIEdmNavigationProperty|null
     */
    protected $navigationProperty;
    /**
     * @var MicrosoftODataEdmIEdmNavigationSource|null
     */
    protected $target;

    public function getNavigationProperty(): ?MicrosoftODataEdmIEdmNavigationProperty
    {
        return $this->navigationProperty;
    }

    public function setNavigationProperty(?MicrosoftODataEdmIEdmNavigationProperty $navigationProperty): self
    {
        $this->initialized['navigationProperty'] = true;
        $this->navigationProperty = $navigationProperty;

        return $this;
    }

    public function getTarget(): ?MicrosoftODataEdmIEdmNavigationSource
    {
        return $this->target;
    }

    public function setTarget(?MicrosoftODataEdmIEdmNavigationSource $target): self
    {
        $this->initialized['target'] = true;
        $this->target = $target;

        return $this;
    }
}