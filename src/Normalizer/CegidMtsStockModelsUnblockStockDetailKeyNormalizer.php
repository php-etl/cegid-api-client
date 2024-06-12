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
    class CegidMtsStockModelsUnblockStockDetailKeyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsStockModelsUnblockStockDetailKey';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsStockModelsUnblockStockDetailKey';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsStockModelsUnblockStockDetailKey();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Product', $data) && $data['Product'] !== null) {
                $object->setProduct($data['Product']);
            } elseif (\array_key_exists('Product', $data) && $data['Product'] === null) {
                $object->setProduct(null);
            }
            if (\array_key_exists('Warehouse', $data) && $data['Warehouse'] !== null) {
                $object->setWarehouse($data['Warehouse']);
            } elseif (\array_key_exists('Warehouse', $data) && $data['Warehouse'] === null) {
                $object->setWarehouse(null);
            }
            if (\array_key_exists('FluxStatus', $data) && $data['FluxStatus'] !== null) {
                $object->setFluxStatus($data['FluxStatus']);
            } elseif (\array_key_exists('FluxStatus', $data) && $data['FluxStatus'] === null) {
                $object->setFluxStatus(null);
            }
            if (\array_key_exists('Location', $data) && $data['Location'] !== null) {
                $object->setLocation($data['Location']);
            } elseif (\array_key_exists('Location', $data) && $data['Location'] === null) {
                $object->setLocation(null);
            }
            if (\array_key_exists('InternalBatchNumber', $data) && $data['InternalBatchNumber'] !== null) {
                $object->setInternalBatchNumber($data['InternalBatchNumber']);
            } elseif (\array_key_exists('InternalBatchNumber', $data) && $data['InternalBatchNumber'] === null) {
                $object->setInternalBatchNumber(null);
            }
            if (\array_key_exists('InternalSerialNumber', $data) && $data['InternalSerialNumber'] !== null) {
                $object->setInternalSerialNumber($data['InternalSerialNumber']);
            } elseif (\array_key_exists('InternalSerialNumber', $data) && $data['InternalSerialNumber'] === null) {
                $object->setInternalSerialNumber(null);
            }
            if (\array_key_exists('ProductIndex', $data) && $data['ProductIndex'] !== null) {
                $object->setProductIndex($data['ProductIndex']);
            } elseif (\array_key_exists('ProductIndex', $data) && $data['ProductIndex'] === null) {
                $object->setProductIndex(null);
            }
            if (\array_key_exists('Brand', $data) && $data['Brand'] !== null) {
                $object->setBrand($data['Brand']);
            } elseif (\array_key_exists('Brand', $data) && $data['Brand'] === null) {
                $object->setBrand(null);
            }
            if (\array_key_exists('QualityLevel', $data) && $data['QualityLevel'] !== null) {
                $object->setQualityLevel($data['QualityLevel']);
            } elseif (\array_key_exists('QualityLevel', $data) && $data['QualityLevel'] === null) {
                $object->setQualityLevel(null);
            }
            if (\array_key_exists('AllocationReference', $data) && $data['AllocationReference'] !== null) {
                $object->setAllocationReference($data['AllocationReference']);
            } elseif (\array_key_exists('AllocationReference', $data) && $data['AllocationReference'] === null) {
                $object->setAllocationReference(null);
            }
            if (\array_key_exists('AvailabilityStatus', $data) && $data['AvailabilityStatus'] !== null) {
                $object->setAvailabilityStatus($data['AvailabilityStatus']);
            } elseif (\array_key_exists('AvailabilityStatus', $data) && $data['AvailabilityStatus'] === null) {
                $object->setAvailabilityStatus(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Product'] = $object->getProduct();
            $data['Warehouse'] = $object->getWarehouse();
            if ($object->isInitialized('fluxStatus') && null !== $object->getFluxStatus()) {
                $data['FluxStatus'] = $object->getFluxStatus();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['Location'] = $object->getLocation();
            }
            if ($object->isInitialized('internalBatchNumber') && null !== $object->getInternalBatchNumber()) {
                $data['InternalBatchNumber'] = $object->getInternalBatchNumber();
            }
            if ($object->isInitialized('internalSerialNumber') && null !== $object->getInternalSerialNumber()) {
                $data['InternalSerialNumber'] = $object->getInternalSerialNumber();
            }
            if ($object->isInitialized('productIndex') && null !== $object->getProductIndex()) {
                $data['ProductIndex'] = $object->getProductIndex();
            }
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['Brand'] = $object->getBrand();
            }
            if ($object->isInitialized('qualityLevel') && null !== $object->getQualityLevel()) {
                $data['QualityLevel'] = $object->getQualityLevel();
            }
            if ($object->isInitialized('allocationReference') && null !== $object->getAllocationReference()) {
                $data['AllocationReference'] = $object->getAllocationReference();
            }
            if ($object->isInitialized('availabilityStatus') && null !== $object->getAvailabilityStatus()) {
                $data['AvailabilityStatus'] = $object->getAvailabilityStatus();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsStockModelsUnblockStockDetailKey' => false];
        }
    }
} else {
    class CegidMtsStockModelsUnblockStockDetailKeyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsStockModelsUnblockStockDetailKey';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsStockModelsUnblockStockDetailKey';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsStockModelsUnblockStockDetailKey();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Product', $data) && $data['Product'] !== null) {
                $object->setProduct($data['Product']);
            } elseif (\array_key_exists('Product', $data) && $data['Product'] === null) {
                $object->setProduct(null);
            }
            if (\array_key_exists('Warehouse', $data) && $data['Warehouse'] !== null) {
                $object->setWarehouse($data['Warehouse']);
            } elseif (\array_key_exists('Warehouse', $data) && $data['Warehouse'] === null) {
                $object->setWarehouse(null);
            }
            if (\array_key_exists('FluxStatus', $data) && $data['FluxStatus'] !== null) {
                $object->setFluxStatus($data['FluxStatus']);
            } elseif (\array_key_exists('FluxStatus', $data) && $data['FluxStatus'] === null) {
                $object->setFluxStatus(null);
            }
            if (\array_key_exists('Location', $data) && $data['Location'] !== null) {
                $object->setLocation($data['Location']);
            } elseif (\array_key_exists('Location', $data) && $data['Location'] === null) {
                $object->setLocation(null);
            }
            if (\array_key_exists('InternalBatchNumber', $data) && $data['InternalBatchNumber'] !== null) {
                $object->setInternalBatchNumber($data['InternalBatchNumber']);
            } elseif (\array_key_exists('InternalBatchNumber', $data) && $data['InternalBatchNumber'] === null) {
                $object->setInternalBatchNumber(null);
            }
            if (\array_key_exists('InternalSerialNumber', $data) && $data['InternalSerialNumber'] !== null) {
                $object->setInternalSerialNumber($data['InternalSerialNumber']);
            } elseif (\array_key_exists('InternalSerialNumber', $data) && $data['InternalSerialNumber'] === null) {
                $object->setInternalSerialNumber(null);
            }
            if (\array_key_exists('ProductIndex', $data) && $data['ProductIndex'] !== null) {
                $object->setProductIndex($data['ProductIndex']);
            } elseif (\array_key_exists('ProductIndex', $data) && $data['ProductIndex'] === null) {
                $object->setProductIndex(null);
            }
            if (\array_key_exists('Brand', $data) && $data['Brand'] !== null) {
                $object->setBrand($data['Brand']);
            } elseif (\array_key_exists('Brand', $data) && $data['Brand'] === null) {
                $object->setBrand(null);
            }
            if (\array_key_exists('QualityLevel', $data) && $data['QualityLevel'] !== null) {
                $object->setQualityLevel($data['QualityLevel']);
            } elseif (\array_key_exists('QualityLevel', $data) && $data['QualityLevel'] === null) {
                $object->setQualityLevel(null);
            }
            if (\array_key_exists('AllocationReference', $data) && $data['AllocationReference'] !== null) {
                $object->setAllocationReference($data['AllocationReference']);
            } elseif (\array_key_exists('AllocationReference', $data) && $data['AllocationReference'] === null) {
                $object->setAllocationReference(null);
            }
            if (\array_key_exists('AvailabilityStatus', $data) && $data['AvailabilityStatus'] !== null) {
                $object->setAvailabilityStatus($data['AvailabilityStatus']);
            } elseif (\array_key_exists('AvailabilityStatus', $data) && $data['AvailabilityStatus'] === null) {
                $object->setAvailabilityStatus(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Product'] = $object->getProduct();
            $data['Warehouse'] = $object->getWarehouse();
            if ($object->isInitialized('fluxStatus') && null !== $object->getFluxStatus()) {
                $data['FluxStatus'] = $object->getFluxStatus();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['Location'] = $object->getLocation();
            }
            if ($object->isInitialized('internalBatchNumber') && null !== $object->getInternalBatchNumber()) {
                $data['InternalBatchNumber'] = $object->getInternalBatchNumber();
            }
            if ($object->isInitialized('internalSerialNumber') && null !== $object->getInternalSerialNumber()) {
                $data['InternalSerialNumber'] = $object->getInternalSerialNumber();
            }
            if ($object->isInitialized('productIndex') && null !== $object->getProductIndex()) {
                $data['ProductIndex'] = $object->getProductIndex();
            }
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['Brand'] = $object->getBrand();
            }
            if ($object->isInitialized('qualityLevel') && null !== $object->getQualityLevel()) {
                $data['QualityLevel'] = $object->getQualityLevel();
            }
            if ($object->isInitialized('allocationReference') && null !== $object->getAllocationReference()) {
                $data['AllocationReference'] = $object->getAllocationReference();
            }
            if ($object->isInitialized('availabilityStatus') && null !== $object->getAvailabilityStatus()) {
                $data['AvailabilityStatus'] = $object->getAvailabilityStatus();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsStockModelsUnblockStockDetailKey' => false];
        }
    }
}
