<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Exception;

class ContainerArchiveBadRequestException extends \RuntimeException implements ClientException
{
    private $containersIdArchiveGetResponse400;

    public function __construct(\Docker\API\Model\ContainersIdArchiveGetResponse400 $containersIdArchiveGetResponse400)
    {
        parent::__construct('Bad parameter', 400);
        $this->containersIdArchiveGetResponse400 = $containersIdArchiveGetResponse400;
    }

    public function getContainersIdArchiveGetResponse400()
    {
        return $this->containersIdArchiveGetResponse400;
    }
}
