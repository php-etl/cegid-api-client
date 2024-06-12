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
    class CegidMtsThirdPartyOutstandingOutstandingDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsThirdPartyOutstandingOutstandingData';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsThirdPartyOutstandingOutstandingData';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsThirdPartyOutstandingOutstandingData();
            if (\array_key_exists('RiskAmount', $data) && \is_int($data['RiskAmount'])) {
                $data['RiskAmount'] = (float) $data['RiskAmount'];
            }
            if (\array_key_exists('Requested', $data) && \is_int($data['Requested'])) {
                $data['Requested'] = (float) $data['Requested'];
            }
            if (\array_key_exists('Allowed', $data) && \is_int($data['Allowed'])) {
                $data['Allowed'] = (float) $data['Allowed'];
            }
            if (\array_key_exists('Maximum', $data) && \is_int($data['Maximum'])) {
                $data['Maximum'] = (float) $data['Maximum'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AmountsDetail', $data) && $data['AmountsDetail'] !== null) {
                $object->setAmountsDetail($this->denormalizer->denormalize($data['AmountsDetail'], 'Cegid\\Api\\Model\\CegidMtsThirdPartyOutstandingOutstandingAmounts', 'json', $context));
            } elseif (\array_key_exists('AmountsDetail', $data) && $data['AmountsDetail'] === null) {
                $object->setAmountsDetail(null);
            }
            if (\array_key_exists('RiskAmount', $data) && $data['RiskAmount'] !== null) {
                $object->setRiskAmount($data['RiskAmount']);
            } elseif (\array_key_exists('RiskAmount', $data) && $data['RiskAmount'] === null) {
                $object->setRiskAmount(null);
            }
            if (\array_key_exists('RiskState', $data) && $data['RiskState'] !== null) {
                $object->setRiskState($data['RiskState']);
            } elseif (\array_key_exists('RiskState', $data) && $data['RiskState'] === null) {
                $object->setRiskState(null);
            }
            if (\array_key_exists('Requested', $data) && $data['Requested'] !== null) {
                $object->setRequested($data['Requested']);
            } elseif (\array_key_exists('Requested', $data) && $data['Requested'] === null) {
                $object->setRequested(null);
            }
            if (\array_key_exists('Allowed', $data) && $data['Allowed'] !== null) {
                $object->setAllowed($data['Allowed']);
            } elseif (\array_key_exists('Allowed', $data) && $data['Allowed'] === null) {
                $object->setAllowed(null);
            }
            if (\array_key_exists('Maximum', $data) && $data['Maximum'] !== null) {
                $object->setMaximum($data['Maximum']);
            } elseif (\array_key_exists('Maximum', $data) && $data['Maximum'] === null) {
                $object->setMaximum(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('amountsDetail') && null !== $object->getAmountsDetail()) {
                $data['AmountsDetail'] = $this->normalizer->normalize($object->getAmountsDetail(), 'json', $context);
            }
            if ($object->isInitialized('riskAmount') && null !== $object->getRiskAmount()) {
                $data['RiskAmount'] = $object->getRiskAmount();
            }
            if ($object->isInitialized('riskState') && null !== $object->getRiskState()) {
                $data['RiskState'] = $object->getRiskState();
            }
            if ($object->isInitialized('requested') && null !== $object->getRequested()) {
                $data['Requested'] = $object->getRequested();
            }
            if ($object->isInitialized('allowed') && null !== $object->getAllowed()) {
                $data['Allowed'] = $object->getAllowed();
            }
            if ($object->isInitialized('maximum') && null !== $object->getMaximum()) {
                $data['Maximum'] = $object->getMaximum();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsThirdPartyOutstandingOutstandingData' => false];
        }
    }
} else {
    class CegidMtsThirdPartyOutstandingOutstandingDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsThirdPartyOutstandingOutstandingData';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsThirdPartyOutstandingOutstandingData';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsThirdPartyOutstandingOutstandingData();
            if (\array_key_exists('RiskAmount', $data) && \is_int($data['RiskAmount'])) {
                $data['RiskAmount'] = (float) $data['RiskAmount'];
            }
            if (\array_key_exists('Requested', $data) && \is_int($data['Requested'])) {
                $data['Requested'] = (float) $data['Requested'];
            }
            if (\array_key_exists('Allowed', $data) && \is_int($data['Allowed'])) {
                $data['Allowed'] = (float) $data['Allowed'];
            }
            if (\array_key_exists('Maximum', $data) && \is_int($data['Maximum'])) {
                $data['Maximum'] = (float) $data['Maximum'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AmountsDetail', $data) && $data['AmountsDetail'] !== null) {
                $object->setAmountsDetail($this->denormalizer->denormalize($data['AmountsDetail'], 'Cegid\\Api\\Model\\CegidMtsThirdPartyOutstandingOutstandingAmounts', 'json', $context));
            } elseif (\array_key_exists('AmountsDetail', $data) && $data['AmountsDetail'] === null) {
                $object->setAmountsDetail(null);
            }
            if (\array_key_exists('RiskAmount', $data) && $data['RiskAmount'] !== null) {
                $object->setRiskAmount($data['RiskAmount']);
            } elseif (\array_key_exists('RiskAmount', $data) && $data['RiskAmount'] === null) {
                $object->setRiskAmount(null);
            }
            if (\array_key_exists('RiskState', $data) && $data['RiskState'] !== null) {
                $object->setRiskState($data['RiskState']);
            } elseif (\array_key_exists('RiskState', $data) && $data['RiskState'] === null) {
                $object->setRiskState(null);
            }
            if (\array_key_exists('Requested', $data) && $data['Requested'] !== null) {
                $object->setRequested($data['Requested']);
            } elseif (\array_key_exists('Requested', $data) && $data['Requested'] === null) {
                $object->setRequested(null);
            }
            if (\array_key_exists('Allowed', $data) && $data['Allowed'] !== null) {
                $object->setAllowed($data['Allowed']);
            } elseif (\array_key_exists('Allowed', $data) && $data['Allowed'] === null) {
                $object->setAllowed(null);
            }
            if (\array_key_exists('Maximum', $data) && $data['Maximum'] !== null) {
                $object->setMaximum($data['Maximum']);
            } elseif (\array_key_exists('Maximum', $data) && $data['Maximum'] === null) {
                $object->setMaximum(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('amountsDetail') && null !== $object->getAmountsDetail()) {
                $data['AmountsDetail'] = $this->normalizer->normalize($object->getAmountsDetail(), 'json', $context);
            }
            if ($object->isInitialized('riskAmount') && null !== $object->getRiskAmount()) {
                $data['RiskAmount'] = $object->getRiskAmount();
            }
            if ($object->isInitialized('riskState') && null !== $object->getRiskState()) {
                $data['RiskState'] = $object->getRiskState();
            }
            if ($object->isInitialized('requested') && null !== $object->getRequested()) {
                $data['Requested'] = $object->getRequested();
            }
            if ($object->isInitialized('allowed') && null !== $object->getAllowed()) {
                $data['Allowed'] = $object->getAllowed();
            }
            if ($object->isInitialized('maximum') && null !== $object->getMaximum()) {
                $data['Maximum'] = $object->getMaximum();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsThirdPartyOutstandingOutstandingData' => false];
        }
    }
}
