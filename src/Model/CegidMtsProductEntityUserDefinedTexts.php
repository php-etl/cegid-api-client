<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsProductEntityUserDefinedTexts
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
    protected $userDefinedText1;
    /**
     * @var string|null
     */
    protected $userDefinedText2;
    /**
     * @var string|null
     */
    protected $userDefinedText3;

    public function getUserDefinedText1(): ?string
    {
        return $this->userDefinedText1;
    }

    public function setUserDefinedText1(?string $userDefinedText1): self
    {
        $this->initialized['userDefinedText1'] = true;
        $this->userDefinedText1 = $userDefinedText1;

        return $this;
    }

    public function getUserDefinedText2(): ?string
    {
        return $this->userDefinedText2;
    }

    public function setUserDefinedText2(?string $userDefinedText2): self
    {
        $this->initialized['userDefinedText2'] = true;
        $this->userDefinedText2 = $userDefinedText2;

        return $this;
    }

    public function getUserDefinedText3(): ?string
    {
        return $this->userDefinedText3;
    }

    public function setUserDefinedText3(?string $userDefinedText3): self
    {
        $this->initialized['userDefinedText3'] = true;
        $this->userDefinedText3 = $userDefinedText3;

        return $this;
    }
}
