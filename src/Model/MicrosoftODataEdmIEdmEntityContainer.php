<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class MicrosoftODataEdmIEdmEntityContainer
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
     * @var list<MicrosoftODataEdmIEdmEntityContainerElement>|null
     */
    protected $elements;
    /**
     * @var string|null
     */
    protected $schemaElementKind;
    /**
     * @var string|null
     */
    protected $namespace;
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @return list<MicrosoftODataEdmIEdmEntityContainerElement>|null
     */
    public function getElements(): ?array
    {
        return $this->elements;
    }

    /**
     * @param list<MicrosoftODataEdmIEdmEntityContainerElement>|null $elements
     */
    public function setElements(?array $elements): self
    {
        $this->initialized['elements'] = true;
        $this->elements = $elements;

        return $this;
    }

    public function getSchemaElementKind(): ?string
    {
        return $this->schemaElementKind;
    }

    public function setSchemaElementKind(?string $schemaElementKind): self
    {
        $this->initialized['schemaElementKind'] = true;
        $this->schemaElementKind = $schemaElementKind;

        return $this;
    }

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    public function setNamespace(?string $namespace): self
    {
        $this->initialized['namespace'] = true;
        $this->namespace = $namespace;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
