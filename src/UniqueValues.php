<?php

namespace UniqueValues;

class UniqueArray
{
    /**
     * Returns unique values from an array.
     *
     * @param array $inputArray
     * @return array
     */
    public static function getUnique(array $inputArray): array
    {
        return array_values(array_unique($inputArray));
    }
}
