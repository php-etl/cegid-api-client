<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsThirdPartyOutstandingAccountingOutstandingAmountsDetail
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
     * Montant réglé non échu.
     *
     * @var float|null
     */
    protected $paidNotYetDue;
    /**
     * Montant échu non réglé.
     *
     * @var float|null
     */
    protected $dueNotYetPaid;

    /**
     * Montant réglé non échu.
     */
    public function getPaidNotYetDue(): ?float
    {
        return $this->paidNotYetDue;
    }

    /**
     * Montant réglé non échu.
     */
    public function setPaidNotYetDue(?float $paidNotYetDue): self
    {
        $this->initialized['paidNotYetDue'] = true;
        $this->paidNotYetDue = $paidNotYetDue;

        return $this;
    }

    /**
     * Montant échu non réglé.
     */
    public function getDueNotYetPaid(): ?float
    {
        return $this->dueNotYetPaid;
    }

    /**
     * Montant échu non réglé.
     */
    public function setDueNotYetPaid(?float $dueNotYetPaid): self
    {
        $this->initialized['dueNotYetPaid'] = true;
        $this->dueNotYetPaid = $dueNotYetPaid;

        return $this;
    }
}
