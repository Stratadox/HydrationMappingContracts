# Hydration Mapping Contracts

[![Latest Stable Version](https://poser.pugx.org/stratadox/hydration-mapping-contracts/v/stable)](https://packagist.org/packages/stratadox/hydration-mapping-contracts)
[![License](https://poser.pugx.org/stratadox/hydration-mapping-contracts/license)](https://packagist.org/packages/stratadox/hydration-mapping-contracts)

Mappings for hydration purposes.

Maps array or array-like data structures to object properties, in order to 
assemble the objects that model a business domain.

## Why are there only interfaces in this package
This package exists to decouple the [hydrator](https://github.com/Stratadox/Hydrator) 
from it's default [mapping implementation](https://github.com/Stratadox/HydrationMapping).

In this setup, projects that only need the hydrator with no mapping won't need 
to import the mapping code. Conversely, projects can use the hydration mappings 
without having to deal with the hydrator itself.
