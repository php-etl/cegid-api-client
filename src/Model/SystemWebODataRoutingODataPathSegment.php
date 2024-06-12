<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class SystemWebODataRoutingODataPathSegment
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
    protected $segmentKind;

    public function getSegmentKind(): ?string
    {
        return $this->segmentKind;
    }

    public function setSegmentKind(?string $segmentKind): self
    {
        $this->initialized['segmentKind'] = true;
        $this->segmentKind = $segmentKind;

        return $this;
    }
}
