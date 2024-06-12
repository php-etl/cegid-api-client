<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Endpoint;

class V1FolderIdProjectsGetServicesFromResource extends \Cegid\Api\Runtime\Client\BaseEndpoint implements \Cegid\Api\Runtime\Client\Endpoint
{
    use \Cegid\Api\Runtime\Client\EndpointTrait;
    protected $folderId;

    /**
     * @param string $folderId        Identifiant de dossier
     * @param array  $queryParameters {
     *
     * @var string $resource Code ressource
     * @var string $startDate Date de début
     * @var string $endDate Date de fin
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
        return str_replace(['{folderId}'], [$this->folderId], '/api/v1/{folderId}/projects/getResourceServices');
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
        $optionsResolver->setDefined(['resource', 'startDate', 'endDate']);
        $optionsResolver->setRequired(['resource', 'startDate', 'endDate']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('resource', ['string']);
        $optionsResolver->addAllowedTypes('startDate', ['string']);
        $optionsResolver->addAllowedTypes('endDate', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Cegid\Api\Model\CegidMtsProjectServiceProjectLineDto[]
     *
     * @throws \Cegid\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Cegid\\Api\\Model\\CegidMtsProjectServiceProjectLineDto[]', 'json');
        }
        throw new \Cegid\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}