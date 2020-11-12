<?php

namespace Stratadox\HydrationMapping;

/**
 * Mapping where a single (exposed) key is used to retrieve the data.
 *
 * @author Stratadox
 */
interface KeyedMapping extends Mapping
{
    /**
     * Retrieves the key that is being used by this property mapping.
     *
     * Used by mapping classes that decorate classes of this type, in order to
     * be able to distinguish between relevant and non-relevant input data.
     *
     * @return string The key used to fetch the data from the input array.
     */
    public function key() : string;
}
