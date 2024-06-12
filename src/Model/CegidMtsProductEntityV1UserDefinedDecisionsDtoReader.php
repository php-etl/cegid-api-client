<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsProductEntityV1UserDefinedDecisionsDtoReader
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
     * @var bool|null
     */
    protected $userDefinedDecision1;
    /**
     * @var bool|null
     */
    protected $userDefinedDecision2;
    /**
     * @var bool|null
     */
    protected $userDefinedDecision3;

    public function getUserDefinedDecision1(): ?bool
    {
        return $this->userDefinedDecision1;
    }

    public function setUserDefinedDecision1(?bool $userDefinedDecision1): self
    {
        $this->initialized['userDefinedDecision1'] = true;
        $this->userDefinedDecision1 = $userDefinedDecision1;

        return $this;
    }

    public function getUserDefinedDecision2(): ?bool
    {
        return $this->userDefinedDecision2;
    }

    public function setUserDefinedDecision2(?bool $userDefinedDecision2): self
    {
        $this->initialized['userDefinedDecision2'] = true;
        $this->userDefinedDecision2 = $userDefinedDecision2;

        return $this;
    }

    public function getUserDefinedDecision3(): ?bool
    {
        return $this->userDefinedDecision3;
    }

    public function setUserDefinedDecision3(?bool $userDefinedDecision3): self
    {
        $this->initialized['userDefinedDecision3'] = true;
        $this->userDefinedDecision3 = $userDefinedDecision3;

        return $this;
    }
}
