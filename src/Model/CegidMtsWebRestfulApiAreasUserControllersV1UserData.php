<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsWebRestfulApiAreasUserControllersV1UserData
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
    protected $id;
    /**
     * @var string|null
     */
    protected $login;
    /**
     * @var string|null
     */
    protected $userName;
    /**
     * @var string|null
     */
    protected $domain;
    /**
     * @var string|null
     */
    protected $language;
    /**
     * @var string|null
     */
    protected $employeeId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(?string $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }

    public function setEmployeeId(?string $employeeId): self
    {
        $this->initialized['employeeId'] = true;
        $this->employeeId = $employeeId;

        return $this;
    }
}