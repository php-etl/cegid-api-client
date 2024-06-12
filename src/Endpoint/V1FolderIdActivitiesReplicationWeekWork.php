<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Endpoint;

class V1FolderIdActivitiesReplicationWeekWork extends \Cegid\Api\Runtime\Client\BaseEndpoint implements \Cegid\Api\Runtime\Client\Endpoint
{
    use \Cegid\Api\Runtime\Client\EndpointTrait;
    protected $folderId;

    /**
     * @param string                                                         $folderId              Identifiant de dossier
     * @param \Cegid\Api\Model\CegidMtsActivityReplicationWeekWorkParameters $replicationParameters Paramètres de la réplication d'une semaine d'activité
     */
    public function __construct(string $folderId, \Cegid\Api\Model\CegidMtsActivityReplicationWeekWorkParameters $replicationParameters)
    {
        $this->folderId = $folderId;
        $this->body = $replicationParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{folderId}'], [$this->folderId], '/api/v1/{folderId}/activities/replicationWeekWorkActivities');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
