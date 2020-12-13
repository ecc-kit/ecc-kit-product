<?php

namespace EccKit\Product\Collection;

use EccKit\Money\Money;
use EccKit\Product\Product;

/**
 * Class ProductCollection.
 */
class ProductCollection extends Collection
{
    /**
     * Validate element.
     *
     * @param Money $element Element
     *
     * @return bool
     */
    protected function validateElement($element): bool
    {
        if (!($element instanceof Product)) {
            throw new ArgumentException(Product::class);
        }
    }
}
