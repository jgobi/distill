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

class TarBz2 extends AbstractFormat
{

    /**
     * {@inheritdoc}
     */
    public function getCompressionRatioLevel()
    {
        return FormatInterface::LEVEL_HIGH;
    }

    /**
     * {@inheritdoc}
     */
    public function getUncompressionSpeedLevel()
    {
        return FormatInterface::LEVEL_HIGH;
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
        return ['tar.bz2', 'tar.bz', 'tbz2', 'tbz'];
    }

    /**
     * {@inheritdoc}
     */
    public function getUncompressionMethods()
    {
        return [
            Method\TarCommandMethod::getName(),
            Method\X7zCommandMethod::getName(),
            Method\ArchiveTarMethod::getName()
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
