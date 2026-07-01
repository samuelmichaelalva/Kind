<?php

namespace App\Enums;

enum PostType: string
{
    case REQUEST = 'request';
    case UPDATE = 'update';
    case ANNOUNCEMENT = 'announcement';
}
