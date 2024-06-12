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
    class CegidMtsStockModelsManualInputParametersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsStockModelsManualInputParameters';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsStockModelsManualInputParameters';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsStockModelsManualInputParameters();
            if (\array_key_exists('InputPrice', $data) && \is_int($data['InputPrice'])) {
                $data['InputPrice'] = (float) $data['InputPrice'];
            }
            if (\array_key_exists('InputCostPrice', $data) && \is_int($data['InputCostPrice'])) {
                $data['InputCostPrice'] = (float) $data['InputCostPrice'];
            }
            if (\array_key_exists('Quantity', $data) && \is_int($data['Quantity'])) {
                $data['Quantity'] = (float) $data['Quantity'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('InputPrice', $data) && $data['InputPrice'] !== null) {
                $object->setInputPrice($data['InputPrice']);
            } elseif (\array_key_exists('InputPrice', $data) && $data['InputPrice'] === null) {
                $object->setInputPrice(null);
            }
            if (\array_key_exists('InputCostPrice', $data) && $data['InputCostPrice'] !== null) {
                $object->setInputCostPrice($data['InputCostPrice']);
            } elseif (\array_key_exists('InputCostPrice', $data) && $data['InputCostPrice'] === null) {
                $object->setInputCostPrice(null);
            }
            if (\array_key_exists('Motive', $data) && $data['Motive'] !== null) {
                $object->setMotive($data['Motive']);
            } elseif (\array_key_exists('Motive', $data) && $data['Motive'] === null) {
                $object->setMotive(null);
            }
            if (\array_key_exists('DateMovement', $data) && $data['DateMovement'] !== null) {
                $object->setDateMovement(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['DateMovement']));
            } elseif (\array_key_exists('DateMovement', $data) && $data['DateMovement'] === null) {
                $object->setDateMovement(null);
            }
            if (\array_key_exists('Quantity', $data) && $data['Quantity'] !== null) {
                $object->setQuantity($data['Quantity']);
            } elseif (\array_key_exists('Quantity', $data) && $data['Quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('StockDetailKey', $data) && $data['StockDetailKey'] !== null) {
                $object->setStockDetailKey($this->denormalizer->denormalize($data['StockDetailKey'], 'Cegid\\Api\\Model\\CegidMtsStockModelsManualMovementStockDetailKey', 'json', $context));
            } elseif (\array_key_exists('StockDetailKey', $data) && $data['StockDetailKey'] === null) {
                $object->setStockDetailKey(null);
            }
            if (\array_key_exists('Contract', $data) && $data['Contract'] !== null) {
                $object->setContract($data['Contract']);
            } elseif (\array_key_exists('Contract', $data) && $data['Contract'] === null) {
                $object->setContract(null);
            }
            if (\array_key_exists('Notepad', $data) && $data['Notepad'] !== null) {
                $object->setNotepad($data['Notepad']);
            } elseif (\array_key_exists('Notepad', $data) && $data['Notepad'] === null) {
                $object->setNotepad(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('inputPrice') && null !== $object->getInputPrice()) {
                $data['InputPrice'] = $object->getInputPrice();
            }
            if ($object->isInitialized('inputCostPrice') && null !== $object->getInputCostPrice()) {
                $data['InputCostPrice'] = $object->getInputCostPrice();
            }
            $data['Motive'] = $object->getMotive();
            if ($object->isInitialized('dateMovement') && null !== $object->getDateMovement()) {
                $data['DateMovement'] = $object->getDateMovement()->format('Y-m-d\\TH:i:sP');
            }
            $data['Quantity'] = $object->getQuantity();
            $data['StockDetailKey'] = $this->normalizer->normalize($object->getStockDetailKey(), 'json', $context);
            if ($object->isInitialized('contract') && null !== $object->getContract()) {
                $data['Contract'] = $object->getContract();
            }
            if ($object->isInitialized('notepad') && null !== $object->getNotepad()) {
                $data['Notepad'] = $object->getNotepad();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsStockModelsManualInputParameters' => false];
        }
    }
} else {
    class CegidMtsStockModelsManualInputParametersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsStockModelsManualInputParameters';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsStockModelsManualInputParameters';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsStockModelsManualInputParameters();
            if (\array_key_exists('InputPrice', $data) && \is_int($data['InputPrice'])) {
                $data['InputPrice'] = (float) $data['InputPrice'];
            }
            if (\array_key_exists('InputCostPrice', $data) && \is_int($data['InputCostPrice'])) {
                $data['InputCostPrice'] = (float) $data['InputCostPrice'];
            }
            if (\array_key_exists('Quantity', $data) && \is_int($data['Quantity'])) {
                $data['Quantity'] = (float) $data['Quantity'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('InputPrice', $data) && $data['InputPrice'] !== null) {
                $object->setInputPrice($data['InputPrice']);
            } elseif (\array_key_exists('InputPrice', $data) && $data['InputPrice'] === null) {
                $object->setInputPrice(null);
            }
            if (\array_key_exists('InputCostPrice', $data) && $data['InputCostPrice'] !== null) {
                $object->setInputCostPrice($data['InputCostPrice']);
            } elseif (\array_key_exists('InputCostPrice', $data) && $data['InputCostPrice'] === null) {
                $object->setInputCostPrice(null);
            }
            if (\array_key_exists('Motive', $data) && $data['Motive'] !== null) {
                $object->setMotive($data['Motive']);
            } elseif (\array_key_exists('Motive', $data) && $data['Motive'] === null) {
                $object->setMotive(null);
            }
            if (\array_key_exists('DateMovement', $data) && $data['DateMovement'] !== null) {
                $object->setDateMovement(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['DateMovement']));
            } elseif (\array_key_exists('DateMovement', $data) && $data['DateMovement'] === null) {
                $object->setDateMovement(null);
            }
            if (\array_key_exists('Quantity', $data) && $data['Quantity'] !== null) {
                $object->setQuantity($data['Quantity']);
            } elseif (\array_key_exists('Quantity', $data) && $data['Quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('StockDetailKey', $data) && $data['StockDetailKey'] !== null) {
                $object->setStockDetailKey($this->denormalizer->denormalize($data['StockDetailKey'], 'Cegid\\Api\\Model\\CegidMtsStockModelsManualMovementStockDetailKey', 'json', $context));
            } elseif (\array_key_exists('StockDetailKey', $data) && $data['StockDetailKey'] === null) {
                $object->setStockDetailKey(null);
            }
            if (\array_key_exists('Contract', $data) && $data['Contract'] !== null) {
                $object->setContract($data['Contract']);
            } elseif (\array_key_exists('Contract', $data) && $data['Contract'] === null) {
                $object->setContract(null);
            }
            if (\array_key_exists('Notepad', $data) && $data['Notepad'] !== null) {
                $object->setNotepad($data['Notepad']);
            } elseif (\array_key_exists('Notepad', $data) && $data['Notepad'] === null) {
                $object->setNotepad(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('inputPrice') && null !== $object->getInputPrice()) {
                $data['InputPrice'] = $object->getInputPrice();
            }
            if ($object->isInitialized('inputCostPrice') && null !== $object->getInputCostPrice()) {
                $data['InputCostPrice'] = $object->getInputCostPrice();
            }
            $data['Motive'] = $object->getMotive();
            if ($object->isInitialized('dateMovement') && null !== $object->getDateMovement()) {
                $data['DateMovement'] = $object->getDateMovement()->format('Y-m-d\\TH:i:sP');
            }
            $data['Quantity'] = $object->getQuantity();
            $data['StockDetailKey'] = $this->normalizer->normalize($object->getStockDetailKey(), 'json', $context);
            if ($object->isInitialized('contract') && null !== $object->getContract()) {
                $data['Contract'] = $object->getContract();
            }
            if ($object->isInitialized('notepad') && null !== $object->getNotepad()) {
                $data['Notepad'] = $object->getNotepad();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsStockModelsManualInputParameters' => false];
        }
    }
}
