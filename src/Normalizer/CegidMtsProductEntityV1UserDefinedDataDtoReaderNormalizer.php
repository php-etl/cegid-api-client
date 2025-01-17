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
    class CegidMtsProductEntityV1UserDefinedDataDtoReaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedDataDtoReader';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedDataDtoReader';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsProductEntityV1UserDefinedDataDtoReader();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Decisions', $data) && $data['Decisions'] !== null) {
                $object->setDecisions($this->denormalizer->denormalize($data['Decisions'], 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedDecisionsDtoReader', 'json', $context));
            } elseif (\array_key_exists('Decisions', $data) && $data['Decisions'] === null) {
                $object->setDecisions(null);
            }
            if (\array_key_exists('Tables', $data) && $data['Tables'] !== null) {
                $object->setTables($this->denormalizer->denormalize($data['Tables'], 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedTablesDtoReader', 'json', $context));
            } elseif (\array_key_exists('Tables', $data) && $data['Tables'] === null) {
                $object->setTables(null);
            }
            if (\array_key_exists('Texts', $data) && $data['Texts'] !== null) {
                $object->setTexts($this->denormalizer->denormalize($data['Texts'], 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedTextsDtoReader', 'json', $context));
            } elseif (\array_key_exists('Texts', $data) && $data['Texts'] === null) {
                $object->setTexts(null);
            }
            if (\array_key_exists('Values', $data) && $data['Values'] !== null) {
                $object->setValues($this->denormalizer->denormalize($data['Values'], 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedValuesDtoReader', 'json', $context));
            } elseif (\array_key_exists('Values', $data) && $data['Values'] === null) {
                $object->setValues(null);
            }
            if (\array_key_exists('Dates', $data) && $data['Dates'] !== null) {
                $object->setDates($this->denormalizer->denormalize($data['Dates'], 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedDatesDtoReader', 'json', $context));
            } elseif (\array_key_exists('Dates', $data) && $data['Dates'] === null) {
                $object->setDates(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('decisions') && null !== $object->getDecisions()) {
                $data['Decisions'] = $this->normalizer->normalize($object->getDecisions(), 'json', $context);
            }
            if ($object->isInitialized('tables') && null !== $object->getTables()) {
                $data['Tables'] = $this->normalizer->normalize($object->getTables(), 'json', $context);
            }
            if ($object->isInitialized('texts') && null !== $object->getTexts()) {
                $data['Texts'] = $this->normalizer->normalize($object->getTexts(), 'json', $context);
            }
            if ($object->isInitialized('values') && null !== $object->getValues()) {
                $data['Values'] = $this->normalizer->normalize($object->getValues(), 'json', $context);
            }
            if ($object->isInitialized('dates') && null !== $object->getDates()) {
                $data['Dates'] = $this->normalizer->normalize($object->getDates(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedDataDtoReader' => false];
        }
    }
} else {
    class CegidMtsProductEntityV1UserDefinedDataDtoReaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedDataDtoReader';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedDataDtoReader';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsProductEntityV1UserDefinedDataDtoReader();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Decisions', $data) && $data['Decisions'] !== null) {
                $object->setDecisions($this->denormalizer->denormalize($data['Decisions'], 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedDecisionsDtoReader', 'json', $context));
            } elseif (\array_key_exists('Decisions', $data) && $data['Decisions'] === null) {
                $object->setDecisions(null);
            }
            if (\array_key_exists('Tables', $data) && $data['Tables'] !== null) {
                $object->setTables($this->denormalizer->denormalize($data['Tables'], 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedTablesDtoReader', 'json', $context));
            } elseif (\array_key_exists('Tables', $data) && $data['Tables'] === null) {
                $object->setTables(null);
            }
            if (\array_key_exists('Texts', $data) && $data['Texts'] !== null) {
                $object->setTexts($this->denormalizer->denormalize($data['Texts'], 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedTextsDtoReader', 'json', $context));
            } elseif (\array_key_exists('Texts', $data) && $data['Texts'] === null) {
                $object->setTexts(null);
            }
            if (\array_key_exists('Values', $data) && $data['Values'] !== null) {
                $object->setValues($this->denormalizer->denormalize($data['Values'], 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedValuesDtoReader', 'json', $context));
            } elseif (\array_key_exists('Values', $data) && $data['Values'] === null) {
                $object->setValues(null);
            }
            if (\array_key_exists('Dates', $data) && $data['Dates'] !== null) {
                $object->setDates($this->denormalizer->denormalize($data['Dates'], 'Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedDatesDtoReader', 'json', $context));
            } elseif (\array_key_exists('Dates', $data) && $data['Dates'] === null) {
                $object->setDates(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('decisions') && null !== $object->getDecisions()) {
                $data['Decisions'] = $this->normalizer->normalize($object->getDecisions(), 'json', $context);
            }
            if ($object->isInitialized('tables') && null !== $object->getTables()) {
                $data['Tables'] = $this->normalizer->normalize($object->getTables(), 'json', $context);
            }
            if ($object->isInitialized('texts') && null !== $object->getTexts()) {
                $data['Texts'] = $this->normalizer->normalize($object->getTexts(), 'json', $context);
            }
            if ($object->isInitialized('values') && null !== $object->getValues()) {
                $data['Values'] = $this->normalizer->normalize($object->getValues(), 'json', $context);
            }
            if ($object->isInitialized('dates') && null !== $object->getDates()) {
                $data['Dates'] = $this->normalizer->normalize($object->getDates(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsProductEntityV1UserDefinedDataDtoReader' => false];
        }
    }
}
