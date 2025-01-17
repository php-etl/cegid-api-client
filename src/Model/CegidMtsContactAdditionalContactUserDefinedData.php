<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class CegidMtsContactAdditionalContactUserDefinedData
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
     * Commentaire.
     *
     * @var string|null
     */
    protected $notepad;
    /**
     * Tableau de booléens libres.
     *
     * @var list<bool>|null
     */
    protected $booleans;
    /**
     * Tableau de dates libres.
     *
     * @var list<\DateTime>|null
     */
    protected $dateTimes;
    /**
     * Tableau de décimaux libres.
     *
     * @var list<float>|null
     */
    protected $decimals;
    /**
     * Tableau de liste de choix libres.
     *
     * @var list<string>|null
     */
    protected $lookupChoices;
    /**
     * Tableau de multichoix libres.
     *
     * @var list<list<string>>|null
     */
    protected $selectedLookups;
    /**
     * Tableau de chaines libres.
     *
     * @var list<string>|null
     */
    protected $strings;
    /**
     * @var mixed|null
     */
    protected $booleansCount;
    /**
     * @var mixed|null
     */
    protected $dateTimesCount;
    /**
     * @var mixed|null
     */
    protected $decimalsCount;
    /**
     * @var mixed|null
     */
    protected $lookupChoicesCount;
    /**
     * @var mixed|null
     */
    protected $selectedLookupsCount;
    /**
     * @var mixed|null
     */
    protected $stringsCount;

    /**
     * Commentaire.
     */
    public function getNotepad(): ?string
    {
        return $this->notepad;
    }

    /**
     * Commentaire.
     */
    public function setNotepad(?string $notepad): self
    {
        $this->initialized['notepad'] = true;
        $this->notepad = $notepad;

        return $this;
    }

    /**
     * Tableau de booléens libres.
     *
     * @return list<bool>|null
     */
    public function getBooleans(): ?array
    {
        return $this->booleans;
    }

    /**
     * Tableau de booléens libres.
     *
     * @param list<bool>|null $booleans
     */
    public function setBooleans(?array $booleans): self
    {
        $this->initialized['booleans'] = true;
        $this->booleans = $booleans;

        return $this;
    }

    /**
     * Tableau de dates libres.
     *
     * @return list<\DateTime>|null
     */
    public function getDateTimes(): ?array
    {
        return $this->dateTimes;
    }

    /**
     * Tableau de dates libres.
     *
     * @param list<\DateTime>|null $dateTimes
     */
    public function setDateTimes(?array $dateTimes): self
    {
        $this->initialized['dateTimes'] = true;
        $this->dateTimes = $dateTimes;

        return $this;
    }

    /**
     * Tableau de décimaux libres.
     *
     * @return list<float>|null
     */
    public function getDecimals(): ?array
    {
        return $this->decimals;
    }

    /**
     * Tableau de décimaux libres.
     *
     * @param list<float>|null $decimals
     */
    public function setDecimals(?array $decimals): self
    {
        $this->initialized['decimals'] = true;
        $this->decimals = $decimals;

        return $this;
    }

    /**
     * Tableau de liste de choix libres.
     *
     * @return list<string>|null
     */
    public function getLookupChoices(): ?array
    {
        return $this->lookupChoices;
    }

    /**
     * Tableau de liste de choix libres.
     *
     * @param list<string>|null $lookupChoices
     */
    public function setLookupChoices(?array $lookupChoices): self
    {
        $this->initialized['lookupChoices'] = true;
        $this->lookupChoices = $lookupChoices;

        return $this;
    }

    /**
     * Tableau de multichoix libres.
     *
     * @return list<list<string>>|null
     */
    public function getSelectedLookups(): ?array
    {
        return $this->selectedLookups;
    }

    /**
     * Tableau de multichoix libres.
     *
     * @param list<list<string>>|null $selectedLookups
     */
    public function setSelectedLookups(?array $selectedLookups): self
    {
        $this->initialized['selectedLookups'] = true;
        $this->selectedLookups = $selectedLookups;

        return $this;
    }

    /**
     * Tableau de chaines libres.
     *
     * @return list<string>|null
     */
    public function getStrings(): ?array
    {
        return $this->strings;
    }

    /**
     * Tableau de chaines libres.
     *
     * @param list<string>|null $strings
     */
    public function setStrings(?array $strings): self
    {
        $this->initialized['strings'] = true;
        $this->strings = $strings;

        return $this;
    }

    public function getBooleansCount()
    {
        return $this->booleansCount;
    }

    public function setBooleansCount($booleansCount): self
    {
        $this->initialized['booleansCount'] = true;
        $this->booleansCount = $booleansCount;

        return $this;
    }

    public function getDateTimesCount()
    {
        return $this->dateTimesCount;
    }

    public function setDateTimesCount($dateTimesCount): self
    {
        $this->initialized['dateTimesCount'] = true;
        $this->dateTimesCount = $dateTimesCount;

        return $this;
    }

    public function getDecimalsCount()
    {
        return $this->decimalsCount;
    }

    public function setDecimalsCount($decimalsCount): self
    {
        $this->initialized['decimalsCount'] = true;
        $this->decimalsCount = $decimalsCount;

        return $this;
    }

    public function getLookupChoicesCount()
    {
        return $this->lookupChoicesCount;
    }

    public function setLookupChoicesCount($lookupChoicesCount): self
    {
        $this->initialized['lookupChoicesCount'] = true;
        $this->lookupChoicesCount = $lookupChoicesCount;

        return $this;
    }

    public function getSelectedLookupsCount()
    {
        return $this->selectedLookupsCount;
    }

    public function setSelectedLookupsCount($selectedLookupsCount): self
    {
        $this->initialized['selectedLookupsCount'] = true;
        $this->selectedLookupsCount = $selectedLookupsCount;

        return $this;
    }

    public function getStringsCount()
    {
        return $this->stringsCount;
    }

    public function setStringsCount($stringsCount): self
    {
        $this->initialized['stringsCount'] = true;
        $this->stringsCount = $stringsCount;

        return $this;
    }
}
