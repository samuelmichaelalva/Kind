<?php

namespace App\Enums;

enum ReportReason: string
{
    case SPAM = 'spam';
    case HARASSMENT = 'harassment';
    case INAPPROPRIATE = 'inappropriate';
    case FRAUD = 'fraud';
    case OTHER = 'other';
}
