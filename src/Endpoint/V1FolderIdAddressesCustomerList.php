<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Endpoint;

class V1FolderIdAddressesCustomerList extends \Cegid\Api\Runtime\Client\BaseEndpoint implements \Cegid\Api\Runtime\Client\Endpoint
{
    use \Cegid\Api\Runtime\Client\EndpointTrait;
    protected $folderId;

    /**
     * @param string $folderId Identifiant de dossier
     */
    public function __construct(string $folderId)
    {
        $this->folderId = $folderId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{folderId}'], [$this->folderId], '/api/v1/{folderId}/addresses/customer/list');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \Cegid\Api\Model\SystemWebODataPageResultCegidMtsAddressesEntityV1CustomerAddressDtoReader
     *
     * @throws \Cegid\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Cegid\\Api\\Model\\SystemWebODataPageResultCegidMtsAddressesEntityV1CustomerAddressDtoReader', 'json');
        }
        throw new \Cegid\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
