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
    class CegidMtsErpDataSystemFieldsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsErpDataSystemFields';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsErpDataSystemFields';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsErpDataSystemFields();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CreatedBy', $data) && $data['CreatedBy'] !== null) {
                $object->setCreatedBy($data['CreatedBy']);
            } elseif (\array_key_exists('CreatedBy', $data) && $data['CreatedBy'] === null) {
                $object->setCreatedBy(null);
            }
            if (\array_key_exists('ModifiedBy', $data) && $data['ModifiedBy'] !== null) {
                $object->setModifiedBy($data['ModifiedBy']);
            } elseif (\array_key_exists('ModifiedBy', $data) && $data['ModifiedBy'] === null) {
                $object->setModifiedBy(null);
            }
            if (\array_key_exists('CreationDate', $data) && $data['CreationDate'] !== null) {
                $object->setCreationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['CreationDate']));
            } elseif (\array_key_exists('CreationDate', $data) && $data['CreationDate'] === null) {
                $object->setCreationDate(null);
            }
            if (\array_key_exists('ModificationDate', $data) && $data['ModificationDate'] !== null) {
                $object->setModificationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['ModificationDate']));
            } elseif (\array_key_exists('ModificationDate', $data) && $data['ModificationDate'] === null) {
                $object->setModificationDate(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
                $data['CreatedBy'] = $object->getCreatedBy();
            }
            if ($object->isInitialized('modifiedBy') && null !== $object->getModifiedBy()) {
                $data['ModifiedBy'] = $object->getModifiedBy();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['CreationDate'] = $object->getCreationDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('modificationDate') && null !== $object->getModificationDate()) {
                $data['ModificationDate'] = $object->getModificationDate()->format('Y-m-d\\TH:i:sP');
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsErpDataSystemFields' => false];
        }
    }
} else {
    class CegidMtsErpDataSystemFieldsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsErpDataSystemFields';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsErpDataSystemFields';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsErpDataSystemFields();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CreatedBy', $data) && $data['CreatedBy'] !== null) {
                $object->setCreatedBy($data['CreatedBy']);
            } elseif (\array_key_exists('CreatedBy', $data) && $data['CreatedBy'] === null) {
                $object->setCreatedBy(null);
            }
            if (\array_key_exists('ModifiedBy', $data) && $data['ModifiedBy'] !== null) {
                $object->setModifiedBy($data['ModifiedBy']);
            } elseif (\array_key_exists('ModifiedBy', $data) && $data['ModifiedBy'] === null) {
                $object->setModifiedBy(null);
            }
            if (\array_key_exists('CreationDate', $data) && $data['CreationDate'] !== null) {
                $object->setCreationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['CreationDate']));
            } elseif (\array_key_exists('CreationDate', $data) && $data['CreationDate'] === null) {
                $object->setCreationDate(null);
            }
            if (\array_key_exists('ModificationDate', $data) && $data['ModificationDate'] !== null) {
                $object->setModificationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['ModificationDate']));
            } elseif (\array_key_exists('ModificationDate', $data) && $data['ModificationDate'] === null) {
                $object->setModificationDate(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
                $data['CreatedBy'] = $object->getCreatedBy();
            }
            if ($object->isInitialized('modifiedBy') && null !== $object->getModifiedBy()) {
                $data['ModifiedBy'] = $object->getModifiedBy();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['CreationDate'] = $object->getCreationDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('modificationDate') && null !== $object->getModificationDate()) {
                $data['ModificationDate'] = $object->getModificationDate()->format('Y-m-d\\TH:i:sP');
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsErpDataSystemFields' => false];
        }
    }
}
