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
    class MicrosoftODataEdmAnnotationsIEdmVocabularyAnnotationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\MicrosoftODataEdmAnnotationsIEdmVocabularyAnnotation';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\MicrosoftODataEdmAnnotationsIEdmVocabularyAnnotation';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\MicrosoftODataEdmAnnotationsIEdmVocabularyAnnotation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Qualifier', $data) && $data['Qualifier'] !== null) {
                $object->setQualifier($data['Qualifier']);
            } elseif (\array_key_exists('Qualifier', $data) && $data['Qualifier'] === null) {
                $object->setQualifier(null);
            }
            if (\array_key_exists('Term', $data) && $data['Term'] !== null) {
                $object->setTerm($this->denormalizer->denormalize($data['Term'], 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmTerm', 'json', $context));
            } elseif (\array_key_exists('Term', $data) && $data['Term'] === null) {
                $object->setTerm(null);
            }
            if (\array_key_exists('Target', $data) && $data['Target'] !== null) {
                $object->setTarget($this->denormalizer->denormalize($data['Target'], 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmVocabularyAnnotatable', 'json', $context));
            } elseif (\array_key_exists('Target', $data) && $data['Target'] === null) {
                $object->setTarget(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('term') && null !== $object->getTerm()) {
                $data['Term'] = $this->normalizer->normalize($object->getTerm(), 'json', $context);
            }
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['Target'] = $this->normalizer->normalize($object->getTarget(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\MicrosoftODataEdmAnnotationsIEdmVocabularyAnnotation' => false];
        }
    }
} else {
    class MicrosoftODataEdmAnnotationsIEdmVocabularyAnnotationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\MicrosoftODataEdmAnnotationsIEdmVocabularyAnnotation';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\MicrosoftODataEdmAnnotationsIEdmVocabularyAnnotation';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\MicrosoftODataEdmAnnotationsIEdmVocabularyAnnotation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Qualifier', $data) && $data['Qualifier'] !== null) {
                $object->setQualifier($data['Qualifier']);
            } elseif (\array_key_exists('Qualifier', $data) && $data['Qualifier'] === null) {
                $object->setQualifier(null);
            }
            if (\array_key_exists('Term', $data) && $data['Term'] !== null) {
                $object->setTerm($this->denormalizer->denormalize($data['Term'], 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmTerm', 'json', $context));
            } elseif (\array_key_exists('Term', $data) && $data['Term'] === null) {
                $object->setTerm(null);
            }
            if (\array_key_exists('Target', $data) && $data['Target'] !== null) {
                $object->setTarget($this->denormalizer->denormalize($data['Target'], 'Cegid\\Api\\Model\\MicrosoftODataEdmIEdmVocabularyAnnotatable', 'json', $context));
            } elseif (\array_key_exists('Target', $data) && $data['Target'] === null) {
                $object->setTarget(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('term') && null !== $object->getTerm()) {
                $data['Term'] = $this->normalizer->normalize($object->getTerm(), 'json', $context);
            }
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['Target'] = $this->normalizer->normalize($object->getTarget(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\MicrosoftODataEdmAnnotationsIEdmVocabularyAnnotation' => false];
        }
    }
}
