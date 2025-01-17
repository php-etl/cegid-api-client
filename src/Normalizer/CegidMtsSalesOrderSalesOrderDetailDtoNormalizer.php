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
    class CegidMtsSalesOrderSalesOrderDetailDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDetailDto';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDetailDto';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsSalesOrderSalesOrderDetailDto();
            if (\array_key_exists('OrderedQuantity', $data) && \is_int($data['OrderedQuantity'])) {
                $data['OrderedQuantity'] = (float) $data['OrderedQuantity'];
            }
            if (\array_key_exists('RemainderQuantityForDelivery', $data) && \is_int($data['RemainderQuantityForDelivery'])) {
                $data['RemainderQuantityForDelivery'] = (float) $data['RemainderQuantityForDelivery'];
            }
            if (\array_key_exists('TaxExcludedUnitPriceInCurrency', $data) && \is_int($data['TaxExcludedUnitPriceInCurrency'])) {
                $data['TaxExcludedUnitPriceInCurrency'] = (float) $data['TaxExcludedUnitPriceInCurrency'];
            }
            if (\array_key_exists('TaxExcludedAmountInCurrency', $data) && \is_int($data['TaxExcludedAmountInCurrency'])) {
                $data['TaxExcludedAmountInCurrency'] = (float) $data['TaxExcludedAmountInCurrency'];
            }
            if (\array_key_exists('TaxIncludedAmountInCurrency', $data) && \is_int($data['TaxIncludedAmountInCurrency'])) {
                $data['TaxIncludedAmountInCurrency'] = (float) $data['TaxIncludedAmountInCurrency'];
            }
            if (\array_key_exists('RebatePercent', $data) && \is_int($data['RebatePercent'])) {
                $data['RebatePercent'] = (float) $data['RebatePercent'];
            }
            if (\array_key_exists('TotalTax1InCurrency', $data) && \is_int($data['TotalTax1InCurrency'])) {
                $data['TotalTax1InCurrency'] = (float) $data['TotalTax1InCurrency'];
            }
            if (\array_key_exists('SalesTaxeRate', $data) && \is_int($data['SalesTaxeRate'])) {
                $data['SalesTaxeRate'] = (float) $data['SalesTaxeRate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DocumentType', $data) && $data['DocumentType'] !== null) {
                $object->setDocumentType($data['DocumentType']);
            } elseif (\array_key_exists('DocumentType', $data) && $data['DocumentType'] === null) {
                $object->setDocumentType(null);
            }
            if (\array_key_exists('DocumentStub', $data) && $data['DocumentStub'] !== null) {
                $object->setDocumentStub($data['DocumentStub']);
            } elseif (\array_key_exists('DocumentStub', $data) && $data['DocumentStub'] === null) {
                $object->setDocumentStub(null);
            }
            if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
                $object->setNumber($data['Number']);
            } elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
                $object->setNumber(null);
            }
            if (\array_key_exists('Index', $data) && $data['Index'] !== null) {
                $object->setIndex($data['Index']);
            } elseif (\array_key_exists('Index', $data) && $data['Index'] === null) {
                $object->setIndex(null);
            }
            if (\array_key_exists('LineNumber', $data) && $data['LineNumber'] !== null) {
                $object->setLineNumber($data['LineNumber']);
            } elseif (\array_key_exists('LineNumber', $data) && $data['LineNumber'] === null) {
                $object->setLineNumber(null);
            }
            if (\array_key_exists('ProductCode', $data) && $data['ProductCode'] !== null) {
                $object->setProductCode($data['ProductCode']);
            } elseif (\array_key_exists('ProductCode', $data) && $data['ProductCode'] === null) {
                $object->setProductCode(null);
            }
            if (\array_key_exists('ProductId', $data) && $data['ProductId'] !== null) {
                $object->setProductId($data['ProductId']);
            } elseif (\array_key_exists('ProductId', $data) && $data['ProductId'] === null) {
                $object->setProductId(null);
            }
            if (\array_key_exists('ProductLabel', $data) && $data['ProductLabel'] !== null) {
                $object->setProductLabel($data['ProductLabel']);
            } elseif (\array_key_exists('ProductLabel', $data) && $data['ProductLabel'] === null) {
                $object->setProductLabel(null);
            }
            if (\array_key_exists('OrderedQuantity', $data) && $data['OrderedQuantity'] !== null) {
                $object->setOrderedQuantity($data['OrderedQuantity']);
            } elseif (\array_key_exists('OrderedQuantity', $data) && $data['OrderedQuantity'] === null) {
                $object->setOrderedQuantity(null);
            }
            if (\array_key_exists('RemainderQuantityForDelivery', $data) && $data['RemainderQuantityForDelivery'] !== null) {
                $object->setRemainderQuantityForDelivery($data['RemainderQuantityForDelivery']);
            } elseif (\array_key_exists('RemainderQuantityForDelivery', $data) && $data['RemainderQuantityForDelivery'] === null) {
                $object->setRemainderQuantityForDelivery(null);
            }
            if (\array_key_exists('TaxExcludedUnitPriceInCurrency', $data) && $data['TaxExcludedUnitPriceInCurrency'] !== null) {
                $object->setTaxExcludedUnitPriceInCurrency($data['TaxExcludedUnitPriceInCurrency']);
            } elseif (\array_key_exists('TaxExcludedUnitPriceInCurrency', $data) && $data['TaxExcludedUnitPriceInCurrency'] === null) {
                $object->setTaxExcludedUnitPriceInCurrency(null);
            }
            if (\array_key_exists('TaxExcludedAmountInCurrency', $data) && $data['TaxExcludedAmountInCurrency'] !== null) {
                $object->setTaxExcludedAmountInCurrency($data['TaxExcludedAmountInCurrency']);
            } elseif (\array_key_exists('TaxExcludedAmountInCurrency', $data) && $data['TaxExcludedAmountInCurrency'] === null) {
                $object->setTaxExcludedAmountInCurrency(null);
            }
            if (\array_key_exists('TaxIncludedAmountInCurrency', $data) && $data['TaxIncludedAmountInCurrency'] !== null) {
                $object->setTaxIncludedAmountInCurrency($data['TaxIncludedAmountInCurrency']);
            } elseif (\array_key_exists('TaxIncludedAmountInCurrency', $data) && $data['TaxIncludedAmountInCurrency'] === null) {
                $object->setTaxIncludedAmountInCurrency(null);
            }
            if (\array_key_exists('DeliveryDate', $data) && $data['DeliveryDate'] !== null) {
                $object->setDeliveryDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['DeliveryDate']));
            } elseif (\array_key_exists('DeliveryDate', $data) && $data['DeliveryDate'] === null) {
                $object->setDeliveryDate(null);
            }
            if (\array_key_exists('TermsOfSpecialPrice', $data) && $data['TermsOfSpecialPrice'] !== null) {
                $object->setTermsOfSpecialPrice($data['TermsOfSpecialPrice']);
            } elseif (\array_key_exists('TermsOfSpecialPrice', $data) && $data['TermsOfSpecialPrice'] === null) {
                $object->setTermsOfSpecialPrice(null);
            }
            if (\array_key_exists('RebatePercent', $data) && $data['RebatePercent'] !== null) {
                $object->setRebatePercent($data['RebatePercent']);
            } elseif (\array_key_exists('RebatePercent', $data) && $data['RebatePercent'] === null) {
                $object->setRebatePercent(null);
            }
            if (\array_key_exists('TaxFamily1Code', $data) && $data['TaxFamily1Code'] !== null) {
                $object->setTaxFamily1Code($data['TaxFamily1Code']);
            } elseif (\array_key_exists('TaxFamily1Code', $data) && $data['TaxFamily1Code'] === null) {
                $object->setTaxFamily1Code(null);
            }
            if (\array_key_exists('TaxFamily1Label', $data) && $data['TaxFamily1Label'] !== null) {
                $object->setTaxFamily1Label($data['TaxFamily1Label']);
            } elseif (\array_key_exists('TaxFamily1Label', $data) && $data['TaxFamily1Label'] === null) {
                $object->setTaxFamily1Label(null);
            }
            if (\array_key_exists('TotalTax1InCurrency', $data) && $data['TotalTax1InCurrency'] !== null) {
                $object->setTotalTax1InCurrency($data['TotalTax1InCurrency']);
            } elseif (\array_key_exists('TotalTax1InCurrency', $data) && $data['TotalTax1InCurrency'] === null) {
                $object->setTotalTax1InCurrency(null);
            }
            if (\array_key_exists('SalesTaxeRate', $data) && $data['SalesTaxeRate'] !== null) {
                $object->setSalesTaxeRate($data['SalesTaxeRate']);
            } elseif (\array_key_exists('SalesTaxeRate', $data) && $data['SalesTaxeRate'] === null) {
                $object->setSalesTaxeRate(null);
            }
            if (\array_key_exists('NotePad', $data) && $data['NotePad'] !== null) {
                $object->setNotePad($data['NotePad']);
            } elseif (\array_key_exists('NotePad', $data) && $data['NotePad'] === null) {
                $object->setNotePad(null);
            }
            if (\array_key_exists('ProductUserDefinedData', $data) && $data['ProductUserDefinedData'] !== null) {
                $object->setProductUserDefinedData($this->denormalizer->denormalize($data['ProductUserDefinedData'], 'Cegid\\Api\\Model\\CegidMtsSalesOrderUserDefinedDataDto', 'json', $context));
            } elseif (\array_key_exists('ProductUserDefinedData', $data) && $data['ProductUserDefinedData'] === null) {
                $object->setProductUserDefinedData(null);
            }
            if (\array_key_exists('AdditionalInformation', $data) && $data['AdditionalInformation'] !== null) {
                $object->setAdditionalInformation($this->denormalizer->denormalize($data['AdditionalInformation'], 'Cegid\\Api\\Model\\CegidMtsSalesOrderLineAdditionalInformationDto', 'json', $context));
            } elseif (\array_key_exists('AdditionalInformation', $data) && $data['AdditionalInformation'] === null) {
                $object->setAdditionalInformation(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
                $data['DocumentType'] = $object->getDocumentType();
            }
            if ($object->isInitialized('documentStub') && null !== $object->getDocumentStub()) {
                $data['DocumentStub'] = $object->getDocumentStub();
            }
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['Number'] = $object->getNumber();
            }
            if ($object->isInitialized('index') && null !== $object->getIndex()) {
                $data['Index'] = $object->getIndex();
            }
            if ($object->isInitialized('lineNumber') && null !== $object->getLineNumber()) {
                $data['LineNumber'] = $object->getLineNumber();
            }
            if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
                $data['ProductCode'] = $object->getProductCode();
            }
            if ($object->isInitialized('productId') && null !== $object->getProductId()) {
                $data['ProductId'] = $object->getProductId();
            }
            if ($object->isInitialized('productLabel') && null !== $object->getProductLabel()) {
                $data['ProductLabel'] = $object->getProductLabel();
            }
            if ($object->isInitialized('orderedQuantity') && null !== $object->getOrderedQuantity()) {
                $data['OrderedQuantity'] = $object->getOrderedQuantity();
            }
            if ($object->isInitialized('remainderQuantityForDelivery') && null !== $object->getRemainderQuantityForDelivery()) {
                $data['RemainderQuantityForDelivery'] = $object->getRemainderQuantityForDelivery();
            }
            if ($object->isInitialized('taxExcludedUnitPriceInCurrency') && null !== $object->getTaxExcludedUnitPriceInCurrency()) {
                $data['TaxExcludedUnitPriceInCurrency'] = $object->getTaxExcludedUnitPriceInCurrency();
            }
            if ($object->isInitialized('taxExcludedAmountInCurrency') && null !== $object->getTaxExcludedAmountInCurrency()) {
                $data['TaxExcludedAmountInCurrency'] = $object->getTaxExcludedAmountInCurrency();
            }
            if ($object->isInitialized('taxIncludedAmountInCurrency') && null !== $object->getTaxIncludedAmountInCurrency()) {
                $data['TaxIncludedAmountInCurrency'] = $object->getTaxIncludedAmountInCurrency();
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $data['DeliveryDate'] = $object->getDeliveryDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('termsOfSpecialPrice') && null !== $object->getTermsOfSpecialPrice()) {
                $data['TermsOfSpecialPrice'] = $object->getTermsOfSpecialPrice();
            }
            if ($object->isInitialized('rebatePercent') && null !== $object->getRebatePercent()) {
                $data['RebatePercent'] = $object->getRebatePercent();
            }
            if ($object->isInitialized('taxFamily1Code') && null !== $object->getTaxFamily1Code()) {
                $data['TaxFamily1Code'] = $object->getTaxFamily1Code();
            }
            if ($object->isInitialized('taxFamily1Label') && null !== $object->getTaxFamily1Label()) {
                $data['TaxFamily1Label'] = $object->getTaxFamily1Label();
            }
            if ($object->isInitialized('totalTax1InCurrency') && null !== $object->getTotalTax1InCurrency()) {
                $data['TotalTax1InCurrency'] = $object->getTotalTax1InCurrency();
            }
            if ($object->isInitialized('salesTaxeRate') && null !== $object->getSalesTaxeRate()) {
                $data['SalesTaxeRate'] = $object->getSalesTaxeRate();
            }
            if ($object->isInitialized('notePad') && null !== $object->getNotePad()) {
                $data['NotePad'] = $object->getNotePad();
            }
            if ($object->isInitialized('productUserDefinedData') && null !== $object->getProductUserDefinedData()) {
                $data['ProductUserDefinedData'] = $this->normalizer->normalize($object->getProductUserDefinedData(), 'json', $context);
            }
            if ($object->isInitialized('additionalInformation') && null !== $object->getAdditionalInformation()) {
                $data['AdditionalInformation'] = $this->normalizer->normalize($object->getAdditionalInformation(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDetailDto' => false];
        }
    }
} else {
    class CegidMtsSalesOrderSalesOrderDetailDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDetailDto';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDetailDto';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsSalesOrderSalesOrderDetailDto();
            if (\array_key_exists('OrderedQuantity', $data) && \is_int($data['OrderedQuantity'])) {
                $data['OrderedQuantity'] = (float) $data['OrderedQuantity'];
            }
            if (\array_key_exists('RemainderQuantityForDelivery', $data) && \is_int($data['RemainderQuantityForDelivery'])) {
                $data['RemainderQuantityForDelivery'] = (float) $data['RemainderQuantityForDelivery'];
            }
            if (\array_key_exists('TaxExcludedUnitPriceInCurrency', $data) && \is_int($data['TaxExcludedUnitPriceInCurrency'])) {
                $data['TaxExcludedUnitPriceInCurrency'] = (float) $data['TaxExcludedUnitPriceInCurrency'];
            }
            if (\array_key_exists('TaxExcludedAmountInCurrency', $data) && \is_int($data['TaxExcludedAmountInCurrency'])) {
                $data['TaxExcludedAmountInCurrency'] = (float) $data['TaxExcludedAmountInCurrency'];
            }
            if (\array_key_exists('TaxIncludedAmountInCurrency', $data) && \is_int($data['TaxIncludedAmountInCurrency'])) {
                $data['TaxIncludedAmountInCurrency'] = (float) $data['TaxIncludedAmountInCurrency'];
            }
            if (\array_key_exists('RebatePercent', $data) && \is_int($data['RebatePercent'])) {
                $data['RebatePercent'] = (float) $data['RebatePercent'];
            }
            if (\array_key_exists('TotalTax1InCurrency', $data) && \is_int($data['TotalTax1InCurrency'])) {
                $data['TotalTax1InCurrency'] = (float) $data['TotalTax1InCurrency'];
            }
            if (\array_key_exists('SalesTaxeRate', $data) && \is_int($data['SalesTaxeRate'])) {
                $data['SalesTaxeRate'] = (float) $data['SalesTaxeRate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DocumentType', $data) && $data['DocumentType'] !== null) {
                $object->setDocumentType($data['DocumentType']);
            } elseif (\array_key_exists('DocumentType', $data) && $data['DocumentType'] === null) {
                $object->setDocumentType(null);
            }
            if (\array_key_exists('DocumentStub', $data) && $data['DocumentStub'] !== null) {
                $object->setDocumentStub($data['DocumentStub']);
            } elseif (\array_key_exists('DocumentStub', $data) && $data['DocumentStub'] === null) {
                $object->setDocumentStub(null);
            }
            if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
                $object->setNumber($data['Number']);
            } elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
                $object->setNumber(null);
            }
            if (\array_key_exists('Index', $data) && $data['Index'] !== null) {
                $object->setIndex($data['Index']);
            } elseif (\array_key_exists('Index', $data) && $data['Index'] === null) {
                $object->setIndex(null);
            }
            if (\array_key_exists('LineNumber', $data) && $data['LineNumber'] !== null) {
                $object->setLineNumber($data['LineNumber']);
            } elseif (\array_key_exists('LineNumber', $data) && $data['LineNumber'] === null) {
                $object->setLineNumber(null);
            }
            if (\array_key_exists('ProductCode', $data) && $data['ProductCode'] !== null) {
                $object->setProductCode($data['ProductCode']);
            } elseif (\array_key_exists('ProductCode', $data) && $data['ProductCode'] === null) {
                $object->setProductCode(null);
            }
            if (\array_key_exists('ProductId', $data) && $data['ProductId'] !== null) {
                $object->setProductId($data['ProductId']);
            } elseif (\array_key_exists('ProductId', $data) && $data['ProductId'] === null) {
                $object->setProductId(null);
            }
            if (\array_key_exists('ProductLabel', $data) && $data['ProductLabel'] !== null) {
                $object->setProductLabel($data['ProductLabel']);
            } elseif (\array_key_exists('ProductLabel', $data) && $data['ProductLabel'] === null) {
                $object->setProductLabel(null);
            }
            if (\array_key_exists('OrderedQuantity', $data) && $data['OrderedQuantity'] !== null) {
                $object->setOrderedQuantity($data['OrderedQuantity']);
            } elseif (\array_key_exists('OrderedQuantity', $data) && $data['OrderedQuantity'] === null) {
                $object->setOrderedQuantity(null);
            }
            if (\array_key_exists('RemainderQuantityForDelivery', $data) && $data['RemainderQuantityForDelivery'] !== null) {
                $object->setRemainderQuantityForDelivery($data['RemainderQuantityForDelivery']);
            } elseif (\array_key_exists('RemainderQuantityForDelivery', $data) && $data['RemainderQuantityForDelivery'] === null) {
                $object->setRemainderQuantityForDelivery(null);
            }
            if (\array_key_exists('TaxExcludedUnitPriceInCurrency', $data) && $data['TaxExcludedUnitPriceInCurrency'] !== null) {
                $object->setTaxExcludedUnitPriceInCurrency($data['TaxExcludedUnitPriceInCurrency']);
            } elseif (\array_key_exists('TaxExcludedUnitPriceInCurrency', $data) && $data['TaxExcludedUnitPriceInCurrency'] === null) {
                $object->setTaxExcludedUnitPriceInCurrency(null);
            }
            if (\array_key_exists('TaxExcludedAmountInCurrency', $data) && $data['TaxExcludedAmountInCurrency'] !== null) {
                $object->setTaxExcludedAmountInCurrency($data['TaxExcludedAmountInCurrency']);
            } elseif (\array_key_exists('TaxExcludedAmountInCurrency', $data) && $data['TaxExcludedAmountInCurrency'] === null) {
                $object->setTaxExcludedAmountInCurrency(null);
            }
            if (\array_key_exists('TaxIncludedAmountInCurrency', $data) && $data['TaxIncludedAmountInCurrency'] !== null) {
                $object->setTaxIncludedAmountInCurrency($data['TaxIncludedAmountInCurrency']);
            } elseif (\array_key_exists('TaxIncludedAmountInCurrency', $data) && $data['TaxIncludedAmountInCurrency'] === null) {
                $object->setTaxIncludedAmountInCurrency(null);
            }
            if (\array_key_exists('DeliveryDate', $data) && $data['DeliveryDate'] !== null) {
                $object->setDeliveryDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['DeliveryDate']));
            } elseif (\array_key_exists('DeliveryDate', $data) && $data['DeliveryDate'] === null) {
                $object->setDeliveryDate(null);
            }
            if (\array_key_exists('TermsOfSpecialPrice', $data) && $data['TermsOfSpecialPrice'] !== null) {
                $object->setTermsOfSpecialPrice($data['TermsOfSpecialPrice']);
            } elseif (\array_key_exists('TermsOfSpecialPrice', $data) && $data['TermsOfSpecialPrice'] === null) {
                $object->setTermsOfSpecialPrice(null);
            }
            if (\array_key_exists('RebatePercent', $data) && $data['RebatePercent'] !== null) {
                $object->setRebatePercent($data['RebatePercent']);
            } elseif (\array_key_exists('RebatePercent', $data) && $data['RebatePercent'] === null) {
                $object->setRebatePercent(null);
            }
            if (\array_key_exists('TaxFamily1Code', $data) && $data['TaxFamily1Code'] !== null) {
                $object->setTaxFamily1Code($data['TaxFamily1Code']);
            } elseif (\array_key_exists('TaxFamily1Code', $data) && $data['TaxFamily1Code'] === null) {
                $object->setTaxFamily1Code(null);
            }
            if (\array_key_exists('TaxFamily1Label', $data) && $data['TaxFamily1Label'] !== null) {
                $object->setTaxFamily1Label($data['TaxFamily1Label']);
            } elseif (\array_key_exists('TaxFamily1Label', $data) && $data['TaxFamily1Label'] === null) {
                $object->setTaxFamily1Label(null);
            }
            if (\array_key_exists('TotalTax1InCurrency', $data) && $data['TotalTax1InCurrency'] !== null) {
                $object->setTotalTax1InCurrency($data['TotalTax1InCurrency']);
            } elseif (\array_key_exists('TotalTax1InCurrency', $data) && $data['TotalTax1InCurrency'] === null) {
                $object->setTotalTax1InCurrency(null);
            }
            if (\array_key_exists('SalesTaxeRate', $data) && $data['SalesTaxeRate'] !== null) {
                $object->setSalesTaxeRate($data['SalesTaxeRate']);
            } elseif (\array_key_exists('SalesTaxeRate', $data) && $data['SalesTaxeRate'] === null) {
                $object->setSalesTaxeRate(null);
            }
            if (\array_key_exists('NotePad', $data) && $data['NotePad'] !== null) {
                $object->setNotePad($data['NotePad']);
            } elseif (\array_key_exists('NotePad', $data) && $data['NotePad'] === null) {
                $object->setNotePad(null);
            }
            if (\array_key_exists('ProductUserDefinedData', $data) && $data['ProductUserDefinedData'] !== null) {
                $object->setProductUserDefinedData($this->denormalizer->denormalize($data['ProductUserDefinedData'], 'Cegid\\Api\\Model\\CegidMtsSalesOrderUserDefinedDataDto', 'json', $context));
            } elseif (\array_key_exists('ProductUserDefinedData', $data) && $data['ProductUserDefinedData'] === null) {
                $object->setProductUserDefinedData(null);
            }
            if (\array_key_exists('AdditionalInformation', $data) && $data['AdditionalInformation'] !== null) {
                $object->setAdditionalInformation($this->denormalizer->denormalize($data['AdditionalInformation'], 'Cegid\\Api\\Model\\CegidMtsSalesOrderLineAdditionalInformationDto', 'json', $context));
            } elseif (\array_key_exists('AdditionalInformation', $data) && $data['AdditionalInformation'] === null) {
                $object->setAdditionalInformation(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
                $data['DocumentType'] = $object->getDocumentType();
            }
            if ($object->isInitialized('documentStub') && null !== $object->getDocumentStub()) {
                $data['DocumentStub'] = $object->getDocumentStub();
            }
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['Number'] = $object->getNumber();
            }
            if ($object->isInitialized('index') && null !== $object->getIndex()) {
                $data['Index'] = $object->getIndex();
            }
            if ($object->isInitialized('lineNumber') && null !== $object->getLineNumber()) {
                $data['LineNumber'] = $object->getLineNumber();
            }
            if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
                $data['ProductCode'] = $object->getProductCode();
            }
            if ($object->isInitialized('productId') && null !== $object->getProductId()) {
                $data['ProductId'] = $object->getProductId();
            }
            if ($object->isInitialized('productLabel') && null !== $object->getProductLabel()) {
                $data['ProductLabel'] = $object->getProductLabel();
            }
            if ($object->isInitialized('orderedQuantity') && null !== $object->getOrderedQuantity()) {
                $data['OrderedQuantity'] = $object->getOrderedQuantity();
            }
            if ($object->isInitialized('remainderQuantityForDelivery') && null !== $object->getRemainderQuantityForDelivery()) {
                $data['RemainderQuantityForDelivery'] = $object->getRemainderQuantityForDelivery();
            }
            if ($object->isInitialized('taxExcludedUnitPriceInCurrency') && null !== $object->getTaxExcludedUnitPriceInCurrency()) {
                $data['TaxExcludedUnitPriceInCurrency'] = $object->getTaxExcludedUnitPriceInCurrency();
            }
            if ($object->isInitialized('taxExcludedAmountInCurrency') && null !== $object->getTaxExcludedAmountInCurrency()) {
                $data['TaxExcludedAmountInCurrency'] = $object->getTaxExcludedAmountInCurrency();
            }
            if ($object->isInitialized('taxIncludedAmountInCurrency') && null !== $object->getTaxIncludedAmountInCurrency()) {
                $data['TaxIncludedAmountInCurrency'] = $object->getTaxIncludedAmountInCurrency();
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $data['DeliveryDate'] = $object->getDeliveryDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('termsOfSpecialPrice') && null !== $object->getTermsOfSpecialPrice()) {
                $data['TermsOfSpecialPrice'] = $object->getTermsOfSpecialPrice();
            }
            if ($object->isInitialized('rebatePercent') && null !== $object->getRebatePercent()) {
                $data['RebatePercent'] = $object->getRebatePercent();
            }
            if ($object->isInitialized('taxFamily1Code') && null !== $object->getTaxFamily1Code()) {
                $data['TaxFamily1Code'] = $object->getTaxFamily1Code();
            }
            if ($object->isInitialized('taxFamily1Label') && null !== $object->getTaxFamily1Label()) {
                $data['TaxFamily1Label'] = $object->getTaxFamily1Label();
            }
            if ($object->isInitialized('totalTax1InCurrency') && null !== $object->getTotalTax1InCurrency()) {
                $data['TotalTax1InCurrency'] = $object->getTotalTax1InCurrency();
            }
            if ($object->isInitialized('salesTaxeRate') && null !== $object->getSalesTaxeRate()) {
                $data['SalesTaxeRate'] = $object->getSalesTaxeRate();
            }
            if ($object->isInitialized('notePad') && null !== $object->getNotePad()) {
                $data['NotePad'] = $object->getNotePad();
            }
            if ($object->isInitialized('productUserDefinedData') && null !== $object->getProductUserDefinedData()) {
                $data['ProductUserDefinedData'] = $this->normalizer->normalize($object->getProductUserDefinedData(), 'json', $context);
            }
            if ($object->isInitialized('additionalInformation') && null !== $object->getAdditionalInformation()) {
                $data['AdditionalInformation'] = $this->normalizer->normalize($object->getAdditionalInformation(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDetailDto' => false];
        }
    }
}
