<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Endpoint;

class V1FolderIdStockUtilitiesSampleOrderAllocation extends \Cegid\Api\Runtime\Client\BaseEndpoint implements \Cegid\Api\Runtime\Client\Endpoint
{
    use \Cegid\Api\Runtime\Client\EndpointTrait;
    protected $folderId;
    protected $orderId;

    /**
     * @param string                                                             $folderId              Identifiant de dossier
     * @param int                                                                $orderId               Numéro de commande client
     * @param \Cegid\Api\Model\CegidMtsStockModelsStockAllocationOrderParameters $affectationParameters Liste des détails de stock à affecter + quantité. Les champs typés object dans model ne sont pas modifiables
     * @param array                                                              $queryParameters       {
     *
     * @var string $stub Code souche
     *             }
     */
    public function __construct(string $folderId, int $orderId, \Cegid\Api\Model\CegidMtsStockModelsStockAllocationOrderParameters $affectationParameters, array $queryParameters = [])
    {
        $this->folderId = $folderId;
        $this->orderId = $orderId;
        $this->body = $affectationParameters;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{folderId}', '{orderId}'], [$this->folderId, $this->orderId], '/api/v1/{folderId}/stock/utilities/allocation/sampleOrder/{orderId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['stub']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('stub', ['string']);

        return $optionsResolver;
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
