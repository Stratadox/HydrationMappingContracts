<?php

namespace Stratadox\HydrationMapping;

use Stratadox\Collection\Collection;

/**
 * Collection of property mappings.
 *
 * @author Stratadox
 * @deprecated
 */
interface Mappings extends Collection
{
    /**
     * Retrieves the property mapping the current iterator position.
     *
     * This method is here to assert that the collection contains only objects
     * that implement
     *
     * @return Mapping
     */
    public function current() : Mapping;
}
