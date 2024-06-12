<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Cegid\Api\Normalizer;

use Cegid\Api\Runtime\Normalizer\CheckArray;
use Cegid\Api\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1SalesRepresentativeDtoReaderRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1SalesRepresentativeDtoReaderRequest';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1SalesRepresentativeDtoReaderRequest';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1SalesRepresentativeDtoReaderRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Version', $data) && $data['Version'] !== null) {
                $object->setVersion($data['Version']);
            } elseif (\array_key_exists('Version', $data) && $data['Version'] === null) {
                $object->setVersion(null);
            }
            if (\array_key_exists('Content', $data) && $data['Content'] !== null) {
                $object->setContent($data['Content']);
            } elseif (\array_key_exists('Content', $data) && $data['Content'] === null) {
                $object->setContent(null);
            }
            if (\array_key_exists('Method', $data) && $data['Method'] !== null) {
                $object->setMethod($data['Method']);
            } elseif (\array_key_exists('Method', $data) && $data['Method'] === null) {
                $object->setMethod(null);
            }
            if (\array_key_exists('RequestUri', $data) && $data['RequestUri'] !== null) {
                $object->setRequestUri($data['RequestUri']);
            } elseif (\array_key_exists('RequestUri', $data) && $data['RequestUri'] === null) {
                $object->setRequestUri(null);
            }
            if (\array_key_exists('Headers', $data) && $data['Headers'] !== null) {
                $object->setHeaders($data['Headers']);
            } elseif (\array_key_exists('Headers', $data) && $data['Headers'] === null) {
                $object->setHeaders(null);
            }
            if (\array_key_exists('Properties', $data) && $data['Properties'] !== null) {
                $object->setProperties($data['Properties']);
            } elseif (\array_key_exists('Properties', $data) && $data['Properties'] === null) {
                $object->setProperties(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $object->getVersion();
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['Content'] = $object->getContent();
            }
            if ($object->isInitialized('method') && null !== $object->getMethod()) {
                $data['Method'] = $object->getMethod();
            }
            if ($object->isInitialized('requestUri') && null !== $object->getRequestUri()) {
                $data['RequestUri'] = $object->getRequestUri();
            }
            if ($object->isInitialized('headers') && null !== $object->getHeaders()) {
                $data['Headers'] = $object->getHeaders();
            }
            if ($object->isInitialized('properties') && null !== $object->getProperties()) {
                $data['Properties'] = $object->getProperties();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1SalesRepresentativeDtoReaderRequest' => false];
        }
    }
} else {
    class SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1SalesRepresentativeDtoReaderRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1SalesRepresentativeDtoReaderRequest';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1SalesRepresentativeDtoReaderRequest';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1SalesRepresentativeDtoReaderRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Version', $data) && $data['Version'] !== null) {
                $object->setVersion($data['Version']);
            } elseif (\array_key_exists('Version', $data) && $data['Version'] === null) {
                $object->setVersion(null);
            }
            if (\array_key_exists('Content', $data) && $data['Content'] !== null) {
                $object->setContent($data['Content']);
            } elseif (\array_key_exists('Content', $data) && $data['Content'] === null) {
                $object->setContent(null);
            }
            if (\array_key_exists('Method', $data) && $data['Method'] !== null) {
                $object->setMethod($data['Method']);
            } elseif (\array_key_exists('Method', $data) && $data['Method'] === null) {
                $object->setMethod(null);
            }
            if (\array_key_exists('RequestUri', $data) && $data['RequestUri'] !== null) {
                $object->setRequestUri($data['RequestUri']);
            } elseif (\array_key_exists('RequestUri', $data) && $data['RequestUri'] === null) {
                $object->setRequestUri(null);
            }
            if (\array_key_exists('Headers', $data) && $data['Headers'] !== null) {
                $object->setHeaders($data['Headers']);
            } elseif (\array_key_exists('Headers', $data) && $data['Headers'] === null) {
                $object->setHeaders(null);
            }
            if (\array_key_exists('Properties', $data) && $data['Properties'] !== null) {
                $object->setProperties($data['Properties']);
            } elseif (\array_key_exists('Properties', $data) && $data['Properties'] === null) {
                $object->setProperties(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $object->getVersion();
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['Content'] = $object->getContent();
            }
            if ($object->isInitialized('method') && null !== $object->getMethod()) {
                $data['Method'] = $object->getMethod();
            }
            if ($object->isInitialized('requestUri') && null !== $object->getRequestUri()) {
                $data['RequestUri'] = $object->getRequestUri();
            }
            if ($object->isInitialized('headers') && null !== $object->getHeaders()) {
                $data['Headers'] = $object->getHeaders();
            }
            if ($object->isInitialized('properties') && null !== $object->getProperties()) {
                $data['Properties'] = $object->getProperties();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsThirdPartyEntitiesV1SalesRepresentativeDtoReaderRequest' => false];
        }
    }
}
