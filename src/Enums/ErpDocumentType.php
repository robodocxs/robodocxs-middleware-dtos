<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\Enums;

enum ErpDocumentType: string
{
    case BLANKET_ORDER = 'blanket_order';
    case ORDER = 'order';
    case QUOTE = 'quote';
}