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
    class SystemWebODataQueryApplyQueryOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\SystemWebODataQueryApplyQueryOption';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\SystemWebODataQueryApplyQueryOption';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\SystemWebODataQueryApplyQueryOption();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Context', $data) && $data['Context'] !== null) {
                $object->setContext($this->denormalizer->denormalize($data['Context'], 'Cegid\\Api\\Model\\SystemWebODataODataQueryContext', 'json', $context));
            } elseif (\array_key_exists('Context', $data) && $data['Context'] === null) {
                $object->setContext(null);
            }
            if (\array_key_exists('ResultClrType', $data) && $data['ResultClrType'] !== null) {
                $object->setResultClrType($data['ResultClrType']);
            } elseif (\array_key_exists('ResultClrType', $data) && $data['ResultClrType'] === null) {
                $object->setResultClrType(null);
            }
            if (\array_key_exists('ApplyClause', $data) && $data['ApplyClause'] !== null) {
                $object->setApplyClause($this->denormalizer->denormalize($data['ApplyClause'], 'Cegid\\Api\\Model\\MicrosoftODataCoreUriParserAggregationApplyClause', 'json', $context));
            } elseif (\array_key_exists('ApplyClause', $data) && $data['ApplyClause'] === null) {
                $object->setApplyClause(null);
            }
            if (\array_key_exists('RawValue', $data) && $data['RawValue'] !== null) {
                $object->setRawValue($data['RawValue']);
            } elseif (\array_key_exists('RawValue', $data) && $data['RawValue'] === null) {
                $object->setRawValue(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('context') && null !== $object->getContext()) {
                $data['Context'] = $this->normalizer->normalize($object->getContext(), 'json', $context);
            }
            if ($object->isInitialized('applyClause') && null !== $object->getApplyClause()) {
                $data['ApplyClause'] = $this->normalizer->normalize($object->getApplyClause(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\SystemWebODataQueryApplyQueryOption' => false];
        }
    }
} else {
    class SystemWebODataQueryApplyQueryOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\SystemWebODataQueryApplyQueryOption';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\SystemWebODataQueryApplyQueryOption';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\SystemWebODataQueryApplyQueryOption();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Context', $data) && $data['Context'] !== null) {
                $object->setContext($this->denormalizer->denormalize($data['Context'], 'Cegid\\Api\\Model\\SystemWebODataODataQueryContext', 'json', $context));
            } elseif (\array_key_exists('Context', $data) && $data['Context'] === null) {
                $object->setContext(null);
            }
            if (\array_key_exists('ResultClrType', $data) && $data['ResultClrType'] !== null) {
                $object->setResultClrType($data['ResultClrType']);
            } elseif (\array_key_exists('ResultClrType', $data) && $data['ResultClrType'] === null) {
                $object->setResultClrType(null);
            }
            if (\array_key_exists('ApplyClause', $data) && $data['ApplyClause'] !== null) {
                $object->setApplyClause($this->denormalizer->denormalize($data['ApplyClause'], 'Cegid\\Api\\Model\\MicrosoftODataCoreUriParserAggregationApplyClause', 'json', $context));
            } elseif (\array_key_exists('ApplyClause', $data) && $data['ApplyClause'] === null) {
                $object->setApplyClause(null);
            }
            if (\array_key_exists('RawValue', $data) && $data['RawValue'] !== null) {
                $object->setRawValue($data['RawValue']);
            } elseif (\array_key_exists('RawValue', $data) && $data['RawValue'] === null) {
                $object->setRawValue(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('context') && null !== $object->getContext()) {
                $data['Context'] = $this->normalizer->normalize($object->getContext(), 'json', $context);
            }
            if ($object->isInitialized('applyClause') && null !== $object->getApplyClause()) {
                $data['ApplyClause'] = $this->normalizer->normalize($object->getApplyClause(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\SystemWebODataQueryApplyQueryOption' => false];
        }
    }
}