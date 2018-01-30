<?php

namespace Stratadox\HydrationMapping;

/**
 * Maps (a portion of) the input array to the value for an object property.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface MapsProperty
{
    /**
     * The name of the property.
     *
     * Used to determine which object property to write to during the
     * hydration process.
     *
     * @return string   Name of the attribute.
     */
    public function name() : string;

    /**
     * Determines the attribute's value based on the hydration data.
     *
     * Used to determine what to write to the object property during the
     * hydration process.
     *
     * @param array         $data   Hydration data.
     * @param object|null   $owner  The owner of the property.
     * @return mixed                Value to assign to the property.
     */
    public function value(array $data, $owner = null);
}
