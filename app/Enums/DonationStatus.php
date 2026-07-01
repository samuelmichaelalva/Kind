<?php

namespace App\Enums;

enum DonationStatus: string
{
    case DRAFT = 'draft';
    case OPEN = 'open';
    case FUNDED = 'funded';
    case CLOSED = 'closed';
}
