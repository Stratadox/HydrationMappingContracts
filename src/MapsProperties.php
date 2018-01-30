<?php

namespace Stratadox\HydrationMapping;

use Stratadox\Collection\Collection;

/**
 * Represents a collection of property mappings.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface MapsProperties extends Collection
{
    /**
     * Retrieves the property mapping at a given position.
     *
     * This method is here to assert that the collection contains only objects
     * that implement @see MapsProperty, and to provide IDEs with the data they
     * need for autocompletion.
     *
     * @param int $offset
     * @return MapsProperty
     */
    public function offsetGet($offset) : MapsProperty;

    /**
     * Retrieves the property mapping the current iterator position.
     *
     * This method is here to assert that the collection contains only objects
     * that implement @see MapsProperty, and to provide IDEs with the data they
     * need for autocompletion.
     *
     * @return MapsProperty
     */
    public function current() : MapsProperty;
}
