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
    class MicrosoftODataCoreUriParserSemanticSelectExpandClauseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\MicrosoftODataCoreUriParserSemanticSelectExpandClause';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\MicrosoftODataCoreUriParserSemanticSelectExpandClause';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\MicrosoftODataCoreUriParserSemanticSelectExpandClause();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('SelectedItems', $data) && $data['SelectedItems'] !== null) {
                $values = [];
                foreach ($data['SelectedItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Cegid\\Api\\Model\\MicrosoftODataCoreUriParserSemanticSelectItem', 'json', $context);
                }
                $object->setSelectedItems($values);
            } elseif (\array_key_exists('SelectedItems', $data) && $data['SelectedItems'] === null) {
                $object->setSelectedItems(null);
            }
            if (\array_key_exists('AllSelected', $data) && $data['AllSelected'] !== null) {
                $object->setAllSelected($data['AllSelected']);
            } elseif (\array_key_exists('AllSelected', $data) && $data['AllSelected'] === null) {
                $object->setAllSelected(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\MicrosoftODataCoreUriParserSemanticSelectExpandClause' => false];
        }
    }
} else {
    class MicrosoftODataCoreUriParserSemanticSelectExpandClauseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\MicrosoftODataCoreUriParserSemanticSelectExpandClause';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\MicrosoftODataCoreUriParserSemanticSelectExpandClause';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\MicrosoftODataCoreUriParserSemanticSelectExpandClause();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('SelectedItems', $data) && $data['SelectedItems'] !== null) {
                $values = [];
                foreach ($data['SelectedItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Cegid\\Api\\Model\\MicrosoftODataCoreUriParserSemanticSelectItem', 'json', $context);
                }
                $object->setSelectedItems($values);
            } elseif (\array_key_exists('SelectedItems', $data) && $data['SelectedItems'] === null) {
                $object->setSelectedItems(null);
            }
            if (\array_key_exists('AllSelected', $data) && $data['AllSelected'] !== null) {
                $object->setAllSelected($data['AllSelected']);
            } elseif (\array_key_exists('AllSelected', $data) && $data['AllSelected'] === null) {
                $object->setAllSelected(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\MicrosoftODataCoreUriParserSemanticSelectExpandClause' => false];
        }
    }
}
