<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Endpoint;

class V1FolderIdActivitiesExpensesSheetsGetAmountExpensesNotSubmitted extends \Cegid\Api\Runtime\Client\BaseEndpoint implements \Cegid\Api\Runtime\Client\Endpoint
{
    use \Cegid\Api\Runtime\Client\EndpointTrait;
    protected $folderId;

    /**
     * @param string $folderId        Identifiant de dossier
     * @param array  $queryParameters {
     *
     * @var string $resource Code ressource
     * @var string $periodStartDate Début de période de l'activité
     * @var string $periodEndDate Fin de période de l'activité
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
        return str_replace(['{folderId}'], [$this->folderId], '/api/v1/{folderId}/activities/expensesSheets/getAmountExpensesNotSubmitted');
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
        $optionsResolver->setDefined(['resource', 'periodStartDate', 'periodEndDate']);
        $optionsResolver->setRequired(['resource', 'periodStartDate', 'periodEndDate']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('resource', ['string']);
        $optionsResolver->addAllowedTypes('periodStartDate', ['string']);
        $optionsResolver->addAllowedTypes('periodEndDate', ['string']);

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
        if (200 === $status) {
            return json_decode($body);
        }
        throw new \Cegid\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}