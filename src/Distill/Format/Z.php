<?php

namespace Distill\Format;


class Z implements FormatInterface
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
        return FormatInterface::LEVEL_MIDDLE;
    }

}