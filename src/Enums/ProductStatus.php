<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\Enums;

/**
 * Sellability of a product in the source ERP.
 *
 * `null` (an absent value on {@see \Robodocxs\RobodocxsMiddlewareDtos\DTOs\ProductDTO}) means the
 * middleware does not classify the product — consumers should treat it as usable/unknown rather
 * than inactive.
 */
enum ProductStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
}
