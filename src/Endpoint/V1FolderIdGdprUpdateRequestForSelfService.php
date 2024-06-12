<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Endpoint;

class V1FolderIdGdprUpdateRequestForSelfService extends \Cegid\Api\Runtime\Client\BaseEndpoint implements \Cegid\Api\Runtime\Client\Endpoint
{
    use \Cegid\Api\Runtime\Client\EndpointTrait;
    protected $folderId;

    /**
     * @param string $folderId        Identifiant de dossier
     * @param array  $queryParameters {
     *
     * @var string $People Population
     * @var int    $RequestIdentifier Identifiant de la demande de consentement
     * @var string $User Code de l'utilisateur
     * @var string $ConsentRequestStatus Statut de retour de  la demande de consentement
     * @var string $ReturnDate Date de retour de  la demande de consentement
     *             }
     */
    public function __construct(string $folderId, array $queryParameters = [])
    {
        $this->folderId = $folderId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{folderId}'], [$this->folderId], '/api/v1/{folderId}/gdpr/UpdateRequestForSelfService');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['People', 'RequestIdentifier', 'User', 'ConsentRequestStatus', 'ReturnDate']);
        $optionsResolver->setRequired(['People', 'RequestIdentifier', 'User', 'ConsentRequestStatus', 'ReturnDate']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('People', ['string']);
        $optionsResolver->addAllowedTypes('RequestIdentifier', ['int']);
        $optionsResolver->addAllowedTypes('User', ['string']);
        $optionsResolver->addAllowedTypes('ConsentRequestStatus', ['string']);
        $optionsResolver->addAllowedTypes('ReturnDate', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Cegid\Api\Model\CegidMtsGdprConsentRequestsContextResult
     *
     * @throws \Cegid\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Cegid\\Api\\Model\\CegidMtsGdprConsentRequestsContextResult', 'json');
        }
        throw new \Cegid\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}