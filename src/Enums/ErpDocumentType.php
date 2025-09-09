<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\Enums;

enum ErpDocumentType: string
{
    case BLANKET_ORDER = 'blanket_order';
    case ORDER = 'order'; // This is a sales order
    case QUOTE = 'quote';

    case PURCHASE_ORDER = 'purchase_order';
}
