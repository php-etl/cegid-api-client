<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Model;

class SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1ThirdPartyDtoReaderRequest
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
     * @var mixed|null
     */
    protected $version;
    /**
     * @var mixed|null
     */
    protected $content;
    /**
     * @var mixed|null
     */
    protected $method;
    /**
     * @var mixed|null
     */
    protected $requestUri;
    /**
     * @var mixed|null
     */
    protected $headers;
    /**
     * @var mixed|null
     */
    protected $properties;

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;

        return $this;
    }

    public function getRequestUri()
    {
        return $this->requestUri;
    }

    public function setRequestUri($requestUri): self
    {
        $this->initialized['requestUri'] = true;
        $this->requestUri = $requestUri;

        return $this;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setHeaders($headers): self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;

        return $this;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function setProperties($properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;

        return $this;
    }
}
