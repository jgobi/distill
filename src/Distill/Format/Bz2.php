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

/**
 * A BZIP2 file.
 *
 * A .bz2 stream consists of a 4-byte header, followed by zero or more compressed blocks,
 * immediately followed by an end-of-stream marker containing a 32-bit CRC for the plaintext
 * whole stream processed. The compressed blocks are bit-aligned and no padding occurs.
 *
 * @see https://en.wikipedia.org/wiki/Bzip2
 *
 * @author Raul Fraile <raulfraile@gmail.com>
 */
class Bz2 extends AbstractFormat
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
        return ['bz2', 'bz'];
    }

    /**
     * {@inheritdoc}
     */
    public function getUncompressionMethods()
    {
        return [
            Method\Bzip2CommandMethod::getName(),
            Method\X7zCommandMethod::getName()
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
