<?php

namespace App\Enums;

enum VolunteerOpportunityStatus: string
{
    case DRAFT = 'draft';
    case OPEN = 'open';
    case FULL = 'full';
    case CLOSED = 'closed';
}
