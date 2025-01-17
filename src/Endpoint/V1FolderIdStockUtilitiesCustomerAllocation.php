<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Endpoint;

class V1FolderIdStockUtilitiesCustomerAllocation extends \Cegid\Api\Runtime\Client\BaseEndpoint implements \Cegid\Api\Runtime\Client\Endpoint
{
    use \Cegid\Api\Runtime\Client\EndpointTrait;
    protected $folderId;
    protected $customer;

    /**
     * @param string                                                        $folderId             Identifiant de dossier
     * @param string                                                        $customer             Client
     * @param \Cegid\Api\Model\CegidMtsStockModelsStockAllocationParameters $allocationParameters Liste des détails de stock à affecter + quantité
     */
    public function __construct(string $folderId, string $customer, \Cegid\Api\Model\CegidMtsStockModelsStockAllocationParameters $allocationParameters)
    {
        $this->folderId = $folderId;
        $this->customer = $customer;
        $this->body = $allocationParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{folderId}', '{customer}'], [$this->folderId, $this->customer], '/api/v1/{folderId}/stock/utilities/allocation/customer/{customer}');
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
