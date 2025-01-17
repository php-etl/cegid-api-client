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
    class CegidMtsActionV1ActionKeyThirdPartyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsActionV1ActionKeyThirdParty';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsActionV1ActionKeyThirdParty';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsActionV1ActionKeyThirdParty();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ThirdParty', $data) && $data['ThirdParty'] !== null) {
                $object->setThirdParty($data['ThirdParty']);
            } elseif (\array_key_exists('ThirdParty', $data) && $data['ThirdParty'] === null) {
                $object->setThirdParty(null);
            }
            if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
                $object->setNumber($data['Number']);
            } elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
                $object->setNumber(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['ThirdParty'] = $object->getThirdParty();
            $data['Number'] = $object->getNumber();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsActionV1ActionKeyThirdParty' => false];
        }
    }
} else {
    class CegidMtsActionV1ActionKeyThirdPartyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsActionV1ActionKeyThirdParty';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsActionV1ActionKeyThirdParty';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsActionV1ActionKeyThirdParty();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ThirdParty', $data) && $data['ThirdParty'] !== null) {
                $object->setThirdParty($data['ThirdParty']);
            } elseif (\array_key_exists('ThirdParty', $data) && $data['ThirdParty'] === null) {
                $object->setThirdParty(null);
            }
            if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
                $object->setNumber($data['Number']);
            } elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
                $object->setNumber(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['ThirdParty'] = $object->getThirdParty();
            $data['Number'] = $object->getNumber();

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsActionV1ActionKeyThirdParty' => false];
        }
    }
}
