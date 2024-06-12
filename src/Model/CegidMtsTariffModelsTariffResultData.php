<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsTariffModelsTariffResultData
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
     * Code de la composante de profil.
     *
     * @var string|null
     */
    protected $profileComponent;
    /**
     * Montant du forfait.
     *
     * @var float|null
     */
    protected $fixedPrice;
    /**
     * @var float|null
     */
    protected $launchCost;
    /**
     * Cumul des remises.
     *
     * @var float|null
     */
    protected $rebateAmount;
    /**
     * Prix Brut.
     *
     * @var float|null
     */
    protected $grossPrice;
    /**
     * Remise 1.
     *
     * @var float|null
     */
    protected $rebate1;
    /**
     * Remise 2.
     *
     * @var float|null
     */
    protected $rebate2;
    /**
     * Remise 3.
     *
     * @var float|null
     */
    protected $rebate3;
    /**
     * Prix Net.
     *
     * @var float|null
     */
    protected $netPrice;
    /**
     * Montant de la composante de profil.
     *
     * @var float|null
     */
    protected $amountComponent;

    /**
     * Code de la composante de profil.
     */
    public function getProfileComponent(): ?string
    {
        return $this->profileComponent;
    }

    /**
     * Code de la composante de profil.
     */
    public function setProfileComponent(?string $profileComponent): self
    {
        $this->initialized['profileComponent'] = true;
        $this->profileComponent = $profileComponent;

        return $this;
    }

    /**
     * Montant du forfait.
     */
    public function getFixedPrice(): ?float
    {
        return $this->fixedPrice;
    }

    /**
     * Montant du forfait.
     */
    public function setFixedPrice(?float $fixedPrice): self
    {
        $this->initialized['fixedPrice'] = true;
        $this->fixedPrice = $fixedPrice;

        return $this;
    }

    public function getLaunchCost(): ?float
    {
        return $this->launchCost;
    }

    public function setLaunchCost(?float $launchCost): self
    {
        $this->initialized['launchCost'] = true;
        $this->launchCost = $launchCost;

        return $this;
    }

    /**
     * Cumul des remises.
     */
    public function getRebateAmount(): ?float
    {
        return $this->rebateAmount;
    }

    /**
     * Cumul des remises.
     */
    public function setRebateAmount(?float $rebateAmount): self
    {
        $this->initialized['rebateAmount'] = true;
        $this->rebateAmount = $rebateAmount;

        return $this;
    }

    /**
     * Prix Brut.
     */
    public function getGrossPrice(): ?float
    {
        return $this->grossPrice;
    }

    /**
     * Prix Brut.
     */
    public function setGrossPrice(?float $grossPrice): self
    {
        $this->initialized['grossPrice'] = true;
        $this->grossPrice = $grossPrice;

        return $this;
    }

    /**
     * Remise 1.
     */
    public function getRebate1(): ?float
    {
        return $this->rebate1;
    }

    /**
     * Remise 1.
     */
    public function setRebate1(?float $rebate1): self
    {
        $this->initialized['rebate1'] = true;
        $this->rebate1 = $rebate1;

        return $this;
    }

    /**
     * Remise 2.
     */
    public function getRebate2(): ?float
    {
        return $this->rebate2;
    }

    /**
     * Remise 2.
     */
    public function setRebate2(?float $rebate2): self
    {
        $this->initialized['rebate2'] = true;
        $this->rebate2 = $rebate2;

        return $this;
    }

    /**
     * Remise 3.
     */
    public function getRebate3(): ?float
    {
        return $this->rebate3;
    }

    /**
     * Remise 3.
     */
    public function setRebate3(?float $rebate3): self
    {
        $this->initialized['rebate3'] = true;
        $this->rebate3 = $rebate3;

        return $this;
    }

    /**
     * Prix Net.
     */
    public function getNetPrice(): ?float
    {
        return $this->netPrice;
    }

    /**
     * Prix Net.
     */
    public function setNetPrice(?float $netPrice): self
    {
        $this->initialized['netPrice'] = true;
        $this->netPrice = $netPrice;

        return $this;
    }

    /**
     * Montant de la composante de profil.
     */
    public function getAmountComponent(): ?float
    {
        return $this->amountComponent;
    }

    /**
     * Montant de la composante de profil.
     */
    public function setAmountComponent(?float $amountComponent): self
    {
        $this->initialized['amountComponent'] = true;
        $this->amountComponent = $amountComponent;

        return $this;
    }
}