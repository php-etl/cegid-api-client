<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsActivityActivityKey
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
    protected $activityType;
    /**
     * @var string|null
     */
    protected $project;
    /**
     * @var int|null
     */
    protected $singleLineNumber;

    public function getActivityType(): ?string
    {
        return $this->activityType;
    }

    public function setActivityType(?string $activityType): self
    {
        $this->initialized['activityType'] = true;
        $this->activityType = $activityType;

        return $this;
    }

    public function getProject(): ?string
    {
        return $this->project;
    }

    public function setProject(?string $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }

    public function getSingleLineNumber(): ?int
    {
        return $this->singleLineNumber;
    }

    public function setSingleLineNumber(?int $singleLineNumber): self
    {
        $this->initialized['singleLineNumber'] = true;
        $this->singleLineNumber = $singleLineNumber;

        return $this;
    }
}