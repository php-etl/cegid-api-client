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
    class CegidMtsSalesOrderSalesOrderDtoCNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDtoC';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDtoC';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsSalesOrderSalesOrderDtoC();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CustomerCode', $data) && $data['CustomerCode'] !== null) {
                $object->setCustomerCode($data['CustomerCode']);
            } elseif (\array_key_exists('CustomerCode', $data) && $data['CustomerCode'] === null) {
                $object->setCustomerCode(null);
            }
            if (\array_key_exists('ExternalReference', $data) && $data['ExternalReference'] !== null) {
                $object->setExternalReference($data['ExternalReference']);
            } elseif (\array_key_exists('ExternalReference', $data) && $data['ExternalReference'] === null) {
                $object->setExternalReference(null);
            }
            if (\array_key_exists('WareHouse', $data) && $data['WareHouse'] !== null) {
                $object->setWareHouse($data['WareHouse']);
            } elseif (\array_key_exists('WareHouse', $data) && $data['WareHouse'] === null) {
                $object->setWareHouse(null);
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
            if (\array_key_exists('PaymentMethodCode', $data) && $data['PaymentMethodCode'] !== null) {
                $object->setPaymentMethodCode($data['PaymentMethodCode']);
            } elseif (\array_key_exists('PaymentMethodCode', $data) && $data['PaymentMethodCode'] === null) {
                $object->setPaymentMethodCode(null);
            }
            if (\array_key_exists('NotePad', $data) && $data['NotePad'] !== null) {
                $object->setNotePad($data['NotePad']);
            } elseif (\array_key_exists('NotePad', $data) && $data['NotePad'] === null) {
                $object->setNotePad(null);
            }
            if (\array_key_exists('DeliveryAddress', $data) && $data['DeliveryAddress'] !== null) {
                $object->setDeliveryAddress($this->denormalizer->denormalize($data['DeliveryAddress'], 'Cegid\\Api\\Model\\CegidMtsSalesOrderAddressDtoC', 'json', $context));
            } elseif (\array_key_exists('DeliveryAddress', $data) && $data['DeliveryAddress'] === null) {
                $object->setDeliveryAddress(null);
            }
            if (\array_key_exists('BilingAddress', $data) && $data['BilingAddress'] !== null) {
                $object->setBilingAddress($this->denormalizer->denormalize($data['BilingAddress'], 'Cegid\\Api\\Model\\CegidMtsSalesOrderAddressDtoC', 'json', $context));
            } elseif (\array_key_exists('BilingAddress', $data) && $data['BilingAddress'] === null) {
                $object->setBilingAddress(null);
            }
            if (\array_key_exists('SalesOrderDetail', $data) && $data['SalesOrderDetail'] !== null) {
                $values = [];
                foreach ($data['SalesOrderDetail'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDetailDtoC', 'json', $context);
                }
                $object->setSalesOrderDetail($values);
            } elseif (\array_key_exists('SalesOrderDetail', $data) && $data['SalesOrderDetail'] === null) {
                $object->setSalesOrderDetail(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['CustomerCode'] = $object->getCustomerCode();
            if ($object->isInitialized('externalReference') && null !== $object->getExternalReference()) {
                $data['ExternalReference'] = $object->getExternalReference();
            }
            if ($object->isInitialized('wareHouse') && null !== $object->getWareHouse()) {
                $data['WareHouse'] = $object->getWareHouse();
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $data['DeliveryDate'] = $object->getDeliveryDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('termsOfSpecialPrice') && null !== $object->getTermsOfSpecialPrice()) {
                $data['TermsOfSpecialPrice'] = $object->getTermsOfSpecialPrice();
            }
            if ($object->isInitialized('paymentMethodCode') && null !== $object->getPaymentMethodCode()) {
                $data['PaymentMethodCode'] = $object->getPaymentMethodCode();
            }
            if ($object->isInitialized('notePad') && null !== $object->getNotePad()) {
                $data['NotePad'] = $object->getNotePad();
            }
            if ($object->isInitialized('deliveryAddress') && null !== $object->getDeliveryAddress()) {
                $data['DeliveryAddress'] = $this->normalizer->normalize($object->getDeliveryAddress(), 'json', $context);
            }
            if ($object->isInitialized('bilingAddress') && null !== $object->getBilingAddress()) {
                $data['BilingAddress'] = $this->normalizer->normalize($object->getBilingAddress(), 'json', $context);
            }
            if ($object->isInitialized('salesOrderDetail') && null !== $object->getSalesOrderDetail()) {
                $values = [];
                foreach ($object->getSalesOrderDetail() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['SalesOrderDetail'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDtoC' => false];
        }
    }
} else {
    class CegidMtsSalesOrderSalesOrderDtoCNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDtoC';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDtoC';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsSalesOrderSalesOrderDtoC();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CustomerCode', $data) && $data['CustomerCode'] !== null) {
                $object->setCustomerCode($data['CustomerCode']);
            } elseif (\array_key_exists('CustomerCode', $data) && $data['CustomerCode'] === null) {
                $object->setCustomerCode(null);
            }
            if (\array_key_exists('ExternalReference', $data) && $data['ExternalReference'] !== null) {
                $object->setExternalReference($data['ExternalReference']);
            } elseif (\array_key_exists('ExternalReference', $data) && $data['ExternalReference'] === null) {
                $object->setExternalReference(null);
            }
            if (\array_key_exists('WareHouse', $data) && $data['WareHouse'] !== null) {
                $object->setWareHouse($data['WareHouse']);
            } elseif (\array_key_exists('WareHouse', $data) && $data['WareHouse'] === null) {
                $object->setWareHouse(null);
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
            if (\array_key_exists('PaymentMethodCode', $data) && $data['PaymentMethodCode'] !== null) {
                $object->setPaymentMethodCode($data['PaymentMethodCode']);
            } elseif (\array_key_exists('PaymentMethodCode', $data) && $data['PaymentMethodCode'] === null) {
                $object->setPaymentMethodCode(null);
            }
            if (\array_key_exists('NotePad', $data) && $data['NotePad'] !== null) {
                $object->setNotePad($data['NotePad']);
            } elseif (\array_key_exists('NotePad', $data) && $data['NotePad'] === null) {
                $object->setNotePad(null);
            }
            if (\array_key_exists('DeliveryAddress', $data) && $data['DeliveryAddress'] !== null) {
                $object->setDeliveryAddress($this->denormalizer->denormalize($data['DeliveryAddress'], 'Cegid\\Api\\Model\\CegidMtsSalesOrderAddressDtoC', 'json', $context));
            } elseif (\array_key_exists('DeliveryAddress', $data) && $data['DeliveryAddress'] === null) {
                $object->setDeliveryAddress(null);
            }
            if (\array_key_exists('BilingAddress', $data) && $data['BilingAddress'] !== null) {
                $object->setBilingAddress($this->denormalizer->denormalize($data['BilingAddress'], 'Cegid\\Api\\Model\\CegidMtsSalesOrderAddressDtoC', 'json', $context));
            } elseif (\array_key_exists('BilingAddress', $data) && $data['BilingAddress'] === null) {
                $object->setBilingAddress(null);
            }
            if (\array_key_exists('SalesOrderDetail', $data) && $data['SalesOrderDetail'] !== null) {
                $values = [];
                foreach ($data['SalesOrderDetail'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDetailDtoC', 'json', $context);
                }
                $object->setSalesOrderDetail($values);
            } elseif (\array_key_exists('SalesOrderDetail', $data) && $data['SalesOrderDetail'] === null) {
                $object->setSalesOrderDetail(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['CustomerCode'] = $object->getCustomerCode();
            if ($object->isInitialized('externalReference') && null !== $object->getExternalReference()) {
                $data['ExternalReference'] = $object->getExternalReference();
            }
            if ($object->isInitialized('wareHouse') && null !== $object->getWareHouse()) {
                $data['WareHouse'] = $object->getWareHouse();
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $data['DeliveryDate'] = $object->getDeliveryDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('termsOfSpecialPrice') && null !== $object->getTermsOfSpecialPrice()) {
                $data['TermsOfSpecialPrice'] = $object->getTermsOfSpecialPrice();
            }
            if ($object->isInitialized('paymentMethodCode') && null !== $object->getPaymentMethodCode()) {
                $data['PaymentMethodCode'] = $object->getPaymentMethodCode();
            }
            if ($object->isInitialized('notePad') && null !== $object->getNotePad()) {
                $data['NotePad'] = $object->getNotePad();
            }
            if ($object->isInitialized('deliveryAddress') && null !== $object->getDeliveryAddress()) {
                $data['DeliveryAddress'] = $this->normalizer->normalize($object->getDeliveryAddress(), 'json', $context);
            }
            if ($object->isInitialized('bilingAddress') && null !== $object->getBilingAddress()) {
                $data['BilingAddress'] = $this->normalizer->normalize($object->getBilingAddress(), 'json', $context);
            }
            if ($object->isInitialized('salesOrderDetail') && null !== $object->getSalesOrderDetail()) {
                $values = [];
                foreach ($object->getSalesOrderDetail() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['SalesOrderDetail'] = $values;
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsSalesOrderSalesOrderDtoC' => false];
        }
    }
}
