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
    class SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReader';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReader';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReader();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IfMatch', $data) && $data['IfMatch'] !== null) {
                $object->setIfMatch($data['IfMatch']);
            } elseif (\array_key_exists('IfMatch', $data) && $data['IfMatch'] === null) {
                $object->setIfMatch(null);
            }
            if (\array_key_exists('IfNoneMatch', $data) && $data['IfNoneMatch'] !== null) {
                $object->setIfNoneMatch($data['IfNoneMatch']);
            } elseif (\array_key_exists('IfNoneMatch', $data) && $data['IfNoneMatch'] === null) {
                $object->setIfNoneMatch(null);
            }
            if (\array_key_exists('Context', $data) && $data['Context'] !== null) {
                $object->setContext($this->denormalizer->denormalize($data['Context'], 'Cegid\\Api\\Model\\SystemWebODataODataQueryContext', 'json', $context));
            } elseif (\array_key_exists('Context', $data) && $data['Context'] === null) {
                $object->setContext(null);
            }
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReaderRequest', 'json', $context));
            } elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('RawValues', $data) && $data['RawValues'] !== null) {
                $object->setRawValues($this->denormalizer->denormalize($data['RawValues'], 'Cegid\\Api\\Model\\SystemWebODataQueryODataRawQueryOptions', 'json', $context));
            } elseif (\array_key_exists('RawValues', $data) && $data['RawValues'] === null) {
                $object->setRawValues(null);
            }
            if (\array_key_exists('SelectExpand', $data) && $data['SelectExpand'] !== null) {
                $object->setSelectExpand($this->denormalizer->denormalize($data['SelectExpand'], 'Cegid\\Api\\Model\\SystemWebODataQuerySelectExpandQueryOption', 'json', $context));
            } elseif (\array_key_exists('SelectExpand', $data) && $data['SelectExpand'] === null) {
                $object->setSelectExpand(null);
            }
            if (\array_key_exists('Apply', $data) && $data['Apply'] !== null) {
                $object->setApply($this->denormalizer->denormalize($data['Apply'], 'Cegid\\Api\\Model\\SystemWebODataQueryApplyQueryOption', 'json', $context));
            } elseif (\array_key_exists('Apply', $data) && $data['Apply'] === null) {
                $object->setApply(null);
            }
            if (\array_key_exists('Filter', $data) && $data['Filter'] !== null) {
                $object->setFilter($this->denormalizer->denormalize($data['Filter'], 'Cegid\\Api\\Model\\SystemWebODataQueryFilterQueryOption', 'json', $context));
            } elseif (\array_key_exists('Filter', $data) && $data['Filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('OrderBy', $data) && $data['OrderBy'] !== null) {
                $object->setOrderBy($this->denormalizer->denormalize($data['OrderBy'], 'Cegid\\Api\\Model\\SystemWebODataQueryOrderByQueryOption', 'json', $context));
            } elseif (\array_key_exists('OrderBy', $data) && $data['OrderBy'] === null) {
                $object->setOrderBy(null);
            }
            if (\array_key_exists('Skip', $data) && $data['Skip'] !== null) {
                $object->setSkip($this->denormalizer->denormalize($data['Skip'], 'Cegid\\Api\\Model\\SystemWebODataQuerySkipQueryOption', 'json', $context));
            } elseif (\array_key_exists('Skip', $data) && $data['Skip'] === null) {
                $object->setSkip(null);
            }
            if (\array_key_exists('Top', $data) && $data['Top'] !== null) {
                $object->setTop($this->denormalizer->denormalize($data['Top'], 'Cegid\\Api\\Model\\SystemWebODataQueryTopQueryOption', 'json', $context));
            } elseif (\array_key_exists('Top', $data) && $data['Top'] === null) {
                $object->setTop(null);
            }
            if (\array_key_exists('Count', $data) && $data['Count'] !== null) {
                $object->setCount($this->denormalizer->denormalize($data['Count'], 'Cegid\\Api\\Model\\SystemWebODataQueryCountQueryOption', 'json', $context));
            } elseif (\array_key_exists('Count', $data) && $data['Count'] === null) {
                $object->setCount(null);
            }
            if (\array_key_exists('Validator', $data) && $data['Validator'] !== null) {
                $object->setValidator($this->denormalizer->denormalize($data['Validator'], 'Cegid\\Api\\Model\\SystemWebODataQueryValidatorsODataQueryValidator', 'json', $context));
            } elseif (\array_key_exists('Validator', $data) && $data['Validator'] === null) {
                $object->setValidator(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('context') && null !== $object->getContext()) {
                $data['Context'] = $this->normalizer->normalize($object->getContext(), 'json', $context);
            }
            if ($object->isInitialized('rawValues') && null !== $object->getRawValues()) {
                $data['RawValues'] = $this->normalizer->normalize($object->getRawValues(), 'json', $context);
            }
            if ($object->isInitialized('selectExpand') && null !== $object->getSelectExpand()) {
                $data['SelectExpand'] = $this->normalizer->normalize($object->getSelectExpand(), 'json', $context);
            }
            if ($object->isInitialized('apply') && null !== $object->getApply()) {
                $data['Apply'] = $this->normalizer->normalize($object->getApply(), 'json', $context);
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['Filter'] = $this->normalizer->normalize($object->getFilter(), 'json', $context);
            }
            if ($object->isInitialized('orderBy') && null !== $object->getOrderBy()) {
                $data['OrderBy'] = $this->normalizer->normalize($object->getOrderBy(), 'json', $context);
            }
            if ($object->isInitialized('skip') && null !== $object->getSkip()) {
                $data['Skip'] = $this->normalizer->normalize($object->getSkip(), 'json', $context);
            }
            if ($object->isInitialized('top') && null !== $object->getTop()) {
                $data['Top'] = $this->normalizer->normalize($object->getTop(), 'json', $context);
            }
            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['Count'] = $this->normalizer->normalize($object->getCount(), 'json', $context);
            }
            if ($object->isInitialized('validator') && null !== $object->getValidator()) {
                $data['Validator'] = $this->normalizer->normalize($object->getValidator(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReader' => false];
        }
    }
} else {
    class SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReader';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReader';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReader();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IfMatch', $data) && $data['IfMatch'] !== null) {
                $object->setIfMatch($data['IfMatch']);
            } elseif (\array_key_exists('IfMatch', $data) && $data['IfMatch'] === null) {
                $object->setIfMatch(null);
            }
            if (\array_key_exists('IfNoneMatch', $data) && $data['IfNoneMatch'] !== null) {
                $object->setIfNoneMatch($data['IfNoneMatch']);
            } elseif (\array_key_exists('IfNoneMatch', $data) && $data['IfNoneMatch'] === null) {
                $object->setIfNoneMatch(null);
            }
            if (\array_key_exists('Context', $data) && $data['Context'] !== null) {
                $object->setContext($this->denormalizer->denormalize($data['Context'], 'Cegid\\Api\\Model\\SystemWebODataODataQueryContext', 'json', $context));
            } elseif (\array_key_exists('Context', $data) && $data['Context'] === null) {
                $object->setContext(null);
            }
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReaderRequest', 'json', $context));
            } elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('RawValues', $data) && $data['RawValues'] !== null) {
                $object->setRawValues($this->denormalizer->denormalize($data['RawValues'], 'Cegid\\Api\\Model\\SystemWebODataQueryODataRawQueryOptions', 'json', $context));
            } elseif (\array_key_exists('RawValues', $data) && $data['RawValues'] === null) {
                $object->setRawValues(null);
            }
            if (\array_key_exists('SelectExpand', $data) && $data['SelectExpand'] !== null) {
                $object->setSelectExpand($this->denormalizer->denormalize($data['SelectExpand'], 'Cegid\\Api\\Model\\SystemWebODataQuerySelectExpandQueryOption', 'json', $context));
            } elseif (\array_key_exists('SelectExpand', $data) && $data['SelectExpand'] === null) {
                $object->setSelectExpand(null);
            }
            if (\array_key_exists('Apply', $data) && $data['Apply'] !== null) {
                $object->setApply($this->denormalizer->denormalize($data['Apply'], 'Cegid\\Api\\Model\\SystemWebODataQueryApplyQueryOption', 'json', $context));
            } elseif (\array_key_exists('Apply', $data) && $data['Apply'] === null) {
                $object->setApply(null);
            }
            if (\array_key_exists('Filter', $data) && $data['Filter'] !== null) {
                $object->setFilter($this->denormalizer->denormalize($data['Filter'], 'Cegid\\Api\\Model\\SystemWebODataQueryFilterQueryOption', 'json', $context));
            } elseif (\array_key_exists('Filter', $data) && $data['Filter'] === null) {
                $object->setFilter(null);
            }
            if (\array_key_exists('OrderBy', $data) && $data['OrderBy'] !== null) {
                $object->setOrderBy($this->denormalizer->denormalize($data['OrderBy'], 'Cegid\\Api\\Model\\SystemWebODataQueryOrderByQueryOption', 'json', $context));
            } elseif (\array_key_exists('OrderBy', $data) && $data['OrderBy'] === null) {
                $object->setOrderBy(null);
            }
            if (\array_key_exists('Skip', $data) && $data['Skip'] !== null) {
                $object->setSkip($this->denormalizer->denormalize($data['Skip'], 'Cegid\\Api\\Model\\SystemWebODataQuerySkipQueryOption', 'json', $context));
            } elseif (\array_key_exists('Skip', $data) && $data['Skip'] === null) {
                $object->setSkip(null);
            }
            if (\array_key_exists('Top', $data) && $data['Top'] !== null) {
                $object->setTop($this->denormalizer->denormalize($data['Top'], 'Cegid\\Api\\Model\\SystemWebODataQueryTopQueryOption', 'json', $context));
            } elseif (\array_key_exists('Top', $data) && $data['Top'] === null) {
                $object->setTop(null);
            }
            if (\array_key_exists('Count', $data) && $data['Count'] !== null) {
                $object->setCount($this->denormalizer->denormalize($data['Count'], 'Cegid\\Api\\Model\\SystemWebODataQueryCountQueryOption', 'json', $context));
            } elseif (\array_key_exists('Count', $data) && $data['Count'] === null) {
                $object->setCount(null);
            }
            if (\array_key_exists('Validator', $data) && $data['Validator'] !== null) {
                $object->setValidator($this->denormalizer->denormalize($data['Validator'], 'Cegid\\Api\\Model\\SystemWebODataQueryValidatorsODataQueryValidator', 'json', $context));
            } elseif (\array_key_exists('Validator', $data) && $data['Validator'] === null) {
                $object->setValidator(null);
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
            if ($object->isInitialized('rawValues') && null !== $object->getRawValues()) {
                $data['RawValues'] = $this->normalizer->normalize($object->getRawValues(), 'json', $context);
            }
            if ($object->isInitialized('selectExpand') && null !== $object->getSelectExpand()) {
                $data['SelectExpand'] = $this->normalizer->normalize($object->getSelectExpand(), 'json', $context);
            }
            if ($object->isInitialized('apply') && null !== $object->getApply()) {
                $data['Apply'] = $this->normalizer->normalize($object->getApply(), 'json', $context);
            }
            if ($object->isInitialized('filter') && null !== $object->getFilter()) {
                $data['Filter'] = $this->normalizer->normalize($object->getFilter(), 'json', $context);
            }
            if ($object->isInitialized('orderBy') && null !== $object->getOrderBy()) {
                $data['OrderBy'] = $this->normalizer->normalize($object->getOrderBy(), 'json', $context);
            }
            if ($object->isInitialized('skip') && null !== $object->getSkip()) {
                $data['Skip'] = $this->normalizer->normalize($object->getSkip(), 'json', $context);
            }
            if ($object->isInitialized('top') && null !== $object->getTop()) {
                $data['Top'] = $this->normalizer->normalize($object->getTop(), 'json', $context);
            }
            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['Count'] = $this->normalizer->normalize($object->getCount(), 'json', $context);
            }
            if ($object->isInitialized('validator') && null !== $object->getValidator()) {
                $data['Validator'] = $this->normalizer->normalize($object->getValidator(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\SystemWebODataQueryODataQueryOptionsCegidMtsAddressesEntityV1CustomerAddressDtoReader' => false];
        }
    }
}
