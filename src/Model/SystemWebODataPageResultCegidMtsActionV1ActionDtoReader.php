<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class SystemWebODataPageResultCegidMtsActionV1ActionDtoReader
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
     * @var list<CegidMtsActionV1ActionDtoReader>|null
     */
    protected $items;
    /**
     * @var string|null
     */
    protected $nextPageLink;
    /**
     * @var int|null
     */
    protected $count;

    /**
     * @return list<CegidMtsActionV1ActionDtoReader>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param list<CegidMtsActionV1ActionDtoReader>|null $items
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    public function getNextPageLink(): ?string
    {
        return $this->nextPageLink;
    }

    public function setNextPageLink(?string $nextPageLink): self
    {
        $this->initialized['nextPageLink'] = true;
        $this->nextPageLink = $nextPageLink;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }
}
