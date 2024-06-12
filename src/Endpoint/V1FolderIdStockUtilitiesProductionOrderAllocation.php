<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Endpoint;

class V1FolderIdStockUtilitiesProductionOrderAllocation extends \Cegid\Api\Runtime\Client\BaseEndpoint implements \Cegid\Api\Runtime\Client\Endpoint
{
    use \Cegid\Api\Runtime\Client\EndpointTrait;
    protected $folderId;
    protected $workType;
    protected $productionOrder;

    /**
     * @param string                                                        $folderId             Identifiant de dossier
     * @param string                                                        $workType             Code de nature de travail
     * @param int                                                           $productionOrder      Numéro d'ordre de production
     * @param \Cegid\Api\Model\CegidMtsStockModelsStockAllocationParameters $allocationParameters Liste des détails de stock à affecter + quantité
     */
    public function __construct(string $folderId, string $workType, int $productionOrder, \Cegid\Api\Model\CegidMtsStockModelsStockAllocationParameters $allocationParameters)
    {
        $this->folderId = $folderId;
        $this->workType = $workType;
        $this->productionOrder = $productionOrder;
        $this->body = $allocationParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{folderId}', '{workType}', '{productionOrder}'], [$this->folderId, $this->workType, $this->productionOrder], '/api/v1/{folderId}/stock/utilities/allocation/productionOrder/{workType}/{productionOrder}');
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