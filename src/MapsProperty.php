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
     * Retrieves the name of the property.
     *
     * Used to determine which object property to write to during the
     * hydration process.
     *
     * @return string   Name of the property.
     */
    public function name() : string;

    /**
     * Determines the attribute's value based on the hydration data.
     *
     * Used to determine what to write to the object property during the
     * hydration process.
     *
     * @param array       $data  The input data, as received by the hydrator.
     * @param object|null $owner The owner of the property.
     * @return mixed             The value to assign to the property.
     */
    public function value(array $data, $owner = null);
}
