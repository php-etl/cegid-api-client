<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsSalesOrderSalesOrderDtoReader
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
     * Nature.
     *
     * @var string|null
     */
    protected $documentType;
    /**
     * Souche.
     *
     * @var string|null
     */
    protected $documentStub;
    /**
     * Numéro.
     *
     * @var int|null
     */
    protected $number;
    /**
     * Indice.
     *
     * @var int|null
     */
    protected $index;
    /**
     * Etat de la commande ('001' : Commandé, '002' : Préparé, '003' : Livré, '004' : Facturé).
     *
     * @var string|null
     */
    protected $state;
    /**
     * Code client.
     *
     * @var string|null
     */
    protected $customerCode;
    /**
     * Nom (ou raison sociale) du client.
     *
     * @var string|null
     */
    protected $customerName;
    /**
     * Date.
     *
     * @var \DateTime|null
     */
    protected $documentDate;
    /**
     * Total TTC devise.
     *
     * @var float|null
     */
    protected $totalTaxIncludedInCurrency;
    /**
     * Total HT devise.
     *
     * @var float|null
     */
    protected $totalTaxExcludedInCurrency;
    /**
     * Devise.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * Libellé devise.
     *
     * @var string|null
     */
    protected $currencyLabel;
    /**
     * Conditions  spéciales tarification.
     *
     * @var string|null
     */
    protected $termsOfSpecialPrice;
    /**
     * Code mode de règlement.
     *
     * @var string|null
     */
    protected $paymentMethodCode;
    /**
     * Mode de règlement.
     *
     * @var string|null
     */
    protected $paymentMethodLabel;
    /**
     * Bloc-notes.
     *
     * @var string|null
     */
    protected $notePad;
    /**
     * Code régime fiscal.
     *
     * @var string|null
     */
    protected $taxSystemCode;
    /**
     * Libellé régime fiscal.
     *
     * @var string|null
     */
    protected $taxSystemLabel;
    /**
     * Remise pied (%).
     *
     * @var float|null
     */
    protected $footerRebatePercent;
    /**
     * Escompte pied  (%).
     *
     * @var float|null
     */
    protected $footerDiscountPercent;
    /**
     * Total remise en devise.
     *
     * @var float|null
     */
    protected $footerRebateAmountInCurrency;
    /**
     * Total escompte en devise.
     *
     * @var float|null
     */
    protected $footerDiscountAmountInCurrency;
    /**
     * Montant de TVA en devise.
     *
     * @var float|null
     */
    protected $salesTaxeAmountInCurrency;
    /**
     * Frais de port.
     *
     * @var float|null
     */
    protected $taxIncludedShippingCosts;
    /**
     * @var CegidMtsSalesOrderAddressDto|null
     */
    protected $deliveryAddress;
    /**
     * @var CegidMtsSalesOrderAddressDto|null
     */
    protected $bilingAddress;
    /**
     * @var CegidMtsSalesOrderUserDefinedDataDto|null
     */
    protected $thirdPartyUserDefinedData;
    /**
     * @var CegidMtsSalesOrderDocumentUserDefinedDataDto|null
     */
    protected $documentUserDefinedData;
    /**
     * @var CegidMtsSalesOrderContractUserDefinedDataDto|null
     */
    protected $contractUserDefinedData;
    /**
     * @var CegidMtsSalesOrderDocumentAdditionalInformationDto|null
     */
    protected $additionalInformation;

    /**
     * Nature.
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    /**
     * Nature.
     */
    public function setDocumentType(?string $documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * Souche.
     */
    public function getDocumentStub(): ?string
    {
        return $this->documentStub;
    }

    /**
     * Souche.
     */
    public function setDocumentStub(?string $documentStub): self
    {
        $this->initialized['documentStub'] = true;
        $this->documentStub = $documentStub;

        return $this;
    }

    /**
     * Numéro.
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Numéro.
     */
    public function setNumber(?int $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;

        return $this;
    }

    /**
     * Indice.
     */
    public function getIndex(): ?int
    {
        return $this->index;
    }

    /**
     * Indice.
     */
    public function setIndex(?int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }

    /**
     * Etat de la commande ('001' : Commandé, '002' : Préparé, '003' : Livré, '004' : Facturé).
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Etat de la commande ('001' : Commandé, '002' : Préparé, '003' : Livré, '004' : Facturé).
     */
    public function setState(?string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    /**
     * Code client.
     */
    public function getCustomerCode(): ?string
    {
        return $this->customerCode;
    }

    /**
     * Code client.
     */
    public function setCustomerCode(?string $customerCode): self
    {
        $this->initialized['customerCode'] = true;
        $this->customerCode = $customerCode;

        return $this;
    }

    /**
     * Nom (ou raison sociale) du client.
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * Nom (ou raison sociale) du client.
     */
    public function setCustomerName(?string $customerName): self
    {
        $this->initialized['customerName'] = true;
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Date.
     */
    public function getDocumentDate(): ?\DateTime
    {
        return $this->documentDate;
    }

    /**
     * Date.
     */
    public function setDocumentDate(?\DateTime $documentDate): self
    {
        $this->initialized['documentDate'] = true;
        $this->documentDate = $documentDate;

        return $this;
    }

    /**
     * Total TTC devise.
     */
    public function getTotalTaxIncludedInCurrency(): ?float
    {
        return $this->totalTaxIncludedInCurrency;
    }

    /**
     * Total TTC devise.
     */
    public function setTotalTaxIncludedInCurrency(?float $totalTaxIncludedInCurrency): self
    {
        $this->initialized['totalTaxIncludedInCurrency'] = true;
        $this->totalTaxIncludedInCurrency = $totalTaxIncludedInCurrency;

        return $this;
    }

    /**
     * Total HT devise.
     */
    public function getTotalTaxExcludedInCurrency(): ?float
    {
        return $this->totalTaxExcludedInCurrency;
    }

    /**
     * Total HT devise.
     */
    public function setTotalTaxExcludedInCurrency(?float $totalTaxExcludedInCurrency): self
    {
        $this->initialized['totalTaxExcludedInCurrency'] = true;
        $this->totalTaxExcludedInCurrency = $totalTaxExcludedInCurrency;

        return $this;
    }

    /**
     * Devise.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Devise.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * Libellé devise.
     */
    public function getCurrencyLabel(): ?string
    {
        return $this->currencyLabel;
    }

    /**
     * Libellé devise.
     */
    public function setCurrencyLabel(?string $currencyLabel): self
    {
        $this->initialized['currencyLabel'] = true;
        $this->currencyLabel = $currencyLabel;

        return $this;
    }

    /**
     * Conditions  spéciales tarification.
     */
    public function getTermsOfSpecialPrice(): ?string
    {
        return $this->termsOfSpecialPrice;
    }

    /**
     * Conditions  spéciales tarification.
     */
    public function setTermsOfSpecialPrice(?string $termsOfSpecialPrice): self
    {
        $this->initialized['termsOfSpecialPrice'] = true;
        $this->termsOfSpecialPrice = $termsOfSpecialPrice;

        return $this;
    }

    /**
     * Code mode de règlement.
     */
    public function getPaymentMethodCode(): ?string
    {
        return $this->paymentMethodCode;
    }

    /**
     * Code mode de règlement.
     */
    public function setPaymentMethodCode(?string $paymentMethodCode): self
    {
        $this->initialized['paymentMethodCode'] = true;
        $this->paymentMethodCode = $paymentMethodCode;

        return $this;
    }

    /**
     * Mode de règlement.
     */
    public function getPaymentMethodLabel(): ?string
    {
        return $this->paymentMethodLabel;
    }

    /**
     * Mode de règlement.
     */
    public function setPaymentMethodLabel(?string $paymentMethodLabel): self
    {
        $this->initialized['paymentMethodLabel'] = true;
        $this->paymentMethodLabel = $paymentMethodLabel;

        return $this;
    }

    /**
     * Bloc-notes.
     */
    public function getNotePad(): ?string
    {
        return $this->notePad;
    }

    /**
     * Bloc-notes.
     */
    public function setNotePad(?string $notePad): self
    {
        $this->initialized['notePad'] = true;
        $this->notePad = $notePad;

        return $this;
    }

    /**
     * Code régime fiscal.
     */
    public function getTaxSystemCode(): ?string
    {
        return $this->taxSystemCode;
    }

    /**
     * Code régime fiscal.
     */
    public function setTaxSystemCode(?string $taxSystemCode): self
    {
        $this->initialized['taxSystemCode'] = true;
        $this->taxSystemCode = $taxSystemCode;

        return $this;
    }

    /**
     * Libellé régime fiscal.
     */
    public function getTaxSystemLabel(): ?string
    {
        return $this->taxSystemLabel;
    }

    /**
     * Libellé régime fiscal.
     */
    public function setTaxSystemLabel(?string $taxSystemLabel): self
    {
        $this->initialized['taxSystemLabel'] = true;
        $this->taxSystemLabel = $taxSystemLabel;

        return $this;
    }

    /**
     * Remise pied (%).
     */
    public function getFooterRebatePercent(): ?float
    {
        return $this->footerRebatePercent;
    }

    /**
     * Remise pied (%).
     */
    public function setFooterRebatePercent(?float $footerRebatePercent): self
    {
        $this->initialized['footerRebatePercent'] = true;
        $this->footerRebatePercent = $footerRebatePercent;

        return $this;
    }

    /**
     * Escompte pied  (%).
     */
    public function getFooterDiscountPercent(): ?float
    {
        return $this->footerDiscountPercent;
    }

    /**
     * Escompte pied  (%).
     */
    public function setFooterDiscountPercent(?float $footerDiscountPercent): self
    {
        $this->initialized['footerDiscountPercent'] = true;
        $this->footerDiscountPercent = $footerDiscountPercent;

        return $this;
    }

    /**
     * Total remise en devise.
     */
    public function getFooterRebateAmountInCurrency(): ?float
    {
        return $this->footerRebateAmountInCurrency;
    }

    /**
     * Total remise en devise.
     */
    public function setFooterRebateAmountInCurrency(?float $footerRebateAmountInCurrency): self
    {
        $this->initialized['footerRebateAmountInCurrency'] = true;
        $this->footerRebateAmountInCurrency = $footerRebateAmountInCurrency;

        return $this;
    }

    /**
     * Total escompte en devise.
     */
    public function getFooterDiscountAmountInCurrency(): ?float
    {
        return $this->footerDiscountAmountInCurrency;
    }

    /**
     * Total escompte en devise.
     */
    public function setFooterDiscountAmountInCurrency(?float $footerDiscountAmountInCurrency): self
    {
        $this->initialized['footerDiscountAmountInCurrency'] = true;
        $this->footerDiscountAmountInCurrency = $footerDiscountAmountInCurrency;

        return $this;
    }

    /**
     * Montant de TVA en devise.
     */
    public function getSalesTaxeAmountInCurrency(): ?float
    {
        return $this->salesTaxeAmountInCurrency;
    }

    /**
     * Montant de TVA en devise.
     */
    public function setSalesTaxeAmountInCurrency(?float $salesTaxeAmountInCurrency): self
    {
        $this->initialized['salesTaxeAmountInCurrency'] = true;
        $this->salesTaxeAmountInCurrency = $salesTaxeAmountInCurrency;

        return $this;
    }

    /**
     * Frais de port.
     */
    public function getTaxIncludedShippingCosts(): ?float
    {
        return $this->taxIncludedShippingCosts;
    }

    /**
     * Frais de port.
     */
    public function setTaxIncludedShippingCosts(?float $taxIncludedShippingCosts): self
    {
        $this->initialized['taxIncludedShippingCosts'] = true;
        $this->taxIncludedShippingCosts = $taxIncludedShippingCosts;

        return $this;
    }

    public function getDeliveryAddress(): ?CegidMtsSalesOrderAddressDto
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?CegidMtsSalesOrderAddressDto $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getBilingAddress(): ?CegidMtsSalesOrderAddressDto
    {
        return $this->bilingAddress;
    }

    public function setBilingAddress(?CegidMtsSalesOrderAddressDto $bilingAddress): self
    {
        $this->initialized['bilingAddress'] = true;
        $this->bilingAddress = $bilingAddress;

        return $this;
    }

    public function getThirdPartyUserDefinedData(): ?CegidMtsSalesOrderUserDefinedDataDto
    {
        return $this->thirdPartyUserDefinedData;
    }

    public function setThirdPartyUserDefinedData(?CegidMtsSalesOrderUserDefinedDataDto $thirdPartyUserDefinedData): self
    {
        $this->initialized['thirdPartyUserDefinedData'] = true;
        $this->thirdPartyUserDefinedData = $thirdPartyUserDefinedData;

        return $this;
    }

    public function getDocumentUserDefinedData(): ?CegidMtsSalesOrderDocumentUserDefinedDataDto
    {
        return $this->documentUserDefinedData;
    }

    public function setDocumentUserDefinedData(?CegidMtsSalesOrderDocumentUserDefinedDataDto $documentUserDefinedData): self
    {
        $this->initialized['documentUserDefinedData'] = true;
        $this->documentUserDefinedData = $documentUserDefinedData;

        return $this;
    }

    public function getContractUserDefinedData(): ?CegidMtsSalesOrderContractUserDefinedDataDto
    {
        return $this->contractUserDefinedData;
    }

    public function setContractUserDefinedData(?CegidMtsSalesOrderContractUserDefinedDataDto $contractUserDefinedData): self
    {
        $this->initialized['contractUserDefinedData'] = true;
        $this->contractUserDefinedData = $contractUserDefinedData;

        return $this;
    }

    public function getAdditionalInformation(): ?CegidMtsSalesOrderDocumentAdditionalInformationDto
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?CegidMtsSalesOrderDocumentAdditionalInformationDto $additionalInformation): self
    {
        $this->initialized['additionalInformation'] = true;
        $this->additionalInformation = $additionalInformation;

        return $this;
    }
}