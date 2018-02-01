<?php

namespace Stratadox\HydrationMapping;

/**
 * Declares that a single (exposed) key is used to retrieve the data.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface ExposesDataKey extends MapsProperty
{
    /**
     * Retrieves the key that is being used by this property mapping.
     *
     * Used by mapping classes that decorate classes of this type, in order to
     * be able to distinguish between relevant and non-relevant input data.
     *
     * @example https://github.com/Stratadox/HydrationMapping/blob/master/src/Property/Scalar/CustomTruths.php Decorating a boolean mapping.
     *
     * @return string The key used to fetch the data from the input array.
     */
    public function key() : string;
}
