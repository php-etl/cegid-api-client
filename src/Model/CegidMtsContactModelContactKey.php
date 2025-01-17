<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsContactModelContactKey
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
     * N° du contact.
     *
     * @var int|null
     */
    protected $contactNumber;
    /**
     * Code de l'entité contact (code du tiers, code du commercial, code de l'établissement, code du dépôt).
     *
     * @var string|null
     */
    protected $referenceCode;
    /**
     * Type de contact.
     *
     * @var string|null
     */
    protected $contactType;

    /**
     * N° du contact.
     */
    public function getContactNumber(): ?int
    {
        return $this->contactNumber;
    }

    /**
     * N° du contact.
     */
    public function setContactNumber(?int $contactNumber): self
    {
        $this->initialized['contactNumber'] = true;
        $this->contactNumber = $contactNumber;

        return $this;
    }

    /**
     * Code de l'entité contact (code du tiers, code du commercial, code de l'établissement, code du dépôt).
     */
    public function getReferenceCode(): ?string
    {
        return $this->referenceCode;
    }

    /**
     * Code de l'entité contact (code du tiers, code du commercial, code de l'établissement, code du dépôt).
     */
    public function setReferenceCode(?string $referenceCode): self
    {
        $this->initialized['referenceCode'] = true;
        $this->referenceCode = $referenceCode;

        return $this;
    }

    /**
     * Type de contact.
     */
    public function getContactType(): ?string
    {
        return $this->contactType;
    }

    /**
     * Type de contact.
     */
    public function setContactType(?string $contactType): self
    {
        $this->initialized['contactType'] = true;
        $this->contactType = $contactType;

        return $this;
    }
}
