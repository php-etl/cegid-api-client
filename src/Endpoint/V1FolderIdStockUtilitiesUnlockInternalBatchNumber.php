<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Endpoint;

class V1FolderIdStockUtilitiesUnlockInternalBatchNumber extends \Cegid\Api\Runtime\Client\BaseEndpoint implements \Cegid\Api\Runtime\Client\Endpoint
{
    use \Cegid\Api\Runtime\Client\EndpointTrait;
    protected $folderId;

    /**
     * @param string $folderId        Identifiant de dossier
     * @param array  $queryParameters {
     *
     * @var string $motive Motif du mouvement
     * @var string $product Article
     * @var string $internalBatchNumber Lot interne
     * @var string $comment Bloc-note
     * @var string $dateMovement Date du mouvement
     *             }
     */
    public function __construct(string $folderId, array $queryParameters = [])
    {
        $this->folderId = $folderId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{folderId}'], [$this->folderId], '/api/v1/{folderId}/stock/utilities/unlockInternalBatchNumber');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['motive', 'product', 'internalBatchNumber', 'comment', 'dateMovement']);
        $optionsResolver->setRequired(['motive', 'product', 'internalBatchNumber']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('motive', ['string']);
        $optionsResolver->addAllowedTypes('product', ['string']);
        $optionsResolver->addAllowedTypes('internalBatchNumber', ['string']);
        $optionsResolver->addAllowedTypes('comment', ['string']);
        $optionsResolver->addAllowedTypes('dateMovement', ['string']);

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
