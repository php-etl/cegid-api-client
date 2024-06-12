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
    class CegidSprintCommonServicesModelsCommonServiceResultDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidSprintCommonServicesModelsCommonServiceResultDto';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidSprintCommonServicesModelsCommonServiceResultDto';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidSprintCommonServicesModelsCommonServiceResultDto();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IsSuccess', $data) && $data['IsSuccess'] !== null) {
                $object->setIsSuccess($data['IsSuccess']);
            } elseif (\array_key_exists('IsSuccess', $data) && $data['IsSuccess'] === null) {
                $object->setIsSuccess(null);
            }
            if (\array_key_exists('Errors', $data) && $data['Errors'] !== null) {
                $values = [];
                foreach ($data['Errors'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Cegid\\Api\\Model\\CegidSprintCommonServicesModelsCommonCodeMessageDto', 'json', $context);
                }
                $object->setErrors($values);
            } elseif (\array_key_exists('Errors', $data) && $data['Errors'] === null) {
                $object->setErrors(null);
            }
            if (\array_key_exists('Warnings', $data) && $data['Warnings'] !== null) {
                $values_1 = [];
                foreach ($data['Warnings'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Cegid\\Api\\Model\\CegidSprintCommonServicesModelsCommonCodeMessageDto', 'json', $context);
                }
                $object->setWarnings($values_1);
            } elseif (\array_key_exists('Warnings', $data) && $data['Warnings'] === null) {
                $object->setWarnings(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('isSuccess') && null !== $object->getIsSuccess()) {
                $data['IsSuccess'] = $object->getIsSuccess();
            }
            if ($object->isInitialized('errors') && null !== $object->getErrors()) {
                $values = [];
                foreach ($object->getErrors() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Errors'] = $values;
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_1 = [];
                foreach ($object->getWarnings() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Warnings'] = $values_1;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidSprintCommonServicesModelsCommonServiceResultDto' => false];
        }
    }
} else {
    class CegidSprintCommonServicesModelsCommonServiceResultDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidSprintCommonServicesModelsCommonServiceResultDto';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidSprintCommonServicesModelsCommonServiceResultDto';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidSprintCommonServicesModelsCommonServiceResultDto();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IsSuccess', $data) && $data['IsSuccess'] !== null) {
                $object->setIsSuccess($data['IsSuccess']);
            } elseif (\array_key_exists('IsSuccess', $data) && $data['IsSuccess'] === null) {
                $object->setIsSuccess(null);
            }
            if (\array_key_exists('Errors', $data) && $data['Errors'] !== null) {
                $values = [];
                foreach ($data['Errors'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Cegid\\Api\\Model\\CegidSprintCommonServicesModelsCommonCodeMessageDto', 'json', $context);
                }
                $object->setErrors($values);
            } elseif (\array_key_exists('Errors', $data) && $data['Errors'] === null) {
                $object->setErrors(null);
            }
            if (\array_key_exists('Warnings', $data) && $data['Warnings'] !== null) {
                $values_1 = [];
                foreach ($data['Warnings'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Cegid\\Api\\Model\\CegidSprintCommonServicesModelsCommonCodeMessageDto', 'json', $context);
                }
                $object->setWarnings($values_1);
            } elseif (\array_key_exists('Warnings', $data) && $data['Warnings'] === null) {
                $object->setWarnings(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('isSuccess') && null !== $object->getIsSuccess()) {
                $data['IsSuccess'] = $object->getIsSuccess();
            }
            if ($object->isInitialized('errors') && null !== $object->getErrors()) {
                $values = [];
                foreach ($object->getErrors() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Errors'] = $values;
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_1 = [];
                foreach ($object->getWarnings() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Warnings'] = $values_1;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidSprintCommonServicesModelsCommonServiceResultDto' => false];
        }
    }
}