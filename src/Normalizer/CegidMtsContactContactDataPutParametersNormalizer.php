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
    class CegidMtsContactContactDataPutParametersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsContactContactDataPutParameters';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsContactContactDataPutParameters';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsContactContactDataPutParameters();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ContactNumber', $data) && $data['ContactNumber'] !== null) {
                $object->setContactNumber($data['ContactNumber']);
            } elseif (\array_key_exists('ContactNumber', $data) && $data['ContactNumber'] === null) {
                $object->setContactNumber(null);
            }
            if (\array_key_exists('ContactType', $data) && $data['ContactType'] !== null) {
                $object->setContactType($data['ContactType']);
            } elseif (\array_key_exists('ContactType', $data) && $data['ContactType'] === null) {
                $object->setContactType(null);
            }
            if (\array_key_exists('ReferenceCode', $data) && $data['ReferenceCode'] !== null) {
                $object->setReferenceCode($data['ReferenceCode']);
            } elseif (\array_key_exists('ReferenceCode', $data) && $data['ReferenceCode'] === null) {
                $object->setReferenceCode(null);
            }
            if (\array_key_exists('MainContact', $data) && $data['MainContact'] !== null) {
                $object->setMainContact($data['MainContact']);
            } elseif (\array_key_exists('MainContact', $data) && $data['MainContact'] === null) {
                $object->setMainContact(null);
            }
            if (\array_key_exists('Email', $data) && $data['Email'] !== null) {
                $object->setEmail($data['Email']);
            } elseif (\array_key_exists('Email', $data) && $data['Email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('FirstName', $data) && $data['FirstName'] !== null) {
                $object->setFirstName($data['FirstName']);
            } elseif (\array_key_exists('FirstName', $data) && $data['FirstName'] === null) {
                $object->setFirstName(null);
            }
            if (\array_key_exists('Gender', $data) && $data['Gender'] !== null) {
                $object->setGender($data['Gender']);
            } elseif (\array_key_exists('Gender', $data) && $data['Gender'] === null) {
                $object->setGender(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('PhoneNumber', $data) && $data['PhoneNumber'] !== null) {
                $object->setPhoneNumber($data['PhoneNumber']);
            } elseif (\array_key_exists('PhoneNumber', $data) && $data['PhoneNumber'] === null) {
                $object->setPhoneNumber(null);
            }
            if (\array_key_exists('CellPhoneNumber', $data) && $data['CellPhoneNumber'] !== null) {
                $object->setCellPhoneNumber($data['CellPhoneNumber']);
            } elseif (\array_key_exists('CellPhoneNumber', $data) && $data['CellPhoneNumber'] === null) {
                $object->setCellPhoneNumber(null);
            }
            if (\array_key_exists('Closed', $data) && $data['Closed'] !== null) {
                $object->setClosed($data['Closed']);
            } elseif (\array_key_exists('Closed', $data) && $data['Closed'] === null) {
                $object->setClosed(null);
            }
            if (\array_key_exists('EncodedFunction', $data) && $data['EncodedFunction'] !== null) {
                $object->setEncodedFunction($data['EncodedFunction']);
            } elseif (\array_key_exists('EncodedFunction', $data) && $data['EncodedFunction'] === null) {
                $object->setEncodedFunction(null);
            }
            if (\array_key_exists('Function', $data) && $data['Function'] !== null) {
                $object->setFunction($data['Function']);
            } elseif (\array_key_exists('Function', $data) && $data['Function'] === null) {
                $object->setFunction(null);
            }
            if (\array_key_exists('ServiceCode', $data) && $data['ServiceCode'] !== null) {
                $object->setServiceCode($data['ServiceCode']);
            } elseif (\array_key_exists('ServiceCode', $data) && $data['ServiceCode'] === null) {
                $object->setServiceCode(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($data['Service']);
            } elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('Birth', $data) && $data['Birth'] !== null) {
                $object->setBirth(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['Birth']));
            } elseif (\array_key_exists('Birth', $data) && $data['Birth'] === null) {
                $object->setBirth(null);
            }
            if (\array_key_exists('Civility', $data) && $data['Civility'] !== null) {
                $object->setCivility($data['Civility']);
            } elseif (\array_key_exists('Civility', $data) && $data['Civility'] === null) {
                $object->setCivility(null);
            }
            if (\array_key_exists('DefaultAddressNumber', $data) && $data['DefaultAddressNumber'] !== null) {
                $object->setDefaultAddressNumber($data['DefaultAddressNumber']);
            } elseif (\array_key_exists('DefaultAddressNumber', $data) && $data['DefaultAddressNumber'] === null) {
                $object->setDefaultAddressNumber(null);
            }
            if (\array_key_exists('Notepad', $data) && $data['Notepad'] !== null) {
                $object->setNotepad($data['Notepad']);
            } elseif (\array_key_exists('Notepad', $data) && $data['Notepad'] === null) {
                $object->setNotepad(null);
            }
            if (\array_key_exists('FaxNumber', $data) && $data['FaxNumber'] !== null) {
                $object->setFaxNumber($data['FaxNumber']);
            } elseif (\array_key_exists('FaxNumber', $data) && $data['FaxNumber'] === null) {
                $object->setFaxNumber(null);
            }
            if (\array_key_exists('UserDefinedValues', $data) && $data['UserDefinedValues'] !== null) {
                $object->setUserDefinedValues($this->denormalizer->denormalize($data['UserDefinedValues'], 'Cegid\\Api\\Model\\CegidMtsContactContactUserDefinedData', 'json', $context));
            } elseif (\array_key_exists('UserDefinedValues', $data) && $data['UserDefinedValues'] === null) {
                $object->setUserDefinedValues(null);
            }
            if (\array_key_exists('AdditionalUserDefinedValues', $data) && $data['AdditionalUserDefinedValues'] !== null) {
                $object->setAdditionalUserDefinedValues($this->denormalizer->denormalize($data['AdditionalUserDefinedValues'], 'Cegid\\Api\\Model\\CegidMtsContactAdditionalContactUserDefinedData', 'json', $context));
            } elseif (\array_key_exists('AdditionalUserDefinedValues', $data) && $data['AdditionalUserDefinedValues'] === null) {
                $object->setAdditionalUserDefinedValues(null);
            }
            if (\array_key_exists('TrackingFields', $data) && $data['TrackingFields'] !== null) {
                $object->setTrackingFields($data['TrackingFields']);
            } elseif (\array_key_exists('TrackingFields', $data) && $data['TrackingFields'] === null) {
                $object->setTrackingFields(null);
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($data['Type']);
            } elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('contactNumber') && null !== $object->getContactNumber()) {
                $data['ContactNumber'] = $object->getContactNumber();
            }
            if ($object->isInitialized('contactType') && null !== $object->getContactType()) {
                $data['ContactType'] = $object->getContactType();
            }
            if ($object->isInitialized('referenceCode') && null !== $object->getReferenceCode()) {
                $data['ReferenceCode'] = $object->getReferenceCode();
            }
            if ($object->isInitialized('mainContact') && null !== $object->getMainContact()) {
                $data['MainContact'] = $object->getMainContact();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['Email'] = $object->getEmail();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['FirstName'] = $object->getFirstName();
            }
            if ($object->isInitialized('gender') && null !== $object->getGender()) {
                $data['Gender'] = $object->getGender();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['PhoneNumber'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('cellPhoneNumber') && null !== $object->getCellPhoneNumber()) {
                $data['CellPhoneNumber'] = $object->getCellPhoneNumber();
            }
            if ($object->isInitialized('closed') && null !== $object->getClosed()) {
                $data['Closed'] = $object->getClosed();
            }
            if ($object->isInitialized('encodedFunction') && null !== $object->getEncodedFunction()) {
                $data['EncodedFunction'] = $object->getEncodedFunction();
            }
            if ($object->isInitialized('function') && null !== $object->getFunction()) {
                $data['Function'] = $object->getFunction();
            }
            if ($object->isInitialized('serviceCode') && null !== $object->getServiceCode()) {
                $data['ServiceCode'] = $object->getServiceCode();
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $object->getService();
            }
            if ($object->isInitialized('birth') && null !== $object->getBirth()) {
                $data['Birth'] = $object->getBirth()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('civility') && null !== $object->getCivility()) {
                $data['Civility'] = $object->getCivility();
            }
            if ($object->isInitialized('defaultAddressNumber') && null !== $object->getDefaultAddressNumber()) {
                $data['DefaultAddressNumber'] = $object->getDefaultAddressNumber();
            }
            if ($object->isInitialized('notepad') && null !== $object->getNotepad()) {
                $data['Notepad'] = $object->getNotepad();
            }
            if ($object->isInitialized('faxNumber') && null !== $object->getFaxNumber()) {
                $data['FaxNumber'] = $object->getFaxNumber();
            }
            if ($object->isInitialized('userDefinedValues') && null !== $object->getUserDefinedValues()) {
                $data['UserDefinedValues'] = $this->normalizer->normalize($object->getUserDefinedValues(), 'json', $context);
            }
            if ($object->isInitialized('additionalUserDefinedValues') && null !== $object->getAdditionalUserDefinedValues()) {
                $data['AdditionalUserDefinedValues'] = $this->normalizer->normalize($object->getAdditionalUserDefinedValues(), 'json', $context);
            }
            if ($object->isInitialized('trackingFields') && null !== $object->getTrackingFields()) {
                $data['TrackingFields'] = $object->getTrackingFields();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsContactContactDataPutParameters' => false];
        }
    }
} else {
    class CegidMtsContactContactDataPutParametersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Cegid\\Api\\Model\\CegidMtsContactContactDataPutParameters';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Cegid\\Api\\Model\\CegidMtsContactContactDataPutParameters';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Cegid\Api\Model\CegidMtsContactContactDataPutParameters();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ContactNumber', $data) && $data['ContactNumber'] !== null) {
                $object->setContactNumber($data['ContactNumber']);
            } elseif (\array_key_exists('ContactNumber', $data) && $data['ContactNumber'] === null) {
                $object->setContactNumber(null);
            }
            if (\array_key_exists('ContactType', $data) && $data['ContactType'] !== null) {
                $object->setContactType($data['ContactType']);
            } elseif (\array_key_exists('ContactType', $data) && $data['ContactType'] === null) {
                $object->setContactType(null);
            }
            if (\array_key_exists('ReferenceCode', $data) && $data['ReferenceCode'] !== null) {
                $object->setReferenceCode($data['ReferenceCode']);
            } elseif (\array_key_exists('ReferenceCode', $data) && $data['ReferenceCode'] === null) {
                $object->setReferenceCode(null);
            }
            if (\array_key_exists('MainContact', $data) && $data['MainContact'] !== null) {
                $object->setMainContact($data['MainContact']);
            } elseif (\array_key_exists('MainContact', $data) && $data['MainContact'] === null) {
                $object->setMainContact(null);
            }
            if (\array_key_exists('Email', $data) && $data['Email'] !== null) {
                $object->setEmail($data['Email']);
            } elseif (\array_key_exists('Email', $data) && $data['Email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('FirstName', $data) && $data['FirstName'] !== null) {
                $object->setFirstName($data['FirstName']);
            } elseif (\array_key_exists('FirstName', $data) && $data['FirstName'] === null) {
                $object->setFirstName(null);
            }
            if (\array_key_exists('Gender', $data) && $data['Gender'] !== null) {
                $object->setGender($data['Gender']);
            } elseif (\array_key_exists('Gender', $data) && $data['Gender'] === null) {
                $object->setGender(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('PhoneNumber', $data) && $data['PhoneNumber'] !== null) {
                $object->setPhoneNumber($data['PhoneNumber']);
            } elseif (\array_key_exists('PhoneNumber', $data) && $data['PhoneNumber'] === null) {
                $object->setPhoneNumber(null);
            }
            if (\array_key_exists('CellPhoneNumber', $data) && $data['CellPhoneNumber'] !== null) {
                $object->setCellPhoneNumber($data['CellPhoneNumber']);
            } elseif (\array_key_exists('CellPhoneNumber', $data) && $data['CellPhoneNumber'] === null) {
                $object->setCellPhoneNumber(null);
            }
            if (\array_key_exists('Closed', $data) && $data['Closed'] !== null) {
                $object->setClosed($data['Closed']);
            } elseif (\array_key_exists('Closed', $data) && $data['Closed'] === null) {
                $object->setClosed(null);
            }
            if (\array_key_exists('EncodedFunction', $data) && $data['EncodedFunction'] !== null) {
                $object->setEncodedFunction($data['EncodedFunction']);
            } elseif (\array_key_exists('EncodedFunction', $data) && $data['EncodedFunction'] === null) {
                $object->setEncodedFunction(null);
            }
            if (\array_key_exists('Function', $data) && $data['Function'] !== null) {
                $object->setFunction($data['Function']);
            } elseif (\array_key_exists('Function', $data) && $data['Function'] === null) {
                $object->setFunction(null);
            }
            if (\array_key_exists('ServiceCode', $data) && $data['ServiceCode'] !== null) {
                $object->setServiceCode($data['ServiceCode']);
            } elseif (\array_key_exists('ServiceCode', $data) && $data['ServiceCode'] === null) {
                $object->setServiceCode(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($data['Service']);
            } elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('Birth', $data) && $data['Birth'] !== null) {
                $object->setBirth(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['Birth']));
            } elseif (\array_key_exists('Birth', $data) && $data['Birth'] === null) {
                $object->setBirth(null);
            }
            if (\array_key_exists('Civility', $data) && $data['Civility'] !== null) {
                $object->setCivility($data['Civility']);
            } elseif (\array_key_exists('Civility', $data) && $data['Civility'] === null) {
                $object->setCivility(null);
            }
            if (\array_key_exists('DefaultAddressNumber', $data) && $data['DefaultAddressNumber'] !== null) {
                $object->setDefaultAddressNumber($data['DefaultAddressNumber']);
            } elseif (\array_key_exists('DefaultAddressNumber', $data) && $data['DefaultAddressNumber'] === null) {
                $object->setDefaultAddressNumber(null);
            }
            if (\array_key_exists('Notepad', $data) && $data['Notepad'] !== null) {
                $object->setNotepad($data['Notepad']);
            } elseif (\array_key_exists('Notepad', $data) && $data['Notepad'] === null) {
                $object->setNotepad(null);
            }
            if (\array_key_exists('FaxNumber', $data) && $data['FaxNumber'] !== null) {
                $object->setFaxNumber($data['FaxNumber']);
            } elseif (\array_key_exists('FaxNumber', $data) && $data['FaxNumber'] === null) {
                $object->setFaxNumber(null);
            }
            if (\array_key_exists('UserDefinedValues', $data) && $data['UserDefinedValues'] !== null) {
                $object->setUserDefinedValues($this->denormalizer->denormalize($data['UserDefinedValues'], 'Cegid\\Api\\Model\\CegidMtsContactContactUserDefinedData', 'json', $context));
            } elseif (\array_key_exists('UserDefinedValues', $data) && $data['UserDefinedValues'] === null) {
                $object->setUserDefinedValues(null);
            }
            if (\array_key_exists('AdditionalUserDefinedValues', $data) && $data['AdditionalUserDefinedValues'] !== null) {
                $object->setAdditionalUserDefinedValues($this->denormalizer->denormalize($data['AdditionalUserDefinedValues'], 'Cegid\\Api\\Model\\CegidMtsContactAdditionalContactUserDefinedData', 'json', $context));
            } elseif (\array_key_exists('AdditionalUserDefinedValues', $data) && $data['AdditionalUserDefinedValues'] === null) {
                $object->setAdditionalUserDefinedValues(null);
            }
            if (\array_key_exists('TrackingFields', $data) && $data['TrackingFields'] !== null) {
                $object->setTrackingFields($data['TrackingFields']);
            } elseif (\array_key_exists('TrackingFields', $data) && $data['TrackingFields'] === null) {
                $object->setTrackingFields(null);
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($data['Type']);
            } elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('contactNumber') && null !== $object->getContactNumber()) {
                $data['ContactNumber'] = $object->getContactNumber();
            }
            if ($object->isInitialized('contactType') && null !== $object->getContactType()) {
                $data['ContactType'] = $object->getContactType();
            }
            if ($object->isInitialized('referenceCode') && null !== $object->getReferenceCode()) {
                $data['ReferenceCode'] = $object->getReferenceCode();
            }
            if ($object->isInitialized('mainContact') && null !== $object->getMainContact()) {
                $data['MainContact'] = $object->getMainContact();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['Email'] = $object->getEmail();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['FirstName'] = $object->getFirstName();
            }
            if ($object->isInitialized('gender') && null !== $object->getGender()) {
                $data['Gender'] = $object->getGender();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['PhoneNumber'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('cellPhoneNumber') && null !== $object->getCellPhoneNumber()) {
                $data['CellPhoneNumber'] = $object->getCellPhoneNumber();
            }
            if ($object->isInitialized('closed') && null !== $object->getClosed()) {
                $data['Closed'] = $object->getClosed();
            }
            if ($object->isInitialized('encodedFunction') && null !== $object->getEncodedFunction()) {
                $data['EncodedFunction'] = $object->getEncodedFunction();
            }
            if ($object->isInitialized('function') && null !== $object->getFunction()) {
                $data['Function'] = $object->getFunction();
            }
            if ($object->isInitialized('serviceCode') && null !== $object->getServiceCode()) {
                $data['ServiceCode'] = $object->getServiceCode();
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $object->getService();
            }
            if ($object->isInitialized('birth') && null !== $object->getBirth()) {
                $data['Birth'] = $object->getBirth()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('civility') && null !== $object->getCivility()) {
                $data['Civility'] = $object->getCivility();
            }
            if ($object->isInitialized('defaultAddressNumber') && null !== $object->getDefaultAddressNumber()) {
                $data['DefaultAddressNumber'] = $object->getDefaultAddressNumber();
            }
            if ($object->isInitialized('notepad') && null !== $object->getNotepad()) {
                $data['Notepad'] = $object->getNotepad();
            }
            if ($object->isInitialized('faxNumber') && null !== $object->getFaxNumber()) {
                $data['FaxNumber'] = $object->getFaxNumber();
            }
            if ($object->isInitialized('userDefinedValues') && null !== $object->getUserDefinedValues()) {
                $data['UserDefinedValues'] = $this->normalizer->normalize($object->getUserDefinedValues(), 'json', $context);
            }
            if ($object->isInitialized('additionalUserDefinedValues') && null !== $object->getAdditionalUserDefinedValues()) {
                $data['AdditionalUserDefinedValues'] = $this->normalizer->normalize($object->getAdditionalUserDefinedValues(), 'json', $context);
            }
            if ($object->isInitialized('trackingFields') && null !== $object->getTrackingFields()) {
                $data['TrackingFields'] = $object->getTrackingFields();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Cegid\\Api\\Model\\CegidMtsContactContactDataPutParameters' => false];
        }
    }
}
