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
    class MicrosoftODataEdmIEdmNavigationSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmNavigationSource';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmNavigationSource';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\MicrosoftODataEdmIEdmNavigationSource();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NavigationPropertyBindings', $data) && $data['NavigationPropertyBindings'] !== null) {
                $values = [];
                foreach ($data['NavigationPropertyBindings'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmNavigationPropertyBinding', 'json', $context);
                }
                $object->setNavigationPropertyBindings($values);
            } elseif (\array_key_exists('NavigationPropertyBindings', $data) && $data['NavigationPropertyBindings'] === null) {
                $object->setNavigationPropertyBindings(null);
            }
            if (\array_key_exists('Path', $data) && $data['Path'] !== null) {
                $object->setPath($this->denormalizer->denormalize($data['Path'], 'Cegid\\Api\\Model\\MicrosoftODataEdmExpressionsIEdmPathExpression', 'json', $context));
            } elseif (\array_key_exists('Path', $data) && $data['Path'] === null) {
                $object->setPath(null);
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($this->denormalizer->denormalize($data['Type'], 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmType', 'json', $context));
            } elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['Path'] = $this->normalizer->normalize($object->getPath(), 'json', $context);
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $this->normalizer->normalize($object->getType(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\MicrosoftODataEdmIEdmNavigationSource' => false];
        }
    }
} else {
    class MicrosoftODataEdmIEdmNavigationSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmNavigationSource';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmNavigationSource';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\MicrosoftODataEdmIEdmNavigationSource();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NavigationPropertyBindings', $data) && $data['NavigationPropertyBindings'] !== null) {
                $values = [];
                foreach ($data['NavigationPropertyBindings'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmNavigationPropertyBinding', 'json', $context);
                }
                $object->setNavigationPropertyBindings($values);
            } elseif (\array_key_exists('NavigationPropertyBindings', $data) && $data['NavigationPropertyBindings'] === null) {
                $object->setNavigationPropertyBindings(null);
            }
            if (\array_key_exists('Path', $data) && $data['Path'] !== null) {
                $object->setPath($this->denormalizer->denormalize($data['Path'], 'Cegid\\Api\\Model\\MicrosoftODataEdmExpressionsIEdmPathExpression', 'json', $context));
            } elseif (\array_key_exists('Path', $data) && $data['Path'] === null) {
                $object->setPath(null);
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($this->denormalizer->denormalize($data['Type'], 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmType', 'json', $context));
            } elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['Path'] = $this->normalizer->normalize($object->getPath(), 'json', $context);
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $this->normalizer->normalize($object->getType(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\MicrosoftODataEdmIEdmNavigationSource' => false];
        }
    }
}
