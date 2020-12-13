<?php

namespace EccKit\Product;

use EccKit\Money\Money;

/**
 * Interface Product.
 */
interface Product
{
    /**
     * Product ID.
     *
     * @return int
     */
    public function getId(): int;
    
    /**
     * Product title.
     *
     * @return string
     */
    public function getTitle(): string;
    
    /**
     * Product description.
     *
     * @return string
     */
    public function getDescription(): string;
    
    /**
     * Product price.
     *
     * @return Money
     */
    public function getPrice(): Money;
}
