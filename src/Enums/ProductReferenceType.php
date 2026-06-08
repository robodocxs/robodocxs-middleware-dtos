<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\Enums;

enum ProductReferenceType: string
{
    case ACCESSORY = 'accessory';
    case PRODUCT = 'product';

    /**
     * A sellable packaging variant of the same base material (e.g. the 100-pack / 1000-pack
     * articles that a quantity-based packaging resolution can remap a base article onto).
     */
    case PACKAGING_VARIANT = 'packaging_variant';
}
