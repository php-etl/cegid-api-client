<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsOpportunityEntityOpportunityDtoReader
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
     * Identification de l'opportunité.
     *
     * @var int|null
     */
    protected $opportunityID;
    /**
     * Numéro de variante.
     *
     * @var int|null
     */
    protected $variant;
    /**
     * Nature de l'opportunité.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Libellé du type d'opportunité.
     *
     * @var string|null
     */
    protected $typeLabel;
    /**
     * Libellé de l'opportunité.
     *
     * @var string|null
     */
    protected $label;
    /**
     * Tiers.
     *
     * @var string|null
     */
    protected $thirdParty;
    /**
     * Libellé du tiers.
     *
     * @var string|null
     */
    protected $thirdPartyLabel;
    /**
     * Code auxiliaire.
     *
     * @var string|null
     */
    protected $subsidiary;
    /**
     * Type de tiers.
     *
     * @var string|null
     */
    protected $thirdPartyType;
    /**
     * Libellé du type de tiers.
     *
     * @var string|null
     */
    protected $thirdPartyTypeLabel;
    /**
     * Commercial.
     *
     * @var string|null
     */
    protected $salesRepresentative;
    /**
     * Libellé du commercial.
     *
     * @var string|null
     */
    protected $salesRepresentativeLabel;
    /**
     * Responsable.
     *
     * @var string|null
     */
    protected $supervisor;
    /**
     * Libellé du responsable.
     *
     * @var string|null
     */
    protected $supervisorLabel;
    /**
     * Campagne d'origine.
     *
     * @var string|null
     */
    protected $originalOperation;
    /**
     * Libelle de la campagne d'origine.
     *
     * @var string|null
     */
    protected $originalOperationLabel;
    /**
     * Numéro de l'action.
     *
     * @var int|null
     */
    protected $actionNumber;
    /**
     * Libellé de l'action.
     *
     * @var string|null
     */
    protected $actionNumberLabel;
    /**
     * Code projet.
     *
     * @var string|null
     */
    protected $project;
    /**
     * Libellé du projet.
     *
     * @var string|null
     */
    protected $projectLabel;
    /**
     * Date de cloture.
     *
     * @var \DateTime|null
     */
    protected $closingDate;
    /**
     * Etat de l'opportunité.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Libellé de l'état de l'opportunité.
     *
     * @var string|null
     */
    protected $statusLabel;
    /**
     * Montant de prévision.
     *
     * @var float|null
     */
    protected $ammount;
    /**
     * Probabilité de réussiste (Pourcentage).
     *
     * @var float|null
     */
    protected $percent;
    /**
     * Motif 1.
     *
     * @var string|null
     */
    protected $reason1;
    /**
     * Libellé du motif 1.
     *
     * @var string|null
     */
    protected $reason1Label;
    /**
     * Motif 2.
     *
     * @var string|null
     */
    protected $reason2;
    /**
     * Libellé du motif 2.
     *
     * @var string|null
     */
    protected $reason2Label;
    /**
     * Numéro du contact.
     *
     * @var int|null
     */
    protected $contactNumber;
    /**
     * Libellé du contact.
     *
     * @var string|null
     */
    protected $contactNumberLabel;
    /**
     * Code d'importation.
     *
     * @var string|null
     */
    protected $importCode;
    /**
     * Date de fin.
     *
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * Commentaire de perte.
     *
     * @var string|null
     */
    protected $lossComment;
    /**
     * Date de création.
     *
     * @var \DateTime|null
     */
    protected $creationDate;
    /**
     * Date de modification.
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
     * Libellé du créateur.
     *
     * @var string|null
     */
    protected $createdByLabel;
    /**
     * Dernier utilisateur.
     *
     * @var string|null
     */
    protected $modifiedBy;
    /**
     * Libellé du dernier utilisateur.
     *
     * @var string|null
     */
    protected $modifiedByLabel;

    /**
     * Identification de l'opportunité.
     */
    public function getOpportunityID(): ?int
    {
        return $this->opportunityID;
    }

    /**
     * Identification de l'opportunité.
     */
    public function setOpportunityID(?int $opportunityID): self
    {
        $this->initialized['opportunityID'] = true;
        $this->opportunityID = $opportunityID;

        return $this;
    }

    /**
     * Numéro de variante.
     */
    public function getVariant(): ?int
    {
        return $this->variant;
    }

    /**
     * Numéro de variante.
     */
    public function setVariant(?int $variant): self
    {
        $this->initialized['variant'] = true;
        $this->variant = $variant;

        return $this;
    }

    /**
     * Nature de l'opportunité.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Nature de l'opportunité.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Libellé du type d'opportunité.
     */
    public function getTypeLabel(): ?string
    {
        return $this->typeLabel;
    }

    /**
     * Libellé du type d'opportunité.
     */
    public function setTypeLabel(?string $typeLabel): self
    {
        $this->initialized['typeLabel'] = true;
        $this->typeLabel = $typeLabel;

        return $this;
    }

    /**
     * Libellé de l'opportunité.
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Libellé de l'opportunité.
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * Tiers.
     */
    public function getThirdParty(): ?string
    {
        return $this->thirdParty;
    }

    /**
     * Tiers.
     */
    public function setThirdParty(?string $thirdParty): self
    {
        $this->initialized['thirdParty'] = true;
        $this->thirdParty = $thirdParty;

        return $this;
    }

    /**
     * Libellé du tiers.
     */
    public function getThirdPartyLabel(): ?string
    {
        return $this->thirdPartyLabel;
    }

    /**
     * Libellé du tiers.
     */
    public function setThirdPartyLabel(?string $thirdPartyLabel): self
    {
        $this->initialized['thirdPartyLabel'] = true;
        $this->thirdPartyLabel = $thirdPartyLabel;

        return $this;
    }

    /**
     * Code auxiliaire.
     */
    public function getSubsidiary(): ?string
    {
        return $this->subsidiary;
    }

    /**
     * Code auxiliaire.
     */
    public function setSubsidiary(?string $subsidiary): self
    {
        $this->initialized['subsidiary'] = true;
        $this->subsidiary = $subsidiary;

        return $this;
    }

    /**
     * Type de tiers.
     */
    public function getThirdPartyType(): ?string
    {
        return $this->thirdPartyType;
    }

    /**
     * Type de tiers.
     */
    public function setThirdPartyType(?string $thirdPartyType): self
    {
        $this->initialized['thirdPartyType'] = true;
        $this->thirdPartyType = $thirdPartyType;

        return $this;
    }

    /**
     * Libellé du type de tiers.
     */
    public function getThirdPartyTypeLabel(): ?string
    {
        return $this->thirdPartyTypeLabel;
    }

    /**
     * Libellé du type de tiers.
     */
    public function setThirdPartyTypeLabel(?string $thirdPartyTypeLabel): self
    {
        $this->initialized['thirdPartyTypeLabel'] = true;
        $this->thirdPartyTypeLabel = $thirdPartyTypeLabel;

        return $this;
    }

    /**
     * Commercial.
     */
    public function getSalesRepresentative(): ?string
    {
        return $this->salesRepresentative;
    }

    /**
     * Commercial.
     */
    public function setSalesRepresentative(?string $salesRepresentative): self
    {
        $this->initialized['salesRepresentative'] = true;
        $this->salesRepresentative = $salesRepresentative;

        return $this;
    }

    /**
     * Libellé du commercial.
     */
    public function getSalesRepresentativeLabel(): ?string
    {
        return $this->salesRepresentativeLabel;
    }

    /**
     * Libellé du commercial.
     */
    public function setSalesRepresentativeLabel(?string $salesRepresentativeLabel): self
    {
        $this->initialized['salesRepresentativeLabel'] = true;
        $this->salesRepresentativeLabel = $salesRepresentativeLabel;

        return $this;
    }

    /**
     * Responsable.
     */
    public function getSupervisor(): ?string
    {
        return $this->supervisor;
    }

    /**
     * Responsable.
     */
    public function setSupervisor(?string $supervisor): self
    {
        $this->initialized['supervisor'] = true;
        $this->supervisor = $supervisor;

        return $this;
    }

    /**
     * Libellé du responsable.
     */
    public function getSupervisorLabel(): ?string
    {
        return $this->supervisorLabel;
    }

    /**
     * Libellé du responsable.
     */
    public function setSupervisorLabel(?string $supervisorLabel): self
    {
        $this->initialized['supervisorLabel'] = true;
        $this->supervisorLabel = $supervisorLabel;

        return $this;
    }

    /**
     * Campagne d'origine.
     */
    public function getOriginalOperation(): ?string
    {
        return $this->originalOperation;
    }

    /**
     * Campagne d'origine.
     */
    public function setOriginalOperation(?string $originalOperation): self
    {
        $this->initialized['originalOperation'] = true;
        $this->originalOperation = $originalOperation;

        return $this;
    }

    /**
     * Libelle de la campagne d'origine.
     */
    public function getOriginalOperationLabel(): ?string
    {
        return $this->originalOperationLabel;
    }

    /**
     * Libelle de la campagne d'origine.
     */
    public function setOriginalOperationLabel(?string $originalOperationLabel): self
    {
        $this->initialized['originalOperationLabel'] = true;
        $this->originalOperationLabel = $originalOperationLabel;

        return $this;
    }

    /**
     * Numéro de l'action.
     */
    public function getActionNumber(): ?int
    {
        return $this->actionNumber;
    }

    /**
     * Numéro de l'action.
     */
    public function setActionNumber(?int $actionNumber): self
    {
        $this->initialized['actionNumber'] = true;
        $this->actionNumber = $actionNumber;

        return $this;
    }

    /**
     * Libellé de l'action.
     */
    public function getActionNumberLabel(): ?string
    {
        return $this->actionNumberLabel;
    }

    /**
     * Libellé de l'action.
     */
    public function setActionNumberLabel(?string $actionNumberLabel): self
    {
        $this->initialized['actionNumberLabel'] = true;
        $this->actionNumberLabel = $actionNumberLabel;

        return $this;
    }

    /**
     * Code projet.
     */
    public function getProject(): ?string
    {
        return $this->project;
    }

    /**
     * Code projet.
     */
    public function setProject(?string $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }

    /**
     * Libellé du projet.
     */
    public function getProjectLabel(): ?string
    {
        return $this->projectLabel;
    }

    /**
     * Libellé du projet.
     */
    public function setProjectLabel(?string $projectLabel): self
    {
        $this->initialized['projectLabel'] = true;
        $this->projectLabel = $projectLabel;

        return $this;
    }

    /**
     * Date de cloture.
     */
    public function getClosingDate(): ?\DateTime
    {
        return $this->closingDate;
    }

    /**
     * Date de cloture.
     */
    public function setClosingDate(?\DateTime $closingDate): self
    {
        $this->initialized['closingDate'] = true;
        $this->closingDate = $closingDate;

        return $this;
    }

    /**
     * Etat de l'opportunité.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Etat de l'opportunité.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Libellé de l'état de l'opportunité.
     */
    public function getStatusLabel(): ?string
    {
        return $this->statusLabel;
    }

    /**
     * Libellé de l'état de l'opportunité.
     */
    public function setStatusLabel(?string $statusLabel): self
    {
        $this->initialized['statusLabel'] = true;
        $this->statusLabel = $statusLabel;

        return $this;
    }

    /**
     * Montant de prévision.
     */
    public function getAmmount(): ?float
    {
        return $this->ammount;
    }

    /**
     * Montant de prévision.
     */
    public function setAmmount(?float $ammount): self
    {
        $this->initialized['ammount'] = true;
        $this->ammount = $ammount;

        return $this;
    }

    /**
     * Probabilité de réussiste (Pourcentage).
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }

    /**
     * Probabilité de réussiste (Pourcentage).
     */
    public function setPercent(?float $percent): self
    {
        $this->initialized['percent'] = true;
        $this->percent = $percent;

        return $this;
    }

    /**
     * Motif 1.
     */
    public function getReason1(): ?string
    {
        return $this->reason1;
    }

    /**
     * Motif 1.
     */
    public function setReason1(?string $reason1): self
    {
        $this->initialized['reason1'] = true;
        $this->reason1 = $reason1;

        return $this;
    }

    /**
     * Libellé du motif 1.
     */
    public function getReason1Label(): ?string
    {
        return $this->reason1Label;
    }

    /**
     * Libellé du motif 1.
     */
    public function setReason1Label(?string $reason1Label): self
    {
        $this->initialized['reason1Label'] = true;
        $this->reason1Label = $reason1Label;

        return $this;
    }

    /**
     * Motif 2.
     */
    public function getReason2(): ?string
    {
        return $this->reason2;
    }

    /**
     * Motif 2.
     */
    public function setReason2(?string $reason2): self
    {
        $this->initialized['reason2'] = true;
        $this->reason2 = $reason2;

        return $this;
    }

    /**
     * Libellé du motif 2.
     */
    public function getReason2Label(): ?string
    {
        return $this->reason2Label;
    }

    /**
     * Libellé du motif 2.
     */
    public function setReason2Label(?string $reason2Label): self
    {
        $this->initialized['reason2Label'] = true;
        $this->reason2Label = $reason2Label;

        return $this;
    }

    /**
     * Numéro du contact.
     */
    public function getContactNumber(): ?int
    {
        return $this->contactNumber;
    }

    /**
     * Numéro du contact.
     */
    public function setContactNumber(?int $contactNumber): self
    {
        $this->initialized['contactNumber'] = true;
        $this->contactNumber = $contactNumber;

        return $this;
    }

    /**
     * Libellé du contact.
     */
    public function getContactNumberLabel(): ?string
    {
        return $this->contactNumberLabel;
    }

    /**
     * Libellé du contact.
     */
    public function setContactNumberLabel(?string $contactNumberLabel): self
    {
        $this->initialized['contactNumberLabel'] = true;
        $this->contactNumberLabel = $contactNumberLabel;

        return $this;
    }

    /**
     * Code d'importation.
     */
    public function getImportCode(): ?string
    {
        return $this->importCode;
    }

    /**
     * Code d'importation.
     */
    public function setImportCode(?string $importCode): self
    {
        $this->initialized['importCode'] = true;
        $this->importCode = $importCode;

        return $this;
    }

    /**
     * Date de fin.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * Date de fin.
     */
    public function setEndDate(?\DateTime $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Commentaire de perte.
     */
    public function getLossComment(): ?string
    {
        return $this->lossComment;
    }

    /**
     * Commentaire de perte.
     */
    public function setLossComment(?string $lossComment): self
    {
        $this->initialized['lossComment'] = true;
        $this->lossComment = $lossComment;

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
     * Date de modification.
     */
    public function getModificationDate(): ?\DateTime
    {
        return $this->modificationDate;
    }

    /**
     * Date de modification.
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
     * Libellé du créateur.
     */
    public function getCreatedByLabel(): ?string
    {
        return $this->createdByLabel;
    }

    /**
     * Libellé du créateur.
     */
    public function setCreatedByLabel(?string $createdByLabel): self
    {
        $this->initialized['createdByLabel'] = true;
        $this->createdByLabel = $createdByLabel;

        return $this;
    }

    /**
     * Dernier utilisateur.
     */
    public function getModifiedBy(): ?string
    {
        return $this->modifiedBy;
    }

    /**
     * Dernier utilisateur.
     */
    public function setModifiedBy(?string $modifiedBy): self
    {
        $this->initialized['modifiedBy'] = true;
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Libellé du dernier utilisateur.
     */
    public function getModifiedByLabel(): ?string
    {
        return $this->modifiedByLabel;
    }

    /**
     * Libellé du dernier utilisateur.
     */
    public function setModifiedByLabel(?string $modifiedByLabel): self
    {
        $this->initialized['modifiedByLabel'] = true;
        $this->modifiedByLabel = $modifiedByLabel;

        return $this;
    }
}
