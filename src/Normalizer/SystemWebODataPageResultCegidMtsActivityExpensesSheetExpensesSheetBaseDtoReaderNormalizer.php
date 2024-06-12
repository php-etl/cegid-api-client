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
    class SystemWebODataPageResultCegidMtsActivityExpensesSheetExpensesSheetBaseDtoReaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\SystemWebODataPageResultCegidMtsActivityExpensesSheetExpensesSheetBaseDtoReader';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\SystemWebODataPageResultCegidMtsActivityExpensesSheetExpensesSheetBaseDtoReader';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\SystemWebODataPageResultCegidMtsActivityExpensesSheetExpensesSheetBaseDtoReader();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Items', $data) && $data['Items'] !== null) {
                $values = [];
                foreach ($data['Items'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Cegid\\Api\\Model\\CegidMtsActivityExpensesSheetExpensesSheetBaseDtoReader', 'json', $context);
                }
                $object->setItems($values);
            } elseif (\array_key_exists('Items', $data) && $data['Items'] === null) {
                $object->setItems(null);
            }
            if (\array_key_exists('NextPageLink', $data) && $data['NextPageLink'] !== null) {
                $object->setNextPageLink($data['NextPageLink']);
            } elseif (\array_key_exists('NextPageLink', $data) && $data['NextPageLink'] === null) {
                $object->setNextPageLink(null);
            }
            if (\array_key_exists('Count', $data) && $data['Count'] !== null) {
                $object->setCount($data['Count']);
            } elseif (\array_key_exists('Count', $data) && $data['Count'] === null) {
                $object->setCount(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $values = [];
                foreach ($object->getItems() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Items'] = $values;
            }
            if ($object->isInitialized('nextPageLink') && null !== $object->getNextPageLink()) {
                $data['NextPageLink'] = $object->getNextPageLink();
            }
            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['Count'] = $object->getCount();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\SystemWebODataPageResultCegidMtsActivityExpensesSheetExpensesSheetBaseDtoReader' => false];
        }
    }
} else {
    class SystemWebODataPageResultCegidMtsActivityExpensesSheetExpensesSheetBaseDtoReaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\SystemWebODataPageResultCegidMtsActivityExpensesSheetExpensesSheetBaseDtoReader';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\SystemWebODataPageResultCegidMtsActivityExpensesSheetExpensesSheetBaseDtoReader';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\SystemWebODataPageResultCegidMtsActivityExpensesSheetExpensesSheetBaseDtoReader();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Items', $data) && $data['Items'] !== null) {
                $values = [];
                foreach ($data['Items'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Cegid\\Api\\Model\\CegidMtsActivityExpensesSheetExpensesSheetBaseDtoReader', 'json', $context);
                }
                $object->setItems($values);
            } elseif (\array_key_exists('Items', $data) && $data['Items'] === null) {
                $object->setItems(null);
            }
            if (\array_key_exists('NextPageLink', $data) && $data['NextPageLink'] !== null) {
                $object->setNextPageLink($data['NextPageLink']);
            } elseif (\array_key_exists('NextPageLink', $data) && $data['NextPageLink'] === null) {
                $object->setNextPageLink(null);
            }
            if (\array_key_exists('Count', $data) && $data['Count'] !== null) {
                $object->setCount($data['Count']);
            } elseif (\array_key_exists('Count', $data) && $data['Count'] === null) {
                $object->setCount(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $values = [];
                foreach ($object->getItems() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Items'] = $values;
            }
            if ($object->isInitialized('nextPageLink') && null !== $object->getNextPageLink()) {
                $data['NextPageLink'] = $object->getNextPageLink();
            }
            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['Count'] = $object->getCount();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\SystemWebODataPageResultCegidMtsActivityExpensesSheetExpensesSheetBaseDtoReader' => false];
        }
    }
}
