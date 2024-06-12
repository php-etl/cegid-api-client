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
    class CegidMtsItemsItemDataDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsItemsItemDataDto';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsItemsItemDataDto';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsItemsItemDataDto();
            if (\array_key_exists('VATRate', $data) && \is_int($data['VATRate'])) {
                $data['VATRate'] = (float) $data['VATRate'];
            }
            if (\array_key_exists('SellingPrice', $data) && \is_int($data['SellingPrice'])) {
                $data['SellingPrice'] = (float) $data['SellingPrice'];
            }
            if (\array_key_exists('CostPrice', $data) && \is_int($data['CostPrice'])) {
                $data['CostPrice'] = (float) $data['CostPrice'];
            }
            if (\array_key_exists('MaxCostPrice', $data) && \is_int($data['MaxCostPrice'])) {
                $data['MaxCostPrice'] = (float) $data['MaxCostPrice'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Origin', $data) && $data['Origin'] !== null) {
                $object->setOrigin($data['Origin']);
            } elseif (\array_key_exists('Origin', $data) && $data['Origin'] === null) {
                $object->setOrigin(null);
            }
            if (\array_key_exists('ItemCode', $data) && $data['ItemCode'] !== null) {
                $object->setItemCode($data['ItemCode']);
            } elseif (\array_key_exists('ItemCode', $data) && $data['ItemCode'] === null) {
                $object->setItemCode(null);
            }
            if (\array_key_exists('ItemCaption', $data) && $data['ItemCaption'] !== null) {
                $object->setItemCaption($data['ItemCaption']);
            } elseif (\array_key_exists('ItemCaption', $data) && $data['ItemCaption'] === null) {
                $object->setItemCaption(null);
            }
            if (\array_key_exists('InputType', $data) && $data['InputType'] !== null) {
                $object->setInputType($data['InputType']);
            } elseif (\array_key_exists('InputType', $data) && $data['InputType'] === null) {
                $object->setInputType(null);
            }
            if (\array_key_exists('CostEntryType', $data) && $data['CostEntryType'] !== null) {
                $object->setCostEntryType($data['CostEntryType']);
            } elseif (\array_key_exists('CostEntryType', $data) && $data['CostEntryType'] === null) {
                $object->setCostEntryType(null);
            }
            if (\array_key_exists('SellingEntryType', $data) && $data['SellingEntryType'] !== null) {
                $object->setSellingEntryType($data['SellingEntryType']);
            } elseif (\array_key_exists('SellingEntryType', $data) && $data['SellingEntryType'] === null) {
                $object->setSellingEntryType(null);
            }
            if (\array_key_exists('LineNumber', $data) && $data['LineNumber'] !== null) {
                $object->setLineNumber($data['LineNumber']);
            } elseif (\array_key_exists('LineNumber', $data) && $data['LineNumber'] === null) {
                $object->setLineNumber(null);
            }
            if (\array_key_exists('IsVatRecoverable', $data) && $data['IsVatRecoverable'] !== null) {
                $object->setIsVatRecoverable($data['IsVatRecoverable']);
            } elseif (\array_key_exists('IsVatRecoverable', $data) && $data['IsVatRecoverable'] === null) {
                $object->setIsVatRecoverable(null);
            }
            if (\array_key_exists('IsBillable', $data) && $data['IsBillable'] !== null) {
                $object->setIsBillable($data['IsBillable']);
            } elseif (\array_key_exists('IsBillable', $data) && $data['IsBillable'] === null) {
                $object->setIsBillable(null);
            }
            if (\array_key_exists('ActivityUnit', $data) && $data['ActivityUnit'] !== null) {
                $object->setActivityUnit($data['ActivityUnit']);
            } elseif (\array_key_exists('ActivityUnit', $data) && $data['ActivityUnit'] === null) {
                $object->setActivityUnit(null);
            }
            if (\array_key_exists('ActiviteUnitLabel', $data) && $data['ActiviteUnitLabel'] !== null) {
                $object->setActiviteUnitLabel($data['ActiviteUnitLabel']);
            } elseif (\array_key_exists('ActiviteUnitLabel', $data) && $data['ActiviteUnitLabel'] === null) {
                $object->setActiviteUnitLabel(null);
            }
            if (\array_key_exists('VATRate', $data) && $data['VATRate'] !== null) {
                $object->setVATRate($data['VATRate']);
            } elseif (\array_key_exists('VATRate', $data) && $data['VATRate'] === null) {
                $object->setVATRate(null);
            }
            if (\array_key_exists('SellingPrice', $data) && $data['SellingPrice'] !== null) {
                $object->setSellingPrice($data['SellingPrice']);
            } elseif (\array_key_exists('SellingPrice', $data) && $data['SellingPrice'] === null) {
                $object->setSellingPrice(null);
            }
            if (\array_key_exists('CostPrice', $data) && $data['CostPrice'] !== null) {
                $object->setCostPrice($data['CostPrice']);
            } elseif (\array_key_exists('CostPrice', $data) && $data['CostPrice'] === null) {
                $object->setCostPrice(null);
            }
            if (\array_key_exists('MaxCostPrice', $data) && $data['MaxCostPrice'] !== null) {
                $object->setMaxCostPrice($data['MaxCostPrice']);
            } elseif (\array_key_exists('MaxCostPrice', $data) && $data['MaxCostPrice'] === null) {
                $object->setMaxCostPrice(null);
            }
            if (\array_key_exists('Item', $data) && $data['Item'] !== null) {
                $object->setItem($data['Item']);
            } elseif (\array_key_exists('Item', $data) && $data['Item'] === null) {
                $object->setItem(null);
            }
            if (\array_key_exists('Identifier', $data) && $data['Identifier'] !== null) {
                $object->setIdentifier($data['Identifier']);
            } elseif (\array_key_exists('Identifier', $data) && $data['Identifier'] === null) {
                $object->setIdentifier(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('origin') && null !== $object->getOrigin()) {
                $data['Origin'] = $object->getOrigin();
            }
            if ($object->isInitialized('itemCode') && null !== $object->getItemCode()) {
                $data['ItemCode'] = $object->getItemCode();
            }
            if ($object->isInitialized('itemCaption') && null !== $object->getItemCaption()) {
                $data['ItemCaption'] = $object->getItemCaption();
            }
            if ($object->isInitialized('inputType') && null !== $object->getInputType()) {
                $data['InputType'] = $object->getInputType();
            }
            if ($object->isInitialized('costEntryType') && null !== $object->getCostEntryType()) {
                $data['CostEntryType'] = $object->getCostEntryType();
            }
            if ($object->isInitialized('sellingEntryType') && null !== $object->getSellingEntryType()) {
                $data['SellingEntryType'] = $object->getSellingEntryType();
            }
            if ($object->isInitialized('lineNumber') && null !== $object->getLineNumber()) {
                $data['LineNumber'] = $object->getLineNumber();
            }
            if ($object->isInitialized('isVatRecoverable') && null !== $object->getIsVatRecoverable()) {
                $data['IsVatRecoverable'] = $object->getIsVatRecoverable();
            }
            if ($object->isInitialized('isBillable') && null !== $object->getIsBillable()) {
                $data['IsBillable'] = $object->getIsBillable();
            }
            if ($object->isInitialized('activityUnit') && null !== $object->getActivityUnit()) {
                $data['ActivityUnit'] = $object->getActivityUnit();
            }
            if ($object->isInitialized('activiteUnitLabel') && null !== $object->getActiviteUnitLabel()) {
                $data['ActiviteUnitLabel'] = $object->getActiviteUnitLabel();
            }
            if ($object->isInitialized('vATRate') && null !== $object->getVATRate()) {
                $data['VATRate'] = $object->getVATRate();
            }
            if ($object->isInitialized('sellingPrice') && null !== $object->getSellingPrice()) {
                $data['SellingPrice'] = $object->getSellingPrice();
            }
            if ($object->isInitialized('costPrice') && null !== $object->getCostPrice()) {
                $data['CostPrice'] = $object->getCostPrice();
            }
            if ($object->isInitialized('maxCostPrice') && null !== $object->getMaxCostPrice()) {
                $data['MaxCostPrice'] = $object->getMaxCostPrice();
            }
            if ($object->isInitialized('item') && null !== $object->getItem()) {
                $data['Item'] = $object->getItem();
            }
            if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
                $data['Identifier'] = $object->getIdentifier();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsItemsItemDataDto' => false];
        }
    }
} else {
    class CegidMtsItemsItemDataDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsItemsItemDataDto';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsItemsItemDataDto';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsItemsItemDataDto();
            if (\array_key_exists('VATRate', $data) && \is_int($data['VATRate'])) {
                $data['VATRate'] = (float) $data['VATRate'];
            }
            if (\array_key_exists('SellingPrice', $data) && \is_int($data['SellingPrice'])) {
                $data['SellingPrice'] = (float) $data['SellingPrice'];
            }
            if (\array_key_exists('CostPrice', $data) && \is_int($data['CostPrice'])) {
                $data['CostPrice'] = (float) $data['CostPrice'];
            }
            if (\array_key_exists('MaxCostPrice', $data) && \is_int($data['MaxCostPrice'])) {
                $data['MaxCostPrice'] = (float) $data['MaxCostPrice'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Origin', $data) && $data['Origin'] !== null) {
                $object->setOrigin($data['Origin']);
            } elseif (\array_key_exists('Origin', $data) && $data['Origin'] === null) {
                $object->setOrigin(null);
            }
            if (\array_key_exists('ItemCode', $data) && $data['ItemCode'] !== null) {
                $object->setItemCode($data['ItemCode']);
            } elseif (\array_key_exists('ItemCode', $data) && $data['ItemCode'] === null) {
                $object->setItemCode(null);
            }
            if (\array_key_exists('ItemCaption', $data) && $data['ItemCaption'] !== null) {
                $object->setItemCaption($data['ItemCaption']);
            } elseif (\array_key_exists('ItemCaption', $data) && $data['ItemCaption'] === null) {
                $object->setItemCaption(null);
            }
            if (\array_key_exists('InputType', $data) && $data['InputType'] !== null) {
                $object->setInputType($data['InputType']);
            } elseif (\array_key_exists('InputType', $data) && $data['InputType'] === null) {
                $object->setInputType(null);
            }
            if (\array_key_exists('CostEntryType', $data) && $data['CostEntryType'] !== null) {
                $object->setCostEntryType($data['CostEntryType']);
            } elseif (\array_key_exists('CostEntryType', $data) && $data['CostEntryType'] === null) {
                $object->setCostEntryType(null);
            }
            if (\array_key_exists('SellingEntryType', $data) && $data['SellingEntryType'] !== null) {
                $object->setSellingEntryType($data['SellingEntryType']);
            } elseif (\array_key_exists('SellingEntryType', $data) && $data['SellingEntryType'] === null) {
                $object->setSellingEntryType(null);
            }
            if (\array_key_exists('LineNumber', $data) && $data['LineNumber'] !== null) {
                $object->setLineNumber($data['LineNumber']);
            } elseif (\array_key_exists('LineNumber', $data) && $data['LineNumber'] === null) {
                $object->setLineNumber(null);
            }
            if (\array_key_exists('IsVatRecoverable', $data) && $data['IsVatRecoverable'] !== null) {
                $object->setIsVatRecoverable($data['IsVatRecoverable']);
            } elseif (\array_key_exists('IsVatRecoverable', $data) && $data['IsVatRecoverable'] === null) {
                $object->setIsVatRecoverable(null);
            }
            if (\array_key_exists('IsBillable', $data) && $data['IsBillable'] !== null) {
                $object->setIsBillable($data['IsBillable']);
            } elseif (\array_key_exists('IsBillable', $data) && $data['IsBillable'] === null) {
                $object->setIsBillable(null);
            }
            if (\array_key_exists('ActivityUnit', $data) && $data['ActivityUnit'] !== null) {
                $object->setActivityUnit($data['ActivityUnit']);
            } elseif (\array_key_exists('ActivityUnit', $data) && $data['ActivityUnit'] === null) {
                $object->setActivityUnit(null);
            }
            if (\array_key_exists('ActiviteUnitLabel', $data) && $data['ActiviteUnitLabel'] !== null) {
                $object->setActiviteUnitLabel($data['ActiviteUnitLabel']);
            } elseif (\array_key_exists('ActiviteUnitLabel', $data) && $data['ActiviteUnitLabel'] === null) {
                $object->setActiviteUnitLabel(null);
            }
            if (\array_key_exists('VATRate', $data) && $data['VATRate'] !== null) {
                $object->setVATRate($data['VATRate']);
            } elseif (\array_key_exists('VATRate', $data) && $data['VATRate'] === null) {
                $object->setVATRate(null);
            }
            if (\array_key_exists('SellingPrice', $data) && $data['SellingPrice'] !== null) {
                $object->setSellingPrice($data['SellingPrice']);
            } elseif (\array_key_exists('SellingPrice', $data) && $data['SellingPrice'] === null) {
                $object->setSellingPrice(null);
            }
            if (\array_key_exists('CostPrice', $data) && $data['CostPrice'] !== null) {
                $object->setCostPrice($data['CostPrice']);
            } elseif (\array_key_exists('CostPrice', $data) && $data['CostPrice'] === null) {
                $object->setCostPrice(null);
            }
            if (\array_key_exists('MaxCostPrice', $data) && $data['MaxCostPrice'] !== null) {
                $object->setMaxCostPrice($data['MaxCostPrice']);
            } elseif (\array_key_exists('MaxCostPrice', $data) && $data['MaxCostPrice'] === null) {
                $object->setMaxCostPrice(null);
            }
            if (\array_key_exists('Item', $data) && $data['Item'] !== null) {
                $object->setItem($data['Item']);
            } elseif (\array_key_exists('Item', $data) && $data['Item'] === null) {
                $object->setItem(null);
            }
            if (\array_key_exists('Identifier', $data) && $data['Identifier'] !== null) {
                $object->setIdentifier($data['Identifier']);
            } elseif (\array_key_exists('Identifier', $data) && $data['Identifier'] === null) {
                $object->setIdentifier(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('origin') && null !== $object->getOrigin()) {
                $data['Origin'] = $object->getOrigin();
            }
            if ($object->isInitialized('itemCode') && null !== $object->getItemCode()) {
                $data['ItemCode'] = $object->getItemCode();
            }
            if ($object->isInitialized('itemCaption') && null !== $object->getItemCaption()) {
                $data['ItemCaption'] = $object->getItemCaption();
            }
            if ($object->isInitialized('inputType') && null !== $object->getInputType()) {
                $data['InputType'] = $object->getInputType();
            }
            if ($object->isInitialized('costEntryType') && null !== $object->getCostEntryType()) {
                $data['CostEntryType'] = $object->getCostEntryType();
            }
            if ($object->isInitialized('sellingEntryType') && null !== $object->getSellingEntryType()) {
                $data['SellingEntryType'] = $object->getSellingEntryType();
            }
            if ($object->isInitialized('lineNumber') && null !== $object->getLineNumber()) {
                $data['LineNumber'] = $object->getLineNumber();
            }
            if ($object->isInitialized('isVatRecoverable') && null !== $object->getIsVatRecoverable()) {
                $data['IsVatRecoverable'] = $object->getIsVatRecoverable();
            }
            if ($object->isInitialized('isBillable') && null !== $object->getIsBillable()) {
                $data['IsBillable'] = $object->getIsBillable();
            }
            if ($object->isInitialized('activityUnit') && null !== $object->getActivityUnit()) {
                $data['ActivityUnit'] = $object->getActivityUnit();
            }
            if ($object->isInitialized('activiteUnitLabel') && null !== $object->getActiviteUnitLabel()) {
                $data['ActiviteUnitLabel'] = $object->getActiviteUnitLabel();
            }
            if ($object->isInitialized('vATRate') && null !== $object->getVATRate()) {
                $data['VATRate'] = $object->getVATRate();
            }
            if ($object->isInitialized('sellingPrice') && null !== $object->getSellingPrice()) {
                $data['SellingPrice'] = $object->getSellingPrice();
            }
            if ($object->isInitialized('costPrice') && null !== $object->getCostPrice()) {
                $data['CostPrice'] = $object->getCostPrice();
            }
            if ($object->isInitialized('maxCostPrice') && null !== $object->getMaxCostPrice()) {
                $data['MaxCostPrice'] = $object->getMaxCostPrice();
            }
            if ($object->isInitialized('item') && null !== $object->getItem()) {
                $data['Item'] = $object->getItem();
            }
            if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
                $data['Identifier'] = $object->getIdentifier();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsItemsItemDataDto' => false];
        }
    }
}
