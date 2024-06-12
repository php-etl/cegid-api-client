<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class SystemWebODataQueryApplyQueryOption
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
     * @var SystemWebODataODataQueryContext|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $resultClrType;
    /**
     * @var MicrosoftODataCoreUriParserAggregationApplyClause|null
     */
    protected $applyClause;
    /**
     * @var string|null
     */
    protected $rawValue;

    public function getContext(): ?SystemWebODataODataQueryContext
    {
        return $this->context;
    }

    public function setContext(?SystemWebODataODataQueryContext $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;

        return $this;
    }

    public function getResultClrType(): ?string
    {
        return $this->resultClrType;
    }

    public function setResultClrType(?string $resultClrType): self
    {
        $this->initialized['resultClrType'] = true;
        $this->resultClrType = $resultClrType;

        return $this;
    }

    public function getApplyClause(): ?MicrosoftODataCoreUriParserAggregationApplyClause
    {
        return $this->applyClause;
    }

    public function setApplyClause(?MicrosoftODataCoreUriParserAggregationApplyClause $applyClause): self
    {
        $this->initialized['applyClause'] = true;
        $this->applyClause = $applyClause;

        return $this;
    }

    public function getRawValue(): ?string
    {
        return $this->rawValue;
    }

    public function setRawValue(?string $rawValue): self
    {
        $this->initialized['rawValue'] = true;
        $this->rawValue = $rawValue;

        return $this;
    }
}
