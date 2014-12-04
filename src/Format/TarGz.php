<?php

/*
 * This file is part of the Distill package.
 *
 * (c) Raul Fraile <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Distill\Format;

use Distill\Method;

class TarGz extends AbstractFormat
{

    /**
     * {@inheritdoc}
     */
    public function getCompressionRatioLevel()
    {
        return FormatInterface::LEVEL_MIDDLE;
    }

    /**
     * {@inheritdoc}
     */
    public function getUncompressionSpeedLevel()
    {
        return FormatInterface::LEVEL_HIGHEST;
    }

    /**
     * {@inheritdoc}
     */
    public function getCompressionSpeedLevel()
    {
        return FormatInterface::LEVEL_MIDDLE;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensions()
    {
        return ['tar.gz', 'tgz'];
    }

    /**
     * {@inheritdoc}
     */
    public function getUncompressionMethods()
    {
        return [
            Method\Command\GnuTar::getName(),
            Method\Command\x7zip::getName(),
            Method\Extension\PharData::getName(),
            Method\Extension\Pear\ArchiveTar::getName()
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function getClass()
    {
        return get_class();
    }

}