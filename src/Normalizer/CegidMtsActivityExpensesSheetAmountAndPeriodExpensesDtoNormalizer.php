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
    class CegidMtsActivityExpensesSheetAmountAndPeriodExpensesDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsActivityExpensesSheetAmountAndPeriodExpensesDto';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsActivityExpensesSheetAmountAndPeriodExpensesDto';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsActivityExpensesSheetAmountAndPeriodExpensesDto();
            if (\array_key_exists('AmountTaxIncluding', $data) && \is_int($data['AmountTaxIncluding'])) {
                $data['AmountTaxIncluding'] = (float) $data['AmountTaxIncluding'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PeriodStartDate', $data) && $data['PeriodStartDate'] !== null) {
                $object->setPeriodStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['PeriodStartDate']));
            } elseif (\array_key_exists('PeriodStartDate', $data) && $data['PeriodStartDate'] === null) {
                $object->setPeriodStartDate(null);
            }
            if (\array_key_exists('PeriodEndDate', $data) && $data['PeriodEndDate'] !== null) {
                $object->setPeriodEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['PeriodEndDate']));
            } elseif (\array_key_exists('PeriodEndDate', $data) && $data['PeriodEndDate'] === null) {
                $object->setPeriodEndDate(null);
            }
            if (\array_key_exists('AmountTaxIncluding', $data) && $data['AmountTaxIncluding'] !== null) {
                $object->setAmountTaxIncluding($data['AmountTaxIncluding']);
            } elseif (\array_key_exists('AmountTaxIncluding', $data) && $data['AmountTaxIncluding'] === null) {
                $object->setAmountTaxIncluding(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('periodStartDate') && null !== $object->getPeriodStartDate()) {
                $data['PeriodStartDate'] = $object->getPeriodStartDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('periodEndDate') && null !== $object->getPeriodEndDate()) {
                $data['PeriodEndDate'] = $object->getPeriodEndDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('amountTaxIncluding') && null !== $object->getAmountTaxIncluding()) {
                $data['AmountTaxIncluding'] = $object->getAmountTaxIncluding();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsActivityExpensesSheetAmountAndPeriodExpensesDto' => false];
        }
    }
} else {
    class CegidMtsActivityExpensesSheetAmountAndPeriodExpensesDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsActivityExpensesSheetAmountAndPeriodExpensesDto';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsActivityExpensesSheetAmountAndPeriodExpensesDto';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsActivityExpensesSheetAmountAndPeriodExpensesDto();
            if (\array_key_exists('AmountTaxIncluding', $data) && \is_int($data['AmountTaxIncluding'])) {
                $data['AmountTaxIncluding'] = (float) $data['AmountTaxIncluding'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PeriodStartDate', $data) && $data['PeriodStartDate'] !== null) {
                $object->setPeriodStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['PeriodStartDate']));
            } elseif (\array_key_exists('PeriodStartDate', $data) && $data['PeriodStartDate'] === null) {
                $object->setPeriodStartDate(null);
            }
            if (\array_key_exists('PeriodEndDate', $data) && $data['PeriodEndDate'] !== null) {
                $object->setPeriodEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['PeriodEndDate']));
            } elseif (\array_key_exists('PeriodEndDate', $data) && $data['PeriodEndDate'] === null) {
                $object->setPeriodEndDate(null);
            }
            if (\array_key_exists('AmountTaxIncluding', $data) && $data['AmountTaxIncluding'] !== null) {
                $object->setAmountTaxIncluding($data['AmountTaxIncluding']);
            } elseif (\array_key_exists('AmountTaxIncluding', $data) && $data['AmountTaxIncluding'] === null) {
                $object->setAmountTaxIncluding(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('periodStartDate') && null !== $object->getPeriodStartDate()) {
                $data['PeriodStartDate'] = $object->getPeriodStartDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('periodEndDate') && null !== $object->getPeriodEndDate()) {
                $data['PeriodEndDate'] = $object->getPeriodEndDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('amountTaxIncluding') && null !== $object->getAmountTaxIncluding()) {
                $data['AmountTaxIncluding'] = $object->getAmountTaxIncluding();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsActivityExpensesSheetAmountAndPeriodExpensesDto' => false];
        }
    }
}
