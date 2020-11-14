<?php

namespace Stratadox\HydrationMapping;

use Throwable;

/**
 * Notifies the client code when the input does not match the mapping.
 *
 * @author Stratadox
 */
interface MappingFailure extends Throwable
{
}
