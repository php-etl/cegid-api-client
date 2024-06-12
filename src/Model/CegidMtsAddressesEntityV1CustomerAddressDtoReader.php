<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsAddressesEntityV1CustomerAddressDtoReader
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
     * Type adresse.
     *
     * @var string|null
     */
    protected $addressType;
    /**
     * N° interne de l'adresse.
     *
     * @var int|null
     */
    protected $internalAddressNumber;
    /**
     * Nature (CLI, FOU, ...).
     *
     * @var string|null
     */
    protected $subsidiaryType;
    /**
     * Code client.
     *
     * @var string|null
     */
    protected $customerCode;
    /**
     * Nom du client.
     *
     * @var string|null
     */
    protected $customerName;
    /**
     * N° d'adresse.
     *
     * @var int|null
     */
    protected $addressNumber;
    /**
     * Forme juridique.
     *
     * @var string|null
     */
    protected $legalForm;
    /**
     * Libellé de la forme juridique.
     *
     * @var string|null
     */
    protected $legalFormLabel;
    /**
     * Raison sociale.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Suite raison sociale.
     *
     * @var string|null
     */
    protected $additionalCompanyName;
    /**
     * Adresse 1.
     *
     * @var string|null
     */
    protected $address1;
    /**
     * Adresse 2.
     *
     * @var string|null
     */
    protected $address2;
    /**
     * Adresse 3.
     *
     * @var string|null
     */
    protected $address3;
    /**
     * Code postal.
     *
     * @var string|null
     */
    protected $zipCode;
    /**
     * Ville.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Code pays.
     *
     * @var string|null
     */
    protected $country;
    /**
     * Libellé pays.
     *
     * @var string|null
     */
    protected $countryLabel;
    /**
     * Téléphone.
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * N° du contact.
     *
     * @var int|null
     */
    protected $contactNumber;
    /**
     * Nom du contact.
     *
     * @var string|null
     */
    protected $contactName;
    /**
     * Bloc-note.
     *
     * @var string|null
     */
    protected $notePad;
    /**
     * Date de création.
     *
     * @var \DateTime|null
     */
    protected $creationDate;
    /**
     * Date de mise à jour.
     *
     * @var \DateTime|null
     */
    protected $modificationDate;
    /**
     * Créateur.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * Utilisateur.
     *
     * @var string|null
     */
    protected $modifiedBy;
    /**
     * Site WEB.
     *
     * @var string|null
     */
    protected $email;
    /**
     * Adresse de livraison.
     *
     * @var bool|null
     */
    protected $isDeliveryAddress;
    /**
     * Adresse de facturation.
     *
     * @var bool|null
     */
    protected $isBillingAddress;
    /**
     * Région.
     *
     * @var string|null
     */
    protected $region;
    /**
     * Libellé de la région.
     *
     * @var string|null
     */
    protected $regionLabel;
    /**
     * Fax.
     *
     * @var string|null
     */
    protected $faxNumber;
    /**
     * Téléphone n°2.
     *
     * @var string|null
     */
    protected $phoneNumber2;
    /**
     * Code NIF.
     *
     * @var string|null
     */
    protected $taxIDNumberCode;
    /**
     * Adresse de commande.
     *
     * @var mixed|null
     */
    protected $isOrderAddress;

    /**
     * Type adresse.
     */
    public function getAddressType(): ?string
    {
        return $this->addressType;
    }

    /**
     * Type adresse.
     */
    public function setAddressType(?string $addressType): self
    {
        $this->initialized['addressType'] = true;
        $this->addressType = $addressType;

        return $this;
    }

    /**
     * N° interne de l'adresse.
     */
    public function getInternalAddressNumber(): ?int
    {
        return $this->internalAddressNumber;
    }

    /**
     * N° interne de l'adresse.
     */
    public function setInternalAddressNumber(?int $internalAddressNumber): self
    {
        $this->initialized['internalAddressNumber'] = true;
        $this->internalAddressNumber = $internalAddressNumber;

        return $this;
    }

    /**
     * Nature (CLI, FOU, ...).
     */
    public function getSubsidiaryType(): ?string
    {
        return $this->subsidiaryType;
    }

    /**
     * Nature (CLI, FOU, ...).
     */
    public function setSubsidiaryType(?string $subsidiaryType): self
    {
        $this->initialized['subsidiaryType'] = true;
        $this->subsidiaryType = $subsidiaryType;

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
     * Nom du client.
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * Nom du client.
     */
    public function setCustomerName(?string $customerName): self
    {
        $this->initialized['customerName'] = true;
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * N° d'adresse.
     */
    public function getAddressNumber(): ?int
    {
        return $this->addressNumber;
    }

    /**
     * N° d'adresse.
     */
    public function setAddressNumber(?int $addressNumber): self
    {
        $this->initialized['addressNumber'] = true;
        $this->addressNumber = $addressNumber;

        return $this;
    }

    /**
     * Forme juridique.
     */
    public function getLegalForm(): ?string
    {
        return $this->legalForm;
    }

    /**
     * Forme juridique.
     */
    public function setLegalForm(?string $legalForm): self
    {
        $this->initialized['legalForm'] = true;
        $this->legalForm = $legalForm;

        return $this;
    }

    /**
     * Libellé de la forme juridique.
     */
    public function getLegalFormLabel(): ?string
    {
        return $this->legalFormLabel;
    }

    /**
     * Libellé de la forme juridique.
     */
    public function setLegalFormLabel(?string $legalFormLabel): self
    {
        $this->initialized['legalFormLabel'] = true;
        $this->legalFormLabel = $legalFormLabel;

        return $this;
    }

    /**
     * Raison sociale.
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Raison sociale.
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Suite raison sociale.
     */
    public function getAdditionalCompanyName(): ?string
    {
        return $this->additionalCompanyName;
    }

    /**
     * Suite raison sociale.
     */
    public function setAdditionalCompanyName(?string $additionalCompanyName): self
    {
        $this->initialized['additionalCompanyName'] = true;
        $this->additionalCompanyName = $additionalCompanyName;

        return $this;
    }

    /**
     * Adresse 1.
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * Adresse 1.
     */
    public function setAddress1(?string $address1): self
    {
        $this->initialized['address1'] = true;
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Adresse 2.
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * Adresse 2.
     */
    public function setAddress2(?string $address2): self
    {
        $this->initialized['address2'] = true;
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Adresse 3.
     */
    public function getAddress3(): ?string
    {
        return $this->address3;
    }

    /**
     * Adresse 3.
     */
    public function setAddress3(?string $address3): self
    {
        $this->initialized['address3'] = true;
        $this->address3 = $address3;

        return $this;
    }

    /**
     * Code postal.
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Code postal.
     */
    public function setZipCode(?string $zipCode): self
    {
        $this->initialized['zipCode'] = true;
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Ville.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Ville.
     */
    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    /**
     * Code pays.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Code pays.
     */
    public function setCountry(?string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }

    /**
     * Libellé pays.
     */
    public function getCountryLabel(): ?string
    {
        return $this->countryLabel;
    }

    /**
     * Libellé pays.
     */
    public function setCountryLabel(?string $countryLabel): self
    {
        $this->initialized['countryLabel'] = true;
        $this->countryLabel = $countryLabel;

        return $this;
    }

    /**
     * Téléphone.
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Téléphone.
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

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
     * Nom du contact.
     */
    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    /**
     * Nom du contact.
     */
    public function setContactName(?string $contactName): self
    {
        $this->initialized['contactName'] = true;
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Bloc-note.
     */
    public function getNotePad(): ?string
    {
        return $this->notePad;
    }

    /**
     * Bloc-note.
     */
    public function setNotePad(?string $notePad): self
    {
        $this->initialized['notePad'] = true;
        $this->notePad = $notePad;

        return $this;
    }

    /**
     * Date de création.
     */
    public function getCreationDate(): ?\DateTime
    {
        return $this->creationDate;
    }

    /**
     * Date de création.
     */
    public function setCreationDate(?\DateTime $creationDate): self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Date de mise à jour.
     */
    public function getModificationDate(): ?\DateTime
    {
        return $this->modificationDate;
    }

    /**
     * Date de mise à jour.
     */
    public function setModificationDate(?\DateTime $modificationDate): self
    {
        $this->initialized['modificationDate'] = true;
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Créateur.
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * Créateur.
     */
    public function setCreatedBy(?string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Utilisateur.
     */
    public function getModifiedBy(): ?string
    {
        return $this->modifiedBy;
    }

    /**
     * Utilisateur.
     */
    public function setModifiedBy(?string $modifiedBy): self
    {
        $this->initialized['modifiedBy'] = true;
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Site WEB.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Site WEB.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * Adresse de livraison.
     */
    public function getIsDeliveryAddress(): ?bool
    {
        return $this->isDeliveryAddress;
    }

    /**
     * Adresse de livraison.
     */
    public function setIsDeliveryAddress(?bool $isDeliveryAddress): self
    {
        $this->initialized['isDeliveryAddress'] = true;
        $this->isDeliveryAddress = $isDeliveryAddress;

        return $this;
    }

    /**
     * Adresse de facturation.
     */
    public function getIsBillingAddress(): ?bool
    {
        return $this->isBillingAddress;
    }

    /**
     * Adresse de facturation.
     */
    public function setIsBillingAddress(?bool $isBillingAddress): self
    {
        $this->initialized['isBillingAddress'] = true;
        $this->isBillingAddress = $isBillingAddress;

        return $this;
    }

    /**
     * Région.
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * Région.
     */
    public function setRegion(?string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;

        return $this;
    }

    /**
     * Libellé de la région.
     */
    public function getRegionLabel(): ?string
    {
        return $this->regionLabel;
    }

    /**
     * Libellé de la région.
     */
    public function setRegionLabel(?string $regionLabel): self
    {
        $this->initialized['regionLabel'] = true;
        $this->regionLabel = $regionLabel;

        return $this;
    }

    /**
     * Fax.
     */
    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    /**
     * Fax.
     */
    public function setFaxNumber(?string $faxNumber): self
    {
        $this->initialized['faxNumber'] = true;
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * Téléphone n°2.
     */
    public function getPhoneNumber2(): ?string
    {
        return $this->phoneNumber2;
    }

    /**
     * Téléphone n°2.
     */
    public function setPhoneNumber2(?string $phoneNumber2): self
    {
        $this->initialized['phoneNumber2'] = true;
        $this->phoneNumber2 = $phoneNumber2;

        return $this;
    }

    /**
     * Code NIF.
     */
    public function getTaxIDNumberCode(): ?string
    {
        return $this->taxIDNumberCode;
    }

    /**
     * Code NIF.
     */
    public function setTaxIDNumberCode(?string $taxIDNumberCode): self
    {
        $this->initialized['taxIDNumberCode'] = true;
        $this->taxIDNumberCode = $taxIDNumberCode;

        return $this;
    }

    /**
     * Adresse de commande.
     */
    public function getIsOrderAddress()
    {
        return $this->isOrderAddress;
    }

    /**
     * Adresse de commande.
     */
    public function setIsOrderAddress($isOrderAddress): self
    {
        $this->initialized['isOrderAddress'] = true;
        $this->isOrderAddress = $isOrderAddress;

        return $this;
    }
}
