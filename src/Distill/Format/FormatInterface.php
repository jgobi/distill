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

interface FormatInterface
{

    const LEVEL_LOWEST = 0;
    const LEVEL_LOW = 2;
    const LEVEL_MIDDLE = 5;
    const LEVEL_HIGH = 7;
    const LEVEL_HIGHEST = 10;

    /**
     * Gets the format key name.
     * @static
     *
     * @return string Format name
     */
    public static function getName();

    /**
     * Gets the current class FQN.
     * @static
     *
     * @return string Current class FQN.
     */
    public static function getClass();

    /**
     * Gets the compression ratio level for the format.
     *
     * @return integer Compression ratio level (0: low, 10: high)
     */
    public function getCompressionRatioLevel();

    /**
     * Gets the uncompression speed level for the format.
     *
     * @return integer Uncompression speed level (0: low, 10: high)
     */
    public function getUncompressionSpeedLevel();

    /**
     * Gets the compression speed level for the format.
     *
     * @return integer Compression speed level (0: low, 10: high)
     */
    public function getCompressionSpeedLevel();

    /**
     * Gets the list of extensions associated to the format.
     *
     * @return array List of extensions
     */
    public function getExtensions();

    /**
     * Gets the list of uncompression methods.
     *
     * @return array List of compression methods
     */
    public function getUncompressionMethods();
}
