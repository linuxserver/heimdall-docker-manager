<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EndpointSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\EndpointSpec';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\EndpointSpec;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\EndpointSpec();
        if (property_exists($data, 'Mode') && $data->{'Mode'} !== null) {
            $object->setMode($data->{'Mode'});
        }
        if (property_exists($data, 'Ports') && $data->{'Ports'} !== null) {
            $values = [];
            foreach ($data->{'Ports'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\EndpointPortConfig', 'json', $context);
            }
            $object->setPorts($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMode()) {
            $data->{'Mode'} = $object->getMode();
        }
        if (null !== $object->getPorts()) {
            $values = [];
            foreach ($object->getPorts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Ports'} = $values;
        }

        return $data;
    }
}
