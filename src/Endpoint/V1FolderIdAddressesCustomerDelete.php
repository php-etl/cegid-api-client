<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Endpoint;

class V1FolderIdAddressesCustomerDelete extends \Cegid\Api\Runtime\Client\BaseEndpoint implements \Cegid\Api\Runtime\Client\Endpoint
{
    use \Cegid\Api\Runtime\Client\EndpointTrait;
    protected $folderId;

    /**
     * @param string $folderId Identifiant de dossier
     */
    public function __construct(string $folderId, \Cegid\Api\Model\CegidMtsAddressesEntityCustomerAddressKey $addressData)
    {
        $this->folderId = $folderId;
        $this->body = $addressData;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{folderId}'], [$this->folderId], '/api/v1/{folderId}/addresses/customer');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    /**
     * @return null
     *
     * @throws \Cegid\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        throw new \Cegid\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
